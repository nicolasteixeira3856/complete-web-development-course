import $ from 'jquery'
import Popper from 'popper.js'
import { markImagesAsLoaded } from '../lazy-load-helpers'
import ctEvents from 'ct-events'

let mounted = false

const scheduleLoad = ({ forced = false } = {}) => {
	;[...document.querySelectorAll('.ct-header-cart')].map((singleCart) => {
		const maybeLoad = () => {
			if (!singleCart.querySelector('.ct-cart-content')) {
				return
			}

			if (!forced) {
				return
			}

			fetch(
				`${ct_localizations.ajax_url}?action=blocksy_get_woo_minicart`
			).then((r) => {
				if (r.status !== 200) {
					return
				}

				r.json().then(({ success, data }) => {
					if (!success) return

					if (singleCart.querySelector('.ct-cart-content')) {
						if (!forced) {
							return
						}

						singleCart.querySelector('.ct-cart-content').remove()
					}

					const div = document.createElement('div')
					singleCart.firstElementChild.dataset.count = data.count
					div.innerHTML = data.minicart
					div.firstElementChild.classList.add('ct-initial')
					singleCart.appendChild(div.firstElementChild)

					if (
						singleCart.querySelector('.ct-cart-total') &&
						singleCart.querySelector(
							'.ct-cart-content .woocommerce-mini-cart__total .woocommerce-Price-amount'
						)
					) {
						singleCart.querySelector(
							'.ct-cart-total'
						).firstElementChild.innerHTML = singleCart.querySelector(
							'.ct-cart-content .woocommerce-mini-cart__total .woocommerce-Price-amount'
						).innerHTML
					} else {
						if (
							singleCart.querySelector('.ct-cart-total') &&
							singleCart.querySelector('.ct-cart-total')
								.firstElementChild
						) {
							singleCart.querySelector(
								'.ct-cart-total'
							).innerHTML = ct_localizations.wc_empty_price
						}
					}

					requestAnimationFrame(() => {
						singleCart
							.querySelector('.ct-cart-content')
							.classList.remove('ct-initial')
					})

					setTimeout(() => {
						markImagesAsLoaded(singleCart)
					})
				})
			})
		}

		maybeLoad()
	})
}

export const mount = () => {
	if (!$) return

	const selector = '.ct-header-cart'

	if (mounted) {
		return
	}

	scheduleLoad()

	mounted = true

	$(document.body).on('adding_to_cart', () =>
		[...document.querySelectorAll(selector)].map((cart) => {
			cart.classList.remove('ct-added')
			cart.classList.add('ct-adding')
		})
	)

	$(document.body).on('wc_fragments_loaded', () => {
		setTimeout(() => ctEvents.trigger('ct:images:lazyload:update'))
		setTimeout(() => ctEvents.trigger('ct:popper-elements:update'))
		setTimeout(() => ctEvents.trigger('blocksy:frontend:init'))
	})

	$(document.body).on('wc_fragments_refreshed', () => {
		scheduleLoad({ forced: true })
	})

	$(document.body).on(
		'added_to_cart',
		(_, fragments, __, button, quantity) => {
			button = button[0]
			;[...document.querySelectorAll(selector)].map((cart) => {
				cart.classList.remove('ct-adding')
				cart.classList.add('ct-added')

				if (document.querySelector('.ct-cart-content')) {
					if (cart.querySelector('.ct-cart-content')) {
						cart.querySelector(
							'.ct-cart-content'
						).innerHTML = Object.values(fragments)[0]

						if (
							cart.querySelector('.ct-cart-total') &&
							cart.querySelector(
								'.ct-cart-content .woocommerce-mini-cart__total .woocommerce-Price-amount'
							)
						) {
							cart.querySelector(
								'.ct-cart-total'
							).firstElementChild.innerHTML = cart.querySelector(
								'.ct-cart-content .woocommerce-mini-cart__total .woocommerce-Price-amount'
							).innerHTML
						}
					}

					markImagesAsLoaded(cart)
				}

				scheduleLoad()
			})
		}
	)

	$(document.body).on('removed_from_cart', (_, __, ___, button) =>
		[...document.querySelectorAll(selector)].map((cart) => {
			if (!button) return

			try {
				button[0]
					.closest('li')
					.parentNode.removeChild(button[0].closest('li'))
			} catch (e) {}

			if (cart.querySelector('.ct-cart-total')) {
				if (
					cart.querySelector(
						'.woocommerce-mini-cart__total .woocommerce-Price-amount'
					) &&
					cart.querySelector('.product_list_widget').firstElementChild
				) {
					cart.querySelector(
						'.ct-cart-total'
					).firstElementChild.innerHTML = cart.querySelector(
						'.woocommerce-mini-cart__total .woocommerce-Price-amount'
					).innerHTML
				} else {
					cart.querySelector('.ct-cart-total').innerHTML =
						ct_localizations.wc_empty_price
				}
			}
		})
	)
}

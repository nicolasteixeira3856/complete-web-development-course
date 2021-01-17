import { handleBackgroundOptionFor } from '../../../../static/js/customizer/sync/variables/background'
import ctEvents from 'ct-events'
import { updateAndSaveEl } from '../../../../static/js/frontend/header/render-loop'
import {
	getRootSelectorFor,
	assembleSelector,
	mutateSelector,
} from '../../../../static/js/customizer/sync/helpers'

ctEvents.on(
	'ct:header:sync:collect-variable-descriptors',
	(variableDescriptors) => {
		variableDescriptors['offcanvas'] = ({ itemId }) => ({
			...handleBackgroundOptionFor({
				id: 'offcanvasBackground',
				selector: assembleSelector(getRootSelectorFor({ itemId })),
			}),

			headerPanelShadow: {
				selector: assembleSelector(
					`${
						getRootSelectorFor({ itemId })[0]
					}[data-behaviour*="side"]`
				),
				type: 'box-shadow',
				variable: 'box-shadow',
				responsive: true,
			},

			side_panel_width: {
				selector: assembleSelector(getRootSelectorFor({ itemId })),
				variable: 'side-panel-width',
				responsive: true,
				unit: '',
			},

			offcanvas_content_vertical_alignment: {
				selector: assembleSelector(getRootSelectorFor({ itemId })),
				variable: 'vertical-alignment',
				responsive: true,
				unit: '',
			},

			offcanvasContentAlignment: {
				selector: assembleSelector(getRootSelectorFor({ itemId })),
				variable: 'horizontal-alignment',
				responsive: true,
				unit: '',
			},

			menu_close_button_color: [
				{
					selector: assembleSelector(
						mutateSelector({
							selector: getRootSelectorFor({ itemId }),
							operation: 'suffix',
							to_add: '.close-button',
						})
					),
					variable: 'closeButtonColor',
					type: 'color:default',
				},

				{
					selector: assembleSelector(
						mutateSelector({
							selector: getRootSelectorFor({ itemId }),
							operation: 'suffix',
							to_add: '.close-button',
						})
					),
					variable: 'closeButtonHoverColor',
					type: 'color:hover',
				},
			],

			menu_close_button_shape_color: [
				{
					selector: assembleSelector(
						mutateSelector({
							selector: getRootSelectorFor({ itemId }),
							operation: 'suffix',
							to_add: '.close-button',
						})
					),
					variable: 'closeButtonBackground',
					type: 'color:default',
				},

				{
					selector: assembleSelector(
						mutateSelector({
							selector: getRootSelectorFor({ itemId }),
							operation: 'suffix',
							to_add: '.close-button',
						})
					),
					variable: 'closeButtonHoverBackground',
					type: 'color:hover',
				},
			],
		})
	}
)

ctEvents.on(
	'ct:header:sync:item:offcanvas',
	({ optionId, optionValue, values }) => {
		const selector = '#offcanvas'

		if (
			optionId === 'offcanvas_behavior' ||
			optionId === 'side_panel_position'
		) {
			const el = document.querySelector('#offcanvas')

			ctEvents.trigger('ct:offcanvas:force-close', {
				container: document.querySelector(
					document.querySelector('.ct-header-trigger').hash
				),
			})

			setTimeout(() => {
				el.removeAttribute('data-behaviour')
				el.classList.add('ct-no-transition')

				requestAnimationFrame(() => {
					el.dataset.behaviour =
						values.offcanvas_behavior === 'modal'
							? 'modal'
							: `${values.side_panel_position}-side`

					setTimeout(() => {
						el.classList.remove('ct-no-transition')
					})
				})
			}, 300)
		}
	}
)

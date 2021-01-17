import { handleMenuVariables, handleMenuOptions } from '../menu/sync'
import ctEvents from 'ct-events'

ctEvents.on(
	'ct:header:sync:collect-variable-descriptors',
	(variableDescriptors) => {
		variableDescriptors['menu-secondary'] = handleMenuVariables
	}
)

ctEvents.on('ct:header:sync:item:menu-secondary', (changeDescriptor) => {
	handleMenuOptions({
		selector: '.header-menu-2',
		changeDescriptor,
	})
})

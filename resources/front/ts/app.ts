import Alpine from 'alpinejs'
import colorMode from './modules/color-mode'

window.Alpine = Alpine

Alpine.data('colorMode', colorMode)

Alpine.start()

import Alpine from 'alpinejs'
import convert from './modules/convert'

window.Alpine = Alpine

Alpine.data('convert', convert)

Alpine.start()

import './app.css'

import Alpine from 'alpinejs'
import { myModule } from '~/views/ts/my-module'
import copy from './ts/copy'
import preview from './ts/preview'

myModule()

window.Alpine = Alpine

Alpine.store('shop', {
  name: 'Alpine-Shop',
  products: ['Swiss Alp Chocolate', 'Car Alpine A110'],
})
Alpine.data('copy', copy)
Alpine.data('preview', preview)

Alpine.start()

import 'virtual:windi.css'
import './app.css'

import Alpine from 'alpinejs'
import { myModule } from '~/views/ts/my-module'

myModule()

window.Alpine = Alpine

Alpine.store('shop', {
  name: 'Alpine-Shop',
  products: ['Swiss Alp Chocolate', 'Car Alpine A110'],
})

Alpine.start()

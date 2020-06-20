import Vue from 'vue'
import App from './App.vue'
import VueMarkdown from 'vue-markdown'
import VueClipboard from 'vue-clipboard2'
import Toasted from 'vue-toasted'
import './assets/tailwind.css'
import './assets/markdown.css'

import beautify from 'js-beautify'

Vue.config.productionTip = false
Vue.prototype.$beautify = beautify.html

Vue.component('vue-markdown', VueMarkdown)

Vue.use(VueClipboard)
Vue.use(Toasted)

import '@/plugins/global-components-loader'
import '@/plugins/vue-icons-loader'

new Vue({
  render: (h) => h(App),
}).$mount('#app')

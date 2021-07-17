import Vue from 'vue'

// Format date from API
const formatDate = (date) => {
  date = new Date(date)

  let userLang = 'en'

  if (process.client) {
    userLang = navigator.language || navigator.userLanguage
  }

  return date.toLocaleString(userLang, {
    year: 'numeric',
    month: 'long',
    day: 'numeric',
  })
}
Vue.prototype.$formatDate = formatDate

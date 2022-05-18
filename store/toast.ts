import { defineStore } from 'pinia'

export const useToastStore = defineStore('toast', {
  state: () => ({
    display: false,
    success: false,
  }),
  actions: {
    displayToast(success = false) {
      this.$patch({
        display: true,
        success,
      })
      setTimeout(() => {
        this.$patch({
          display: false,
          success: false,
        })
      }, 3500)
    },
  },
})

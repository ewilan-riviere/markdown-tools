import { Toast } from '~~/class/toast'
import { useToastStore } from '~~/store/toast'

export const useToast = () => {
  const push = (success = false) => {
    const store = useToastStore()
    store.displayToast(success)
  }
  return {
    push,
  }
}

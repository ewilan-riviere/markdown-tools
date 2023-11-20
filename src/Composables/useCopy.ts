export function useCopy() {
  const text = ref<string>('')
  const copied = ref<boolean>(false)

  async function secureContext() {
    try {
      await navigator.clipboard.writeText(text.value)
      copied.value = true
    }
    catch (error) {
      console.error(error)
    }
  }

  async function unsecureContext() {
    const textArea = document.createElement('textarea')
    textArea.value = text.value
    textArea.style.position = 'fixed'
    document.body.appendChild(textArea)
    textArea.focus()
    textArea.select()
    document.execCommand('copy')
    copied.value = true
    document.body.removeChild(textArea)
  }

  async function clipboard(value?: string) {
    text.value = `${value}`

    if (window.isSecureContext)
      await secureContext()
    else
      await unsecureContext()

    setTimeout(() => {
      copied.value = false
    }, 2000)
  }

  return {
    text,
    copied,
    clipboard,
  }
}

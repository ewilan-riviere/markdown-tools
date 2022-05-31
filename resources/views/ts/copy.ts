let refsAlpine: {
  // text: HTMLElement
}

const copy = () => ({
  copied: false,

  init() {
    // @ts-ignore
    refsAlpine = this.$refs
  },
  async copyText(text: string | null) {
    console.log(text)
    this.copied = true
    let success = false
    if (text) {
      await navigator.clipboard.writeText(text).then(() => (success = true))
    }
    // toast.push(success)
    setTimeout(() => {
      this.copied = false
    }, 3500)
  },
})

export default copy

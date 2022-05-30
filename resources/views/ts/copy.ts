let refsAlpine: {
  text: HTMLTextAreaElement
}

const copy = () => ({
  copied: false,

  init() {
    // @ts-ignore
    refsAlpine = this.$refs
  },
  async copyText() {
    console.log(refsAlpine.text.textContent)
    this.copied = true
    let success = false
    if (refsAlpine.text.textContent) {
      await navigator.clipboard
        .writeText(refsAlpine.text.textContent)
        .then(() => (success = true))
    }
    // toast.push(success)
    setTimeout(() => {
      this.copied = false
    }, 3500)
  },
})

export default copy

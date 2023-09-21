import showdown from 'showdown'
import Beautify from 'js-beautify'
import Turndown from 'turndown'

type ConverterType = 'html' | 'markdown'

const convert = () => ({
  type: 'html' as ConverterType,
  html: '',
  markdown: '',
  turndownOptions: {
    headingStyle: 'atx',
    hr: '---',
    codeBlockStyle: 'fenced',
  } as Turndown.Options,
  preview: false,
  copied: false,

  init() {
    const originalHtml = '<div><h1>Hello world!</h1><p>You can convert HTML code to Markdown from this area!</p><pre><code>let a = 1</code></pre></div>'
    const originalMd = `# Hello world!
You can convert HTML code to Markdown from this area!`

    this.html = originalHtml
    this.markdown = originalMd

    this.html = Beautify.html(originalHtml)
    this.convert('html')
  },
  convert(type: ConverterType) {
    const converter = new showdown.Converter()
    const td = new Turndown(this.turndownOptions)

    if (type === 'html') {
      const result = td.turndown(this.html)
      this.markdown = Beautify.html(result)
    }
    else {
      const result = converter.makeHtml(this.markdown)
      this.html = Beautify.html(result)
    }
  },
  async copy(type: ConverterType) {
    this.copied = true
    let success = false
    if (this[type] && navigator.clipboard && window.isSecureContext)
      await navigator.clipboard.writeText(this[type]).then(() => (success = true))

    if (!success)
      console.error('Error on copy!')

    setTimeout(() => {
      this.copied = false
    }, 3500)
  },
  togglePreview() {
    this.preview = !this.preview
  },
})

export default convert
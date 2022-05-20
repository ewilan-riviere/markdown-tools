import showdown from 'showdown'
import { ConverterType } from '~~/types'
import Beautify from 'js-beautify'
import Turndown from 'turndown'

export const useConvert = () => {
  let originalHtml = `<div><h1>Hello world!</h1><p>You can convert HTML code to Markdown from this area!</p><pre><code>let a = 1</code></pre></div>`
  let originalMd = `# Hello world!
You can convert HTML code to Markdown from this area!`

  const htmlText = ref<string>()
  const markdownText = ref<string>()
  const turndownOptions = ref<Turndown.Options>({
    headingStyle: 'atx',
    hr: '---',
    codeBlockStyle: 'fenced',
  })

  const converter = new showdown.Converter()
  const td = new Turndown(turndownOptions.value)

  htmlText.value = Beautify.html(originalHtml)

  const convert = (type: ConverterType) => {
    if (type === 'html') {
      let converted = td.turndown(htmlText.value!)
      markdownText.value = Beautify.html(converted)
    } else {
      let converted = converter.makeHtml(markdownText.value!)
      htmlText.value = Beautify.html(converted)
    }
  }

  onMounted(() => {
    convert('html')
  })

  return {
    htmlText,
    markdownText,
    convert,
  }
}

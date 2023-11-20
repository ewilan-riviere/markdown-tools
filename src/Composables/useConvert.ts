import showdown from 'showdown'
import Turndown from 'turndown'
import Beautify from 'js-beautify'

type ConverterType = 'html' | 'markdown'

export function useConvert() {
  const type = ref<ConverterType>('html')
  const html = ref<string>('')
  const markdown = ref<string>('')
  const previewHtml = ref<string>('')
  const turndownOptions = ref<Turndown.Options>({
    headingStyle: 'atx',
    hr: '---',
    codeBlockStyle: 'fenced',
  })
  const copied = ref<boolean>(false)

  function initialize() {
    const originalHtml
      = '<div><h1>Hello world!</h1><p>You can convert HTML code to Markdown from this area!</p><pre><code>let a = 1</code></pre></div>'
    const originalMd
      = '# Hello world! You can convert HTML code to Markdown from this area!'

    html.value = originalHtml
    markdown.value = originalMd

    html.value = Beautify.html(originalHtml)
    previewHtml.value = originalHtml
    convert('html')
  }
  initialize()

  function convert(type: ConverterType) {
    const converter = new showdown.Converter()
    const td = new Turndown(turndownOptions.value)

    if (type === 'html') {
      const result = td.turndown(html.value)
      previewHtml.value = html.value
      markdown.value = Beautify.html(result)
    }
    else {
      const result = converter.makeHtml(markdown.value)
      html.value = Beautify.html(result)
      previewHtml.value = result
    }
  }

  function format() {
    html.value = formatterHtml(html.value)
    // html.value = Beautify.html(html.value)
  }

  function formatterHtml(html: string) {
    const tab = '\t'
    let result = ''
    let indent = ''

    html.split(/>\s*</).forEach((element) => {
      if (element.match(/^\/\w/))
        indent = indent.substring(tab.length)

      result += `${indent}<${element}>\r\n`

      if (element.match(/^<?\w[^>]*[^\/]$/) && !element.startsWith('input'))
        indent += tab
    })

    return result.substring(1, result.length - 3)
  }

  return {
    type,
    html,
    markdown,
    turndownOptions,
    copied,
    convert,
    format,
    previewHtml,
  }
}

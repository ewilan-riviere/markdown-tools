import showdown from 'showdown'
import { ConverterType } from '~~/types'
import Beautify from 'js-beautify'
import Turndown, { Options } from 'turndown'
import MarkdownIt from 'markdown-it'

export const useConvert = () => {
  let originalHtml = `<div><h1>Hello world!</h1><p>You can convert HTML code to Markdown from this area!</p></div>`
  let originalMd = `# Hello world!
You can convert HTML code to Markdown from this area!`

  const htmlText = ref<string>()
  const markdownText = ref<string>()
  const turndownOptions = ref<Options>({
    headingStyle: 'atx',
    hr: '---',
    codeBlockStyle: 'fenced',
  })

  htmlText.value = Beautify.html(originalHtml)

  const change = (type: ConverterType) => {
    console.log(type)
    convert(type)
  }

  const convert = (type: ConverterType) => {
    // TurndownService
    // const turndownService = new Turndown(turndownOptions.value)
    // let markdown = turndownService.turndown('<h1>Hello world!</h1>')
    // console.log(markdown)

    // let converter = new showdown.Converter({
    //   backslashEscapesHTMLTags: false,
    //   completeHTMLDocument: true,
    //   smartIndentationFix: true,
    // })

    const converter = new showdown.Converter({
      // extensions: [...bindings],
    })

    if (type === 'html') {
      const td = new Turndown()
      const md = new MarkdownIt({
        html: true,
      })
      let html = md.render(originalMd)
      let markdown = td.turndown(originalHtml)
      console.log('html')
      console.log(html)
      console.log('markdown')
      console.log(markdown)

      // htmlText.value = `<p>hi</p>`
      // let text = htmlText.value
      //   ?.replace('<div', '<p')
      //   .replace('</div', '</p') as string
      // let converted = converter.makeMarkdown(text)
      // markdownText.value = Beautify.html(converted)
      // console.log(markdownText.value)
    } else {
      // let converted = converter.makeHtml(markdownText.value)
      // converted = `<div>${converted}</div>`
      // htmlText.value = process(converted)
    }
  }

  function process(str: string) {
    var div = document.createElement('div')
    div.innerHTML = str.trim()

    return format(div, 0).innerHTML
  }

  function format(node: Element, level: number) {
    var indentBefore = new Array(level++ + 1).join('  '),
      indentAfter = new Array(level - 1).join('  '),
      textNode

    for (var i = 0; i < node.children.length; i++) {
      textNode = document.createTextNode('\n' + indentBefore)
      node.insertBefore(textNode, node.children[i])

      format(node.children[i], level)

      if (node.lastElementChild == node.children[i]) {
        textNode = document.createTextNode('\n' + indentAfter)
        node.appendChild(textNode)
      }
    }

    return node
  }

  // watch(
  //   () => markdownText.value,
  //   (newVal) => {
  //     convert('markdown')
  //   }
  // )

  // watch(
  //   () => htmlText.value,
  //   (newVal) => {
  //     convert('html')
  //   }
  // )

  onMounted(() => {
    convert('html')
  })

  return {
    htmlText,
    markdownText,
    change,
  }
}

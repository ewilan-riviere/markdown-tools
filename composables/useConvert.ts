import showdown from 'showdown'

export const useConvert = (type: 'html' | 'markdown') => {
  let originalHtml = `<h1>Hello world!</h1>

<p>You can convert HTML code to Markdown from this area!</p>`
  const originalMarkdown = `# Hello world!

You can convert Markdown code from this area!`

  const originalText = ref()
  const convertText = ref()

  if (type === 'html') {
    originalText.value = originalHtml
  } else {
    originalText.value = originalMarkdown
  }

  const convert = () => {
    let converter = new showdown.Converter()
    if (type === 'html') {
      convertText.value = converter.makeMarkdown(originalText.value)
    } else {
      convertText.value = converter.makeHtml(originalText.value)
    }
  }

  return {
    originalText,
    convertText,
    convert,
  }
}

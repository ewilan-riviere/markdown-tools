<template>
  <div class="container max-w-7xl">
    <lazy-layout
      original-type="HTML"
      converted-type="Markdown"
      :to-convert="html"
      :converted="markdownConversion"
      @convert="convert"
    ></lazy-layout>
  </div>
</template>

<script>
// https://github.com/domchristie/turndown
import Turndown from 'turndown'
// https://github.com/beautify-web/js-beautify
import Beautify from 'js-beautify'

export default {
  name: 'PageHtmlToMarkdown',
  data() {
    return {
      html: `<h1>Hello world!</h1>

<p>You can convert HTML code to Markdown from this area!</p>`,
      markdownConversion: null,
      options: {
        headingStyle: 'atx',
        hr: '---',
        codeBlockStyle: 'fenced',
      },
    }
  },
  created() {
    const turndownService = new Turndown(this.options)
    this.markdownConversion = turndownService.turndown(this.html)
  },
  methods: {
    convert(newValue) {
      const turndownService = new Turndown(this.options)
      let render = turndownService.turndown(newValue)
      render = Beautify.html(render)
      this.markdownConversion = render
    },
  },
}
</script>

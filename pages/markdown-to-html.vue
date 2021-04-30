<template>
  <div class="container max-w-7xl">
    <lazy-layout
      original-type="Markdown"
      converted-type="HTML"
      :to-convert="markdown"
      :converted="htmlConversion"
      @convert="convert"
    ></lazy-layout>
  </div>
</template>

<script>
// https://github.com/beautify-web/js-beautify
import Beautify from 'js-beautify'

export default {
  name: 'PageHtmlToMarkdown',
  data() {
    return {
      display: false,
      markdown: `# Hello world!
      
You can convert Markdown code from this area!`,
      htmlConversion: null,
    }
  },
  watch: {
    markdown(newValue) {
      let render = this.$md.render(newValue)
      render = `<div>${render}</div>`
      render = Beautify.html(render)
      this.htmlConversion = render
    },
  },
  created() {
    this.htmlConversion = this.$md.render(this.markdown)
  },
  methods: {
    convert(newValue) {
      let render = this.$md.render(newValue)
      render = `<div>${render}</div>`
      render = Beautify.html(render)
      this.htmlConversion = render
    },
  },
}
</script>

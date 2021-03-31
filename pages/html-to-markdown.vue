<template>
  <div class="container max-w-7xl">
    <layout
      original-type="HTML"
      converted-type="Markdown"
      :to-convert="html"
      :converted="markdownConversion"
      @convert="convert"
    ></layout>
  </div>
</template>

<script>
import Turndown from 'turndown'
import layout from '~/components/blocks/layout.vue'
export default {
  name: 'PageHtmlToMarkdown',
  components: { layout },
  data() {
    return {
      html: '<h1>Hello world!</h1>',
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
      render = this.$beautify(render)
      this.markdownConversion = render
    },
  },
}
</script>

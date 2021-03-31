<template>
  <layout
    original-type="Markdown"
    converted-type="HTML"
    :to-convert="markdown"
    :converted="htmlConversion"
    @convert="convert"
  ></layout>
</template>

<script>
import layout from './blocks/layout.vue'
export default {
  name: 'MarkdownToHtml',
  components: { layout },
  data() {
    return {
      display: false,
      markdown: '# Hello world!',
      htmlConversion: null,
    }
  },
  watch: {
    markdown(newValue) {
      let render = this.$md.render(newValue)
      render = `<div>${render}</div>`
      render = this.$beautify(render)
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
      render = this.$beautify(render)
      this.htmlConversion = render
    },
  },
}
</script>

<style lang="postcss" scoped></style>

<template>
  <div class="p-5">
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
      <label class="block">
        <span class="block mb-5 text-2xl text-gray-700">
          Copy HTML here
        </span>
        <textarea
          class="block w-full mt-1 form-textarea"
          rows="10"
          placeholder="Copy here HTML code..."
          v-model="data"
        ></textarea>
      </label>

      <div class="flex m-auto">
        <button
          class="px-4 py-2 mx-2 font-bold text-white transition-colors duration-300 bg-blue-500 rounded hover:bg-blue-700"
          type="button"
          v-clipboard:copy="renderOutput"
          v-clipboard:success="onCopy"
          v-clipboard:error="onError"
          @click="convertHtml()"
        >
          Copy Markdown code
        </button>
        <!-- <button
          class="px-4 py-2 mx-2 font-bold text-white transition-colors duration-300 bg-red-500 rounded hover:bg-red-700"
          type="button"
          @click="debug = !debug"
        >
          Debug
        </button> -->
      </div>
    </div>
  </div>
</template>

<script>
import TurndownService from 'turndown'

export default {
  name: 'Reverse',
  data() {
    return {
      data: '',
      renderOutput: null,
      debug: false,
    }
  },
  methods: {
    convertHtml() {
      let htmlCode = this.data
      let markdown = this.convertHtmlToMd(htmlCode)

      this.renderOutput = markdown
    },
    onCopy: function (e) {
      let toast = this.$toasted.show(
        'Success, code is in your clipboard!<br/>Check Console if you want some infos.',
        {
          theme: 'toasted-primary',
          position: 'bottom-right',
          duration: 5000,
        }
      )
      console.log(e.text)
      toast
    },
    onError: function () {
      alert('Failed to copy texts')
    },
    convertHtmlToMd(htmlCode) {
      let turndownService = new TurndownService({
        headingStyle: 'atx',
        hr: '---',
        bulletListMarker: '-',
        codeBlockStyle: 'fenced',
      })
      let markdown = turndownService.turndown(htmlCode)

      console.log(markdown)
      return markdown
    },
  },
}
</script>

<style lang="scss" scoped></style>

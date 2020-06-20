<template>
  <div class="p-5 home">
    <div class="flex">
      <div class="flex justify-between w-1/2 mx-auto mb-10 lg:w-3/12">
        <icon-base name="markdown" height="100" width="100"></icon-base>
        <icon-base
          name="heart"
          height="100"
          width="100"
          variant="text-red-600"
        ></icon-base>
        <div class="text-6xl font-bold">
          U
        </div>
      </div>
    </div>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
      <label class="block">
        <span class="block mb-5 text-2xl text-gray-700"
          >Copy Markdown here</span
        >
        <textarea
          class="block w-full mt-1 form-textarea"
          rows="10"
          placeholder="Copy here markdown code..."
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
          Copy HTML code
        </button>
        <button
          class="px-4 py-2 mx-2 font-bold text-white transition-colors duration-300 bg-red-500 rounded hover:bg-red-700"
          type="button"
          @click="debug = !debug"
        >
          Debug
        </button>
      </div>
    </div>

    <transition name="fade">
      <div :class="{ hidden: !debug }">
        <hr class="mt-10 mb-16" />
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
          <div class="align">
            <div class="mb-5 text-2xl text-center">
              Preview
            </div>
            <div class="p-5 border border-2 border-black rounded markdown-body">
              <div ref="output" id="htmlOutput">
                <vue-markdown :source="data"></vue-markdown>
              </div>
            </div>
          </div>
          <div>
            <div class="mb-5 text-2xl text-center">
              HTML code
            </div>
            <code class="text-left">
              <pre v-if="renderOutput">{{ renderOutput }}</pre>
              <pre v-else>Click on convert button</pre>
            </code>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
export default {
  name: 'MarkdownConverter',
  data() {
    return {
      data: '',
      renderOutput: null,
      debug: false,
    }
  },
  methods: {
    convertHtml() {
      let render = document.getElementById('htmlOutput')

      Array.prototype.slice
        .call(render.firstChild.attributes)
        .forEach(function (attr) {
          // remove each attribute
          render.firstChild.removeAttribute(attr.name)
        })

      render = render.innerHTML

      let renderFormat = this.$beautify(render)

      this.renderOutput = renderFormat
    },
    onCopy: function (e) {
      let toast = this.$toasted.show(
        'Success!<br/>Check Console if you want some infos.',
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
  },
}
</script>

<style scoped>
.align {
  text-align: left;
}
pre {
  word-wrap: anywhere;
  white-space: break-spaces;
}
</style>

<template>
  <section>
    <div class="mt-10 space-y-6 lg:grid lg:grid-cols-2 lg:gap-8 lg:space-y-0">
      <div>
        <label class="block">
          <span
            class="block mb-3 text-xl font-semibold text-gray-300 font-handlee"
          >
            Your {{ originalType }} code
          </span>
          <textarea
            v-model="originalCode"
            class="block w-full mt-1 text-gray-100 bg-gray-800 border-gray-700 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            spellcheck="false"
            rows="15"
          ></textarea>
        </label>
      </div>
      <div>
        <span
          class="block mb-3 text-xl font-semibold text-gray-300 font-handlee"
          >Your render into {{ convertedType }}</span
        >
        <div
          class="p-3 overflow-scroll text-gray-100 bg-gray-800 rounded-md shadow h-96"
        >
          <pre>{{ convertedCode }}</pre>
        </div>
        <!-- <textarea
          v-model="convertedCode"
          class="block w-full mt-1 text-gray-100 bg-gray-800 border-gray-700 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
          spellcheck="false"
          rows="16"
        ></textarea> -->
      </div>
    </div>
    <div class="flex mt-5">
      <div class="ml-auto">
        <button
          class="px-4 py-2 font-semibold text-white transition-colors duration-100 bg-indigo-600 rounded-md hover:bg-indigo-700"
          @click="display = !display"
        >
          Toggle preview
        </button>
        <button
          class="px-4 py-2 font-semibold text-white transition-colors duration-100 bg-indigo-600 rounded-md hover:bg-indigo-700"
          @click="copyCode(convertedCode)"
        >
          Copy {{ convertedType }} code
        </button>
      </div>
    </div>

    <transition name="fade">
      <div v-if="display" class="mt-12">
        <div class="p-5 mx-auto text-gray-100 bg-gray-700 rounded-md">
          <div class="prose prose-lg">
            <div class="mb-5 text-3xl text-white border-b-2 font-handlee">
              Preview based on pre-styled markdown CSS
            </div>
            <div ref="output" class="nuxt-content">
              <div
                v-html="
                  originalType === 'HTML'
                    ? $md.render(convertedCode)
                    : convertedCode
                "
              ></div>
            </div>
          </div>
        </div>
      </div>
    </transition>
  </section>
</template>

<script>
export default {
  name: 'Layout',
  props: {
    originalType: {
      type: String,
      default: '',
    },
    convertedType: {
      type: String,
      default: '',
    },
    toConvert: {
      type: String,
      default: null,
    },
    converted: {
      type: String,
      default: null,
    },
  },
  data() {
    return {
      display: false,
      originalCode: null,
      convertedCode: null,
      options: {
        headingStyle: 'atx',
        hr: '---',
        codeBlockStyle: 'fenced',
      },
    }
  },
  watch: {
    originalCode(newValue) {
      this.$emit('convert', newValue)
    },
    converted(newValue) {
      this.convertedCode = newValue
    },
  },
  mounted() {
    this.originalCode = this.toConvert
    this.convertedCode = this.converted
  },
  methods: {
    async copyCode(text) {
      try {
        await this.$copyText(text)
        this.$toast.info('Markdown code copied into clipboard!')
      } catch (e) {
        console.error(e)
      }
    },
  },
}
</script>

<style lang="postcss" scoped>
textarea {
  resize: none;
}
.ps {
  @apply h-96;
}
</style>

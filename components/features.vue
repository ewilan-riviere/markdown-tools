<template>
  <div class="py-12">
    <div class="max-w-xl px-4 mx-auto sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Features</h2>
      <dl class="space-y-10 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-8">
        <div v-for="feature in features" :key="feature.id">
          <dt>
            <div
              class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md"
            >
              <span
                class="w-6 h-6 text-white fill-current"
                v-html="feature.icon"
              ></span>
            </div>
            <p class="mt-5 text-lg font-medium leading-6 text-gray-100">
              {{ feature.title }}
            </p>
          </dt>
          <dd class="mt-2 text-base text-gray-300">
            {{ feature.text }}
          </dd>
        </div>
      </dl>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Features',
  data() {
    return {
      features: [
        {
          icon:
            '<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>HTML5 icon</title><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"/></svg>',
          title: 'From HTML',
          text:
            'You have HTML code and you want Markdown to write a readme or a documentation page? No problem!',
        },
        {
          icon:
            '<svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Markdown icon</title><path d="M22.27 19.385H1.73A1.73 1.73 0 010 17.655V6.345a1.73 1.73 0 011.73-1.73h20.54A1.73 1.73 0 0124 6.345v11.308a1.73 1.73 0 01-1.73 1.731zM5.769 15.923v-4.5l2.308 2.885 2.307-2.885v4.5h2.308V8.078h-2.308l-2.307 2.885-2.308-2.885H3.46v7.847zM21.232 12h-2.309V8.077h-2.307V12h-2.308l3.461 4.039z"/></svg>',
          title: 'From Markdown',
          text:
            'You copy documentation in Markdown format and you want to display it correctly into web page? As you want!',
        },
        {
          icon:
            '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z" /><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" /></svg>',
          title: 'Preview included',
          text:
            'You want to have a preview of current code? Click on the button and this is magic!',
        },
      ],
    }
  },
}
</script>

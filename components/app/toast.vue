<script setup lang="ts">
import { useToastStore } from '~/store/toast'

const store = useToastStore()

const display = computed(() => store.display)
const success = computed(() => store.success)
</script>

<template>
  <transition>
    <section
      v-if="display"
      class="fixed z-50 bg-gray-700 text-white top-0 right-0 m-2 rounded-md px-4 py-3"
    >
      <span v-if="success">Copied</span>
      <span v-else>Failed</span>
    </section>
  </transition>
</template>

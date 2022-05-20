<template>
  <div class="relative mt-6 mb-10">
    <div class="main-container">
      <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
        <div class="absolute inset-0">
          <img
            class="h-full w-full object-cover"
            src="/images/hero-picture.svg"
            alt="People working on laptops"
          />
          <div class="absolute inset-0 bg-purple-700 mix-blend-multiply"></div>
        </div>
        <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
          <h1
            class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl"
          >
            <span class="text-white font-mono mr-2">Markdown</span
            ><span class="text-indigo-200 font-handlee">Interpreter</span>
          </h1>
          <p
            class="mt-6 max-w-lg mx-auto text-center text-xl text-indigo-200 sm:max-w-3xl"
          >
            A tool to to convert HTML to Markdown and reverse with
            <a
              href="https://github.com/showdownjs/showdown"
              target="_blank"
              rel="noopener noreferrer"
              class="internal-link"
              >Showdown</a
            >
            &
            <a
              href="https://github.com/mixmark-io/turndown"
              target="_blank"
              rel="noopener noreferrer"
              class="internal-link"
              >Turndown</a
            >.
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

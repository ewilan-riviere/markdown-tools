<template>
  <!-- <div class="pt-10 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
    <div class="">
      <div class="lg:grid lg:grid-cols-2 lg:gap-8">
        <div
          class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center"
        >
          <div class="lg:py-24">
            <h1
              class="mt-4 text-4xl tracking-tight font-semibold sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl"
            >
              <span class="font-sans">Markdown Interpreter</span
              ><span class="text-indigo-400 font-handlee"
                >, to convert html to markdown and reverse</span
              >
            </h1>
            <p
              class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl"
            >
              A tool to manage Markdown code or HTML code.
            </p>
          </div>
        </div>
        <div class="h-64 lg:h-full mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
          <div
            class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0"
          >
            <img
              class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
              src="/images/hero-picture.svg"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
  </div> -->
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
            >.
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

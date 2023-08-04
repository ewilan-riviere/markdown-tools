<template>
  <header class="absolute inset-x-0 top-0 z-50">
    <nav
      class="flex items-center justify-between p-6 lg:px-8"
      aria-label="Global"
    >
      <div class="flex lg:flex-1">
        <ILink href="/" class="-m-1.5 p-1.5">
          <span class="sr-only">Markdown Tools</span>
          <img
            class="h-8 w-auto"
            src="/images/md-logo.svg"
            alt=""
          >
        </ILink>
      </div>
      <div class="hidden lg:flex lg:gap-x-12 text-3xl font-semibold">
        Markdown Tools
        <!-- <a href="#" class="text-sm font-semibold leading-6 text-white">Product</a> -->
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <!-- <a href="#" class="text-sm font-semibold leading-6 text-white">Log in <span aria-hidden="true">&rarr;</span></a> -->
      </div>
    </nav>
  </header>
</template>

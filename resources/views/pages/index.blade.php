<x-layout.views class="max-w-7xl mx-auto main-content">
    <div class="py-16 sm:py-24">
        <div class="relative sm:py-16">
            <div aria-hidden="true" class="hidden sm:block">
                <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-800 rounded-r-3xl"></div>
                <svg class="absolute top-8 left-1/2 -ml-3" width="404" height="392" fill="none" viewBox="0 0 404 392">
                    <defs>
                        <pattern id="8228f071-bcee-4ec8-905a-2a059a2cc4fb" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-700" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="392" fill="url(#8228f071-bcee-4ec8-905a-2a059a2cc4fb)" />
                </svg>
            </div>
            <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-5xl lg:px-8">
                <div class="relative rounded-2xl px-6 py-10 bg-indigo-600 overflow-hidden shadow-xl sm:px-12 sm:py-20">
                    <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
                        <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
                            <path class="text-indigo-500 text-opacity-40" fill="currentColor"
                                d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z" />
                            <path class="text-indigo-700 text-opacity-40" fill="currentColor"
                                d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z" />
                        </svg>
                    </div>
                    <div class="relative">
                        <div class="sm:text-center">
                            <h2 class="text-3xl font-extrabold text-white tracking-tight sm:text-4xl">
                                Extract an article from any website
                            </h2>
                            <p class="mt-6 mx-auto max-w-2xl text-lg text-indigo-200">
                                Put here full URL of online article.
                            </p>
                        </div>
                        <x-form.url />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4 container">
        <section x-data="copy" class="max-w-prose">
            <textarea x-ref="text" id="about" name="about" rows="30"
                class="shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-700 rounded-md bg-gray-800 scrollbar-thin">{{ $service->markdown }}</textarea>
            <p class="mt-2 text-sm text-gray-400">This is your article into Markdown.</p>
            <button @click="copyText()">copy</button>
            <div x-show="copied" x-transition>text copied!</div>
        </section>

        <section
            class="prose prose-invert max-h-[39rem] overflow-auto bg-gray-800 rounded-md border border-gray-700 p-5">
            <div>
                @isset($service)
                    {!! $service->html !!}
                @endisset
            </div>
        </section>
    </div>
</x-layout.views>

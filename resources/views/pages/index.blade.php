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
                        <form action="#" class="mt-12 sm:mx-auto sm:max-w-lg sm:flex">
                            <div class="min-w-0 flex-1">
                                <label for="cta-email" class="sr-only">URL</label>
                                <input id="cta-email" type="email"
                                    class="block w-full border border-transparent rounded-md px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600"
                                    placeholder="Enter URL">
                            </div>
                            <div class="mt-4 sm:mt-0 sm:ml-3">
                                <button type="submit"
                                    class="block w-full rounded-md border border-transparent px-5 py-3 bg-indigo-500 text-base font-medium text-white shadow hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600 sm:px-10">
                                    Extract
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @isset($service)
        {!! $service->article_markdown !!}
        {!! $service->article_html !!}
    @endisset
    <div>
        @isset($article_html)
            @dump($article_html)
            {!! $article_html !!}
        @endisset
    </div>

    {{-- <x-form.url />
    <div>Welcome</div>
    <div x-data>
        <div x-text="$store.shop.name">shop-name</div>
        <div>
            Here you can buy:
            <ul>
                <template x-for="product in $store.shop.products">
                    <li x-text="product"></li>
                </template>
            </ul>
        </div>
    </div> --}}
</x-layout.views>

<x-layout.views class="max-w-7xl mx-auto main-content px-2">
    <x-hero />

    @isset($scraper)
        @dump($scraper)
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-4 container">
            <x-text-render label="Markdown" :text="$scraper->markdown" />
            <x-text-render label="HTML" :text="$scraper->html" is-html />
        </section>
    @endisset
</x-layout.views>

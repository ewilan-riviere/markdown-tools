<x-layout.views>
    <x-hero />

    @isset($scraper)
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-4 container border border-gray-700 rounded-md py-8 px-6">
            <x-text-render label="HTML code" :text="$scraper->html" is-html />
            <x-text-render label="Markdown code" :text="$scraper->markdown" />
        </section>
    @endisset
</x-layout.views>

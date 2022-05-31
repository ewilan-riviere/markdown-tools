<x-layout.views>
    <x-hero />

    @isset($scraper)
        <div class="main-container">
            <section class="grid grid-cols-1 lg:grid-cols-2 gap-4 border border-gray-700 rounded-md p-6">
                <x-text-render label="HTML code" :text="$scraper->html" is-html />
                <x-text-render label="Markdown code" :text="$scraper->markdown" />
            </section>
        </div>
    @endisset
</x-layout.views>

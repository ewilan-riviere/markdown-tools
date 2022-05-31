<x-layout.views>
    <x-hero />

    @isset($scraper)
        <div class="main-container">
            <div class="border border-gray-700 rounded-md p-6">
                <x-metadata-block :scraper="$scraper" />
                <section class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-6">
                    <x-text-render label="HTML code" :text="$scraper->html" :optional="$scraper->is_valid ? 'Valid HTML' : 'Not valid HTML'" />
                    <x-text-render label="Markdown code" :text="$scraper->markdown" />
                </section>
                <x-preview-block>
                    {!! $scraper->html !!}
                </x-preview-block>
            </div>
        </div>
    @endisset
</x-layout.views>

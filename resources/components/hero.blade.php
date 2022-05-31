<div class="relative mt-6 mb-10">
    <div class="main-container">
        <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
            <div class="absolute inset-0">
                <img class="h-full w-full object-cover" src="{{ asset('images/hero-picture.svg') }}"
                    alt="People working on laptops" />
                <div class="absolute inset-0 bg-purple-700 mix-blend-multiply"></div>
            </div>
            <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                <h1 class="text-center text-4xl font-extrabold tracking-tight md:text-5xl lg:text-6xl">
                    <span class="block md:inline text-white font-mono mr-2">Markdown</span><span
                        class="block md:inline text-indigo-200 font-handlee">Scraper</span>
                </h1>
                <p class="mt-6 max-w-lg mx-auto text-center text-xl text-indigo-200 sm:max-w-3xl">
                    A tool to extract an article from any website with
                    <a href="https://github.com/FriendsOfPHP/Goutte" target="_blank" rel="noopener noreferrer"
                        class="internal-link">Goutte</a>
                    &
                    <a href="https://github.com/thephpleague/html-to-markdown" target="_blank" rel="noopener noreferrer"
                        class="internal-link">HtmlToMarkdown</a>.
                </p>
                <livewire:url-form />
            </div>
        </div>
    </div>
</div>

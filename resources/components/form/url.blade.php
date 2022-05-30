<form method="POST" action="{{ route('url') }}" class="mt-12 sm:mx-auto sm:max-w-lg sm:flex">
    @csrf
    <div class="min-w-0 flex-1">
        <label for="url" class="sr-only">URL</label>
        <input id="url" type="url" name="url"
            class="block w-full border border-transparent rounded-md px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600"
            placeholder="Enter URL"
            value="https://la1ere.francetvinfo.fr/guadeloupe/journee-mondiale-de-lutte-contre-la-transphobie-et-l-homophobie-des-actes-anti-lgbt-en-hausse-1284644.html"
            required>
    </div>
    <div class="mt-4 sm:mt-0 sm:ml-3">
        <button type="submit"
            class="block w-full rounded-md border border-transparent px-5 py-3 bg-indigo-500 text-base font-medium text-white shadow hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600 sm:px-10">
            Extract
        </button>
    </div>
</form>

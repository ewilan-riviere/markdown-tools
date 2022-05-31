<div class="container mx-auto">
    @if (session()->has('message'))
        <div class="fixed top-5 right-5 z-10">
            <div class="px-4 py-4 text-green-800 bg-green-200 border-l-4 border-green-900 rounded">
                {{ session('message') }}
            </div>
        </div>
    @endif
    <form method="POST" wire:submit.prevent="storeScraper" class="mt-12 sm:mx-auto sm:max-w-lg sm:flex">
        @csrf
        <div class="min-w-0 flex-1">
            <label for="url" class="sr-only">URL</label>
            <input wire:model.lazy="url" id="url" type="url" name="url"
                class="block w-full border border-transparent rounded-md px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600"
                placeholder="Enter URL" required>
            @error('url')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="sm:ml-3 my-auto">
            <button type="submit"
                class="block w-full rounded-md border border-transparent px-5 py-3 bg-indigo-500 text-base font-medium text-white shadow hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600 sm:px-10 relative">
                <div wire:loading wire:target="storeScraper" class="absolute left-3 top-1/2 -translate-y-1/2">
                    <svg class="w-4 h-4 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                        </circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                </div>
                Extract
            </button>
        </div>
    </form>
</div>

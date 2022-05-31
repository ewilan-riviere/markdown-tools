<div x-data="copy">
    <div>
        <label for="email" class="block text-sm font-medium text-gray-100">{{ $label }}</label>
        <div class="mt-1">
            @if ($isHtml)
                <div
                    class="rounded-md prose prose-invert h-[39rem] max-h-[39rem] overflow-auto scrollbar-thin bg-gray-800 border border-gray-700 p-5">
                    <div>{!! $text !!}</div>
                </div>
            @else
                <textarea x-ref="text" id="about" name="about" rows="30"
                    class="shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-700 rounded-md bg-gray-800 scrollbar-thin">{{ $text }}</textarea>
            @endif
        </div>
    </div>
    <x-copy-button :copy="$text" />
</div>

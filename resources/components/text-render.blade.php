<div x-data="copy">
    <div>
        <label for="email" class="block text-sm font-medium text-gray-100">{{ $label }}</label>
        <div class="mt-1">
            <div
                class="rounded-md prose prose-invert h-[39rem] max-h-[39rem] overflow-auto scrollbar-thin bg-gray-800 border border-gray-700 p-5">
                @if ($isHtml)
                    <div>{!! $text !!}</div>
                @else
                    {{ $text }}
                @endif
            </div>
        </div>
    </div>
    <x-copy-button :copy="$text" />
</div>

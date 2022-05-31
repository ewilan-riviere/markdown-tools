<div class="shadow overflow-hidden md:rounded-lg">
    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2">
        @foreach ($data as $item)
            <div class="md:col-span-1">
                <dt class="text-sm font-medium text-gray-400">
                    {{ $item['label'] }}
                </dt>
                <dd class="mt-1 text-sm text-gray-100">
                    {{ $item['value'] }}
                </dd>
            </div>
        @endforeach
    </dl>
</div>

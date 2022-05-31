<x-app>
    <x-slot:head>
        @vite('views', 'app.ts', 3100)
    </x-slot:head>
    <div class="min-h-[82vh]">
        <div {{ $attributes }}>
            {{ $slot }}
        </div>
    </div>
    <x-layout.footer />
</x-app>

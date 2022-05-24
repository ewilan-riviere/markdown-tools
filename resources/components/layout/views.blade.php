<x-app>
    <x-slot:head>
        @vite('views', 'app.ts', 3100)
    </x-slot:head>
    {{ $slot }}
</x-app>

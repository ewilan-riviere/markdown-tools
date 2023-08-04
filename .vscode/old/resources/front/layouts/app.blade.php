<x-app>
    @push('head')
        @vite(['resources/front/css/app.css', 'resources/front/ts/app.ts'])
    @endpush
    <x-layout.hero />
    @yield('default')
    <x-layout.footer />
</x-app>

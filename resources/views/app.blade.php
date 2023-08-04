<x-stw-app>
  <x-slot name="head">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    @routes
    @vite(['resources/js/app.ts', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
  </x-slot>

  @inertia
</x-stw-app>

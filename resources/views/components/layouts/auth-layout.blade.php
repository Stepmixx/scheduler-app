<x-layouts.app page-title="{{ $title }}">
    <x-slot name="head">
        <link href="{{ asset('css/auth-layout.css') }}" rel="stylesheet">
    </x-slot>
    <x-layouts.nav-bar/>
    <div class="content-container">
        <div class="paper">
            {{ $slot }}
        </div>
    </div>
    <x-layouts.footer/>
</x-latouts.app>
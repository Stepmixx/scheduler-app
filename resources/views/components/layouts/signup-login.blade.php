<x-layouts.app page-title="{{ $title }}">
    <x-slot name="head">
        <link href="{{ asset('css/signup-login.css') }}" rel="stylesheet">
    </x-slot>
    <div class="root">
        <div class="banner-container">
            <img src="{{ asset('img/bg-img.png') }}" alt="banner" class="bg-image" />
            <div class="text-container">
                <img
                    src="{{ asset('img/scheduler-logo-white.svg') }}"
                    alt="scheduler logo"
                    class="logo"
                />
                <h3 class="text">
                    Maneja tus turnos de la manera más cómoda 
                </h3>
            </div>
        </div>
        <div class="right-container">
            <div class="top-button-container">
                <p class="top-button-text">
                    {{ $topButtonHelperText }}
                </p>
                <a href="{{ $link }}" class="link">
                    <button class="top-button">
                        {{ $topButtonText }}
                    </button>
                </a>
            </div>
            <div class="form-container">
                <h3 class="title">{{ $formTitle }}</h3>
                <form class="form">
                    {{ $slot }}
                    <button
                    type="submit"
                    class="submit-button"
                    >
                    {{ $title }}
                    </button>
                </form>
            </div>
      </div>
    </div>
</x-layouts.app>
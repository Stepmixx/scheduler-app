<x-layouts.signup-login
    title="Regístrate"
    link="/login"
    form-title="Crear cuenta"
    top-button-text="Iniciar sesión"
    top-button-helper-text="Ya tienes una cuenta?"
    form-action="{{ route('signup-user') }}"
>   
    @if(Session::has('success'))
        <div class="success-action">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
    @if(Session::has('error'))
        <div class="error-action">
            <p>{{ Session::get('error') }}</p>
        </div>
    @endif
    @csrf
    <label for="name" aria-label="nombre">Nombre</label>
    <input
        id="name"
        name="name"
        type="text"
        autocomplete="on"
        value="{{ old('name') }}"
        required
    >
    <span class="error">
        @error('name') {{ $message }} @enderror
    </span>
    <label for="lastname" aria-label="apellido">Apellido</label>
    <input
        id="lastname"
        name="lastname"
        type="text"
        autocomplete="on"
        value="{{ old('lastname') }}"
        required
    >
    <span class="error">
        @error('lastname') {{ $message }} @enderror
    </span>
    <label for="identification" aria-label="cédula de identidad">Cédula de identidad</label>
    <input
        id="identification"
        name="identification"
        value="{{ old('identification') }}"
        type="text"
        required
    >
    <span class="error">
        @error('identification') {{ $message }} @enderror
    </span>
    <label for="email" aria-label="correo electrónico">Correo Electrónico</label>
    <input
        id="email"
        name="email"
        type="email"
        value="{{ old('email') }}"
        autocomplete="email"
        required
    >
    <span class="error">
        @error('email') {{ $message }} @enderror
    </span>
    <label for="password" aria-label="contraseña">Contraseña</label>
    <input
        id="password"
        type="password"
        name="password"
        aria-label="contraseña"
        required
    >
    <span class="error">
        @error('password') {{ $message }} @enderror
    </span>
</x-layouts.signup-login>
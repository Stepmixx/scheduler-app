<x-layouts.signup-login
    title="Iniciar sesión"
    link="/signup"
    form-title="Bienvenido de nuevo!"
    top-button-text="Crear cuenta"
    top-button-helper-text="No tienes una cuenta?"
    form-action="{{ route('login-user') }}"
>
    @if(Session::has('error'))
        <div class="error-action">
            <p>{{ Session::get('error') }}</p>
        </div>
    @endif
    @csrf
    <label for="email" aria-label="correo electrónico">Correo Electrónico</label>
    <input
        id="email"
        name="email"
        type="email"
        autocomplete="email"
        value="{{ old('email') }}"
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
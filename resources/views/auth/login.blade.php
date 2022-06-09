<x-layouts.signup-login
    title="Iniciar sesión"
    link="/signup"
    form-title="Bienvenido de nuevo!"
    top-button-text="Crear cuenta"
    top-button-helper-text="No tienes una cuenta?"
>
    <label for="email" aria-label="correo electrónico">Correo Electrónico</label>
    <input
        id="email"
        name="email"
        type="email"
        autocomplete="email"
        required
    >
    <label for="password" aria-label="contraseña">Contraseña</label>
    <input
        id="password"
        type="password"
        name="password"
        aria-label="contraseña"
        required
    >
</x-layouts.signup-login>
<x-layouts.signup-login
    title="Regístrate"
    link="/login"
    form-title="Crear cuenta"
    top-button-text="Iniciar sesión"
    top-button-helper-text="Ya tienes una cuenta?"
>   
    <label for="name" aria-label="nombre">Nombre</label>
    <input
        id="name"
        name="name"
        type="text"
        autocomplete="on"
        required
    >
    <label for="lastname" aria-label="apellido">Apellido</label>
    <input
        id="lastname"
        name="lastname"
        type="text"
        autocomplete="on"
        required
    >
    <label for="ci" aria-label="cédula de identidad">Cédula de identidad</label>
    <input
        id="ci"
        name="ci"
        type="text"
        autocomplete="on"
        required
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
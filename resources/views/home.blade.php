<x-layouts.auth-layout title="Inicio" user="{{ $user }}">
    <p>Bienvenid@ {{$user->name}} {{$user->lastname}}</p>
</x-layouts.auth-layout>
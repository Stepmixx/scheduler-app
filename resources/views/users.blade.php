<x-layouts.auth-layout title="Usuarios" user="{{ $user }}">
    <p>Usuarios</p>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cédula</th>
            <th>Correo electrónico</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->identification }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
    </table>
</x-layouts.auth-layout>
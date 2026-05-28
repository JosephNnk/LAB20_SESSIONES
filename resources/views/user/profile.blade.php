<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mi Perfil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="app-card overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="table-dark text-sm">
                            <thead>
                                <tr class="text-left text-gray-600">
                                    <th class="py-2">ID</th>
                                    <th class="py-2">Nombre</th>
                                    <th class="py-2">Usuario</th>
                                    <th class="py-2">CI</th>
                                    <th class="py-2">Email</th>
                                    <th class="py-2">Telefono</th>
                                    <th class="py-2">Rol</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t">
                                    <td class="py-2">{{ $user->id }}</td>
                                    <td class="py-2">{{ $user->name }}</td>
                                    <td class="py-2">{{ $user->username }}</td>
                                    <td class="py-2">{{ $user->ci }}</td>
                                    <td class="py-2">{{ $user->email }}</td>
                                    <td class="py-2">{{ $user->telefono }}</td>
                                    <td class="py-2">{{ $user->rol }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="mt-4 text-sm text-gray-600">
                        {{ __('Solo puedes visualizar tu perfil. No tienes permisos de edicion.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

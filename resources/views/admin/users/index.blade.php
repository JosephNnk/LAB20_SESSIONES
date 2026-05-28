<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrar Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('status'))
                <div class="app-alert mb-4 rounded px-4 py-3 text-sm">
                    {{ session('status') }}
                </div>
            @endif

            <div class="mb-4">
                <a href="{{ route('admin.users.create') }}" class="app-button-primary inline-flex items-center text-sm">
                    {{ __('Nuevo Usuario') }}
                </a>
            </div>

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
                                    <th class="py-2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="border-t">
                                        <td class="py-2">{{ $user->id }}</td>
                                        <td class="py-2">{{ $user->name }}</td>
                                        <td class="py-2">{{ $user->username }}</td>
                                        <td class="py-2">{{ $user->ci }}</td>
                                        <td class="py-2">{{ $user->email }}</td>
                                        <td class="py-2">{{ $user->telefono }}</td>
                                        <td class="py-2">{{ $user->rol }}</td>
                                        <td class="py-2">
                                            <div class="flex items-center gap-2">
                                                <a href="{{ route('admin.users.edit', $user) }}" class="app-link">
                                                    {{ __('Editar') }}
                                                </a>
                                                <form method="POST" action="{{ route('admin.users.destroy', $user) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-300 hover:text-red-200" onclick="return confirm('¿Eliminar usuario?')">
                                                        {{ __('Eliminar') }}
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

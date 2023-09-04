<div class="p-4">
    <div class="flex text-gray-600">
        <select class="bg-white dark:bg-gray-800 rounded-lg" wire:model="perPage">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
        </select>
        <input type="text" class="form-input w-full bg-white dark:bg-gray-800 text-gray-800 dark:text-white rounded-lg ml-6" wire:model="buscar" placeholder="Termino de busqueda">
    </div>

    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-white dark:bg-gray-800 text-gray-800 dark:text-white">
                <th class="py-4">ID</th>
                <th class="py-4">NOMBRE</th>
                <th class="py-4">EMAIL</th>
                <th class="py-4">ROL</th>
                <th class="py-4">ACCIÓN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="text-gray-500 text-center">{{ $user->id }}</td>
                    <td class="text-gray-500 text-center">{{ $user->name }}</td>
                    <td class="text-gray-500 text-center">{{ $user->email }}</td>
                    <td class="text-gray-500 text-center">Admin</td>

                    <td class="boroder px-4 py-2">
                        <div class="flex justify-center rounded-lg text-lg" role="group">
                            {{-- Boton editar --}}
                            <a href=""
                                class="rounded-lg bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4">Editar</a>
                            {{-- boton borrar --}}
                            {{-- <form action="" method="" class="formEliminar">
                                <button type="submit"
                                    class="rounded-r-lg bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4">Borrar</button>
                            </form> --}}
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="max-w-7xl mx-auto sm:pr-0 lg:px-8">
        {{ $users->links() }}
    </div>
</div>

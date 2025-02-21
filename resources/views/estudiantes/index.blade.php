<x-app-layout>
    <div class="flex flex-col  justify-center items-center">
        <h1 class="mb-7 font-bold text-3xl text-white">
            Listado de Estudiantes
        </h1>
        <div class="overflow-hidden w-full overflow-x-auto rounded-sm border border-neutral-300 dark:border-neutral-700">
            <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
                <thead class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
                    <tr>
                        <th scope="col" class="p-4">ID</th>
                        <th scope="col" class="p-4">Nombres</th>
                        <th scope="col" class="p-4">Apellidos</th>
                        <th scope="col" class="p-4">Opciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                    @foreach ($estudiantes as $estudiante)
                        <tr>
                            <td class="p-4">{{ $estudiante->id }}</td>
                            <td class="p-4">{{ $estudiante->nombre }}</td>
                            <td class="p-4">{{ $estudiante->apellido }}</td>
                            <td class="p-4"><button type="button" class="whitespace-nowrap rounded-sm bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Edit</button></td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    <div class="mt-5">
        {{ $estudiantes->links() }}
    </div>

</x-app-layout>

@extends('dashboard')

@section('titulo')
    Información estudiantes
@endsection


@section('tabla')
    <div class="w-[73rem] m-4">
        <div class="flex flex-row items-center gap-2">
            <label class=" text-2xl font-bold">Panel de gestión administración</label>

            @if (session()->has('notificacion'))
                <div class="bg-green-700 text-white text-xl font-bold p-1">{{ session('notificacion') }} <i
                        class="fa-solid fa-check"></i> </div>
            @endif
        </div>

        <div class="flex justify-between mb-4">
            <button class="bg-green-700 hover:bg-green-900 h-fit text-white p-2 rounded-md flex flex-row items-center gap-2">
                <a href="/estudiantes/create" class="text-lg font-bold">Crear usuarios</a>
            </button>
            <div class="flex flex-row items-center h-fit bg-white border p-2 rounded-lg">
                <input class="w-[25rem] h-6 text-base font-normal pl-2 border-white" type="text"
                    placeholder="Buscar por matricula/nomina" />
                <button class="w-fit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-800 text-white text-center">
                    <th class="px-4 py-2">Matricula</th>
                    <th class="">Nombre del alumno</th>
                    <th class="">Apellido</th>
                    <th class="">Fecha de nacimiento</th>
                    <th class="">Mostrar</th>
                    <th class="">Editar</th>
                    <th class="">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="hover:bg-gray-200 transition-colors">
                        <td class="border px-4 py-2 whitespace-nowrap">{{ $student->id_student }}</td>
                        <td class="border px-4 py-2 whitespace-nowrap">{{ $student->name_student }}</td>
                        <td class="border px-4 py-2 whitespace-nowrap">{{ $student->lastname_student }}</td>
                        <td class="border px-4 py-2 whitespace-nowrap">{{ $student->birthday }}</td>
                        <td class="border px-4 py-2 whitespace-nowrap">
                            <a href="{{ route('estudiantes.show', $student->id) }}" class="w-full flex flex-col items-center text-blue-500 hover:text-blue-700">
                                <i class="fa-solid fa-book-open"></i>
                            </a>
                        </td>
                        <td class="border px-4 py-2 whitespace-nowrap">
                            <a href="{{ route('estudiantes.edit', $student->id) }}" class="w-full flex flex-col items-center text-yellow-500 hover:text-yellow-700">
                                <i class="fa-solid fa-file-pen"></i>
                            </a>
                        </td>
                        <td class="border px-4 py-2 whitespace-nowrap">
                            <form action="{{ route('estudiantes.destroy', $student->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este estudiante?')"
                                    class="w-full flex flex-col items-center text-red-500 hover:text-red-700">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="w-full">
            {{ $students->links() }}
        </div>
    </div>
@endsection

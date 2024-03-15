
<div class="flex justify-left">
    <div class="w-1/2 overflow-x-auto m-4">
        <h2 class="text-2xl font-bold mb-4"> perfil del estudiante</h2>
        <form action="{{ route('estudiantes.update', $student->id) }}" method="POST" class="bg-white rounded border-black border-1 mb-4">
            @csrf
            @method('patch')
            <div class=" rounded p-4 bg-white">
                <div class="w-full flex flex-row gap-2 mb-4">

                    <div class="w-full ">
                        <label for="name_student"
                            class="block text-gray-700 text-sm font-bold mb-2 uppercase">Nombre:</label>
                        <input type="text" placeholder="Nombres del estudiante" name="name_student" id="name_student" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            value="{{$student->name_student}}">
                    </div>
                    <div class="w-full">
                        <label for="lastname_student"
                            class="block text-gray-700 text-sm font-bold mb-2 uppercase">Apellido:</label>
                        <input type="text" name="lastname_student" id="lastname_student"placeholder="Apellidos del estudiante" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            value="{{$student->lastname_student}}">
                    </div>
                </div>

                <div class="flex flex-row gap-2 justify-center">
                    <div class="flex items-center justify-center">
                        <button type="submit"
                            class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
                    </div>
                    <div class="flex items-center justify-center">
                        <a href="/dashboard"
                            class="bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cancelar</a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="w-fit flex flex-row">
    <div class=" bg-[#393d42] w-[18rem] h-screen flex flex-col fixed justify-between">
        <div>
            <a href="/" class="text-white flex flex-row align-items-center p-3 pb-3 gap-2">
                <span class="text-4xl font-bold">SIC</span>
                <span class="border-l-2 pl-2">Sistema integral de calificaciones.</span>
            </a>
            <ul class="flex flex-col justify-between">

                <div>
                    <!--Linea de separación atte: guayabo -->
                    <p class="border-top opacity-60"></p>
                    <li>
                        <a href="/dashboard"
                            class="buttons_sidebar text-[#c8c8c8] w-full flex flex-row align-items-center items-center p-3 gap-2 hover:bg-[#636363] hover:text-[#111111]">
                            <i class="fa-solid fa-school"></i>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <button
                            class="buttons_sidebar text-[#c8c8c8] w-full flex flex-row align-items-center items-center p-3 gap-2 hover:bg-[#636363] hover:text-[#111111]">
                            <i class="fa-solid fa-users-line"></i>
                            Usuarios
                        </button>
                    </li>
                    <li>
                        <a href="/informacion-estudiantes"
                            class="buttons_sidebar text-[#c8c8c8] w-full flex flex-row align-items-center items-center p-3 gap-2 hover:bg-[#636363] hover:text-[#111111]">
                            <i class="fa-solid fa-diagram-project"></i>
                            Información estudiantes
                        </a>
                    </li>
                    <li>
                        <a href="/asignaturas"
                            class="buttons_sidebar text-[#c8c8c8] w-full flex flex-row align-items-center items-center p-3 gap-2 hover:bg-[#636363] hover:text-[#111111]">
                            <i class="fa-solid fa-diagram-project"></i>
                            Asignaturas
                        </a>
                    </li>
                    <li>
                        <button
                            class="buttons_sidebar text-[#c8c8c8] w-full flex flex-row align-items-center items-center p-3 gap-2 hover:bg-[#636363] hover:text-[#111111]">
                            <i class="fa-solid fa-address-card"></i>
                            Mi perfil
                        </button>
                    </li>
                </div>
            </ul>
        </div>
        <div class="">
            <!--Linea de separación atte: guayabo -->
            <p class="border-top opacity-60"></p>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')"
                    class="logout_sidebar justify-start align-items-center py-3 text-[#e0e0e0] hover:text-[#181818] flex flex-row p-3 gap-2 w-full hover:bg-[#505050] text-"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    {{ __('Cerrar sesión') }}
                </x-dropdown-link>
            </form>
        </div>
    </div>
    <main class="w-full ml-[18rem]">
        @yield('contenido')
        @yield('formulario')
        @yield('tabla')
        @yield('crear_estudiante')
        @yield('informacion-alumno-id')
        @section('tabla-asignaturas')
        </main>

    </body>

    <script src="https://kit.fontawesome.com/61439499b0.js" crossorigin="anonymous"></script>

    </html>

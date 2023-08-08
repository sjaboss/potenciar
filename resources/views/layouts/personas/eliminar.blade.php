<x-app-layout>
    <div class="container ">
        <br>
        <div class="w-full p-4 text-center bg-slate-50 border border-gray-200 rounded-lg shadow sm:p-8 ">
            <h5 class="mb-2 text-3xl bg-gray-300 p-6  rounded-t-lg  shadow font-bold text-gray-900 dark:text-white">
                Potenciar trabajo</h5>
            <p class="mb-3 text-base text-left text-gray-500 sm:text-lg dark:text-gray-400">Eliminar persona del sistema
            </p>
            <hr><br>

            <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
                role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                {{--   <span class="sr-only">Eliminar</span> --}}
                <div>
                    <span class="font-medium">Atención!</span> Esta seguro de eliminar este registro!!!
                </div>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Apellido
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Documento
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Telefono
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b ">
                            <td class="px-6 py-4">
                                {{ $persona->apellidos }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $persona->nombres }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $persona->doc }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $persona->telefono }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <form class="" action=" {{ route('personas.destroy', $persona->id) }} " method="POST" novalidate>
                @csrf
                <div class="text-left pt-2">
                    <a href="{{ route('personas.index') }}"
                        class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Regresar</a>

                        <input hidden  type="text" name="nombres" id="nombres" value=" {{ $persona->nombres }}">
                        <input hidden type="text" name="apellido" id="apellido" value="{{ $persona->apellidos }}">
                        <input hidden type="text" name="documento" id="documento" value=" {{ $persona->doc }}">


                        <button href="{{ route('personas.index') }}"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4
                        focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar
                        <span class="fas fa-user-times"> </span></button>

                        <input  id="usuario" name="usuario" disabled type="text" value=" {{ Auth::user()->usuario }}"> 
                </div>
            </form>

        </div>
    </div>
</x-app-layout>

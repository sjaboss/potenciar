<x-app-layout>
 <div class="container "> 
        <br>

        <div class="w-full p-4 text-center bg-slate-50 border border-gray-200 rounded-lg shadow sm:p-8 ">
            <h5 class="mb-2 text-3xl bg-gray-300 p-6  rounded-t-lg  shadow font-bold text-gray-900">Potenciar Trabajo
            </h5>

            <p class=" mb-3 text-base text-center border-b text-gray-500 sm:text-lg dark:text-gray-400">Listado de
                personas en el
                sistema</p>


            <div class="mb-2 mt-3 text-center">
                <a href="{{ route('personas.create') }}" type="button"
                    class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4
                 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center 
                 mr-2 mb-2  ">Agregar
                    persona <span class="fas fa-user-plus"></span></a>
            </div>



            <div class="row">
                <div class="col col-sm-12">
                    @if ($mensaje = Session::get('success'))
                        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                            role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium"></span> {{ $mensaje }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class=" pb-4 relative overflow-x-auto shadow-md sm:rounded-lg">
                <hr class="pb-1">

                <table id="t_personas" class="w-full text-lg text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-1 py-1 hidden">
                                -
                            </th>
                            <th scope="col" class="px-1 py-1">
                                Apellido
                            </th>
                            <th scope="col" class="px-1 py-1">
                                Nombre
                            </th>
                            <th scope="col" class="px-1 py-1">
                                Documento
                            </th>
                            <th scope="col" class="px-1 py-1">
                                Telefono
                            </th>
                            <th scope="col" class="px-1 py-1">
                                Provincia
                            </th>
                            <th scope="col" class="px-1 py-1">
                                partido
                            </th>
                            <th scope="col" class="px-1 py-1">
                                localidad
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Dirección
                            </th>
                            <th scope="col" class="px-1 py-1">
                                Editar
                            </th>
                            <th scope="col" class="px-1 py-1">
                             Eliminar
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm ">
                        @foreach ($datos as $item)
                            {{--      <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700"> --}}
                            <tr class=" bg-white border-b   hover:bg-gray-200 ">
                                {{--     <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Apple MacBook Pro 17"
                                </th> --}}
                                <td class="px-1 py-2 hidden">
                                    {{ $item->id }}
                                </td>

                                <td class="px-1 py-2 border-b">
                                    {{ $item->apellidos }}
                                </td>
                                <td class="px-1 py-2 border-b ">
                                    {{ $item->nombres }}
                                </td>
                                <td class="px-1 py-2 border-b">
                                    {{ $item->doc }}
                                </td>

                                <td class="px-1 py-2 border-b">
                                    {{ $item->telefono }}
                                </td>
                                <td class="px-1 py-2 border-b">
                                    {{ $item->provincia }}
                                </td>
                                <td class="px-1 py-2 border-b">
                                    {{ $item->partido }}
                                </td>
                                <td class="px-1 py-2 border-b">
                                    {{ $item->localidad }}
                                </td>
                                <td class="px-6 py-4 border-b">
                                    {{ $item->direccion }}
                                </td>
                                <td class="px-1 py-2 border-b">
                                    <a href="{{ route('personas.edit', $item->id) }}"
                                        class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-lg px-2.5 py-2.0 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                                        <span class=" fas fa-user-edit"></a>
                                </td>
                                <td class=" px-1 py-2 border-b">
                                    <a href="{{ route('personas.show', $item->id) }}"
                                        class=" text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-lg px-2.5 py-2.0 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                        <span class="fas fa-user-times"></a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="pt-4">
                {{ $datos->links() }}
            </div>
        </div>

        <script type="text/javascript">
            //Asi lo van a tener estas 2 lineas de codigo añadan o reemplazen
            $(document).ready(function() {
                $('#t_personas').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        /*   'copyHtml5', */
                        'excelHtml5',
                        /*         'csvHtml5', */
                        'pdfHtml5'
                    ],
                    "order": [
                        [0, "desc"]
                    ],
                    //para apagar el pie
                    "info": false,
                    "paging": false,
                    language: {
                        "sSearch": "Buscar:",

                    }
                });

            });
        </script>
     </div>

</x-app-layout>

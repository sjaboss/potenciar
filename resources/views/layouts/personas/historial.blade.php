<x-app-layout>
    <div class="container ">
        <br>

        <div class="w-full p-4 text-center bg-slate-50 border border-gray-200 rounded-lg shadow sm:p-8 ">
            <h5 class="mb-2 text-3xl bg-gray-300 p-6  rounded-t-lg  shadow font-bold text-gray-900">Historial de
                movimientos de la persona
            </h5>

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

                <table id="t_personas_h" class="w-full text-lg text-left text-gray-500 ">
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
                                ingreso usurio
                            </th>
                            <th scope="col" class="px-1 py-1">
                                modifico usuario
                            </th>
                            <th scope="col" class="px-1 py-1">
                                elimino usuario
                            </th>
                            <th scope="col" class="px-1 py-1">
                                fecha auditoria
                            </th>
                            <th scope="col" >
                                Ver registro
                            </th>

                        </tr>
                    </thead>
                    <tbody class="text-sm ">
                        @foreach ($datos as $item)
                           
                            <tr class=" bg-white border-b   hover:bg-gray-200 ">
                       
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
                                    {{ $item->usu_ing }}
                                </td>
                                <td class="px-1 py-2 border-b">
                                    {{ $item->usu_mod }}
                                </td>
                                <td class="px-1 py-2 border-b">
                                    {{ $item->usu_sup }}
                                </td>
                                <td class="px-1 py-2 border-b date">
                                    {{ date('d/m/Y -h:i', strtotime($item->created_at)) }}
                                </td>

                                <td class="px-1 py-2 border-b justify-center">
                                     <a href="{{ route('personas.ver', $item->id) }}"
                                        class="text-emerald-400 hover:text-white border border-emerald-400 hover:bg-emerald-500 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-lg px-2.5 py-2.0 text-center mr-2 mb-2 dark:border-emerald-300 dark:text-emerald-300 dark:hover:text-white dark:hover:bg-emerald-400 dark:focus:ring-emerald-900">
                                        <span class=" fas fa-user-tag">

                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
       
        </div>

        <script type="text/javascript">
            //Asi lo van a tener estas 2 lineas de codigo añadan o reemplazen
            $(document).ready(function() {
                $('#t_personas_h').DataTable({
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
                    "info": true,
                    "paging": true,
                    language: {
                        "sSearch": "Buscar:",

                    }
                });

            });
        </script>
    </div>

</x-app-layout>

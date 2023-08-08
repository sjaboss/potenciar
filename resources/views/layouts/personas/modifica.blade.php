<x-app-layout>
    <div class="container ">
        <br>
        <section class="bg-slate-50 ">
            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h5 class="mb-2 text-3xl bg-gray-300 p-6  rounded-t-lg  shadow font-bold text-gray-900">
                    Potenciar trabajo</h5>
                <h2 class="mb-4 text-xl font-bold text-gray-900 ">Modifica de personas</h2>
                <br>


                <form action="{{ route('personas.update', $persona->id) }}" method="POST" novalidate>
                    @csrf
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input value="{{ $persona->nombres }}" autocomplete="off"type="text" name="nombres"
                                id="nombres"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            @error('nombres')
                                <div class="p-1 flex items-center  m-1 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <div>
                                        <span class="font-medium">Atención!</span> {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <label for="nombres"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombres</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input value="{{ $persona->apellidos }}" autocomplete="off" type="text" name="apellido"
                                id="apellido"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            @error('apellido')
                                <div class="p-1 flex items-center  m-1 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <div>
                                        <span class="font-medium">Atención!</span> {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <label for="apellido"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-6000 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Apellidos</label>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input value="{{ $persona->doc }}" type="text" name="documento" id="documento"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            @error('documento')
                                <div class="p-1 flex items-center  m-1 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <div>
                                        <span class="font-medium">Atención!</span> {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <label for="documento"
                                class="peer-focus:font-medium absolute text-sm text-gray-500transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Documento</label>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input value="{{ $persona->email }}" type="email" name="correo" id="correo"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            @error('correo')
                                <div class="p-1 flex items-center  m-1 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <div>
                                        <span class="font-medium">Atención!</span> {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <label for="correo"
                                class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input value="{{ $persona->telefono }}" type="text" name="telefono" id="telefono"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            @error('telefono')
                                <div class="p-1 flex items-center  m-1 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <div>
                                        <span class="font-medium">Atención!</span> {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <label for="telefono"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 d transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Telefono
                                Móvil</label>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <select id="prov" name="prov"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="{{ $persona->provincia }}">{{ $persona->provincia }}</option>
                                <option value="Buenos Aires"> Buenos Aires</option>
                                <option value="Catamarca"> Catamarca</option>
                                <option value="Chaco"> Chaco</option>
                                <option value="Chubut"> Chubut</option>
                                <option value="Córdoba"> Córdoba</option>
                                <option value="Corrientes"> Corrientes</option>
                                <option value="Entre Ríos"> Entre Ríos</option>
                                <option value="Formosa"> Formosa</option>
                                <option value="Jujuy">Jujuy</option>
                                <option value="La Pampa"> La Pampa</option>
                                <option value="La Rioja"> La Rioja</option>
                                <option value="Mendoza"> Mendoza</option>
                                <option value="Misiones"> Misiones</option>
                                <option value="Neuquén"> Neuquén</option>
                                <option value="Río Negro"> Río Negro</option>
                                <option value="Salta"> Salta</option>
                                <option value="San Juan"> San Juan</option>
                                <option value="San Luis"> San Luis</option>
                                <option value="Santa Cruz"> Santa Cruz</option>
                                <option value="Santa Fe">Santa Fe</option>
                                <option value="Santiago del Estero"> Santiago del Estero</option>
                                <option value="Tierra del Fuego"> Tierra del Fuego</option>
                                <option value="Tucumán">Tucumán</option>
                            </select>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input value="{{ $persona->partido }}" type="text" name="partido" id="partido"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            @error('partido')
                                <div class="p-1 flex items-center  m-1 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <div>
                                        <span class="font-medium">Atención!</span> {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <label for="partido"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Partido</label>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input value="{{ $persona->localidad }}" type="text" name="localidad" id="localidad"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            @error('localidad')
                                <div class="p-1 flex items-center  m-1 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <div>
                                        <span class="font-medium">Atención!</span> {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <label for="localidad"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Localidad</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input value="{{ $persona->direccion }}" type="text" name="direccion" id="direccion"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            @error('direccion')
                                <div class="p-1 flex items-center  m-1 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <div>
                                        <span class="font-medium">Atención!</span> {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <label for="direccion"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Direccion
                                y Nro.</label>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input value="{{ $persona->cp }}" type="text" name="codigo" id="codigo"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            @error('codigo')
                                <div class="p-1 flex items-center  m-1 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <div>
                                        <span class="font-medium">Atención!</span> {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <label for="codigo"
                                class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Cod.
                                postal</label>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input value="{{ $persona->referente }}" type="text" name="referente" id="referente"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            @error('referente')
                                <div class="p-1 flex items-center  m-1 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <div>
                                        <span class="font-medium">Atención!</span> {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <label for="referente"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Referente</label>
                        </div>
                    </div>

        
                        <div class="relative z-0 w-full mb-6 group">
                            <select name="unidad" id="unidad"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="{{ $persona->unidad_ges }}">{{ $persona->unidad_ges }}</option>
                                @foreach ($comboUc as $item)
                                    <option value="{{ $item->description }}">{{ $item->description }}</option>
                                @endforeach
                            </select>
                        </div>


                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <div class="relative z-0 w-full mb-6 group">
                                <input value="{{ $persona->fec_ini }}" type="date" name="f_inicio"
                                    id="f_inicio"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none d focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                @error('f_inicio')
                                    <div class="p-1 flex items-center  m-1 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
                                        role="alert">
                                        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                        </svg>
                                        <div>
                                            <span class="font-medium">Atención!</span> {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                                <label for="f_inicio"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Fecha
                                    de inicio</label>
                            </div>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <input value="{{ $persona->fec_alta }}" type="date" name="f_alta" id="f_alta"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            @error('f_alta')
                                <div class="p-1 flex items-center  m-1 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
                                    role="alert">
                                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <div>
                                        <span class="font-medium">Atención!</span> {{ $message }}
                                    </div>
                                </div>
                            @enderror
                            <label for="f_alta"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Fecha
                                de alta</label>
                        </div>
                    </div>

                    <div>
                        <a href="{{ route('personas.index') }}"
                            class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Regresar</a>



                        <button href="{{ route('personas.index') }}"
                            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4
                     focus:outline-none focus:ring-blue-300  font-medium rounded-lg text-sm px-5 py-2.5 text-center 
                     mr-2 mb-2">Modificar
                            <span class="fas fa-user-edit"> </span></button>

                            <input hidden id="usuario" name="usuario" type="text" value=" {{ Auth::user()->usuario }}" >
                    </div>

                </form>


            </div>
        </section>

    </div>
</x-app-layout>

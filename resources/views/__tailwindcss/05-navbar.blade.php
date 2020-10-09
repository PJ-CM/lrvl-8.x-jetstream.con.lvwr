<x-guest-layout>
    <div class="container p-4 mx-auto mt-5">
        <nav x-data="{ openMenuMovil: false }" class="flex flex-wrap items-center justify-between p-6 bg-teal-500">
            <div class="flex items-center flex-shrink-0 mr-6 text-white">
                <svg class="w-8 h-8 mr-2 fill-current" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                <span class="text-xl font-semibold tracking-tight">Tailwind CSS</span>
            </div>
            <div class="block lg:hidden">
                <button @click="openMenuMovil = !openMenuMovil" class="flex items-center px-3 py-2 text-teal-200 border border-teal-400 rounded hover:text-white hover:border-white">
                    <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            {{-- Versión Móvil --}}
            <div x-show="openMenuMovil" @click.away="openMenuMovil = false" class="flex-grow w-full text-center">
                <div class="text-sm lg:flex-grow">
                    {{--
                        Modos de Capturar la RUTA actual para activar
                            el correspondiente elemento del MENÚ

                        -> {{ request()->url() == 'http://dominio.es/todos' ? ... : ... }}

                        -> @if (Request::path() == 'todos') ... @else ... @endif

                        -> {{ request()->path() == 'todos' ? ... : ... }}

                        -> {{ request()->is('todos') ? ... : ... }}
                    --}}
                    <a href="{{ route('twcss.index') }}" class="block px-2 mt-4 text-teal-200 bg-teal-600 rounded-lg lg:inline-block lg:mt-0 hover:text-white hover:bg-teal-900">
                        IndexM
                    </a>
                    <a href="{{ route('twcss.grid') }}" class="block px-2 mt-4 text-teal-200 bg-teal-600 rounded-lg lg:ml-4 lg:inline-block lg:mt-0 hover:text-white hover:bg-teal-900">
                        Grid
                    </a>
                    <a href="{{ route('twcss.personalizado') }}" class="block px-2 mt-4 text-teal-200 bg-teal-600 rounded-lg lg:ml-4 lg:inline-block lg:mt-0 hover:text-white hover:bg-teal-900">
                        Personalización
                    </a>
                    <a href="{{ route('twcss.flexbox') }}" class="block px-2 mt-4 text-teal-200 bg-teal-600 rounded-lg lg:ml-4 lg:inline-block lg:mt-0 hover:text-white hover:bg-teal-900">
                        Flexbox
                    </a>
                    <a href="{{ route('twcss.navbar') }}" class="px-2 rounded-lg block mt-4 lg:ml-4 lg:inline-block lg:mt-0 {{ request()->path() == 'tailwindcss/navbar' ? 'text-white bg-teal-900' : 'text-teal-200 hover:text-white bg-teal-600 hover:bg-teal-900' }}">
                        Navbar
                    </a>
                    <a href="{{ route('twcss.navbarjs') }}" class="block px-2 mt-4 text-teal-200 bg-teal-600 rounded-lg lg:ml-4 lg:inline-block lg:mt-0 hover:text-white hover:bg-teal-900">
                        Navbar-JS
                    </a>
                </div>
                <div>
                    <a href="#" class="inline-block px-4 py-2 mt-4 text-sm leading-none text-white border border-white rounded hover:border-transparent hover:text-teal-500 hover:bg-white lg:mt-0">Download</a>
                </div>
            </div>

            {{--
                Según el tamaño del dispositivo, se mostrará un panel u otro.
                Falta la condición que, si se queda abierto el menú del tamaño
                móvil, éste se oculte cuando se pase a la versión de Escritorio.
                Puede que se encuentre una pista para lograr esto dentro del
                proyecto de VueJS junto con Laravel Sanctum que, también, dispone
                de un menú adaptado.
            --}}

            {{-- Versión Escritorio --}}
            <div class="flex-grow hidden text-center lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    {{--
                        Modos de Capturar la RUTA actual para activar
                            el correspondiente elemento del MENÚ

                        -> {{ request()->url() == 'http://dominio.es/todos' ? ... : ... }}

                        -> @if (Request::path() == 'todos') ... @else ... @endif

                        -> {{ request()->path() == 'todos' ? ... : ... }}

                        -> {{ request()->is('todos') ? ... : ... }}
                    --}}
                    <a href="{{ route('twcss.index') }}" class="block px-2 mt-4 text-teal-200 bg-teal-600 rounded-lg lg:inline-block lg:mt-0 hover:text-white hover:bg-teal-900">
                        IndexE
                    </a>
                    <a href="{{ route('twcss.grid') }}" class="block px-2 mt-4 text-teal-200 bg-teal-600 rounded-lg lg:ml-4 lg:inline-block lg:mt-0 hover:text-white hover:bg-teal-900">
                        Grid
                    </a>
                    <a href="{{ route('twcss.personalizado') }}" class="block px-2 mt-4 text-teal-200 bg-teal-600 rounded-lg lg:ml-4 lg:inline-block lg:mt-0 hover:text-white hover:bg-teal-900">
                        Personalización
                    </a>
                    <a href="{{ route('twcss.flexbox') }}" class="block px-2 mt-4 text-teal-200 bg-teal-600 rounded-lg lg:ml-4 lg:inline-block lg:mt-0 hover:text-white hover:bg-teal-900">
                        Flexbox
                    </a>
                    <a href="{{ route('twcss.navbar') }}" class="px-2 rounded-lg block mt-4 lg:ml-4 lg:inline-block lg:mt-0 {{ request()->path() == 'tailwindcss/navbar' ? 'text-white bg-teal-900' : 'text-teal-200 hover:text-white bg-teal-600 hover:bg-teal-900' }}">
                        Navbar
                    </a>
                    <a href="{{ route('twcss.navbarjs') }}" class="block px-2 mt-4 text-teal-200 bg-teal-600 rounded-lg lg:ml-4 lg:inline-block lg:mt-0 hover:text-white hover:bg-teal-900">
                        Navbar-JS
                    </a>
                </div>
                <div>
                    <a href="#" class="inline-block px-4 py-2 mt-4 text-sm leading-none text-white border border-white rounded hover:border-transparent hover:text-teal-500 hover:bg-white lg:mt-0">Download</a>
                </div>
            </div>
        </nav>
    </div>
</x-guest-layout>

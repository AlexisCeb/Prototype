<nav class="bg-gradient-to-b from-gray-800 pt-1">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            {{--Boton para abrir menu movil--}}
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white focus:text-white" id="mobileboton">
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            {{--Fin del boton para movil--}}
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                {{--Logo y titulo--}}
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-8 w-auto relative left-5 space-x-3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Action_lock_-_blue.svg/800px-Action_lock_-_blue.svg.png" alt="Workflow">
                    <div class="hidden lg:block">
                        <div class="flex space-x-2">
                            <img class="h-8 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Action_lock_-_blue.svg/800px-Action_lock_-_blue.svg.png" alt="Workflow">
                            <div class="font-Oswald text-white text-3xl relative bottom-0.5">Sikkert web</div>
                        </div>
                    </div>
                </div>
                {{--Fin del logo y titulo--}}
                {{--Accesos principales--}}
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{route('inicio')}}" class="current text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">P&aacute;gina principal</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Ayuda</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Equipo</a>
                        <button class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" id="togglelogin">Toggle login</button>
                    </div>
                </div>
                    {{--Fin accesos principales--}}
            </div>
            <div class="ml-3 relative">
                {{--Boton del perfil--}}
                <div class="mr-3 sm:mr-0">
                    <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white " id="userboton">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="https://styles.redditmedia.com/t5_4vuwpb/styles/profileIcon_srv06lumong71.jpg?width=256&height=256&crop=256:256,smart&s=8d1d6cadb25387e380d8abcfa4b8f63cfe9fda07" alt="">
                    </button>
                </div>
                {{--Fin del boton del perfil--}}
                {{--Inicio del menu del perfil--}}
                <div class="origin-top-right absolute right-0 mt-2 w-32 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" id="usermenu" tabindex="-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Perf&iacute;l</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Configuraci&oacute;n</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Cerrar sesi&oacute;n</a>
                </div>
                {{--Fin del menu del perfil--}}
                </div>
        </div>
    </div>
    {{--Menu para moviles--}}
    <div class="hidden sm:hidden" id="mobilemenu">
        <div class="pt-4 text-center">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">P&aacute;gina principal</a>
            <a href="#" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Ayuda</a>
            <a href="#" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Equipo</a>
            <button class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" id="togglemobil">Toggle login</button>
        </div>
    </div>
    {{--Fin menu para moviles--}}
</nav>


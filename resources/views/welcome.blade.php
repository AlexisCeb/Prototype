@extends('templates/master')
@section('contenido')
    <div class="container mt-10 mx-auto">
        <div class="grid md:grid-cols-2 md:items-center content-center justify-center divide-y md:divide-y-0 md:divide-x bg-white p-5 rounded-md sm:h-3/4 shadow-2xl">
            <div class="pb-3 md:pb-0 md:pr-5 pr-0 text-center">
                <div class="grid m-4 items-center content-center justify-center">
                    <div class="w-auto font-Oswald text-gray-700 text-6xl uppercase m-6 mb-7">Login</div>
                    <form class="mt-8" action="#" method="POST">
                        <input type="hidden" name="remember" value="true">
                        <div class="rounded-md shadow-sm -space-y-px">
                            <div>
                                <label for="user" class="sr-only">Usuario</label>
                                <input id="user" name="user" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Usuario">
                            </div>
                            <div>
                                <label for="password" class="sr-only">Contrase&ntilde;a</label>
                                <input id="password" name="password" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Contrase&ntilde;a">
                            </div>
                        </div>
                        <div class="pt-5">
                            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-to-r from-green-400 to-blue-500 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                              <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                              </span>
                                Iniciar sesi&oacute;n
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="pt-10 md:pt-0 md:pl-5 pl-0 text-center grid-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, assumenda aut autem consectetur consequatur eligendi exercitationem fugiat harum in itaque laborum laudantium molestias neque nesciunt obcaecati, perferendis ratione reprehenderit saepe.</div>
        </div>
    </div>
    @stop

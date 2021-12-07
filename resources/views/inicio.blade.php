<html lang="ES">
<head>
    <title>Experimental</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/custom.css')}}">
    @include('includes/header')
</head>
<body class="bg2 bg-cover bg-bottom bg-fixed">
<div class="container mx-auto mt-10">

    <div class="grid p-2 md:p-5 bg-purple-100 rounded-md shadow-xl divide-y md:divide-y-0 md:divide-x divide-gray-300" id="logincont" style="min-height: 70vh">
        <div class="hidden flex items-center justify-center py-10 md:py-0 pb-15 md:pb-0" id="loginframe">
            <div class="text-center bg-white px-8 pt-8 w-64 rounded-md shadow-2xl">
                <p class="uppercase font-Oswald text-6xl">Login</p>
                <form action="{{route('login')}}" method="POST">
                    {{csrf_field()}}
                    <div>
                        <div class="mt-5 rounded-md border-2 border-gray-100 p-0.5">
                            <div class="pb-0.5 border-b border-gray-100">
                                <label for="user" class="sr-only">Usuario</label>
                                <input id="user" name="user" type="text" required class="rounded-t-md w-full text-sm p-1 px-3 border border-white focus:border focus:outline-none focus:border-indigo-500" placeholder="Usuario">
                            </div>
                            <div>
                                <label for="pass" class="sr-only">Contrase&ntilde;a</label>
                                <input id="pass" name="pass" type="password" required class="rounded-b-md w-full text-sm p-1 px-3 border border-white focus:border focus:outline-none focus:border-indigo-500" placeholder="Contrase&ntilde;a">
                            </div>
                        </div>
                        <div class="pt-4">
                            <button type="submit" class="text-white font-Oswald text-2xl p-1 px-3 rounded-md bg4">DALE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="appearance-none font-BebasNeue text-4xl text-white p-3 md:px-10 flex flex-wrap content-center gap-6">
            <div id="ele1_2" class="bg-purple-700 shadow-inner rounded-md w-full text-center pt-5 pb-1 px-5 mt-7 md:mt-0">
                <div id="ele1_close" class="hidden absolute mt-1  bg-purple-700 rounded-full">
                    <button>
                        <img class="h-12 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/VisualEditor_-_Icon_-_Close_-_white.svg/1200px-VisualEditor_-_Icon_-_Close_-_white.svg.png" alt="">
                    </button>
                </div>
                <div class="pt-3">Secciones m&aacute;s frecuentadas</div>
                <button id="ele1" class="inline-block pt-2"><img src="https://static.wixstatic.com/media/420f5d_77128b7b12b244b182e010e863d073fc~mv2.gif" alt="" class="h-12 w-auto"></button>
                <div id="ele1_3" class="hidden text-2xl">
                    <?php
                    $example="Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
                    ?>
                    @for ($i = 0; $i <=5; $i++)
                        <div class="bg-green-200 flex items-center py-2 px-2 mt-3 rounded-md">
                            <div class="flex-1">{{$example}}</div>
                            <div><img class="h-12 w-auto inline-block" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Antu_arrow-right.svg/1200px-Antu_arrow-right.svg.png" alt="" /></div>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="relative w-full">
                <button type="button" id="redirect" class="relative w-full flex h-full bg-red-400 justify-center p-7 bg-purple-500 rounded-md">
                    <span>&#191;A d&oacute;nde iremos hoy?</span>
                    <img src="https://icon-library.com/images/white-down-arrow-icon/white-down-arrow-icon-7.jpg" alt="" class="h-11 w-auto">
                </button>
                <ul id="redirectmenu" class="hidden absolute mt-1 w-full bg-white shadow-lg max-h-32 rounded-md py-1 text-base overflow-y-auto sm:text-md">
                    <li class="text-gray-900 relative py-2 pl-3 pr-9">
                        <div class="flex items-center">
                            <span class="ml-3 block"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, nobis?</span>
                        </div>
                    </li>
                    <li class="text-gray-900 relative py-2 pl-3 pr-9">
                        <div class="flex items-center">
                            <span class="ml-3 block"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, nobis?</span>
                        </div>
                    </li>
                    <li class="text-gray-900 relative py-2 pl-3 pr-9">
                        <div class="flex items-center">
                            <span class="ml-3 block"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, nobis?</span>
                        </div>
                    </li>
                    <li class="text-gray-900 relative py-2 pl-3 pr-9">
                        <div class="flex items-center">
                            <span class="ml-3 block"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, nobis?</span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="bg-indigo-400 shadow-inner rounded-md border-b-2 border-indigo-600 w-full text-center p-5 px-20">

            </div>
        </div>
    </div>


</div>
</body>
<script src="{{asset('/js/header.js')}}"></script>
<script src="{{asset('/js/togglelogin.js')}}"></script>
<script src="{{asset('/js/section1.js')}}"></script>
</html>

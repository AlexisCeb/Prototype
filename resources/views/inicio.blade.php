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
                            <button type="submit" class="text-white font-Oswald text-2xl bg-gradient-to-r from-purple-900 via-blue-900 to-purple-700 p-1 px-3 rounded-md">DALE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="grid justify-center text-center grid-rows-3 p-3">
            <div class="bg-green-100">Secciones m&aacute;s frecuentadas</div>
            <div class="bg-green-200">A d&oacute;nde vamos?</div>
            <div class="bg-green-300">Comenzar</div>
        </div>
    </div>


</div>
</body>
<script src="{{asset('/js/header.js')}}"></script>
<script src="{{asset('/js/togglelogin.js')}}"></script>
</html>

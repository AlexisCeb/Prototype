<html lang="ES">
<head>
    <title>Experimental</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/custom.css')}}">
</head>
<body class="bg-green-300">
    <div class="flex">
        <div class="sm:w-12 bg-green-400 min-h-screen">
            <div class="sticky top-0 pt-12 px-2 w-full">
                <nav>
                    <ul class="space-y-12">
                        <li class="">
                            <button id="mau" class="h-8 w-8 rounded-full bg-indigo-500">

                            </button>
                        </li>
                        <li class="">
                            <button id="meu" class="h-8 w-8 rounded-full bg-red-500">

                            </button>
                        </li>
{{--                        <li class="">--}}
{{--                            <button id="op1" class="h-8 hidden">--}}
{{--                                op1--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                        <li class="">--}}
{{--                            <button id="op2" class="h-8  hidden">--}}
{{--                                op2--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                        <li class="">--}}
{{--                            <button id="op3" class="h-8  hidden">--}}
{{--                                op3--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                        <li class="">--}}
{{--                            <button id="op4" class="h-8  hidden">--}}
{{--                                op4--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                        <li class="">--}}
{{--                            <button id="op5" class="h-8  hidden">--}}
{{--                                op5--}}
{{--                            </button>--}}
{{--                        </li>--}}
                    </ul>
                </nav>
            </div>
        </div>
        <div class="w-full h-screen flex flex-wrap justify-center content-center py-20 px-20">
            <div class="bg-red-200 h-full w-full flex flex-cols-3">
                <div class="bg-blue-300 w-1/12">d</div>
                <div id="op1" class="bg-pink-300 flex-1 hidden">cola</div>
                <div id="op2" class="bg-pink-400 flex-1 hidden">de</div>
                <div id="op3" class="bg-pink-500 flex-1 hidden">perro</div>
                <div id="op4" class="bg-pink-600 flex-1 hidden">miado</div>
                <div id="op5" class="bg-pink-700 flex-1 hidden"></div>
                <div class="bg-indigo-300 w-1/12">d</div>
            </div>

            <div class="bg-purple-300 w-full text-center">s</div>
        </div>
    </div>
</body>
<script src="js/diap1.js"></script>

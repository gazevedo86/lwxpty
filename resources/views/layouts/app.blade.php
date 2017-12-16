<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
        @stack('estilo')

    </head>
    <body>
        @auth
        <div id="wrapper">

            @include('layouts.navigation')

            <div id="page-wrapper" class="white-bg">


                <!-- Page wrapper -->
                @include('layouts.topnavbar')
                @endauth
                <!-- Main view  -->
                @yield('content')
                @auth

                <!-- Footer -->
                @include('layouts.footer')


            </div>
            @include('layouts.menu_auxiliar')

        </div>

        <!-- Scripts -->
        <script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>


        @stack('scripts')
        @show
        @endauth

    </body>
</html>

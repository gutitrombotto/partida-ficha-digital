<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Ficha Digital del Movimiento Partida. Inscripcion a retiro Partida">

    
    <meta name="author" content="Agustin Trombotto">
    <meta name="csrf-token" content="{{ csrf_token() }}">




    <title>Ficha Digital - Partida</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('images/logo_partida_small.png')}}" />



    <!-- Bootstrap Core CSS -->

    <link href="{{ asset('theme/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">



    <!-- MetisMenu CSS -->

    <link href="{{ asset('theme/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">



    <!-- Custom CSS -->

    <link href="{{ asset('theme/dist/css/sb-admin-2.css') }}" rel="stylesheet">



    <!-- Morris Charts CSS -->

    <link href="{{ asset('theme/vendor/morrisjs/morris.css') }}" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="{{ asset('theme/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <script>
        window.ENV = {
            APP_URL: JSON.parse('{!!json_encode(env('APP_URL'))!!}'),
        };

    </script>


</head>

<body>



    <div id="wrapper">


        <!-- Navigation -->

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            @include('layouts.header')

            @include('layouts.sidebar')

        </nav>



        <div id="page-wrapper">
            <div id="app">
                @yield('content')
            </div>
            

        </div>

        <!-- /#page-wrapper -->



    </div>

    <!-- /#wrapper -->



    <!-- jQuery -->

    <script src="{{ asset('theme/vendor/jquery/jquery.min.js') }}"></script>



    <!-- Bootstrap Core JavaScript -->

    <script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.min.js') }}"></script>



    <!-- Metis Menu Plugin JavaScript -->

    <script src="{{ asset('theme/vendor/metisMenu/metisMenu.min.js') }}"></script>



    <!-- Morris Charts JavaScript -->

    <script src="{{ asset('theme/vendor/raphael/raphael.min.js') }}"></script>

    <script src="{{ asset('theme/vendor/morrisjs/morris.min.js') }}"></script>

    <script src="{{ asset('theme/data/morris-data.js') }}"></script>



    <!-- Custom Theme JavaScript -->

    <script src="{{ asset('theme/dist/js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>




</body>



</html>
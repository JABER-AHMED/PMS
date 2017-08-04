<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{asset('css/plugins/morris.css')}}" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="{{ asset('src/css/adminmain.css')}}">

    </head>
    <body style="background-image: url('../img/background.jpg');">

        <div id="wrapper">

        <!-- Navigation -->

        <div id="page-wrapper">

        @include('admin.partials.header')
 
        @include('admin.partials.message')

        @yield('content')

        </div>
        </div>

        <!-- jQuery -->
        <script src="{{asset('js/jquery.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{asset('js/plugins/morris/raphael.min.js')}}"></script>
        <script src="{{asset('js/plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('js/plugins/morris/morris-data.js')}}"></script>

    </body>

</html>
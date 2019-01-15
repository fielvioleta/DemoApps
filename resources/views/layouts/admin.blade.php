
 <!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'DemoApps By Fiel') }}</title>

    @include('partials.admin.css')
    @include('partials.admin.js')
</head>

<body>
    <!-- Left Panel -->
    @include('partials.admin.sidebar')
    <!-- /#left-panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        
        <!-- Header-->
        @include('partials.admin.header')
        <!-- /#header -->


        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">

                @yield('content')

            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        
        <!-- Footer -->
        @include('partials.admin.footer')
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

</body>
</html>

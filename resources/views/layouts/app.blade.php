<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title-block')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        @include('inc.header')
        @if(Request::is('/'))
            @include('inc.hero')
        @endif
        <div class='container mt-5'>
            @include('inc.messages')

            <div class='row'>
                <div class='col-8'>
                @yield('content')
                </div>
                <div clas='col-4'>
                @include('inc.aside')
                </div>
            </div>
        </div>
        @include('inc.footer')
        <script src="" async defer></script>
    </body>
</html>
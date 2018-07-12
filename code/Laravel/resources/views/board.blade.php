<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/styles.css">

        <!-- Styles -->
        <style>
        </style>

    </head>
    <body>
        <div id="header">
            @yield('header')
            <h1>掲示板</h1>
        </div><!-- header -->
        <div id="main">
            @yield('content')
        </div><!-- main -->
    </body>
</html>

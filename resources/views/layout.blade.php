<!doctype html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Task</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js' , 'resources/js/flashy.js'])
    </head>
    <body>  

        @yield('content')

    </body>
</html>
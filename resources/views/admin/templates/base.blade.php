<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- defer serve per far si che sia come se lo script del js sia scritto in fondo --}}
    <script defer src="{{ asset('js/app.js') }}"></script>

    <title>Admin Area</title>
</head>
<body>
    <div id="app">

        @include ('admin.partials.header')

        @yield('mainContent')


        @include ('admin.partials.footer')
    </div>

</body>
</html>

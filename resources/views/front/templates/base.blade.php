<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Admin Area</title>
</head>
<body>
    <div id="app">

        @include ('front.partials.header')

        @yield('mainContent')


        @include ('front.partials.footer')
    </div>

</body>
</html>

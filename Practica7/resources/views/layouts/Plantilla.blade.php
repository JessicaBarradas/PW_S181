<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('Titulo')</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    @include('partials.barra-de-navegacion')
    @yield('Contenido')
    @include('partials.pie-de-pagina')
</body>
</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Titulo - @yield('titulo')</title>
</head>

<body>
    @section('header')
    <h1>CABECERA DE LA WEB (master)</h1>
    @show
    <hr>
    <div class="container">
        @yield('content')
    </div>
    <hr>
    @section('footer')
    <h2>PIE DE PAGINA DE LA WEB (master)</h2>
    @show
</body>

</html>K
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Fedev')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{--{para hacer usa de stack , llamamos a push - es acomulativo}--}}
    @stack('css')
    {{--{para hacer uso de yiel, llamamos a section- contenido unico}--}}
</head>

<body>
    <header></header>
    @yield('content')
    <footer></footer>
</body>

</html>
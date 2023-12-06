<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title }}</title>
</head>

<body class="flex flex-col justify-between h-screen">
<header class="mb-6 bg-amber-100 p-6">
    <ul class="flex space-x-32 justify-start font-bold">
        <li class="hover:text-amber-700"><a href="#">Home</a></li>
        <li class="hover:text-amber-700"><a href="#">Docs</a></li>
        <li class="hover:text-amber-700"><a href="#">Sobre</a></li>
    </ul>
</header>
<main class="mb-auto">
    {{ $slot }}
</main>
<footer class="bg-amber-100 p-6">
    <ul>
        <li>Redes Sociais</li>
    </ul>
</footer>
</body>

</html>

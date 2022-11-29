<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<title>{{ $title }} | SIM ASSET</title>

<body class="font-mono">

    <x-navbar></x-navbar>

    <div class="flex">
        <div class="">
            @yield('content')
        </div>
    </div>

</body>

</html>

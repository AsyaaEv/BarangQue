<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        rel="stylesheet"
        type="text/css"
        href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/regular/style.css" />
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    @livewireStyles
</head>

<body>

    @yield('content')

    @livewireScripts

</body>

</html>

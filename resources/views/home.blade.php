{{-- resources/view/home.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#E7FE03">
    <title>{{ config('app.name', 'Aidias Factory') }}</title>
    <meta property="og:type" content="website">
    <meta name="title" property="og:title" content="Fresh Group | Where Amazing Things Happen">
    <meta name="description" property="og:description" content="A global brand experience agency fusing intelligent creativity, joined-up thinking and compelling storytelling to create immersive experiences through brand activations, events and creative communication for organisations around the world to own.">
    <meta name="image" property="og:image" content="{{ asset('img/social-logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon.svg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon.svg') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.svg') }}">
    <link rel="manifest" href="{{ asset('img/site.webmanifest') }}">
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div id="app"></div>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</body>
<div id="app"></div>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#E7FE03">
    <title>{{ config('app.name', 'Ideas Factory') }}</title>
    <meta property="og:type" content="website">
    <meta name="title" property="og:title" content="Fresh Group | Where Amazing Things Happen">
    <meta name="description" property="og:description" content="A global brand experience agency fusing intelligent creativity, joined-up thinking and compelling storytelling to create immersive experiences through brand activations, events and creative communication for organisations around the world to own.">
    <meta name="image" property="og:image" content="https://freshwebsite.co.uk/img/social-logo.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
<div id="app" v-cloak></div>
 @include('partials.header')
 {{ $slot }}
@include('partials.footer')
@stack('scripts')
</body>
</html>

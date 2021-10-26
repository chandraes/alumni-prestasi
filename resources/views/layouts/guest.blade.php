<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <livewire:styles />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script defer src="{{ asset('vendor/alpine.js') }}"></script>
</head>

<body style="
        background-color: #DFDBE5;
        background-image: url(images/floating-cogs.svg);">
    <div class="font-sans text-gray-900 antialiased bg-purple-200" style="
        background-color: #DFDBE5;
        background-image: url(images/floating-cogs.svg);" id="section-body">
        {{ $slot }}
    </div>
    <livewire:scripts />
    <script src="{{ asset('stisla/js/stisla.js') }}"></script>
    <script src="{{ asset('stisla/js/scripts.js') }}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://www.google.com/recaptcha/api.js?render={{env('CAPTCHA_SITE_KEY')}}"></script>

</body>

</html>
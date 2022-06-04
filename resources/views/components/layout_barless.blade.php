<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-headlinks/>
        <title>fizmati.lv - {{ $title ?? 'Jaunākais par fizmatisko' }}</title>
    </head>
    <body class="min-h-screen flex flex-col bg-repeat" style="background-image: url({{url('/')}}/img/background_light.webp)">
        <x-navbar/>
        <div class="w-full md:w-2/3 m-auto">
            {{ $slot }}
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-headlinks/>
        <title>fizmati.lv - {{ $title ?? 'Jaunākais par fizmatisko' }}</title>
    </head>
    <body class="bg-gray-100">
        <x-navbar/>
        <div class="flex flex-row justify-around">
            <div>left bar</div>
            <div>
                {{ $slot }}
            </div>
            <div>right bar</div>
        </div>
    </body>
</html>

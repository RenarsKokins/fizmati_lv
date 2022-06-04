<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-headlinks/>
        <title>fizmati.lv - {{ $title ?? 'Jaunākais par fizmatisko' }}</title>
    </head>
    <body class="text-white min-h-screen flex flex-col">
        <x-navbar/>
        <div class="flex flex-row justify-around pt-8">
            <div class="px-8 hidden sm:block">
                <x-left_bar/>
            </div>
            <div class="flex-1 w-2/3 px-8">
                {{ $slot }}
            </div>
            <div class="px-8 hidden sm:block">
                <x-right_bar/>
            </div>
        </div>
    </body>
</html>

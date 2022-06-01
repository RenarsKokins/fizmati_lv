<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-headlinks/>
        <title>fizmati.lv - {{ $title ?? 'Jaunākais par fizmatisko' }}</title>
    </head>
    <body class=" text-white">
        <x-navbar/>
        <div class="flex flex-row justify-around pt-8">
            <div class="px-8">
                <x-left_bar/>
            </div>
            <div class="flex-1 w-2/3 px-8">
                {{ $slot }}
            </div>
            <div class="px-8">
                <x-right_bar/>
            </div>
        </div>
    </body>
</html>

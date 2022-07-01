<!-- Main HTML file is located at components/layout.blade.php -->
<x-layout>
    <x-slot name="title">
        Jaunākais par fizmatisko
    </x-slot>

    <!-- Main content -->
    <div class="mx-auto bg-white text-black rounded-xl overflow-hidden flex flex-col justify-center shadow-lg lg:max-w-4xl min-h-96 p-4">
        <div class="text-2xl font-bold pb-4">
            {!! $post->title !!}
        </div>
        <div>
            {!! $post->body !!}
        </div>
    </div>
</x-layout>

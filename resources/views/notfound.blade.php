<!-- Main HTML file is located at components/layout.blade.php -->
<x-layout>
    <x-slot name="title">
        Nav atrasts
    </x-slot>

    <!-- Main content -->
    <div class="pb-8">
        <div class="mx-auto bg-white text-black rounded-xl overflow-hidden flex flex-col justify-center shadow-lg lg:max-w-4xl min-h-96">
            <div class="flex flex-row justify-center text-8xl pt-8 pb-16">
                <p class="font-lcd text-center">404 % 0 = ERROR</p>
                <span class="blink">.</span>
            </div>    
            <p class="text-center pb-4 font-bold text-xl">Diemžēl kāds centās izdalīt skaitli ar 0 uz kalkulatora.</p>
            <p class="text-center pb-4">Pagaidām šī lapa nav pieejama, bet ir pietiekami daudz citu rakstu, kurus palasīt!</p>
            <a class="text-orange-500  mx-auto decoration-orange-500 underline pb-8" href="{{url('/')}}">Uz sākumlapu</a>
        </div>
    </div>
</x-layout>

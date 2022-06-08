<x-layout_barless>
    <x-slot name="title">
        Pieslēgties
    </x-slot>

    <!-- Main content -->
    <div class="flex rounded-xl text-gray-800 flex-col md:flex-row mx-8 md:mx-0 justify-between shadow-2xl">
        <div class="md:rounded-l-xl md:rounded-r-none rounded-t-xl basis-1/2 p-16 md:p-0 flex bg-gradient-to-tr from-gradient-orange_1 to-gradient-orange_2">
            <img class="w-full md:w-2/3 m-auto" src="{{url('/')}}/img/logo.svg" alt="fizmati logo"/>
        </div>
        <div class="bg-white md:rounded-r-xl md:rounded-l-none rounded-t-xl basis-1/2 flex flex-col p-4 lg:p-16">
            <div class="pb-12 text-center">
                <h1 class="text-2xl font-bold pb-2">Pieslēgties savam kontam</h1>
                <p class="text-gray-500 text-sm">Ja vēl neesi izveidojis kontu, spied <a class="text-orange-500" href="{{route('register')}}">šeit!</a></p>
            </div>
            @if (\Session::has('register_success'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                    {{ \Session::get('register_success') }}
                </div>
            @endif
            <form action="{{route('login.send')}}" method="post">
                @csrf
                <div class="relative pb-4">
                    <input required type="email" id="email" name="email" class="block rounded-t-xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary-500 peer" placeholder=" "/>
                    <label for="email" class="after:content-['*'] after:text-red-500 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">E-pasts</label>
                </div>
                <div class="relative pb-4">
                    <input required type="password" id="password" name="password" class="block rounded-t-xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary-500 peer" placeholder=" "/>
                    <label for="password" class="after:content-['*'] after:text-red-500 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Parole (vismaz 6 simboli)</label>
                </div>
                @if (\Session::has('error'))
                    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                        {{ \Session::get('error') }}
                    </div>
                @endif
                <div class="flex flex-row justify-between">
                    <div class="flex flex-col justify-center">
                        <a class="text-orange-500 text-sm" href="{{route('forgot')}}">Aizmirsi paroli?</a>
                    </div>
                    <button type="submit" class="text-sm bg-primary-500 hover:bg-primary-600 text-white rounded-xl p-2">Pieslēgties</button>
                </div>
            </form>
        </div>
    </div>
</x-layout_barless>

<x-layout_barless>
    <x-slot name="title">
        Reģistrēties
    </x-slot>

    <!-- Main content -->
    <div class="flex rounded-xl text-gray-800 flex-col md:flex-row mx-8 md:mx-0 justify-between shadow-2xl">
        <div class="md:rounded-l-xl md:rounded-r-none rounded-t-xl basis-1/2 p-16 md:p-0 flex bg-gradient-to-tr from-gradient-orange_1 to-gradient-orange_2">
            <img class="w-full md:w-2/3 m-auto" src="{{url('/')}}/img/logo.svg" alt="fizmati logo"/>
        </div>
        <div class="bg-white md:rounded-r-xl md:rounded-l-none rounded-t-xl basis-1/2 flex flex-col p-4 lg:p-16">
            <div class="pb-12 text-center">
                <h1 class="text-2xl font-bold pb-2">Izveidot jaunu kontu</h1>
                <p class="text-gray-500 text-sm">Izveido kontu fizmatu mājaslapā un raksti komentārus vai arī veido savus rakstus!</p>
            </div>
            <form action="" method="post">
                @csrf
                <div class="relative pb-4">
                    <input type="email" id="email" class="block rounded-t-xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary-500 peer" placeholder=" "/>
                    <label for="email" class="after:content-['*'] after:text-red-500 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">E-pasts</label>
                </div>
                <div class="relative pb-4">
                    <input type="username" id="username" class="block rounded-t-xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary-500 peer" placeholder=" "/>
                    <label for="username" class="after:content-['*'] after:text-red-500 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Lietotājvārds</label>
                </div>
                <div class="relative pb-4">
                    <input type="password" id="password" class="block rounded-t-xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary-500 peer" placeholder=" "/>
                    <label for="password" class="after:content-['*'] after:text-red-500 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Parole</label>
                </div>
                <div class="relative pb-4">
                    <input type="password_compare" id="password_compare" class="block rounded-t-xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-primary-500 peer" placeholder=" "/>
                    <label for="password_compare" class="after:content-['*'] after:text-red-500 absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-primary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Parole atkārtoti</label>
                </div>
                <div class="flex flex-row justify-between">
                    <div class="flex flex-col justify-center">
                        <a class="text-orange-500 text-sm" href="{{route('login')}}">Ja vēlaties pieslēgties...</a>
                    </div>
                    <button type="submit" class="text-sm bg-primary-500 hover:bg-primary-600 text-white rounded-xl p-2">Reģistrēties</button>
                </div>
            </form>
        </div>
    </div>
</x-layout_barless>

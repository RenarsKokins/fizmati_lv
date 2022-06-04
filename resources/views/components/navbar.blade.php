<nav class="bg-gradient-to-r from-gradient-orange_1 to-gradient-orange_2 flex flex-row justify-between p-4 shadow-xl">
    <div class="w-40 flex flex-col justify-center cursor-pointer">
        <a href="{{url('/')}}">
            <img class="fill-white" src="{{url('/')}}/img/logo.svg" alt="logo">
        </a>
    </div>
    <div class="flex flex-row px-4 divide-x divide-white/20">
        <div class="px-2 h-8 flex flex-row items-center justify-center text-white/75 hover:text-white/100 ">
            <i class="fa-solid fa-house pr-2"></i>
            <a href="#">Sākums</a>
        </div>
        <div class="px-2 h-8 flex flex-row items-center justify-center text-white/75 hover:text-white/100 ">
            <i class="fa-solid fa-newspaper pr-2"></i>
            <a href="#">Ziņas</a>
        </div>
        <div class="px-2 h-8 flex flex-row items-center justify-center text-white/75 hover:text-white/100 ">
            <i class="fa-solid fa-graduation-cap pr-2"></i>
            <a href="#">Studentiem</a>
        </div>
        <div class="px-2 h-8 flex flex-row items-center justify-center text-white/75 hover:text-white/100 ">
            <i class="fa-solid fa-building-columns pr-2"></i>
            <a href="#">Padome</a>
        </div>
        <div class="px-2 h-8 flex flex-row items-center justify-center text-white/75 hover:text-white/100 ">
            <i class="fa-solid fa-images pr-2"></i>
            <a href="#">Galerija</a>
        </div>
    </div>

    <div class="flex flex-row">
        <div class="px-4 flex flex-col justify-center text-white/75 hover:text-white/100 cursor-pointer">
            <i class="fa-solid fa-magnifying-glass text-2xl"></i>
        </div>
        <div class="px-4 flex flex-col justify-center text-white/75 hover:text-white/100 cursor-pointer">
            <i class="fa-solid fa-bell text-2xl"></i>
        </div>
        <div class="px-4 flex flex-col justify-center text-white/75 hover:text-white/100 cursor-pointer">
            <i class="fa-solid fa-circle-user text-2xl"></i>
        </div>
    </div>
</nav>
<nav class="bg-gradient-to-r from-gradient-orange_1 to-gradient-orange_2 flex flex-row justify-between p-4 shadow-xl">
    <!-- Sidebar toggle button -->
    <button onclick="openNav()" class="lg:hidden bg-primary-500 active:bg-primary-600 hover:bg-primary-400 text-white rounded-xl w-12">
        <i class="fa-solid fa-bars"></i>
    </button>
    <!-- Sidebar -->
    <div id="sidebar" class="z-20 fixed lg:hidden flex flex-col top-0 -left-48 h-screen w-48 bg-gradient-to-r from-gradient-orange_1 to-gradient-orange_2 text-white transition-all ease-out duration-200">
        <div class="flex justify-center items-center cursor-pointer p-4 pb-6">
            <a href="{{url('/')}}">
                <img src="{{url('/')}}/img/logo.svg" alt="logo">
            </a>
        </div>
        <div class="flex flex-col divide-y divide-white/20">
            <div class="py-2 flex flex-row">
                <i class="fa-solid fa-house mx-2 my-auto"></i>
                <a href="#">Sākums</a>
            </div>
            <div class="py-2 flex flex-row">
                <i class="fa-solid fa-newspaper mx-2 my-auto"></i>
                <a href="#">Ziņas</a>
            </div>
            <div class="py-2 flex flex-row">
                <i class="fa-solid fa-graduation-cap mx-2 my-auto"></i>
                <a href="#">Studentiem</a>
            </div>
            <div class="py-2 flex flex-row">
                <i class="fa-solid fa-building-columns mx-2 my-auto"></i>
                <a href="#">Padome</a>
            </div>
            <div class="py-2 flex flex-row">
                <i class="fa-solid fa-images mx-2 my-auto"></i>
                <a href="#">Galerija</a>
            </div>
        </div>
        <div class="z-19 fixed top-5 left-52">
            <button onclick="closeNav()" id="close-button" class="hidden">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </div>
    <!-- Overlay when sidebar is open -->
    <div id="overlay" onclick="closeNav()" class="fixed bg-black/75 w-100 lg:hidden h-100 top-0 left-0 bottom-0 right-full z-18"></div>
    <!-- Regular navbar -->
    <div class="w-40 flex flex-col justify-center cursor-pointer">
        <a href="{{url('/')}}">
            <img src="{{url('/')}}/img/logo.svg" alt="logo">
        </a>
    </div>
    <div class="lg:flex hidden flex-row px-4 divide-x divide-white/20">
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
        <div class="px-4 lg:flex hidden flex-col justify-center text-white/75 hover:text-white/100 cursor-pointer">
            <i class="fa-solid fa-bell text-2xl"></i>
        </div>
        <div class="px-4 lg:flex hidden flex-col justify-center text-white/75 hover:text-white/100 cursor-pointer">
            <i class="fa-solid fa-circle-user text-2xl"></i>
        </div>
    </div>
    <script>
        function openNav() {
            $("#sidebar").addClass("left-0");
            $("#sidebar").removeClass("-left-48");
            $("#overlay").addClass("right-0");
            $("#overlay").removeClass("right-full");
            $("#close-button").removeClass("hidden");
            $("#close-button").addClass("inline-block");
        }
        function closeNav() {
            $("#sidebar").removeClass("left-0");
            $("#sidebar").addClass("-left-48");
            $("#overlay").removeClass("right-0");
            $("#overlay").addClass("right-full");
            $("#close-button").removeClass("inline-block");
            $("#close-button").addClass("hidden");
        } 
    </script>
</nav>
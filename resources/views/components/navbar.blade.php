<nav class="bg-gradient-to-r from-gradient-orange_1 to-gradient-orange_2 flex flex-row justify-between p-4 shadow-xl">
    <!-- Sidebar toggle button -->
    <div class="flex">
        <button onclick="openNav()" class="lg:hidden bg-primary-500 active:bg-primary-600 hover:bg-primary-400 text-white rounded-xl w-12 transition ease-in-out">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="w-32 sm:w-40 lg:mx-0 mx-2 flex flex-col justify-center cursor-pointer">
            <a href="{{route('home')}}">
                <img src="{{route('home')}}/img/logo.svg" alt="logo">
            </a>
        </div>
    </div>
    <!-- Sidebar -->
    <div id="sidebar" class="z-20 divide-y divide-white/20 fixed lg:hidden flex flex-col top-0 -left-48 h-screen w-48 bg-gradient-to-r from-gradient-orange_1 to-gradient-orange_2 text-white transition-all ease-out duration-200">
        <div class="flex justify-center items-center cursor-pointer p-4 pb-6">
            <a href="{{route('home')}}">
                <img src="{{route('home')}}/img/logo.svg" alt="logo">
            </a>
        </div>
        <div class="flex flex-col">
            <a href="{{route('home')}}">
                <div class="py-2 flex flex-row hover:bg-white/25 transition-all ease-out duration-200">
                    <i class="fa-solid fa-house mx-2 my-auto"></i>
                    Sākums
                </div>
            </a>
<!--             <div class="py-2 flex flex-row hover:bg-white/25 transition-all ease-out duration-200">
                <i class="fa-solid fa-newspaper mx-2 my-auto"></i>
                <a href="#">Ziņas</a>
            </div>
            <div class="py-2 flex flex-row hover:bg-white/25 transition-all ease-out duration-200">
                <i class="fa-solid fa-graduation-cap mx-2 my-auto"></i>
                <a href="#">Studentiem</a>
            </div>
            <div class="py-2 flex flex-row hover:bg-white/25 transition-all ease-out duration-200">
                <i class="fa-solid fa-building-columns mx-2 my-auto"></i>
                <a href="#">Padome</a>
            </div>
            <div class="py-2 flex flex-row hover:bg-white/25 transition-all ease-out duration-200">
                <i class="fa-solid fa-images mx-2 my-auto"></i>
                <a href="#">Galerija</a>
            </div> -->
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
    <div class="lg:flex hidden flex-row px-4 divide-x divide-white/20">
        <a href="{{route('home')}}">            
            <div class="px-2 h-8 flex flex-row items-center justify-center text-white/75 hover:text-white/100 transition ease-in-out">
                <i class="fa-solid fa-house pr-2"></i>
                Sākums
            </div>
        </a>
        <!-- <div class="px-2 h-8 flex flex-row items-center justify-center text-white/75 hover:text-white/100 transition ease-in-out">
            <i class="fa-solid fa-newspaper pr-2"></i>
            <a href="#">Ziņas</a>
        </div>
        <div class="px-2 h-8 flex flex-row items-center justify-center text-white/75 hover:text-white/100 transition ease-in-out">
            <i class="fa-solid fa-graduation-cap pr-2"></i>
            <a href="#">Studentiem</a>
        </div>
        <div class="px-2 h-8 flex flex-row items-center justify-center text-white/75 hover:text-white/100 transition ease-in-out">
            <i class="fa-solid fa-building-columns pr-2"></i>
            <a href="#">Padome</a>
        </div>
        <div class="px-2 h-8 flex flex-row items-center justify-center text-white/75 hover:text-white/100 transition ease-in-out">
            <i class="fa-solid fa-images pr-2"></i>
            <a href="#">Galerija</a>
        </div> -->
    </div>
    <div class="flex flex-row">
        <!-- Search bar button -->
        <div class="sm:px-4 px-2 flex flex-col justify-center text-white/75 hover:text-white/100 cursor-pointer transition ease-in-out">
            <i class="fa-solid fa-magnifying-glass text-2xl"></i>
        </div>
        <!-- Create button -->
        <button id="createDropdownButton" data-dropdown-toggle="createDropdown">
            <div class="sm:px-4 px-2 flex flex-col justify-center text-white/75 hover:text-white/100 cursor-pointer transition ease-in-out">
            <i class="fa-solid fa-plus text-2xl"></i>
            </div>
        </button>
        <!-- Create button dropdown -->
        <div id="createDropdown" class="z-10 hidden bg-white rounded shadow-xl w-44 text-gray-700 divide-y divide-gray-100">
            <ul class="py-1 text-gray-700" aria-labelledby="dropdownDefault">
                <li>
                    <div class="px-2 h-8 flex flex-row items-center justify-center hover:bg-gray-200">
                        <a href="{{route('logout')}}"><i class="fa-solid fa-pen-to-square pr-2"></i>Atslēgties</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- User button -->
        <button id="userDropdownButton" data-dropdown-toggle="userDropdown">
            <div class="sm:px-4 px-2 flex flex-col justify-center text-white/75 hover:text-white/100 cursor-pointer transition ease-in-out">
                <i class="fa-solid fa-circle-user text-2xl"></i>
            </div>
        </button>
        <!-- User button dropdown -->
        <div id="userDropdown" class="z-10 hidden bg-white rounded shadow-xl w-44 text-gray-700 divide-y divide-gray-100">
            @if (Auth::check())
            <!-- Authenticated dropdown -->
            <div class="py-1 px-2 h-12 flex flex-row items-center justify-center">
                <p>Labdien, {{Auth::user()->username}}!</p>
            </div>
            <ul class="py-1 text-gray-700" aria-labelledby="dropdownDefault">
                <li>
                    <div class="px-2 h-8 flex flex-row items-center justify-center hover:bg-gray-200">
                        <a href="{{route('logout')}}"><i class="fa-solid fa-right-from-bracket pr-2"></i>Atslēgties</a>
                    </div>
                </li>
            </ul>
            @else
            <!-- Guest dropdown -->
            <ul class="py-1" aria-labelledby="dropdownDefault">
                <li>
                    <div class="px-2 h-8 flex flex-row items-center justify-center hover:bg-gray-200">
                        <a href="{{route('login')}}"><i class="fa-solid fa-right-to-bracket pr-2"></i>Pieslēgties</a>
                    </div>
                </li>
                <li>
                    <div class="px-2 h-8 flex flex-row items-center justify-center hover:bg-gray-200">
                        <a href="{{route('register')}}"><i class="fa-solid fa-pen-to-square pr-2"></i>Reģistrēties</a>
                    </div>
                </li>
            </ul>
            @endif
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
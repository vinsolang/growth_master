<nav id="navbar" class="py-4 px-6 shadow-lg bg-black/40 fixed top-0 right-0 left-0 z-50 transition-all duration-300">
    <div class="flex justify-between items-center">

        <!-- Left Section -->
        <div class="flex items-center gap-3">
            <!-- Mobile Menu Button -->
            {{-- <button id="menuBtn" class="xl:hidden text-3xl text-white">
                <i class="fa-solid fa-bars"></i>
            </button> --}}

            <!-- Logo -->
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/icon/CAC-02.jpg') }}" alt="logo" class="w-[85px] h-[85px] object-contain">
            </a>

            <!-- Desktop Menu -->
            <ul class="hidden xl:flex gap-10 text-white font-semibold text-[17px] md:px-12" id="navLinks">
                <li class="group relative hover:text-[#D82129] cursor-pointer">
                    <a href="{{URL('/membership')}}" class="flex items-center">
                        {{ $getMenu[0]->menu_1 }}
                        <i
                            class="fas fa-caret-down ml-1 text-xs inline-block transform transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                    <div class="absolute left-0 mt-0 w-52 hidden group-hover:block z-10">
                        <div class="bg-[#D82129] text-white mt-10 text-[14px]">
                            <a href="{{URL('/membership')}}"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">{{ $getMenu[0]->menu_2 }}</a>
                            <a href="{{ route('approach') }}"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">{{ $getMenu[0]->menu_3 }}</a>
                            <a href="{{ route('review') }}"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">{{ $getMenu[0]->menu_4 }}</a>
                            <a href="{{ route('exclusive.peer.groups') }}" class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">{{ $getMenu[0]->menu_5 }}</a>
                            <a href="{{ route('form.input') }}"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">{{ $getMenu[0]->menu_6 }}</a>
                        </div>
                    </div>
                </li>
                
                <li class="group relative hover:text-[#D82129] cursor-pointer">
                    <a href="{{ route('program') }}" class="flex items-center">
                       {{ $getMenu[0]->menu_7 }}
                        <i
                            class="fas fa-caret-down ml-1 text-xs inline-block transform transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                    <div class="absolute left-0 mt-0 w-52 hidden group-hover:block z-10">
                        <div class="bg-[#D82129] text-white mt-10 text-[14px]">
                            <a href="{{ route('program') }}"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">
                                {{ $getMenu[0]->menu_8 }}
                            </a>
                            <a href="https://www.kicpaa.org/en/atq-program/" target="_blank"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">
                                {{ $getMenu[0]->menu_9 }}
                            </a>
                            <a href="{{ route('program.job') }}"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">
                                {{ $getMenu[0]->menu_10 }}
                            </a>
                        </div>
                    </div>
                </li>

                <li class="group relative hover:text-[#D82129] cursor-pointer">
                    <a href="{{ route('events') }}" class="flex items-center">
                        {{ $getMenu[0]->menu_11 }}
                    </a>
                </li>
                <li class="group relative hover:text-[#D82129] cursor-pointer">
                    <a href="{{ route('about') }}" class="flex items-center">
                        {{ $getMenu[0]->menu_12 }}
                        <i
                            class="fas fa-caret-down ml-1 text-xs inline-block transform transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                    <div class="absolute left-0 mt-0 w-52 hidden group-hover:block z-10">
                        <div class="bg-[#D82129] text-white mt-10 text-[14px]">
                            <a href="{{ route('about') }}"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">{{ $getMenu[0]->menu_13 }}</a>
                            <a href="{{ route('Laws.of.eadership') }}"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">{{ $getMenu[0]->menu_14 }}</a>
                            <a href="{{ route('ceo.climp') }}"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">{{ $getMenu[0]->menu_15 }}</a>
                        </div>
                    </div>
                </li>

                <li class="group relative hover:text-[#D82129] cursor-pointer">
                    <a href="{{ route('chair.growth') }}" class="flex items-center">
                        {{ $getMenu[0]->menu_16 }}
                        <i
                            class="fas fa-caret-down ml-1 text-xs inline-block transform transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                    <div class="absolute left-0 mt-0 w-52 hidden group-hover:block z-10">
                        <div class="bg-[#D82129] text-white mt-10 text-[14px]">
                            <a href="{{ route('chair.growth') }}"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">{{ $getMenu[0]->menu_17 }}</a>
                            <a href="{{ route('ceo.coa.qual') }}"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">{{ $getMenu[0]->menu_18 }}</a>
                            <a href="{{ route('chair.application') }}"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">{{ $getMenu[0]->menu_19 }}</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Right Section -->
        <div class="flex items-center gap-5">
           @if (Request::routeIs('chair.*','ceo.coa.qual'))
                {{-- When user is on chair pages --}}
                <a href="#chair-form">
                    <button
                        class="py-4 px-6 bg-red-600 text-white hover:bg-blue-900 hidden md:inline-block rounded-lg font-medium transition-colors duration-300">
                        Become a Chair
                    </button>
                </a>
            @else
                {{-- Default (member) --}}
                <a href="{{ route('home') }}#member-form">
                    <button
                        class="py-4 px-6 bg-red-600 text-white hover:bg-blue-900 hidden md:inline-block rounded-lg font-medium transition-colors duration-300">
                        Become a Member
                    </button>
                </a>
            @endif
            <div class="hidden flex items-center gap-2 cursor-pointer">
                <i id="searchIcon" class="fa-solid fa-magnifying-glass text-xl text-white"></i>
                <span id="searchText" class="hidden md:block text-white">Search</span>
            </div>

            <div class="flex items-center gap-2 cursor-pointer">
               <button id="menuBtn" class="xl:hidden text-3xl text-white">
                <i class="fa-solid fa-bars"></i>
            </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <ul id="mobileMenu"
        class="xl:hidden hidden flex-col mt-6 text-[17px] text-black rounded-lg p-4 space-y-8">

        <!-- Membership -->
        <li>
            <button onclick="toggleMobileDropdown('mobileMembership')"
                class="flex justify-between items-center w-full font-semibold">
                {{ $getMenu[0]->menu_1 }}
                <i class="fas fa-chevron-down transition-transform duration-300"></i>
            </button>

            <ul id="mobileMembership" class="hidden mt-3 ml-4 space-y-6 text-[15px] font-semibold">
                <li><a href="{{URL('/membership')}}" class="block hover:text-[#EDC11C]">{{ $getMenu[0]->menu_2 }}</a></li>
                <li><a href="{{ route('approach') }}" class="block hover:text-[#EDC11C]">{{ $getMenu[0]->menu_3 }}</a></li>
                {{-- <li><a href="{{ route('program') }}" class="block hover:text-[#EDC11C]">Our Programs</a></li> --}}
                <li><a href="{{ route('review') }}" class="block hover:text-[#EDC11C]">{{ $getMenu[0]->menu_4 }}</a></li>
                <li><a href="{{ route('exclusive.peer.groups') }}" class="block hover:text-[#EDC11C]">{{ $getMenu[0]->menu_5 }}</a></li>
                <li><a href="{{ route('home')}}#member-form" class="block hover:text-[#EDC11C]">{{ $getMenu[0]->menu_6 }}</a></li>
            </ul>
        </li>

        <!-- Our Programs  -->

        <li>
            <button onclick="toggleMobileDropdown('mobileProgram')"
                class="flex justify-between items-center w-full font-semibold">
                {{ $getMenu[0]->menu_7 }}
                <i class="fas fa-chevron-down transition-transform duration-300"></i>
            </button>

            <ul id="mobileProgram" class="hidden mt-3 ml-4 space-y-6 text-[15px] font-semibold">
                <li><a href="{{ route('program') }}" class="block hover:text-[#EDC11C]">{{ $getMenu[0]->menu_8 }}</a></li>
                <li><a href="https://www.kicpaa.org/en/atq-program/" target="_blank" class="block hover:text-[#EDC11C]">{{ $getMenu[0]->menu_9 }}</a></li>
                <li><a href="#" class="block hover:text-[#EDC11C]">{{ $getMenu[0]->menu_10 }}</a></li>
            </ul>
        </li>

        <!-- Events -->
        <li>
            <a href="{{ route('events') }}"
                class="flex justify-between items-center w-full font-semibold">
                {{ $getMenu[0]->menu_11 }}
                
            </a>

            {{-- <ul id="mobileEvents" class="hidden mt-3 ml-4 space-y-6 text-[15px] font-semibold">
                <li><a  class="block hover:text-[#EDC11C]">GrowthMaster Event</a></li>
                <li><a href="{{ route('ceo.climb.events') }}" class="block hover:text-[#EDC11C]">CEO Climb Event</a>
                </li>
                <li><a href="{{ route('research.center.webinar') }}" class="block hover:text-[#EDC11C]">Webinars</a>
                </li>
            </ul> --}}
        </li>

        <!-- Normal Links -->
        {{-- <li><a href="#" class="block font-semibold hover:text-[#EDC11C]">Resources</a></li> --}}
        <li>
            <button onclick="toggleMobileDropdown('mobileAbout')"
                class="flex justify-between items-center w-full font-semibold">
                {{ $getMenu[0]->menu_12 }}
                <i class="fas fa-chevron-down transition-transform duration-300"></i>
            </button>

            <ul id="mobileAbout" class="hidden mt-3 ml-4 space-y-6 text-[15px] font-semibold">
                <li><a href="{{ route('about') }}" class="block hover:text-[#EDC11C]">{{ $getMenu[0]->menu_13 }}</a></li>
                <li><a href="{{ route('Laws.of.eadership') }}" class="block hover:text-[#EDC11C]">{{ $getMenu[0]->menu_14 }}</a>
                </li>
                <li><a href="{{ route('ceo.climp') }}" class="block hover:text-[#EDC11C]">{{ $getMenu[0]->menu_15 }}</a>
                </li>
            </ul>
        </li>
        <li>
            <button onclick="toggleMobileDropdown('mobileChair')"
                class="flex justify-between items-center w-full font-semibold">
                {{ $getMenu[0]->menu_16 }}
                <i class="fas fa-chevron-down transition-transform duration-300"></i>
            </button>

            <ul id="mobileChair" class="hidden mt-3 ml-4 space-y-6 text-[15px] font-semibold">
                <li><a href="{{ route('chair.growth') }}" class="block hover:text-[#EDC11C]">{{ $getMenu[0]->menu_17 }}</a></li>
                <li><a href="{{ route('ceo.coa.qual') }}" class="block hover:text-[#EDC11C]">{{ $getMenu[0]->menu_18 }}</a></li>
                {{-- <li><a href="" class="block hover:text-[#EDC11C]">Meet Our Growth Master Chairs</a></li> --}}
                <li><a href="{{ route('chair.application') }}" class="block hover:text-[#EDC11C]">{{ $getMenu[0]->menu_19 }}</a></li>
            </ul>
        </li>
    </ul>

</nav>

<script>
    const btn = document.getElementById('menuBtn');
    const menu = document.getElementById('mobileMenu');

    btn?.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
    // Dropdown toggle
    function toggleMobileDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle('hidden');

        // Rotate arrow
        const icon = dropdown.previousElementSibling.querySelector('i');
        icon.classList.toggle('rotate-180');
    }

    const navbar = document.getElementById('navbar');
    const navLinks = document.getElementById('navLinks');
    const searchIcon = document.getElementById('searchIcon');
    const userIcon = document.getElementById('userIcon');
    const searchText = document.getElementById('searchText');
    const loginText = document.getElementById('loginText');

    function setWhiteNavbar() {
        navbar.classList.add("bg-white");
        navbar.classList.remove("bg-black/40");

        navLinks?.classList.add("text-black");
        navLinks?.classList.remove("text-white");

        searchIcon?.classList.add("text-black");
        searchIcon?.classList.remove("text-white");

        userIcon?.classList.add("text-black");
        userIcon?.classList.remove("text-white");

        searchText?.classList.add("text-black");
        searchText?.classList.remove("text-white");

        loginText?.classList.add("text-black");
        loginText?.classList.remove("text-white");

        btn?.classList.add("text-black");
        btn?.classList.remove("text-white");
    }

    function setTransparentNavbar() {
        navbar.classList.remove("bg-white", "shadow-lg");
        navbar.classList.add("bg-black/40");

        navLinks?.classList.add("text-white");
        navLinks?.classList.remove("text-black");

        searchIcon?.classList.add("text-white");
        searchIcon?.classList.remove("text-black");

        userIcon?.classList.add("text-white");
        userIcon?.classList.remove("text-black");

        searchText?.classList.add("text-white");
        searchText?.classList.remove("text-black");

        loginText?.classList.add("text-white");
        loginText?.classList.remove("text-black");

        btn?.classList.add("text-white");
        btn?.classList.remove("text-black");
    }

    function handleNavbar() {
        const isEventPage = document.getElementById('eventPage');

        // ========== EVENT PAGE LOGIC ==========
        if (isEventPage) {
            setWhiteNavbar();

            // Shadow ONLY when scrolling down
            if (window.scrollY > 10) navbar.classList.add("shadow-lg");
            else navbar.classList.remove("shadow-lg");

            return;
        }

        // ========== MOBILE LOGIC (<1280px) ==========
        if (window.innerWidth < 1280) {
            setWhiteNavbar();
            navbar.classList.add("shadow-lg");
            return;
        }

        // ========== DESKTOP LOGIC (OTHER PAGES) ==========
        if (window.scrollY > 10) {
            setWhiteNavbar();
            navbar.classList.add("shadow-lg");
        } else {
            setTransparentNavbar(); // TOP of page
        }
    }

    window.addEventListener("scroll", handleNavbar);
    window.addEventListener("resize", handleNavbar);
    window.addEventListener("load", handleNavbar);
</script>


{{--
<script>
    const btn = document.getElementById('menuBtn');
    const menu = document.getElementById('mobileMenu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    const navbar = document.getElementById('navbar');
    const navLinks = document.getElementById('navLinks');
    const searchIcon = document.getElementById('searchIcon');
    const userIcon = document.getElementById('userIcon');
    const searchText = document.getElementById('searchText');
    const loginText = document.getElementById('loginText');

    function forceWhiteNavbar() {
        navbar.classList.add("bg-white", "shadow-lg");
        navbar.classList.remove("bg-black/40");

        navLinks?.classList.add("text-black");
        navLinks?.classList.remove("text-white");

        searchIcon?.classList.add("text-black");
        searchIcon?.classList.remove("text-white");

        userIcon?.classList.add("text-black");
        userIcon?.classList.remove("text-white");

        searchText?.classList.add("text-black");
        searchText?.classList.remove("text-white");

        loginText?.classList.add("text-black");
        loginText?.classList.remove("text-white");

        btn?.classList.add("text-black");
        btn?.classList.remove("text-white");
    }

    function applyDesktopScrollEffect() {
        if (window.scrollY > 10) {
            forceWhiteNavbar();
        } else {
            navbar.classList.remove("bg-white", "shadow-lg");
            navbar.classList.add("bg-black/40");

            navLinks?.classList.add("text-white");
            navLinks?.classList.remove("text-black");

            searchIcon?.classList.add("text-white");
            searchIcon?.classList.remove("text-black");

            userIcon?.classList.add("text-white");
            userIcon?.classList.remove("text-black");

            searchText?.classList.add("text-white");
            searchText?.classList.remove("text-black");

            loginText?.classList.add("text-white");
            loginText?.classList.remove("text-black");

            btn?.classList.add("text-white");
            btn?.classList.remove("text-black");
        }
    }

    function handleNavbar() {

        //  If this is the EVENT PAGE → Always white
        if (document.getElementById('eventPage')) {
            forceWhiteNavbar();
            return; //  STOP all other behavior
        }

        //  Normal behavior for other pages
        if (window.innerWidth < 1280) {
            forceWhiteNavbar();
        } else {
            applyDesktopScrollEffect();
        }
    }
    window.addEventListener("scroll", () => {
        const navbar = document.getElementById("navbar");

        if (!navbar) return;

        if (window.scrollY > 10) {
            navbar.classList.add("shadow-lg");
        } else {
            navbar.classList.remove("shadow-lg");
        }
    });

    window.addEventListener("scroll", handleNavbar);
    window.addEventListener("resize", handleNavbar);
    window.addEventListener("load", handleNavbar);
</script> --}}
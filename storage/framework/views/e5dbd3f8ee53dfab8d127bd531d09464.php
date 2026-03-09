<nav id="navbar" class="py-4 px-6 shadow-lg bg-black/40 fixed top-0 right-0 left-0 z-50 transition-all duration-300">
    <div class="flex justify-between items-center">

        <!-- Left Section -->
        <div class="flex items-center gap-3">
            <!-- Mobile Menu Button -->
            

            <!-- Logo -->
            <a href="<?php echo e(route('home')); ?>">
                <img src="<?php echo e(asset('assets/icon/CAC-02.jpg')); ?>" alt="logo" class="h-[65px] w-[65px] md:w-[85px] md:h-[85px] object-contain">
            </a>

            <!-- Desktop Menu -->
            <ul class="hidden xl:flex gap-10 text-white font-semibold text-[17px] md:px-12" id="navLinks">
                <li class="group relative hover:text-[#D82129] cursor-pointer">
                    <a href="<?php echo e(route ('membership')); ?>" class="flex items-center">
                        <?php echo e($getMenu[0]->menu_1); ?>

                        <i
                            class="fas fa-caret-down ml-1 text-xs inline-block transform transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                    <div class="absolute left-0 mt-0 w-52 hidden group-hover:block z-10">
                        <div class="bg-[#D82129] text-white mt-10 text-[14px]">
                            <a href="<?php echo e(route('membership')); ?>"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]"><?php echo e($getMenu[0]->menu_2); ?></a>
                            
                            <a href="<?php echo e(route('review')); ?>"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]"><?php echo e($getMenu[0]->menu_4); ?></a>
                            <a href="<?php echo e(route('exclusive.peer.groups')); ?>" class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]"><?php echo e($getMenu[0]->menu_5); ?></a>
                            <a href="<?php echo e(route('form.input')); ?>"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]"><?php echo e($getMenu[0]->menu_6); ?></a>
                        </div>
                    </div>
                </li>
                
                <li class="group relative hover:text-[#D82129] cursor-pointer">
                    <a href="<?php echo e(route('program')); ?>" class="flex items-center">
                       <?php echo e($getMenu[0]->menu_7); ?>

                        <i
                            class="fas fa-caret-down ml-1 text-xs inline-block transform transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                    <div class="absolute left-0 mt-0 w-52 hidden group-hover:block z-10">
                        <div class="bg-[#D82129] text-white mt-10 text-[14px]">
                            <a href="<?php echo e(route('program')); ?>"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">
                                <?php echo e($getMenu[0]->menu_8); ?>

                            </a>
                            <a href="https://www.kicpaa.org/en/atq-program/" target="_blank"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">
                                <?php echo e($getMenu[0]->menu_9); ?>

                            </a>
                            <a href="<?php echo e(route('program.job')); ?>"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]">
                                <?php echo e($getMenu[0]->menu_10); ?>

                            </a>
                        </div>
                    </div>
                </li>

                <li class="group relative hover:text-[#D82129] cursor-pointer">
                    <a href="<?php echo e(route('events')); ?>" class="flex items-center">
                        <?php echo e($getMenu[0]->menu_11); ?>

                    </a>
                </li>
                <li class="group relative hover:text-[#D82129] cursor-pointer">
                    <a href="<?php echo e(route('about')); ?>" class="flex items-center">
                        <?php echo e($getMenu[0]->menu_12); ?>

                        <i
                            class="fas fa-caret-down ml-1 text-xs inline-block transform transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                    <div class="absolute left-0 mt-0 w-52 hidden group-hover:block z-10">
                        <div class="bg-[#D82129] text-white mt-10 text-[14px]">
                            <a href="<?php echo e(route('about')); ?>"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]"><?php echo e($getMenu[0]->menu_13); ?></a>
                            <a href="<?php echo e(route('approach')); ?>"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]"><?php echo e($getMenu[0]->menu_3); ?></a>
                            <a href="<?php echo e(route('Laws.of.eadership')); ?>"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]"><?php echo e($getMenu[0]->menu_14); ?></a>
                            <a href="<?php echo e(route('accounting')); ?>"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]"><?php echo e($getMenu[0]->menu_20); ?></a>
                            <a href="<?php echo e(route('ceo.climp')); ?>"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]"><?php echo e($getMenu[0]->menu_15); ?></a>
                        </div>
                    </div>
                </li>

                <li class="group relative hover:text-[#D82129] cursor-pointer">
                    <a href="<?php echo e(route('chair.growth')); ?>" class="flex items-center">
                        <?php echo e($getMenu[0]->menu_16); ?>

                        <i
                            class="fas fa-caret-down ml-1 text-xs inline-block transform transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                    <div class="absolute left-0 mt-0 w-52 hidden group-hover:block z-10">
                        <div class="bg-[#D82129] text-white mt-10 text-[14px]">
                            <a href="<?php echo e(route('chair.growth')); ?>"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]"><?php echo e($getMenu[0]->menu_17); ?></a>
                            <a href="<?php echo e(route('ceo.coa.qual')); ?>"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]"><?php echo e($getMenu[0]->menu_18); ?></a>
                            <a href="<?php echo e(route('chair.application')); ?>"
                                class="block px-4 py-2 hover:text-[#003F5F] hover:bg-[#c3d1d9]"><?php echo e($getMenu[0]->menu_19); ?></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Right Section -->
        <div class="flex items-center gap-5">
           <?php if(Request::routeIs('chair.*','ceo.coa.qual')): ?>
                
                <a href="#chair-form">
                    <button
                        class="py-4 px-6 bg-red-600 text-white hover:bg-blue-900 hidden md:inline-block rounded-lg font-medium transition-colors duration-300">
                        Become a Chair
                    </button>
                </a>
            <?php else: ?>
                
                <a href="<?php echo e(route('home')); ?>#member-form">
                    <button
                        class="py-4 px-6 bg-red-600 text-white hover:bg-blue-900 hidden md:inline-block rounded-lg font-medium transition-colors duration-300">
                        Become a Member
                    </button>
                </a>
            <?php endif; ?>
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
                <?php echo e($getMenu[0]->menu_1); ?>

                <i class="fas fa-chevron-down transition-transform duration-300"></i>
            </button>

            <ul id="mobileMembership" class="hidden mt-3 ml-4 space-y-6 text-[15px] font-semibold">
                <li><a href="<?php echo e(route('membership')); ?>" class="block hover:text-[#EDC11C]"><?php echo e($getMenu[0]->menu_2); ?></a></li>
                <li><a href="<?php echo e(route('approach')); ?>" class="block hover:text-[#EDC11C]"><?php echo e($getMenu[0]->menu_3); ?></a></li>
                
                <li><a href="<?php echo e(route('review')); ?>" class="block hover:text-[#EDC11C]"><?php echo e($getMenu[0]->menu_4); ?></a></li>
                <li><a href="<?php echo e(route('exclusive.peer.groups')); ?>" class="block hover:text-[#EDC11C]"><?php echo e($getMenu[0]->menu_5); ?></a></li>
                <li><a href="<?php echo e(route('home')); ?>#member-form" class="block hover:text-[#EDC11C]"><?php echo e($getMenu[0]->menu_6); ?></a></li>
            </ul>
        </li>

        <!-- Our Programs  -->

        <li>
            <button onclick="toggleMobileDropdown('mobileProgram')"
                class="flex justify-between items-center w-full font-semibold">
                <?php echo e($getMenu[0]->menu_7); ?>

                <i class="fas fa-chevron-down transition-transform duration-300"></i>
            </button>

            <ul id="mobileProgram" class="hidden mt-3 ml-4 space-y-6 text-[15px] font-semibold">
                <li><a href="<?php echo e(route('program')); ?>" class="block hover:text-[#EDC11C]"><?php echo e($getMenu[0]->menu_8); ?></a></li>
                <li><a href="https://www.kicpaa.org/en/atq-program/" target="_blank" class="block hover:text-[#EDC11C]"><?php echo e($getMenu[0]->menu_9); ?></a></li>
                <li><a href="<?php echo e(route('program.job')); ?>" class="block hover:text-[#EDC11C]"><?php echo e($getMenu[0]->menu_10); ?></a></li>
            </ul>
        </li>

        <!-- Events -->
        <li>
            <a href="<?php echo e(route('events')); ?>"
                class="flex justify-between items-center w-full font-semibold">
                <?php echo e($getMenu[0]->menu_11); ?>

                
            </a>

            
        </li>

        <!-- Normal Links -->
        
        <li>
            <button onclick="toggleMobileDropdown('mobileAbout')"
                class="flex justify-between items-center w-full font-semibold">
                <?php echo e($getMenu[0]->menu_12); ?>

                <i class="fas fa-chevron-down transition-transform duration-300"></i>
            </button>

            <ul id="mobileAbout" class="hidden mt-3 ml-4 space-y-6 text-[15px] font-semibold">
                <li><a href="<?php echo e(route('about')); ?>" class="block hover:text-[#EDC11C]"><?php echo e($getMenu[0]->menu_13); ?></a></li>
                <li><a href="<?php echo e(route('Laws.of.eadership')); ?>" class="block hover:text-[#EDC11C]"><?php echo e($getMenu[0]->menu_14); ?></a>
                </li>
                <li><a href="<?php echo e(route('ceo.climp')); ?>" class="block hover:text-[#EDC11C]"><?php echo e($getMenu[0]->menu_15); ?></a>
                </li>
            </ul>
        </li>
        <li>
            <button onclick="toggleMobileDropdown('mobileChair')"
                class="flex justify-between items-center w-full font-semibold">
                <?php echo e($getMenu[0]->menu_16); ?>

                <i class="fas fa-chevron-down transition-transform duration-300"></i>
            </button>

            <ul id="mobileChair" class="hidden mt-3 ml-4 space-y-6 text-[15px] font-semibold">
                <li><a href="<?php echo e(route('chair.growth')); ?>" class="block hover:text-[#EDC11C]"><?php echo e($getMenu[0]->menu_17); ?></a></li>
                <li><a href="<?php echo e(route('ceo.coa.qual')); ?>" class="block hover:text-[#EDC11C]"><?php echo e($getMenu[0]->menu_18); ?></a></li>
                
                <li><a href="<?php echo e(route('chair.application')); ?>" class="block hover:text-[#EDC11C]"><?php echo e($getMenu[0]->menu_19); ?></a></li>
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


<?php /**PATH D:\Seed Media\Growth_Master\resources\views/components/navbar.blade.php ENDPATH**/ ?>
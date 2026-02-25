<section class="w-full bg-[#2A2D79] text-white py-12">
    <div class="max-w-7xl mx-auto px-6 lg:px-16 space-y-12">

        
        <div>
            <a href="<?php echo e(route('home')); ?>">
                <img src="<?php echo e(asset('assets/icon/CAC-02.jpg')); ?>" alt="Growth Master Logo" class="w-20 h-24">
            </a>
        </div>

        
        <div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-6 gap-y-8 gap-x-6">
            <div class="space-y-2">
                <h2 class="text-yellow-200 italic text-sm font-semibold"><?php echo e($getMenu[0]->menu_1); ?></h2>
                <ul class="space-y-2 text-sm">
                    <li><a href="<?php echo e(route('membership')); ?>" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_2); ?></a></li>
                    <li><a href="<?php echo e(route('approach')); ?>" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_3); ?></a></li>
                    <li><a href="<?php echo e(route('review')); ?>" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_4); ?></a></li>
                    <li><a href="<?php echo e(route('exclusive.peer.groups')); ?>" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_5); ?></a></li>
                    <li><a href="<?php echo e(route('form.input')); ?>" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_6); ?></a></li>
                </ul>
            </div>

             <div class="space-y-2">
                <h2 class="text-yellow-200 italic text-sm font-semibold"><?php echo e($getMenu[0]->menu_7); ?></h2>
                <ul class="space-y-2 text-sm">
                    <li><a href="<?php echo e(route('program')); ?>" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_8); ?></a></li>
                    <li><a href="https://www.kicpaa.org/en/atq-program/" target="_blank" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_9); ?></a></li>
                    <li><a href="<?php echo e(route('program.job')); ?>" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_10); ?></a></li>
                    <li><a href="<?php echo e(route('events')); ?>" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_11); ?></a></li>
                </ul>
            </div>

            <div class="space-y-2">
                <h2 class="text-yellow-200 italic text-sm font-semibold"><?php echo e($getMenu[0]->menu_12); ?></h2>
                <ul class="space-y-2 text-sm">
                    <li><a href="<?php echo e(route('about')); ?>" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_13); ?></a></li>
                    <li><a href="<?php echo e(route('Laws.of.eadership')); ?>" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_14); ?></a></li>
                    <li><a href="<?php echo e(route('ceo.climp')); ?>" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_15); ?></a></li>
                </ul>
            </div>

            <div class="space-y-2">
                <h2 class="text-yellow-200 italic text-sm font-semibold"> <?php echo e($getMenu[0]->menu_16); ?></h2>
                <ul class="space-y-2 text-sm">
                    <li><a href="<?php echo e(route('chair.growth')); ?>" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_17); ?></a></li>
                    <li><a href="<?php echo e(route('ceo.coa.qual')); ?>" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_18); ?></a></li>
                    <li><a href="<?php echo e(route('chair.application')); ?>" class="hover:text-yellow-200 transition-colors"><?php echo e($getMenu[0]->menu_19); ?></a></li>
                </ul>
            </div>
            <div class="space-y-2">
                <h2 class="text-yellow-200 italic text-sm font-semibold">Popular Events Joined by CEO:</h2>
                <ul class="space-y-2 text-sm">
                    <li><a href="<?php echo e(route('home')); ?>#event-finan" class="hover:text-yellow-200 transition-colors">Finance for Non-finance</a></li>
                </ul>
            </div>
            <div class="space-y-2">
                <h2 class="text-yellow-200 font-bold text-sm">Headquarter’s Address:</h2>
                <p class="italic text-sm">
                    2<sup>nd</sup> Floor, LSI Building (#03), Friendship Hanoi-Phnom Penh Blvd., (Street 1019), Phnom Penh Thmey, Khan Sen Sok, Phnom Penh City, Kingdom of Cambodia.
                </p>
                <p class="font-bold text-sm">Hours:</p>
                <p class="text-sm">Everyday: 8:00AM – 5:00PM</p>
                <p class="font-bold text-sm">Tel: 015 55 44 41 / 012 401 909</p>
            </div>
        </div>

        
        <div class="flex space-x-4 mt-6">
            <a href="#"><img src="https://www.vistage.com/wp-content/themes/vistage/dist/img/instagram.svg" alt="Instagram" class="w-8 h-8 hover:opacity-80 transition-opacity"></a>
            <a href="#"><img src="https://www.vistage.com/wp-content/themes/vistage/dist/img/facebook.svg" alt="Facebook" class="w-8 h-8 hover:opacity-80 transition-opacity"></a>
            <a href="#"><img src="https://www.vistage.com/wp-content/themes/vistage/dist/img/youtube.svg" alt="YouTube" class="w-8 h-8 hover:opacity-80 transition-opacity"></a>
        </div>

        
        <div class="w-full h-px bg-gray-200 mt-8"></div>

        
        <div class="flex flex-col lg:flex-row gap-4 justify-between text-sm mt-4">
            <p>© 2025 CAC Headquarter’s Address</p>
            <a href="<?php echo e(route('sitemap')); ?>" class="font-bold hover:text-yellow-200 transition-colors">Sitemap</a>
        </div>

    </div>
</section><?php /**PATH D:\Seed Media\Growth_Master\resources\views/components/footer.blade.php ENDPATH**/ ?>
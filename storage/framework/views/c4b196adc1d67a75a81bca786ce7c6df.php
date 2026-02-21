<div class=" w-full h-[80vh] relative  ">
    <!-- Hero Image -->
    <?php if(!empty($getBanner) && $getBanner[0]->title === 'home'): ?>
        <img 
            src="<?php echo e(asset('assets/banner/' . $getBanner[0]->image)); ?>"
            class="w-full h-full object-cover"
            alt="Hero Image"
        >
    <?php endif; ?>

    <!-- Overlay Content -->
    <div class="absolute inset-0 flex flex-col justify-center items-center px-6 md:px-16 lg:px-24 text-white bg-black/50">

        <h1 class="text-[22px] text-center md:text-[35px] lg:text-[45px] font-semibold max-w-[1500px] leading-tight">
            <?php if(!empty($getBanner) && $getBanner[0]->title === 'home'): ?>
                <?php echo e($getBanner[0]->name); ?>

            <?php endif; ?>
        </h1>

        <a href="#member-form">
            <button
                class="mt-6 py-5 px-8 bg-[#68875d] text-[#ffffff] hover:bg-[#003F5F] hover:text-white rounded font-semibold leading-relaxed tracking-widest">
                BECOME A MEMBER
            </button>
        </a>
    </div>
</div>


<div class="py-12">
    <h1 class="text-[#000000] text-center text-3xl md:text-4xl xl:text-5xl"><?php echo e($getHomeContent[0]->title); ?></h1>
    <p class="max-w-[70%] mx-auto text-[#333333] text-xl md:text-2xl text-left py-6">
         <?php echo nl2br(e($getHomeContent[0]->description)); ?>

    </p>

    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

                <!-- Item 1 -->
                <div class="text-left">
                    <div class="flex justify-start mb-4">
                    
                    <img src="https://www.vistage.com/wp-content/uploads/2025/10/icon-Group-20.png" alt="">
                    </div>
                    <h3 class="text-xl md:text-2xl font-semibold text-[#003f5e] mb-3">
                        <?php echo e($getHomeContent[0]->title_card_1); ?>

                    </h3>
                    <p class="text-[#333333] leading-relaxed text-lg md:text-xl">
                
                         <?php echo nl2br(e($getHomeContent[0]->desc_card_1)); ?>

                    </p>
                </div>

                <!-- Item 2 -->
                <div class="text-left">
                    <div class="flex justify-start mb-4">
                    
                    <img src="https://www.vistage.com/wp-content/uploads/2025/10/icon-Group-29.png" alt="">
                    </div>
                    <h3 class="text-xl md:text-2xl font-semibold text-[#003f5e] mb-3">
                       <?php echo e($getHomeContent[0]->title_card_2); ?>

                    </h3>
                    <p class="text-[#333333] leading-relaxed text-lg md:text-xl">
            
                         <?php echo nl2br(e($getHomeContent[0]->desc_card_2)); ?>

                    </p>
                </div>

                <!-- Item 3 -->
                <div class="text-left">
                    <div class="flex justify-start mb-4">
                    
                    <img src="https://www.vistage.com/wp-content/uploads/2025/10/icon-Group-16.png" alt="">
                    </div>
                    <h3 class="text-xl md:text-2xl font-semibold text-[#003f5e] mb-3">
                        <?php echo e($getHomeContent[0]->title_card_3); ?>

                    </h3>
                    <p class="text-[#333333] text-lg md:text-xl leading-relaxed">
                        
                         <?php echo nl2br(e($getHomeContent[0]->desc_card_3)); ?>

                    </p>
                </div>

                <!-- Item 4 -->
                <div class="text-left">
                    <div class="flex justify-start mb-4">
                    
                    <img src="https://www.vistage.com/wp-content/uploads/2025/10/icon-Group-18.png" alt="">
                    </div>
                    <h3 class="text-xl md:text-2xl font-semibold text-[#003f5e] mb-3">
                    <?php echo e($getHomeContent[0]->title_card_4); ?>

                    </h3>
                    <p class="text-[#333333] text-lg md:text-xl leading-relaxed">
                  
                     <?php echo nl2br(e($getHomeContent[0]->desc_card_4)); ?>

                    </p>
                </div>

                <!-- Item 5 -->
                <div class="text-left">
                    <div class="flex justify-start mb-4">
                    
                    <img src="https://www.vistage.com/wp-content/uploads/2025/10/icon-Group-31.png" alt="">
                    </div>
                    <h3 class="text-xl md:text-2xl font-semibold text-[#003f5e] mb-3">
                   <?php echo e($getHomeContent[0]->title_card_5); ?>

                    </h3>
                    <p class="text-[#333333] text-lg md:text-xl leading-relaxed">
                   
                     <?php echo nl2br(e($getHomeContent[0]->desc_card_5)); ?>

                    </p>
                </div>

                <!-- Item 6 -->
                <div class="text-left">
                    <div class="flex justify-start mb-4">
                    
                    <img src="https://www.vistage.com/wp-content/uploads/2025/10/icon-Group-22.png" alt="">
                    </div>
                    <h3 class="text-xl md:text-2xl font-semibold text-[#003f5e] mb-3">
                        <?php echo e($getHomeContent[0]->title_card_6); ?>

                    </h3>
                    <p class="text-[#333333] text-lg md:text-2xl leading-relaxed">
                       
                        <?php echo nl2br(e($getHomeContent[0]->desc_card_6)); ?>

                    </p>
                </div>

            </div>
        </div>
    </section>

</div>

<div class="flex justify-center items-center mt-10">
    <a href="#member-form"
        class="group py-3 px-[25px] text-[16px] md:text-[18px] border-2 border-[#68875d]
        text-[#003F5F] bg-white rounded 
        transition-all duration-300 ease-in-out
        hover:bg-[#68875d] hover:text-white font-semibold">

        Become A Member

        <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
            <i class="fa-solid fa-angle-right"></i>
        </span>
    </a>
</div>




<div class="py-12">
    <h1 class="text-[#000000] text-center text-3xl md:text-4xl xl:text-5xl"><?php echo e($getTeam[0]->title); ?></h1>
</div>

<section class="relative w-full">
    <div class="max-w-7xl mx-auto space-x-6 flex justify-center items-center md:flex-row flex-col">
        
        <div class="md:w-[35%]">
            
            <img src="<?php echo e(asset('assets/team/'. $getTeam[0]->profile)); ?>" alt="" class="w-full h-full object-cover">
        </div>
        
        <div class="md:w-[60%]">
            <div class="py-4 lg:px-0 px-8">
                <h2 class="text-[#e6b34b] text-xl font-bold uppercase tracking-wider"><?php echo e($getTeam[0]->name); ?></h2>
                <p class="text-[#333333] text-lg leading-tight"><?php echo nl2br(e($getTeam[0]->position)); ?></p>
                
            </div>
            <hr class="bg-[#333333] w-full hidden lg:block">
            <div class="py-4 lg:px-0 px-8">
                <h1 class="font-bold uppercase text-[#333333]">short bio:</h1>
                <p class="text-[#333333] text-lg leading-relaxed">
                    <?php echo nl2br(e($getTeam[0]->bio)); ?>

                </p>
            </div>

            <div class="mt-8 pt-4 border-t border-[#333333]/20 lg:px-0 px-8">
                <h1 class="font-bold uppercase text-[#333333]">highlight</h1>
                <p class="text-[#3333333] text-lg">
                    <?php echo nl2br(e(value: $getTeam[0]->highlight)); ?>

                </p>
            </div>
        </div>
    </div>
</section>








<div class="flex justify-center items-center py-6">
    <a href="#member-form"
        class="group py-3 px-[25px] text-[16px] md:text-[18px] border-2 border-[#68875d]
        text-[#003F5F] bg-white rounded 
        transition-all duration-300 ease-in-out
        hover:bg-[#68875d] hover:text-white font-semibold">

        Become A Member

        <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
            <i class="fa-solid fa-angle-right"></i>
        </span>
    </a>
</div>

<section class="relative w-full py-24">
    <div class="bg-[#68875d] w-full lg:h-[950px]">
        <h1 class="text-[20px] text-white text-center md:text-[30px] lg:text-[45px] font-semibold max-w-[1500px] mx-auto leading-tight py-24">
            <?php echo e($getHomeContent[0]->title_1); ?>

        </h1>
        <div class="flex lg:flex-row md:flex-col flex-col items-center justify-between px-4 lg:px-40">
            
            <div class="lg:w-[40%] space-y-4">
                <p class="text-[#ffffff] text-lg md:text-xl font-medium">
                    <?php echo nl2br(e($getHomeContent[0]->description_1)); ?>

                </p>
            </div>
            
            <div class="lg:w-[60%]">
                <img src="<?php echo e(asset('storage/' . $getHomeContent[0]->image)); ?>" alt="">
            </div>
        </div>
        <p class="text-center text-white text-md md:text-lg font-semibold py-4">
            Interested in the Growth Master coaching platform? 
            <a class="font-bold underline" href="<?php echo e(route('approach')); ?>">Learn how it works.</a>
        </p>
    </div>  
</section>

<div class="relative w-full" id="event-finan">
    <h1 class="text-[#000000] text-center text-3xl md:text-4xl xl:text-5xl"><?php echo e($getHomeContent[0]->sub_title_event); ?></h1>
    <section class="max-w-7xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

        <!-- Card 1 -->
        <div class="group">
            <div class="overflow-hidden rounded-lg">
                <img
                    src="<?php echo e(asset('storage/'. $getHomeContent[0]->img_card_event_1)); ?>"
                    alt="Small Business"
                    class="w-full h-[230px] object-cover transition-transform duration-300 group-hover:scale-105"
                />
            </div>

            <h3 class="mt-5 text-xl font-bold text-[#003F5F] leading-snug">
                <?php echo e($getHomeContent[0]->title_event_1); ?>

            </h3>
            <p class="text-[#333333] font-medium text-md md:text-lg">
                 <?php echo nl2br(e($getHomeContent[0]->desc_card_event_1)); ?>

            </p>
            <p class="mt-2 text-gray-500 text-sm">
                <?php echo e($getHomeContent[0]->updated_at->format('d, M, Y')); ?>

            </p>
        </div>

        <!-- Card 2 -->
        <div class="group">
            <div class="overflow-hidden rounded-lg">
                <img
                    src="<?php echo e(asset('storage/'. $getHomeContent[0]->img_card_event_2)); ?>"
                    alt="Small Business"
                    class="w-full h-[230px] object-cover transition-transform duration-300 group-hover:scale-105"
                />
            </div>

            <h3 class="mt-5 text-xl font-bold text-[#003F5F] leading-snug">
                <?php echo e($getHomeContent[0]->title_event_2); ?>

            </h3>
            <p class="text-[#333333] font-medium text-md md:text-lg">
                 <?php echo nl2br(e($getHomeContent[0]->desc_card_event_2)); ?>

            </p>

            <p class="mt-2 text-gray-500 text-sm">
                <?php echo e($getHomeContent[0]->updated_at->format('d, M, Y')); ?>

            </p>
        </div>

        <!-- Card 3 -->
        <div class="group">
            <div class="overflow-hidden rounded-lg">
                <img
                    src="<?php echo e(asset('storage/'. $getHomeContent[0]->img_card_event_3)); ?>"
                    alt="Small Business"
                    class="w-full h-[230px] object-cover transition-transform duration-300 group-hover:scale-105"
                />
            </div>

            <h3 class="mt-5 text-xl font-bold text-[#003F5F] leading-snug">
                 <?php echo e($getHomeContent[0]->title_event_3); ?>

            </h3>
            <p class="text-[#333333] font-medium text-md md:text-lg">
                 <?php echo nl2br(e($getHomeContent[0]->desc_card_event_3)); ?>

            </p>

            <p class="mt-2 text-gray-500 text-sm">
                <?php echo e($getHomeContent[0]->updated_at->format('d, M, Y')); ?>

            </p>
        </div>

    </div>
</section>

</div>
</div>

<div class="relative w-full">
    <?php echo $__env->make('frontend.include.faqs', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>

<section class="relative w-full">
    
   
        <?php echo $__env->make('frontend.include.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</section><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/homesection/hero.blade.php ENDPATH**/ ?>
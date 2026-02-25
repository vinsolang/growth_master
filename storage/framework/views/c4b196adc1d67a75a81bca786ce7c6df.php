<div class="w-full h-[80vh] relative">
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
        <h1 class="text-2xl md:text-4xl lg:text-5xl text-center font-semibold max-w-[1500px] leading-tight">
            <?php echo e($getBanner[0]->name ?? ''); ?>

        </h1>

        <a href="#member-form">
            <button
                class="mt-6 py-5 px-8 bg-red-600 text-white hover:bg-blue-900 rounded-lg font-semibold leading-relaxed tracking-widest transition-colors duration-300">
                BECOME A MEMBER
            </button>
        </a>
    </div>
</div>


<div class="py-12 bg-white">
    <h1 class="text-blue-900 text-center text-3xl md:text-4xl xl:text-5xl font-bold">
        <?php echo e($getHomeContent[0]->title); ?>

    </h1>

    <p class="max-w-4xl mx-auto text-blue-900 text-xl md:text-2xl text-left py-6 md:px-0 px-4">
        <?php echo nl2br(e($getHomeContent[0]->description)); ?>

    </p>

    <section class="py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

                <?php for($i = 1; $i <= 6; $i++): ?>
                    <div class="bg-gray-100 rounded-lg p-6 flex flex-col items-start shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex justify-start mb-4">
                            
                        </div>
                        <h3 class="text-xl md:text-2xl font-semibold text-blue-900 mb-3">
                            <?php echo e($getHomeContent[0]->{"title_card_$i"}); ?>

                        </h3>
                        <p class="text-gray-700 leading-relaxed text-lg md:text-xl">
                            <?php echo nl2br(e($getHomeContent[0]->{"desc_card_$i"})); ?>

                        </p>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </section>
</div>

<div class="flex justify-center items-center mt-10">
    <a href="#member-form"
        class="group py-3 px-[25px] text-[16px] md:text-[18px] border-2 border-[#D82129]
        text-[#D82129] bg-white rounded 
        transition-all duration-300 ease-in-out
        hover:bg-[#D82129] hover:text-white font-semibold">

        Become A Member

        <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
            <i class="fa-solid fa-angle-right"></i>
        </span>
    </a>
</div>




<div class="py-12 bg-white">
    <h1 class="text-blue-900 text-center text-3xl md:text-4xl xl:text-5xl font-bold">
        <?php echo e($getTeam[0]->title); ?>

    </h1>
</div>

<section class="relative w-full py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-center gap-6 md:gap-12 px-6">

        
        <div class="md:w-1/3 w-full rounded-lg overflow-hidden shadow-lg">
            <img src="<?php echo e(asset('assets/team/'. $getTeam[0]->profile)); ?>" alt="<?php echo e($getTeam[0]->name); ?>" class="w-full h-full object-cover">
        </div>

        
        <div class="md:w-2/3 w-full space-y-6">

            <div>
                <h2 class="text-blue-900 text-xl font-bold uppercase tracking-wider">
                    <?php echo e($getTeam[0]->name); ?>

                </h2>
                <p class="text-gray-700 text-lg leading-tight mt-1">
                    <?php echo nl2br(e($getTeam[0]->position)); ?>

                </p>
            </div>

            <hr class="border-gray-300 hidden lg:block">

            <div>
                <h3 class="text-blue-900 font-bold uppercase">Short Bio:</h3>
                <p class="text-gray-700 text-lg leading-relaxed mt-2">
                    <?php echo nl2br(e($getTeam[0]->bio)); ?>

                </p>
            </div>

            <div class="mt-6 pt-4 border-t border-gray-300">
                <h3 class="text-blue-900 font-bold uppercase">Highlight</h3>
                <p class="text-gray-700 text-lg mt-2">
                    <?php echo nl2br(e($getTeam[0]->highlight)); ?>

                </p>
            </div>

        </div>
    </div>
</section>


<div class="flex justify-center items-center py-6">
    <a href="#member-form"
        class="group py-3 px-[25px] text-[16px] md:text-[18px] border-2 border-[#D82129]
        text-[#D82129] bg-white rounded 
        transition-all duration-300 ease-in-out
        hover:bg-[#D82129] hover:text-white font-semibold">

        Become A Member

        <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
            <i class="fa-solid fa-angle-right"></i>
        </span>
    </a>
</div>

<section class="relative w-full py-10">
    <div class="bg-yellow-100 w-full h-auto">
        <h1 class="text-blue-900 text-center text-2xl md:text-4xl lg:text-5xl font-semibold max-w-[1500px] mx-auto leading-tight py-24">
            <?php echo e($getHomeContent[0]->title_1); ?>

        </h1>

        <div class="flex flex-col md:flex-row lg:flex-row items-center justify-between px-4 lg:px-40 gap-8 md:gap-12">
            
            <div class="lg:w-2/5 space-y-4">
                <p class="text-blue-900 text-lg md:text-xl font-medium leading-relaxed">
                    <?php echo nl2br(e($getHomeContent[0]->description_1)); ?>

                </p>
            </div>

            
            <div class="lg:w-3/5 w-full">
                <img src="<?php echo e(asset($getHomeContent[0]->image)); ?>" alt="<?php echo e($getHomeContent[0]->title_1); ?>" class="w-full h-full object-cover rounded-lg shadow-lg">
            </div>
        </div>

        
        <div class="flex justify-center items-center mt-8 hidden">
            <a href="<?php echo e(route('approach')); ?>" class="text-white text-md md:text-lg font-semibold py-4 px-6 bg-yellow-200 hover:bg-yellow-300 rounded-lg transition-colors duration-300">
                <?php echo nl2br(e($getHomeContent[0]->description_bg)); ?>

            </a>
        </div>
    </div>
</section>

<div class="relative w-full bg-white py-12" id="event-finan">
    <h1 class="text-blue-900 text-center text-3xl md:text-4xl xl:text-5xl font-bold">
        <?php echo e($getHomeContent[0]->sub_title_event); ?>

    </h1>

    <section class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <?php for($i = 1; $i <= 3; $i++): ?>
                <div class="group bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="overflow-hidden">
                        <img
                            src="<?php echo e(asset($getHomeContent[0]->{"img_card_event_$i"})); ?>"
                            alt="<?php echo e($getHomeContent[0]->{"title_event_$i"}); ?>"
                            class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105"
                        />
                    </div>

                    <div class="p-6">
                        <h3 class="mt-4 text-xl md:text-2xl font-bold text-blue-900 leading-snug">
                            <?php echo e($getHomeContent[0]->{"title_event_$i"}); ?>

                        </h3>
                        <p class="text-gray-700 font-medium text-md md:text-lg mt-2">
                            <?php echo nl2br(e($getHomeContent[0]->{"desc_card_event_$i"})); ?>

                        </p>
                        <p class="mt-2 text-gray-400 text-sm">
                            <?php echo e($getHomeContent[0]->updated_at->format('d, M, Y')); ?>

                        </p>
                    </div>
                </div>
            <?php endfor; ?>

        </div>
    </section>
</div>

<div class="relative w-full">
    <?php echo $__env->make('frontend.include.faqs', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>

<section class="relative w-full">
    
   
        <?php echo $__env->make('frontend.include.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</section><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/homesection/hero.blade.php ENDPATH**/ ?>
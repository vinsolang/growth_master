
<?php $__env->startSection('title', 'Growth Master Reviews'); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.navbar'); ?>

    <?php echo $__env->renderComponent(); ?>
    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-[110vh] md:h-screen relative">
                <!-- Hero Image -->
                
                <?php if(!empty($getBanner) && $getBanner[4]->title === 'growthmaster review'): ?>
                    <img 
                        src="<?php echo e(asset('assets/banner/' . $getBanner[4]->image)); ?>"
                        class="w-full h-full object-cover"
                        alt="Hero Image"
                    >
                <?php endif; ?>
                <div class="absolute inset-0 bg-black/40 w-full h-full"></div>
                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-40 md:py-20 md:top-30 text-white">

                    <h1
                        class="text-[30px] md:w-3xl text-start md:text-[35px] font-semibold max-w-[940px] leading-tight">
                         <?php if(!empty($getBanner) && $getBanner[4]->title === 'growthmaster review'): ?>
                            <?php echo e($getBanner[4]->name); ?>

                            <?php endif; ?>
                    </h1>

                    <p
                        class="text-[16px] md:w-2xl text-start md:text-[18px] mt-5 font-regular max-w-[940px] leading-tight">
                          <?php if(!empty($getBanner) && $getBanner[4]->title === 'growthmaster review'): ?>
                            <?php echo nl2br(e(value: $getBanner[4]->content)); ?>

                            <?php endif; ?>
                    </p>

                   

                    <a href="#review-form">
                        <button
                        class="mt-6 py-6 px-8 bg-[#68875d] text-[#FFFFFF] hover:bg-[#003F5F] hover:text-white rounded font-bold w-max uppercase tracking-widest">
                        BECOME A MEMBER
                    </button>
                    </a>
                </div>
            </div>
        </section>
        <div class="text-[#333333] text-4xl font-2xl text-center space-y-8">
            <h1><?php echo e($getContent[0]->title); ?></h1>
            <p class="text-xl font-normal max-w-5xl mx-auto text-left">
                <?php echo nl2br(e($getContent[0]->description)); ?>

            </p>
        </div>
        
        <div class="relative w-full ">
            <div class="flex justify-center items-center">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 place-items-center max-w-8xl mx-auto md:px-40">
                    
                    <div class="shadow-2xl bg-[#68875d] text-white px-10 py-16 space-y-6">
                        <h1 class="text-[#ffffff] text-2xl font-semibold uppercase"><?php echo e($getContent[0]->title_card_1); ?></h1>
                        <p class="text-lg">
                           <?php echo nl2br(e($getContent[0]->desc_card_1)); ?>

                        </p>
                        <div class="text-2xl font-semibold">
                            <h2 class="uppercase"><?php echo e($getContent[0]->name_card_1); ?></h2>
                            <p class="text-xl"><?php echo nl2br(e($getContent[0]->positioin_card_1)); ?></p>
                        </div>
                    </div>
                    
                    <div class="bg-white shadow-[0_12px_30px_rgba(0,0,0,0.25)] p-10 px-10 py-16 space-y-6">
                        <h1 class="text-[#003f5e] text-2xl font-semibold uppercase"><?php echo e($getContent[0]->title_card_2); ?></h1>
                        <p class="text-lg text-[#333333]">
                            <?php echo nl2br(e($getContent[0]->desc_card_2)); ?>

                        </p>
                        <div class="flex space-x-6 text-2xl font-semibold text-gray-500">
                            
                            <div class="w-20 h-20 rounded-full">
                                <img src="<?php echo e(asset($getContent[0]->profile_card_2)); ?>" alt="" class="w-full h-full rounded-full object-cover">
                            </div>
                            <div>
                                <h2 class="text-[#003f5e] uppercase"><?php echo e($getContent[0]->name_card_2); ?></h2>
                                <p class="text-xl"><?php echo nl2br(e($getContent[0]->positioin_card_2)); ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white shadow-[0_12px_30px_rgba(0,0,0,0.25)] p-10 px-10 py-16 space-y-6">
                        <h1 class="text-[#003f5e] text-2xl font-semibold uppercase"><?php echo e($getContent[0]->title_card_3); ?></h1>
                        <p class="text-lg text-[#333333]">
                            <?php echo nl2br(e($getContent[0]->desc_card_3)); ?>

                        </p>
                        <div class="flex space-x-6 text-2xl font-semibold text-gray-500">
                            
                            <div class="w-20 h-20 rounded-full">
                                <img src="<?php echo e(asset($getContent[0]->profile_card_3)); ?>" alt="" class="w-full h-full object-cover">
                            </div>
                            <div>
                               <h2 class="text-[#003f5e] uppercase"><?php echo e($getContent[0]->name_card_3); ?></h2>
                                <p class="text-xl"><?php echo nl2br(e($getContent[0]->positioin_card_3)); ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="shadow-2xl bg-[#68875d] text-white px-10 py-16 space-y-6">
                        <h1 class="text-[#ffffff] text-2xl font-semibold uppercase"><?php echo e($getContent[0]->title_card_4); ?></h1>
                        <p class="text-lg">
                           <?php echo nl2br(e($getContent[0]->desc_card_4)); ?>

                        </p>
                        <div class="text-2xl font-semibold">
                            <h2 class="text-[#ffffff] uppercase"><?php echo e($getContent[0]->name_card_4); ?></h2>
                            <p class="text-xl"><?php echo nl2br(e($getContent[0]->positioin_card_4)); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="relative w-full">
            <?php echo $__env->make('frontend.include.faqs', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
        
        <section class="relative w-full">
           
                <?php echo $__env->make('frontend.include.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
          
        </section>
        <div>
            <?php $__env->startComponent('components.footer'); ?>

            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/membership/growth-review.blade.php ENDPATH**/ ?>
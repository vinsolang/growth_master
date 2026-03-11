
<?php $__env->startSection('title', 'Become a Speaker'); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.navbar'); ?>

    <?php echo $__env->renderComponent(); ?>
    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-screen relative">
                <!-- Hero Image -->
                
                <?php if(!empty($getBanner) && $getBanner[26]->title === 'Referral Program'): ?>
                    <img src="<?php echo e(asset('assets/banner/' . $getBanner[26]->image)); ?>" class="w-full h-full object-cover"
                        alt="Hero Image">
                <?php endif; ?>

                <!-- Overlay Content -->
                <div
                    class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-24 text-white md:bg-none bg-black/50">

                   <h1
                        class="text-[22px] text-start md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight">
                        <?php if(!empty($getBanner) 
                            && $getBanner[26]->title === 'Referral Program' 
                            && $getBanner[26]->name !== 'N/A'): ?>
                            <?php echo e($getBanner[26]->name); ?>

                        <?php endif; ?>
                    </h1>

                    <p
                        class="text-[16px] text-start md:text-[18px] mt-5 lg:text-[25px] font-medium max-w-[940px] leading-tight">
                        <?php if(!empty($getBanner) 
                            && $getBanner[26]->title === 'Referral Program' 
                            && $getBanner[26]->content !== 'N/A'): ?>
                            <?php echo nl2br(e($getBanner[26]->content)); ?>

                        <?php endif; ?>
                    </p>

                </div>
            </div>

            <div class="max-w-6xl mx-auto text-lg text-blue-900 flex flex-col justify-center items-center mt-10 gap-2 py-4">
                <?php echo $getTextProgram->desc_1; ?>

            </div>
            <div class="w-full px-4 pb-10">
    
                <?php
                    $images = $getTextProgram->img_json ?? [];
                    $titles = $getTextProgram->title_json ?? [];
                ?>

                <div class="flex flex-wrap justify-center gap-2">

                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="relative w-64 h-40 md:w-80 md:h-72 overflow-hidden shadow-lg group">

                        <!-- Image -->
                        <img 
                            src="<?php echo e(asset($image)); ?>" 
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            alt="">

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center">

                            <span class="text-white text-lg font-semibold text-center px-3 uppercase">
                                <?php echo e($titles[$index] ?? ''); ?>

                            </span>

                        </div>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>

            <div>
                <?php $__env->startComponent('components.footer'); ?>

                <?php echo $__env->renderComponent(); ?>
            </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/apply-cac/referral-program.blade.php ENDPATH**/ ?>
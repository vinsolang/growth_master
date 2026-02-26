
<?php $__env->startSection('title', $getMenu[0]->menu_18); ?>
<?php $__env->startSection('content'); ?>
    <div id="eventPage" class="space-y-45">
        <?php $__env->startComponent('components.navbar'); ?>
        <?php echo $__env->renderComponent(); ?>

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            
              <?php if(!empty($getBanner) && $getBanner[11]->title === 'chair qualifications'): ?>
                    <img 
                        src="<?php echo e(asset('assets/banner/' . $getBanner[11]->image)); ?>"
                        class="w-full h-full object-cover px-4 md:px-8 xl:px-12"
                        alt="Hero Image"
                    >
                <?php endif; ?>

            <!-- Dark overlay (matches image exactly) -->
            

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white bg-black/50">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12">
                    <?php if(!empty($getBanner) && $getBanner[11]->title === 'chair qualifications'): ?>
                            <?php echo e($getBanner[11]->name); ?>

                            <?php endif; ?>
                </h1>

                <p
                    class="text-[22px] md:text-[45px] lg:text-[55px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12">
                     <?php if(!empty($getBanner) && $getBanner[11]->title === 'chair qualifications'): ?>
                            <?php echo nl2br(e(value: $getBanner[11]->content)); ?>

                            <?php endif; ?>
                </p>

            </div>
        </div>
        <div class="space-y-10">
            
            <div class="space-y-6">
                
                <h1 class="text-blue-900 text-center text-3xl md:text-4xl xl:text-5xl">
                    <?php echo e($getContentQl[0]->title); ?>

                </h1>
                <p class="max-w-7xl mx-auto text-left text-blue-900 font-regular text-[17px] md:text-[20px] px-4">
                   <?php echo e(nl2br($getContentQl[0]->description)); ?>

                </p>
            </div>

            <div class="w-full min-h-[500px] xl:h-[600px] md:h-[785px] flex justify-center items-center">

                <!-- IMAGE WRAPPER -->
                <div class="relative w-full lg:h-full h-[800px] px-4 xl:px-12">
                    <img src="<?php echo e(asset($getContentQl[0]->bg_img)); ?>"
                        alt="" class="hidden md:flex w-full h-[400px] md:h-full object-cover rounded-lg" />

                    <!-- OVERLAY -->
                    <div class="md:absolute inset-0 flex justify-center items-center px-4">
                        <div class="bg-[#2A2D79]/85 w-full xl:w-[85%] xl:h-[85%] h-auto 
                           px-6 md:px-12 lg:px-20 rounded-lg py-12">

                            <!-- Title -->
                            <h2 class="text-white text-2xl md:text-3xl lg:text-4xl font-semibold mb-8 md:mb-12">
                                <?php echo e($getContentQl[0]->title_bg); ?>

                            </h2>

                            <!-- Grid -->
                            <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-4 lg:gap-x-16 gap-y-8 md:gap-y-12">

                                <!-- Item -->
                                <div class="flex items-start space-x-6">
                                    <div class="w-12 h-12 md:w-12 md:h-12 rounded-full bg-white
                                       flex items-center justify-center
                                       text-[#0b2642] text-lg md:text-xl font-bold">
                                        1
                                    </div>
                                    <p class="text-white text-base md:text-lg leading-relaxed max-w-md">
                                        <?php echo e(nl2br($getContentQl[0]->desc_1)); ?>

                                    </p>
                                </div>

                                <div class="flex items-start space-x-6">
                                    <div
                                        class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-white flex items-center justify-center text-[#0b2642] font-bold">
                                        4
                                    </div>
                                    <p class="text-white text-base md:text-lg leading-relaxed max-w-md">
                                          <?php echo e(nl2br($getContentQl[0]->desc_4)); ?>

                                    </p>
                                </div>

                                <div class="flex items-start space-x-6">
                                    <div
                                        class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-white flex items-center justify-center text-[#0b2642] font-bold">
                                        2
                                    </div>
                                    <p class="text-white text-base md:text-lg leading-relaxed max-w-md">
                                         <?php echo e(nl2br($getContentQl[0]->desc_2)); ?>

                                    </p>
                                </div>

                                <div class="flex items-start space-x-6">
                                    <div
                                        class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-white flex items-center justify-center text-[#0b2642] font-bold">
                                        5
                                    </div>
                                    <p class="text-white text-base md:text-lg leading-relaxed max-w-md">
                                         <?php echo e(nl2br($getContentQl[0]->desc_5)); ?>

                                    </p>
                                </div>

                                <div class="flex items-start space-x-6">
                                    <div
                                        class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-white flex items-center justify-center text-[#0b2642] font-bold">
                                        3
                                    </div>
                                    <p class="text-white text-base md:text-lg leading-relaxed max-w-md">
                                          <?php echo e(nl2br($getContentQl[0]->desc_3)); ?>

                                    </p>
                                </div>

                                <div class="flex items-start space-x-6">
                                    <div
                                        class="w-12 h-12 md:w-14 md:h-14 rounded-full bg-white flex items-center justify-center text-[#0b2642] font-bold">
                                        6
                                    </div>
                                    <p class="text-white text-base md:text-lg leading-relaxed max-w-md">
                                          <?php echo e(nl2br($getContentQl[0]->desc_6)); ?>

                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </div>
    <div class="xl:mt-2 lg:mt-32 md:mt-52 -mt-12">
        <?php $__env->startComponent('components.footer'); ?>
            <?php echo $__env->renderComponent(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/chair/chair-qualifition.blade.php ENDPATH**/ ?>
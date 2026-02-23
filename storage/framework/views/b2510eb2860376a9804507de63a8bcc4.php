
<?php $__env->startSection('title', 'Event'); ?>
<?php $__env->startSection('content'); ?>
    <div id="eventPage" class="space-y-45">
        <?php $__env->startComponent('components.navbar'); ?>
        <?php echo $__env->renderComponent(); ?>

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            
            <?php if(!empty($getBanner) && $getBanner[6]->title === 'event'): ?>
                    <img 
                        src="<?php echo e(asset('assets/banner/' . $getBanner[6]->image)); ?>"
                        class="w-full h-full object-cover px-4 md:px-8 xl:px-12"
                        alt="Hero Image"
                    >
                <?php endif; ?>

            <!-- Dark overlay (matches image exactly) -->
            

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12">
                    <?php if(!empty($getBanner) && $getBanner[6]->title === 'event'): ?>
                            <?php echo e($getBanner[6]->name); ?>

                            <?php endif; ?>
                </h1>

                <p
                    class="text-[22px] md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12">
                     <?php if(!empty($getBanner) && $getBanner[6]->title === 'event'): ?>
                            <?php echo nl2br(e(value: $getBanner[6]->content)); ?>

                            <?php endif; ?>
                </p>

            </div>
        </div>
        <div class="space-y-10">
            
            

            
            <div class="space-y-6">
                
                
            </div>

            
            

            
            <div class="text-[#003f5e] font-semibold text-2xl px-12">
                
            <h1 class="text-[#000000] text-center text-3xl md:text-4xl xl:text-5xl py-6">Events</h1>
                
              <?php $__currentLoopData = $showEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="space-y-6">

                    
                    <div class="flex justify-between items-center">
                        <div class="bg-gray-500 h-[0.8px] w-[25%] md:w-[38%]"></div>
                        <div class="text-center text-[#333333] text-xl">
                            <h1><?php echo e(\Carbon\Carbon::parse($items->event_date)->format('d M Y')); ?></h1>
                        </div>
                        <div class="bg-gray-500 h-[0.8px] w-[25%] md:w-[38%]"></div>
                    </div>

                    
                    <div class="border-2 border-[#e6ecf0] h-auto xl:h-[400px] flex flex-col md:flex-row
                        <?php echo e($loop->index % 2 === 1 ? 'md:flex-row-reverse' : ''); ?>">

                        
                        <div class="w-full md:w-1/4 bg-gray-600 relative">
                            <img src="<?php echo e(asset($items->image)); ?>" alt=""
                                class="w-full h-full object-cover">
                            <div class="absolute inset-0"></div>

                            
                        </div>

                        
                        <div class="grid w-full md:w-[60%] py-10 px-4 md:px-10 gap-y-8">
                            <div class="flex items-center space-x-2">
                                <h2 class="uppercase text-[16px] text-[#141826] tracking-widest">
                                    <?php echo e($items->category); ?>

                                </h2>
                                <div class="bg-[#edc01c] h-1 w-6"></div>
                            </div>

                            <h1 class="text-[#141826] text-3xl font-semibold">
                                <?php echo e($items->title); ?>

                            </h1>

                            <p class="text-[#141826] font-normal text-lg leading-relaxed">
                                <?php echo e($items->description); ?>

                            </p>
                            <div>
                                <?php if($items->link): ?>
                                    <a href="<?php echo e($items->link); ?>"
                                    target="_blank"
                                    class="">
                                        Learn More <span>&rarr;</span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            
            
            <?php $__env->startComponent('components.footer'); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/events/event.blade.php ENDPATH**/ ?>
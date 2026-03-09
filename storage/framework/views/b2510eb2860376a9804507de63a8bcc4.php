
<?php $__env->startSection('title', $getMenu[0]->menu_11); ?>
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
                
                <h1 class="text-blue-900 text-center text-3xl md:text-4xl xl:text-5xl py-6"><?php echo e($getEventsex[0]->title_event_1); ?></h1>
                <div class="flex justify-center items-center">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">

                        <?php $__currentLoopData = $getEventsex; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="bg-[#2a2d78] py-12 px-8 space-y-4 h-auto">
                            <div class="flex space-x-1">
                                <div class="w-14 h-14 rounded-full bg-gray-400">
                                    <img src="<?php echo e(asset('storage/'.$items->image)); ?>" alt="" class="w-full h-full object-cover rounded-full">
                                </div>
                                <div>
                                    <p class="text-[10px] text-white"><?php echo e($items->name); ?></p>
                                    <h2 class="text-xl sm:text-1xl font-semibold text-white"><?php echo e($items->type); ?></h2>
                                    <p class="text-[10px] text-white">events</p>
                                </div>
                            </div>
                            <div class="text-white text-2xl">
                                <h2><?php echo e($items->title); ?></h2>
                            </div>
                            <div class="">
                                <p class="text-md md:text-lg leading-relaxed text-[#ffffff]">
                                   <?php echo nl2br($items->description); ?>

                                </p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        


                    </div>
                </div>
            </div>

            
            

            
            <div class="text-[#003f5e] font-semibold text-2xl px-12">
                
            <h1 class="text-blue-900 text-center text-3xl md:text-4xl xl:text-5xl py-6" id="event-sections"><?php echo e($getEventsex[0]->title_event_2); ?></h1>
                <?php $globalIndex = 0; ?>

                <?php $__currentLoopData = $showEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month => $events): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="space-y-6">

                        
                        <div class="flex justify-between items-center">
                            <div class="bg-[#DBDBDB] h-[0.8px] w-[25%] md:w-[38%]"></div>

                            <div class="text-center text-blue-900 text-xl md:text-2xl lg:text-4xl">
                                <h1><?php echo e($month); ?></h1>
                            </div>

                            <div class="bg-[#DBDBDB] h-[0.8px] w-[25%] md:w-[38%]"></div>
                        </div>

                        
                        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="border-2 border-[#DBDBDB] h-auto xl:h-[400px] flex flex-col md:flex-row
                                <?php echo e($globalIndex % 2 === 1 ? 'md:flex-row-reverse' : ''); ?>">

                                
                                <div class="w-full md:w-1/4 bg-[#DBDBDB] relative">
                                    <img src="<?php echo e(asset($items->image)); ?>" class="w-full h-full object-cover">

                                    <p class="absolute inset-0 flex flex-col items-center justify-center
                                            text-white font-semibold text-center px-3 bg-black/50">
                                        <?php echo e($items->event_date->format('l')); ?> <br>
                                        <?php echo e($items->event_date->format('d')); ?> |
                                        <?php echo e($items->event_date->format('M')); ?> |
                                        <?php echo e($items->event_date->format('Y')); ?><br>
                                        <?php echo e($items->event_time); ?> <br><br>
                                        <?php echo e($items->event_type); ?>

                                    </p>
                                </div>

                                
                                <div class="grid w-full md:w-[60%] py-10 px-4 md:px-10 gap-y-8">
                                    <div class="flex items-center space-x-2">
                                        <h2 class="uppercase text-[16px] text-blue-900 tracking-widest">
                                            <?php echo e($items->category); ?>

                                        </h2>
                                        <div class="bg-[#2A2D79] h-1 w-6"></div>
                                    </div>

                                    <h1 class="text-blue-900 text-3xl font-semibold">
                                        <?php echo e($items->title); ?>

                                    </h1>

                                    <p class="text-blue-900 font-normal text-lg leading-relaxed">
                                        <?php echo e($items->description); ?>

                                    </p>

                                    
                                    <?php if($items->slug): ?>
                                        <a href="<?php echo e(route('events.details', ['slug' => $items->slug])); ?>#details" target="_blank">
                                            Read More →
                                        </a>
                                    <?php endif; ?>
                                   
                                </div>

                            </div>

                            
                            <?php $globalIndex++; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            
            <?php $__env->startComponent('components.footer'); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/events/event.blade.php ENDPATH**/ ?>
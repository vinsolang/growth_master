
<?php $__env->startSection('title', 'Event Details'); ?>
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
            <!-- Back Link -->
            <div id="event-sections" class="px-4 md:px-32 text-xl md:text-2xl">
                <a href="<?php echo e(route('events')); ?>#event-sections" class="text-red-600 hover:text-green-700 font-semibold underline">
                    ← Back
                </a>
            </div>

            
            <div id="details">
                <div class="max-w-7xl mx-auto px-4 md:px-8">
                    <h1 class="text-blue-900 text-3xl md:text-4xl xl:text-5xl py-6"><?php echo e($showEventsdetails->title_overview); ?></h1>
                </div>
                <div class="bg-[#dbdbdb] max-w-7xl mx-auto h-auto p-8">
                    <div class="flex justify-center items-center text-left px-2 md:px-8">
                        <p class="text-blue-900 text-lg md:text-xl font-normal max-w-4xl mx-auto text-leftpt-4 md:pt-8">
                            <?php echo nl2br($showEventsdetails->description_overview); ?>

                        </p>
                    </div>
                    <div class="w-full h-[300px] rounded-xl px-2 md:px-12 pt-4 md:pt-8">
                        <img src="<?php echo e(asset($showEventsdetails->img_details)); ?>" alt="" class="w-full h-full object-cover">
                    </div>

                    <div class="max-w-7xl mx-auto pt-4 md:pt-8 text-left grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-8 px-2 md:px-12 text-blue-900 text-lg md:text-xl font-normal">
                        <div class="">
                            
                            <p><?php echo nl2br($showEventsdetails->content_card_1); ?></p>

                        </div>
                        <div class="">
                            <p><?php echo nl2br($showEventsdetails->content_card_2); ?></p>
                        </div>
                        <div class="">
                            <p><?php echo nl2br($showEventsdetails->content_card_3); ?></p>
                        </div>
                        <div class="">
                            <p><?php echo nl2br($showEventsdetails->content_card_4); ?></p>
                        </div>
                    </div>

                    <div class="max-w-7xl mx-auto pt-4 md:pt-8 flex flex-col md:flex-row md:gap-8 px-2 md:px-12 md:space-y-0 space-y-4 space-x-0 md:space-x-4">
                        <?php $__currentLoopData = $showEventsdetails->img_limit_3 ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="w-full h-[220px]">
                                <img src="<?php echo e(asset($img)); ?>" class="w-full h-full object-cover rounded-lg">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="text-left pt-4 md:pt-8 px-2 md:px-12 space-y-2">
                        <p class="text-blue-900 text-lg md:text-xl font-normal text-left pt-4 md:pt-8">
                            <?php echo nl2br($showEventsdetails->desc_overview); ?>

                        </p>

                        <div class="flex justify-center items-center">
                            <div class="bg-[#d82129] w-40 h-12 flex justify-center items-center rounded-full text-white">
                                <a href="#form-contact">Register Now</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="max-w-7xl mx-auto px-4 md:px-8">
                    <h1 class="text-blue-900 text-3xl md:text-4xl xl:text-5xl py-6"><?php echo e($showEventsdetails->title_details); ?></h1>
                </div>

                <div class="max-w-7xl mx-auto h-auto space-y-8">

                <?php if(!empty($showEventsdetails->name_details)): ?>
                    <?php $__currentLoopData = (array)$showEventsdetails->name_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="w-full">
                        <div class="bg-[#dbdbdb] w-full h-1"></div>

                        <div class="pt-2 flex md:flex-row flex-col md:space-x-4">

                            
                            <div class="flex flex-col items-center space-y-1">
                                <div class="w-64 h-64">
                                    <img src="<?php echo e(asset($showEventsdetails->profile_image[$index] ?? '')); ?>"
                                        class="w-full h-full object-cover">
                                </div>

                                <button onclick="openBio(<?php echo e($index); ?>)"
                                    class="border border-[#d82129] text-blue-900 w-32 h-10 cursor-pointer">
                                    Bio
                                </button>
                            </div>

                            
                            <div class="space-y-2">
                                <h1 class="text-blue-900 text-2xl font-medium">
                                    <?php echo e($name); ?>

                                </h1>

                                <p class="text-blue-900 line-clamp-7" id="desc-<?php echo e($index); ?>">
                                    <?php echo nl2br($showEventsdetails->position_details[$index] ?? ''); ?>

                                </p>

                                <button onclick="toggleText(<?php echo e($index); ?>)"
                                    id="toggleBtn-<?php echo e($index); ?>"
                                    class="text-red-600">
                                    Read More
                                </button>
                            </div>

                        </div>
                    </div>

                    
                    <div id="bioModal-<?php echo e($index); ?>"
                        class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">

                        <div class="bg-white max-w-6xl mx-auto p-6 rounded-lg relative">

                            <button onclick="closeBio(<?php echo e($index); ?>)"
                                class="absolute top-2 right-3 text-xl cursor-pointer">
                                ×
                            </button>

                            <h2 class="text-xl font-semibold mb-4">
                                <?php echo e($name); ?>

                            </h2>

                            <p class="text-gray-700">
                                <?php echo nl2br($showEventsdetails->bio_details[$index] ?? ''); ?>

                            </p>

                        </div>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-[#d82129] w-40 h-12 rounded-full flex justify-center items-center text-white mt-4">
                        <a href="#form-contact">Register Now</a>
                    </div>
                </div>

                
                <div class="max-w-7xl mx-auto px-4 md:px-8">
                    <h1 class="text-blue-900 text-3xl md:text-4xl xl:text-5xl py-6 mt-4"><?php echo e($showEventsdetails->title_agenda); ?></h1>
                </div>
                
                <div class="max-w-7xl mx-auto h-auto space-y-8 px-2 md:px-0">

                   

                    <?php if(!empty($showEventsdetails->agenda_items)): ?>
                        <?php $__currentLoopData = $showEventsdetails->agenda_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agenda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                            <div class="w-full">
                                <div class="bg-[#dbdbdb] w-full h-1"></div>

                                <div class="pt-2 flex space-x-4">
                                    <div class="flex justify-center items-center space-x-16">

                                        <p class="text-blue-900 text-lg md:text-xl font-medium">
                                            <?php echo e($agenda['date'] ?? ''); ?>

                                        </p>

                                        <p class="text-blue-900 text-lg md:text-xl font-normal">
                                            <?php echo e($agenda['title'] ?? ''); ?>

                                        </p>

                                    </div>
                                </div>
                            </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                   

                    <div class="w-full">
                        <div class="bg-[#dbdbdb] w-full h-1"></div>
                    </div>

                </div>
                 <div class="flex justify-center items-center">
                    <div class="bg-[#d82129] w-40 h-12 rounded-full flex justify-center items-center text-white mt-4">
                        <a href="#form-contact">Register Now</a>
                    </div>
                </div>


                

                <div class="max-w-7xl mx-auto px-4 md:px-8">
                    <h1 class="text-blue-900 text-3xl md:text-4xl xl:text-5xl py-6 mt-4"><?php echo e($showEventsdetails->title_breakout); ?></h1>
                </div>
                <div class="max-w-7xl mx-auto space-y-4">

                  

                         <?php if(!empty($showEventsdetails->breakout_items)): ?>
                        <?php $__currentLoopData = $showEventsdetails->breakout_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $break): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <div>
                                        
                                        <div class="w-full">
                                            <div class="bg-[#dbdbdb] w-full h-1"></div>
                                        </div>
                                        <div class="flex md:flex-row flex-col justify-between items-start md:space-y-0 space-y-2 space-x-6 px-0 md:px-4 mt-6">
                                            <div class="px-2 md:px-0">
                                                <p class="text-blue-900 w-40 text-lg md:text-xl font-medium"> <?php echo e($break['date'] ?? ''); ?></p>
                                            </div>
                                            <div class="px-2 md:px-0">
                                                <p class="text-blue-900 text-lg md:text-xl w-lg max-w-lg mx-auto">
                                                   <?php echo nl2br($break['description'] ?? ''); ?>

                                                </p>
                                            </div>
                                            <div class="w-full md:w-72 h-52 px-2 md:px-0">
                                                <img src="<?php echo e(asset($break['profile'] ?? '')); ?>" alt="" class="w-full h-full lg:object-cover object-contain">
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                   

                    
                    <div class="w-full mt-6">
                        <div class="bg-[#dbdbdb] w-full h-1"></div>
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-[#d82129] w-40 h-12 rounded-full flex justify-center items-center text-white mt-4">
                        <a href="#form-contact">Register Now</a>
                    </div>
                </div>




                <div class="max-w-7xl mx-auto px-4 md:px-8">
                    <h1 class="text-blue-900 text-3xl md:text-4xl xl:text-5xl py-6 mt-4"><?php echo e($showEventsdetails->title_sponsor); ?></h1>
                </div>
                <div class="max-w-7xl mx-auto">
                    
                    <div class="w-full mt-6">
                        <div class="bg-[#dbdbdb] w-full h-1"></div>
                    </div>
                    <div class="flex space-x-6 md:flex-row flex-wrap">

                        <?php if(!empty($showEventsdetails->sponsor_logos)): ?>
                            <?php $__currentLoopData = $showEventsdetails->sponsor_logos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <img src="<?php echo e(asset($logo)); ?>"
                                    class="w-24 h-24 md:w-32 md:h-32 object-cover mt-4">

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        </div>
                </div>



                <div class="max-w-7xl mx-auto px-4 md:px-8">
                    <h1 class="text-blue-900 text-3xl md:text-4xl xl:text-5xl py-6 mt-4"><?php echo e($showEventsdetails->title_location); ?></h1>
                </div>
                <div class="w-full h-[300px] max-w-7xl mx-auto px-4 md:px-8">
                    <iframe 
                        src="<?php echo e($showEventsdetails->location_link); ?>" 
                        style="border:0;" 
                        class="w-full h-full object-cover"
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>


                <div class="max-w-7xl mx-auto px-4 md:px-8" id="form-contact">
                    <h1 class="text-blue-900 text-3xl md:text-4xl xl:text-5xl py-6 mt-4">Register Now</h1>
                </div>
                <div class="max-w-7xl mx-auto px-4 md:px-8 bg-[#dbdbdb]">
                    <?php echo $__env->make('frontend.include.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>


            </div>
         
            <?php $__env->startComponent('components.footer'); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>

<script>
    function openBio(index) {
    const modal = document.getElementById("bioModal-" + index);
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeBio(index) {
    const modal = document.getElementById("bioModal-" + index);
    modal.classList.add("hidden");
}
</script>
<script>
function toggleText(index) {
    const desc = document.getElementById("desc-" + index);
    const btn = document.getElementById("toggleBtn-" + index);

    if (desc.classList.contains("line-clamp-7")) {
        desc.classList.remove("line-clamp-7");
        btn.innerText = "Read Less";
    } else {
        desc.classList.add("line-clamp-7");
        btn.innerText = "Read More";
    }
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/events/event-details.blade.php ENDPATH**/ ?>

<?php $__env->startSection('title', 'Growth Master Reviews'); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.navbar'); ?>

    <?php echo $__env->renderComponent(); ?>
    <style>
.custom-program-table table {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed; /* force equal width */
}

.custom-program-table th,
.custom-program-table td {
    border: 1px solid #d1d5db;
    width: 50%;
    word-wrap: break-word; /* prevent overflow */
}

/* Header row */
.custom-program-table table tr:first-child td,
.custom-program-table table tr:first-child th {
    background-color: #2A2D79 !important;
    color: white;
    font-weight: 600;
    text-align: center;
    padding: 20px;
    font-size: 20px;
}

/* Body rows */
.custom-program-table table tr:not(:first-child) td {
    background-color: #DBDBDB;
    padding: 32px 28px;
    font-size: 18px;
    color: #2A2D79;
}


</style>

    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-[110vh] md:h-screen relative">
                <!-- Hero Image -->
                
                <?php if(!empty($getBanner) && $getBanner[5]->title === 'exclusive peer group'): ?>
                    <img 
                        src="<?php echo e(asset('assets/banner/' . $getBanner[5]->image)); ?>"
                        class="w-full h-full object-cover"
                        alt="Hero Image"
                    >
                <?php endif; ?>
                <div class="absolute inset-0 bg-black/40 w-full h-full"></div>
                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-40 md:py-20 md:top-30 text-white">

                    <h1
                        class="text-[30px] md:w-3xl text-start md:text-[35px] font-semibold max-w-[940px] leading-tight">
                        <?php if(!empty($getBanner) && $getBanner[5]->title === 'exclusive peer group'): ?>
                            <?php echo e($getBanner[5]->name); ?>

                            <?php endif; ?>
                    </h1>

                    <p
                        class="text-[16px] md:w-2xl text-start md:text-[18px] mt-5 font-regular max-w-[940px] leading-tight">
                          <?php if(!empty($getBanner) && $getBanner[5]->title === 'exclusive peer group'): ?>
                            <?php echo nl2br(e(value: $getBanner[5]->content)); ?>

                            <?php endif; ?>
                    </p>

                    <a href="<?php echo e(route('home')); ?>#member-form">
                        <button
                        class="mt-6 py-6 px-8 bg-red-600 text-white hover:bg-blue-900 hover:text-white rounded font-bold w-max uppercase tracking-widest">
                        BECOME A MEMBER
                    </button>
                    </a>
                </div>
            </div>
        </section>
        <div class="flex flex-col justify-center items-center bg-[#2A2D79] w-full md:h-[300px] h-auto text-[#ffffff] text-4xl font-2xl text-center space-y-8">
            <h1 class="text-[22px] md:text-3xl px-8 py-4"><?php echo e($getContent[0]->title); ?></h1>
            <p class="text-[18px] md:text-xl font-normal max-w-5xl mx-auto text-left px-4 py-4">
                 <?php echo nl2br(e($getContent[0]->description)); ?>

            </p>
        </div>
        
        <div class="relative w-full py-12">
            <p class="text-blue-900 text-[18px] md:text-xl font-normal max-w-5xl mx-auto text-left px-4 py-4">
                <?php echo nl2br(e($getContent[0]->description_1)); ?>

            </p>
        </div>

        
       
        <div class="max-w-6xl mx-auto mt-12 border border-gray-300 custom-program-table">
            <?php echo $getContent[0]->table; ?>

        </div>
        
        <div class="flex justify-center items-center mt-10">
            <a href="<?php echo e(route('home')); ?>#member-form"
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
        
        <section class="relative w-full">
            <h1 class="text-blue-900 text-2xl md:text-4xl text-center py-6"><?php echo e($getContent[0]->title_2); ?></h1>
            <p class="text-blue-900 text-xl md:2xl text-center py-4">
                 <?php echo nl2br(e($getContent[0]->description_2)); ?>

            </p>
            
            <?php
                $showProgram = [
                    [
                         'desc' => $getContent[0]->desc_card1 ?? '',
                        'image' => asset( $getContent[0]->img_card1 ?? ''),
                    ],
                    [
                         'desc' => $getContent[0]->desc_card2 ?? '',
                        'image' => asset( $getContent[0]->img_card2 ?? ''),
                    ],
                ];
            ?>

            <div class="relative w-full">

                <?php $__currentLoopData = $showProgram; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div
                        class="flex flex-col md:flex-row justify-center items-center py-4 px-4 xl:py-16 xl:px-35 gap-8">

                        
                        <div class="md:hidden w-full md:w-1/2 flex">
                            <img src="<?php echo e($program['image']); ?>" alt="">
                        </div>

                        
                        <?php if($index % 2 !== 0): ?>
                            <div class="hidden md:flex w-full md:w-1/2">

                                <img src="<?php echo e($program['image']); ?>" alt="">
                            </div>
                        <?php endif; ?>

                        
                        <div class="w-full md:w-1/2 space-y-4 md:space-y-8 !text-blue-900 ">

                            <p class="text-[16px] md:text-[18px]">
                                <?php echo $program['desc']; ?>

                            </p>
                        </div>

                        
                        <?php if($index % 2 === 0): ?>
                            <div class="hidden md:flex w-full md:w-1/2">

                                <img src="<?php echo e($program['image']); ?>" alt="">
                            </div>
                        <?php endif; ?>

                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        </section>

        
        <div class="flex justify-center items-center mt-10">
            <a href="<?php echo e(route('home')); ?>#member-form"
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

        
        <div class="max-w-7xl mx-auto bg-amber-200 text-left">

            <div class="flex">
                <div class="flex justify-center items-center bg-[#2A2D79] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]"><?php echo e($getContent[0]->title_t1); ?></h1>
                </div>
                <div class="flex justify-center items-center bg-[#2A2D79]/95 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                       <?php echo nl2br(e($getContent[0]->desc_t1)); ?>

                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#2A2D79] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]"><?php echo e($getContent[0]->title_t2); ?></h1>
                </div>
                <div class="flex justify-center items-center bg-[#2A2D79]/95 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                       <?php echo nl2br(e($getContent[0]->desc_t2)); ?>

                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#2A2D79] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]"><?php echo e($getContent[0]->title_t3); ?></h1>
                </div>
                <div class="flex justify-center items-center bg-[#2A2D79]/95 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        <?php echo nl2br(e($getContent[0]->desc_t3)); ?>

                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#2A2D79] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]"><?php echo e($getContent[0]->title_t4); ?></h1>
                </div>
                <div class="flex justify-center items-center bg-[#2A2D79]/95 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        <?php echo nl2br(e($getContent[0]->desc_t4)); ?>

                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#2A2D79] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]"><?php echo e($getContent[0]->title_t5); ?></h1>
                </div>
                <div class="flex justify-center items-center bg-[#2A2D79]/95 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                      <?php echo nl2br(e($getContent[0]->desc_t5)); ?>

                    </p>
                </div>
            </div>
        </div>

        
        <div class="py-12 max-w-7xl mx-auto space-y-6 text-center">
            <h1 class="text-blue-900 lg:text-4xl text-2xl font-semibold">
                <?php echo e($getContent[0]->title_3); ?>

            </h1>
            <p class="leading-relaxed text-xl text-blue-900 text-left mx-auto max-w-6xl px-6">
                <?php echo nl2br(e($getContent[0]->description_3)); ?>

            </p>

            
        <div class="py-8 max-w-8xl mx-auto space-x-4 space-y-6 grid grid-cols-1 lg:grid-cols-3 h-auto px-4 gap-x-8">
            
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-xl font-bold mb-4 text-center">
                     <?php echo e($getContent[0]->title_c1); ?>

                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                     <?php echo e($getContent[0]->desc_c1); ?>

                </p>
            </div>

            
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-xl font-bold mb-4 text-left">
                    <?php echo e($getContent[0]->title_c2); ?>

                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                   <?php echo e($getContent[0]->desc_c2); ?>

                </p>
            </div>
            
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-xl font-bold mb-4 text-left">
                    <?php echo e($getContent[0]->title_c3); ?>

                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                   <?php echo e($getContent[0]->desc_c3); ?>

                </p>
            </div>
            <!-- Card 4 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-xl font-bold mb-4 text-left">
                     <?php echo e($getContent[0]->title_c4); ?>

                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                   <?php echo e($getContent[0]->desc_c4); ?>

                </p>
            </div>
            
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-2xl xl:text-xl font-bold mb-4 text-left">
                    <?php echo e($getContent[0]->title_c5); ?>

                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                    <?php echo e($getContent[0]->desc_c5); ?>

                </p>
            </div>

            
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-blue-900 text-xl xl:text-xl font-bold mb-4 text-left">
                    <?php echo e($getContent[0]->title_c6); ?>

                </h1>
                <p class="text-blue-900 text-lg leading-relaxed text-left">
                     <?php echo e($getContent[0]->desc_c6); ?>

                </p>
            </div>
        </div>
        </div>
        
        <div class="flex justify-center items-center mt-10">
            <a href="<?php echo e(route('home')); ?>#member-form"
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
        
        <section class="bg-[#2A2D79] text-white py-20">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-semibold text-center mb-6">
             <?php echo e($getContent[0]->title_4); ?>

            </h2>

            <!-- Intro Text -->
            <p class="text-left max-w-6xl mx-auto text-lg leading-relaxed text-gray-200 mb-6">
            <?php echo nl2br(e($getContent[0]->description_4)); ?>

            </p>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-16">

                <!-- Item 1 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            
                        </div>
                        <h3 class="text-[#ffffff] font-semibold mb-2">
                             <?php echo e($getContent[0]->title_g1); ?>

                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                            <?php echo nl2br(e($getContent[0]->desc_g1)); ?>

                        </p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            
                        </div>
                        <h3 class="text-[#ffffff] font-semibold mb-2">
                           <?php echo e($getContent[0]->title_g2); ?>

                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                            <?php echo nl2br(e($getContent[0]->desc_g2)); ?>

                        </p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            
                        </div>
                        <h3 class="text-[#ffffff] font-semibold mb-2">
                           <?php echo e($getContent[0]->title_g3); ?>

                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                            <?php echo nl2br(e($getContent[0]->desc_g3)); ?>

                        </p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            
                        </div>
                        <h3 class="text-[#ffffff] font-semibold mb-2">
                          <?php echo e($getContent[0]->title_g4); ?>

                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                          <?php echo nl2br(e($getContent[0]->desc_g4)); ?>

                        </p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            
                        </div>
                        <h3 class="text-[#ffffff] font-semibold mb-2">
                            <?php echo e($getContent[0]->title_g5); ?>

                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                           <?php echo nl2br(e($getContent[0]->desc_g5)); ?>

                        </p>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="gap-6 relative left-8">
                    <div class="flex justify-start items-center space-x-2">
                        <div class="w-12 h-12">
                            
                        </div>
                        <h3 class="text-[#ffffff] font-semibold mb-2">
                            <?php echo e($getContent[0]->title_g6); ?>

                        </h3>
                    </div>
                    <div>
                        <p class="text-lg text-gray-200 leading-relaxed">
                            <?php echo nl2br(e($getContent[0]->desc_g6)); ?>

                        </p>
                    </div>
                </div>

            </div>
        </div>
        </section>

        <div>
            <?php $__env->startComponent('components.footer'); ?>

            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/membership/exclusive-peer-groups.blade.php ENDPATH**/ ?>
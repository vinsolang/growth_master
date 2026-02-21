
<?php $__env->startSection('title', 'Executive Coaching Services & Leadership Programs'); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.navbar'); ?>

    <?php echo $__env->renderComponent(); ?>
    <style>
          .ck-content ul {
        list-style-type: disc;
        padding-left: 1.5rem;
    }

    .ck-content ol {
        list-style-type: decimal;
        padding-left: 1.5rem;
    }
    </style>
    <style>
.custom-program-table table {
    width: 100%;
    border-collapse: collapse;
}

.custom-program-table th,
.custom-program-table td {
    border: 1px solid #d1d5db;
    width: 50%;
}

/* Header row (works even without <th>) */
.custom-program-table table tr:first-child td,
.custom-program-table table tr:first-child th {
    background-color: #68875d !important;
    color: white;
    font-weight: 600;
    text-align: center;
    padding: 20px;
    font-size: 20px;
}

/* Body rows */
.custom-program-table table tr:not(:first-child) td {
    background-color: #f3f4f6;
    padding: 32px 28px;
    font-size: 18px;
    color: #1f2937;
}


</style>

    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-[110vh] md:h-screen relative">
                <!-- Hero Image -->
                
                <?php if(!empty($getBanner) && $getBanner[3]->title === 'our program'): ?>
                    <img 
                        src="<?php echo e(asset('assets/banner/' . $getBanner[3]->image)); ?>"
                        class="w-full h-full object-cover"
                        alt="Hero Image"
                    >
                <?php endif; ?>


                <div class="absolute inset-0 bg-black/40 w-full h-full"></div>
                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-40 md:py-20 md:top-20 text-white bg-black/50">

                    <h1
                        class="text-[30px] md:w-3xl text-start md:text-[35px] font-semibold max-w-[940px] leading-tight">
                        <?php if(!empty($getBanner) && $getBanner[3]->title === 'our program'): ?>
                            <?php echo e($getBanner[3]->name); ?>

                            <?php endif; ?>
                    </h1>

                    <p
                        class="text-[16px] md:w-2xl text-start md:text-[18px] mt-5 font-regular max-w-[940px] leading-tight">
                         <?php if(!empty($getBanner) && $getBanner[3]->title === 'our program'): ?>
                          
                                <?php echo nl2br(e(value: $getBanner[3]->content )); ?>

                            <?php endif; ?>
                    </p>


                    <a href="#program-form">
                        <button
                        class="mt-6 py-5 px-7 bg-[#68875d] text-[#ffffff] hover:bg-[#003F5F] hover:text-white rounded font-semibold w-max">
                        JOIN A PROGRAM
                    </button>
                    </a>
                </div>
            </div>
        </section>
        <div class="text-[#333333] text-4xl font-2xl text-center space-y-8">
            <h1><?php echo e($getContentProgram[0]->title); ?></h1>
            <p class="text-xl font-normal max-w-5xl mx-auto text-left">
                <?php echo nl2br(e($getContentProgram[0]->description)); ?>

            </p>
            <h1><?php echo e($getContentProgram[0]->title_1); ?></h1>
            
            <div class="flex justify-center items-center">
                <img src="<?php echo e(asset($getContentProgram[0]->image)); ?>" alt="">
            </div>
            
            <div class="flex justify-center items-center mt-10">
               <a href="#program-form">
                 <button class="group py-5 px-[25px] text-[16px] md:text-[18px] border-2 border-[#68875d]
                            text-[#68875d] bg-white rounded 
                            transition-all duration-300 ease-in-out
                            hover:bg-[#68875d] hover:text-white font-semibold">
                    JOIN A PROGRAM

                    <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </button>
               </a>
            </div>
        </div>
        
        <div class="relative w-full">

            <?php $__currentLoopData = $showProgram; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div
                    class="flex flex-col md:flex-row justify-center items-center
                        py-4 px-4 xl:py-16 xl:px-35 gap-8
                        <?php echo e($index % 2 === 0 ? 'bg-[#f5f2f2]' : ''); ?>">

                    
                    <div class="md:hidden w-full md:w-1/2 flex">
                        <img src="<?php echo e(asset('assets/our_program/' . $program->image)); ?>" alt="">
                    </div>

                    
                    <?php if($index % 2 !== 0): ?>
                        <div class="hidden md:flex w-full md:w-1/2">
                            <img src="<?php echo e(asset('assets/our_program/' . $program->image)); ?>" alt="">
                        </div>
                    <?php endif; ?>

                    
                    <div class="w-full md:w-1/2 space-y-4 md:space-y-8">
                        <h3 class="text-[#333333] text-[16px] md:text-[20px]">
                            <?php echo e($program->audience); ?>

                        </h3>

                        <h1 class="text-[#333333] text-[30px] lg:text-[35px]">
                            <?php echo e($program->title); ?>

                        </h1>

                        <p class="text-[#343434] text-[14px] md:text-[18px]">
                            <?php echo e($program->description); ?>

                        </p>

                        <?php if($program->button_text): ?>
                            <a href="<?php echo e($program->button_link ?? '#'); ?>"
                            class="text-[#003f5e] flex gap-2 font-semibold text-[16px] md:text-[18px]">
                                <span class="hover:text-[#0c6c9b]">
                                    <?php echo e($program->button_text); ?>

                                </span>
                                <span class="text-xl">&rarr;</span>
                            </a>
                        <?php endif; ?>
                    </div>

                    
                    <?php if($index % 2 === 0): ?>
                        <div class="hidden md:flex w-full md:w-1/2">
                            <img src="<?php echo e(asset('assets/our_program/' . $program->image)); ?>" alt="">
                        </div>
                    <?php endif; ?>

                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        
        <section class="w-full bg-[#68875d] py-16 px-4 md:px-12 lg:px-24">
            <!-- Title -->
            <h1 class="text-[28px] md:text-[36px] lg:text-[42px] font-semibold leading-tight text-center text-[#ffffff]">
                <?php echo e($getContentProgram[0]->title_2); ?>

            </h1>
            <div class="max-w-6xl mx-auto text-white space-y-10 py-6">

                <!-- Intro paragraph -->
                <p class="text-[16px] md:text-[18px] leading-relaxed max-w-4xl">
                    <?php echo $getContentProgram[0]->description_2; ?>

                </p>

            </div>
        </section>
        
        <section class="relative w-full">
            <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10 px-6 xl:px-50 md:px-16">
                <?php echo e($getContentProgram[0]->title_3); ?>

            </h1>
            <p class="text-[#343434] text-lg max-w-[70%] mx-auto text-left">
                 <?php echo nl2br(e($getContentProgram[0]->description_3)); ?>

            </p>

             <div class="max-w-6xl mx-auto mt-12 border border-gray-300 custom-program-table">
                <?php echo $getContentProgram[0]->table; ?>

            </div>

        </section>
        
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





<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/membership/our-program.blade.php ENDPATH**/ ?>
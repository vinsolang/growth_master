
<?php $__env->startSection('title', 'Become an Execurtive | GrowthMaster'); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.navbar'); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class=" w-full h-[100vh] relative  ">
        <!-- Video Banner -->
        
       
          <?php if(!empty($getBanner) && $getBanner[10]->title === 'lead group'): ?>
                    <img 
                        src="<?php echo e(asset('assets/banner/' . $getBanner[10]->image)); ?>"
                        class="w-full h-full object-cover"
                        alt="Hero Image"
                    >
                <?php endif; ?>

        <!-- Overlay Content -->
        <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-24 text-white bg-black/50">

            <h1 class="text-[22px] text-left md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight">
               <?php if(!empty($getBanner) && $getBanner[10]->title === 'lead group'): ?>
                            <?php echo e($getBanner[10]->name); ?>

                            <?php endif; ?>
            </h1>
            <p class="leading-relaxed text-xl max-w-3xl text-[#ffffff] text-left">
                 <?php if(!empty($getBanner) && $getBanner[10]->title === 'lead group'): ?>
                            <?php echo nl2br(e(value: $getBanner[10]->content)); ?>

                            <?php endif; ?>
            </p>

            <a href="#chair-form">
                <button
                    class="mt-6 py-5 px-8 bg-[#68875d] text-[#ffffff] hover:bg-[#003F5F] hover:text-white rounded font-semibold leading-relaxed tracking-widest uppercase">
                    lead a group
                </button>
            </a>
        </div>
    </div>
    
    <div class="">
        <?php
            $cards = [
                [
                    'image' => asset($getCantent[0]->img_b_1),
                    'text'  => $getCantent[0]->desc_b_1,
                    'title' => $getCantent[0]->title_b_1,
                ],
                [
                    'image' => asset($getCantent[0]->img_b_2),
                    'text'  => $getCantent[0]->desc_b_2,
                    'title' => $getCantent[0]->title_b_2,
                ],
            ];
        ?>
        <div class="flex justify-center items-center min-h-screen">
            <div class="flex flex-col space-y-7 w-full max-w-8xl">
                <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div
                        class="flex flex-col lg:flex-row justify-center items-center lg:space-y-0 space-y-8 w-full px-4 lg:px-24">

                        
                        <div class="flex flex-col justify-center items-start lg:w-1/2 w-full lg:h-[400px] order-2 space-y-10 md:py-0 py-4
                                                    <?php echo e($index % 2 == 0 ? 'lg:order-1' : 'lg:order-2'); ?>">
                            <h1 class="text-[#000000] lg:text-5xl text-2xl font-semibold text-left px-4 md:px-12">
                                <?php echo e($card['title']); ?>

                            </h1>
                            <p class="text-left text-[#454545] md:text-xl text-[18px] px-4 md:px-12">
                              
                                 <?php echo nl2br(e($card['text'])); ?>

                            </p>
                        </div>

                        
                        <div class="lg:w-1/2 w-full lg:h-[90%] order-1 lg:py-4
                                                    <?php echo e($index % 2 == 0 ? 'lg:order-2' : 'lg:order-1'); ?>">
                            <img src="<?php echo e($card['image']); ?>" class="w-full h-full object-cover">
                        </div>

                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

    </div>

    <div class="py-12 max-w-7xl mx-auto space-y-6 text-center">
        <h1 class="text-[#000000] lg:text-4xl text-2xl font-semibold">
            <?php echo e($getCantent[0]->title_1); ?>

        </h1>
        <p class="leading-relaxed text-xl text-[#333333] text-left mx-auto max-w-4xl">
           <?php echo nl2br(e($getCantent[0]->desc_1)); ?>

        </p>

        
        <div class="py-8 max-w-8xl mx-auto space-x-4 space-y-6 grid grid-cols-1 lg:grid-cols-3 h-auto px-4 gap-x-8">
            
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-center">
                    <?php echo e($getCantent[0]->title_cd_1); ?>

                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                      <?php echo nl2br(e($getCantent[0]->d_cd_1)); ?>

                </p>
            </div>

            
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                   <?php echo e($getCantent[0]->title_cd_2); ?>

                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                       <?php echo nl2br(e($getCantent[0]->d_cd_2)); ?>

                </p>
            </div>
            
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                    <?php echo e($getCantent[0]->title_cd_3); ?>

                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                      <?php echo nl2br(e($getCantent[0]->d_cd_3)); ?>

                </p>
            </div>
            <!-- Card 4 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                     <?php echo e($getCantent[0]->title_cd_4); ?>

                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                       <?php echo nl2br(e($getCantent[0]->d_cd_4)); ?>

                </p>
            </div>

            <!-- Card 5 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                    <?php echo e($getCantent[0]->title_cd_5); ?>

                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                       <?php echo nl2br(e($getCantent[0]->d_cd_5)); ?>

                </p>
            </div>
            
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                    <?php echo e($getCantent[0]->title_cd_6); ?>

                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                       <?php echo nl2br(e($getCantent[0]->d_cd_6)); ?>

                </p>
            </div>

            
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full hidden">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                     <?php echo e($getCantent[0]->title_cd_7); ?>

                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                       <?php echo nl2br(e($getCantent[0]->d_cd_7)); ?>

                </p>
            </div>
        </div>
    </div>

    <div class="py-12 max-w-7xl mx-auto space-y-6 text-center">
        <h1 class="text-[#000000] lg:text-4xl text-2xl font-semibold">
             <?php echo e($getCantent[0]->title_2); ?>

        </h1>
        <p class="leading-relaxed text-xl text-[#333333] text-left mx-auto max-w-4xl">
               <?php echo nl2br(e($getCantent[0]->desc_2)); ?>

        </p>

        <div class="max-8xl mx-auto bg-amber-200 text-left">

            <div class="flex">
                <div class="flex justify-center items-center bg-[#608544] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]"> <?php echo e($getCantent[0]->t_t_1); ?></h1>
                </div>
                <div class="flex justify-center items-center bg-[#608544]/90 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                           <?php echo nl2br(e($getCantent[0]->t_d_1)); ?>

                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#608544] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]"> <?php echo e($getCantent[0]->t_t_2); ?></h1>
                </div>
                <div class="flex justify-center items-center bg-[#608544]/90 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        <?php echo nl2br(e($getCantent[0]->t_d_2)); ?>

                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#608544] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]"> <?php echo e($getCantent[0]->t_t_3); ?></h1>
                </div>
                <div class="flex justify-center items-center bg-[#608544]/90 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        <?php echo nl2br(e($getCantent[0]->t_d_3)); ?>

                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="flex justify-center items-center bg-[#608544] w-[25%] h-40">
                    <h1 class="text-[#ffffff] text-xl md:text-3xl md:w-[90%]"> <?php echo e($getCantent[0]->t_t_4); ?></h1>
                </div>
                <div class="flex justify-center items-center bg-[#608544]/90 w-[75%] h-40">
                    <p class="text-white text-[16px] md:text-xl md:w-[90%]">
                        <?php echo nl2br(e($getCantent[0]->t_d_4)); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="py-12 max-w-7xl mx-auto space-y-6 text-center">
        <h1 class="text-[#000000] lg:text-4xl text-2xl font-semibold">
             <?php echo e($getCantent[0]->title_3); ?>

        </h1>
        <p class="leading-relaxed text-xl text-[#333333] text-left mx-auto max-w-4xl px-6">
           <?php echo nl2br(e($getCantent[0]->desc_3)); ?>

        </p>

        
        <div class="py-8 max-w-8xl mx-auto space-x-4 space-y-6 grid grid-cols-1 md:grid-cols-2 h-auto px-4 gap-x-8">
            
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                     <?php echo e($getCantent[0]->t_c_1); ?>

                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                 <?php echo nl2br(e($getCantent[0]->d_c_1)); ?>

                </p>
            </div>

            
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                      <?php echo e($getCantent[0]->t_c_2); ?>

                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                    <?php echo nl2br(e($getCantent[0]->d_c_2)); ?>

                </p>
            </div>
            
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                       <?php echo e($getCantent[0]->t_c_3); ?>

                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                       <?php echo nl2br(e($getCantent[0]->d_c_3)); ?>

                </p>
            </div>
            <!-- Card 4 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                      <?php echo e($getCantent[0]->t_c_4); ?>

                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                       <?php echo nl2br(e($getCantent[0]->d_c_4)); ?>

                </p>
            </div>

            <!-- Card 5 -->
            <div class="bg-[#f5f2f2] p-8 max-w-4xl w-full">
                <h1 class="text-[#000000] text-2xl xl:text-2xl font-bold mb-4 text-left">
                       <?php echo e($getCantent[0]->t_c_5); ?>

                </h1>
                <p class="text-[#333333] text-lg leading-relaxed text-left">
                       <?php echo nl2br(e($getCantent[0]->d_c_5)); ?>

                </p>
            </div>
        </div>
    </div>

    <section class="bg-[#68875d] text-white py-20 px-6">
        <div class="max-w-7xl mx-auto">

            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-20">
                <h1 class="text-4xl md:text-5xl font-semibold mb-6">
                       <?php echo e($getCantent[0]->title_4); ?>

                </h1>
                <p class="text-lg md:text-xl text-white/90 leading-relaxed">
                       <?php echo nl2br(e($getCantent[0]->desc_4)); ?>

                </p>
            </div>

            <!-- CONTENT GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-16">

                <!-- ITEM 1 -->
                <div class="flex gap-6">
                    <div class="shrink-0 text-white text-4xl">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 7a3 3 0 11-6 0 3 3 0 016 0zM12 14v7m-6 0h12" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#ffffff] text-xl font-semibold mb-3">
                              <?php echo e($getCantent[0]->t_bg_1); ?>

                        </h3>
                        <p class="text-white/90 leading-relaxed">
                              <?php echo nl2br(e($getCantent[0]->d_bg_1)); ?>

                        </p>
                    </div>
                </div>

                <!-- ITEM 2 -->
                <div class="flex gap-6">
                    <div class="shrink-0 text-white text-4xl">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12h6m-6 4h6m-6-8h6M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H9l-4 4v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#ffffff] text-xl font-semibold mb-3">
                             <?php echo e($getCantent[0]->t_bg_2); ?>

                        </h3>
                        <p class="text-white/90 leading-relaxed">
                            <?php echo nl2br(e($getCantent[0]->d_bg_2)); ?>

                        </p>
                    </div>
                </div>

                <!-- ITEM 3 -->
                <div class="flex gap-6">
                    <div class="shrink-0 text-white text-4xl">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 8c1.657 0 3-1.343 3-3S13.657 2 12 2 9 3.343 9 5s1.343 3 3 3zM6 22v-2a6 6 0 0112 0v2" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#ffffff] text-xl font-semibold mb-3">
                             <?php echo e($getCantent[0]->t_bg_3); ?>

                        </h3>
                        <p class="text-white/90 leading-relaxed">
                             <?php echo nl2br(e($getCantent[0]->d_bg_3)); ?>

                        </p>
                    </div>
                </div>

                <!-- ITEM 4 -->
                <div class="flex gap-6">
                    <div class="shrink-0 text-white text-4xl">
                        <!-- ICON -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 12a4 4 0 100-8 4 4 0 000 8zM2 20h20M4 20a8 8 0 0116 0" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-[#ffffff] text-xl font-semibold mb-3">
                             <?php echo e($getCantent[0]->t_bg_4); ?>

                        </h3>
                        <p class="text-white/90 leading-relaxed">
                             <?php echo nl2br(e($getCantent[0]->d_bg_4)); ?>

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    
    <section>
        <h1 class="text-[#000000] text-2xl md:text-4xl text-center font-semibold py-6">
            Apply to Become a Growth Master Chair
        </h1>
        <p class="text-md md:text-lg text-[#333333] max-w-4xl mx-auto">
            Growth Master Chairs mentor high-integrity executives, helping them make better decisions, 
            become better leaders and achieve better results. To learn more about this opportunity, 
            complete this short form and upload your resume/CV/biography. Our Chair selection team will contact you.
        </p>
        <div class="max-w-4xl mx-auto py-6">
            <!-- Preferred Experience -->
            <h2 class="text-2xl text-gray-900 mb-4">
                Most Chairs have these qualities:
            </h2>

            <ul class="list-disc pl-6 space-y-3 text-[#333333] leading-relaxed text-md md:text-lg">
                <li>P&L responsibility exceeding $5 million</li>
                <li>10+ years of executive experience</li>
                <li>25+ people leader</li>
                <li>Strong business acumen, communication skills, high EQ</li>
                <li>Availability and drive to build their own business</li>
            </ul>
        </div>

        <div id="">
            <form action="<?php echo e(route('chair.contact.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="max-w-7xl mx-auto p-6" id="chair-form">
                    <!-- ================= Chair Contact Form ================= -->
                    <h2 class="text-xl font-semibold mb-2">Chair Contact Form</h2>
                    <hr class="mb-6 w-1/2 border-gray-300">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">

                        <!-- First Name -->
                        <div>
                            <input name="firstname" type="text" value="<?php echo e(old('firstname')); ?>"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="First name*">
                            <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Last Name -->
                        <div>
                            <input type="text" name="lastname" value="<?php echo e(old('lastname')); ?>"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="Last name*">
                            <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Business Email -->
                        <div>
                            <input type="email" name="email" value="<?php echo e(old('email')); ?>"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="Email Address">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Mobile Phone -->
                        <div>
                            <input type="tel" name="phone" value="<?php echo e(old('phone')); ?>"
                                class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="Phone*">
                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <select name="member_status" id="" class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                            <option value="">Former/Current Growth Master Member*</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <select name="executive_experience" id="" class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                            <option value="">C-level executive experience*</option>
                            <option value="0-10">0-10</option>
                            <option value="16-20">16-20</option>
                            <option value="20+">20+</option>
                        </select>
                        <select name="staff"
                            class="w-full h-12 bg-[#e9eff2] text-gray-600 rounded-md px-4 focus:outline-none font-semibold">
                            
                            <option value="">Most employees managed*</option>

                            <option value="1-5" <?php echo e(old('staff') == '1-5' ? 'selected' : ''); ?>>1 - 5</option>
                            <option value="6-10" <?php echo e(old('staff') == '6-10' ? 'selected' : ''); ?>>6 - 10</option>
                            <option value="11-20" <?php echo e(old('staff') == '11-20' ? 'selected' : ''); ?>>11 - 20</option>
                            <option value="21-40" <?php echo e(old('staff') == '21-40' ? 'selected' : ''); ?>>21 - 40</option>
                            <option value="41-70" <?php echo e(old('staff') == '41-70' ? 'selected' : ''); ?>>41 - 70</option>
                            <option value="71-100" <?php echo e(old('staff') == '71-100' ? 'selected' : ''); ?>>71 - 100</option>
                            <option value="100 Above" <?php echo e(old('staff') == '100 Above' ? 'selected' : ''); ?>>100 Above</option>
                        </select>
                    </div>
                    <hr class="bg-[#333333] w-full mt-8">
                    <div class="py-6 md:w-[50%]">
                        <label for="">Pleaser provide a link to your LinkedIn Profile.</label>
                        <input type="text" name="link" value="<?php echo e(old('link')); ?>"
                            class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none" placeholder="https://linkedin.com">
                        <?php $__errorArgs = ['link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <p class="text-[#333333] text-lg">OR</p>
                    <div class="py-6 md:w-[50%]">
                        <label for="">Upload your resume or executive bio:</label>
                        <input type="file" name="cv" value="<?php echo e(old('cv')); ?>"
                            class="w-full h-12 bg-[#e9eff2] rounded-md px-4 focus:outline-none">
                        <?php $__errorArgs = ['cv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <label for="">Max. file size: 20 MB.</label>
                    </div>
                    <div class="py-6 md:w-[50%]">
                        <textarea name="comment" id="" placeholder="comments" class="w-full bg-[#e9eff2] rounded-md px-4 focus:outline-none" rows="6"></textarea>
                        <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <p class="text-[#333333] text-lg">*Indicates Response Required</p>
                </div>

                <div class="flex justify-center text-xl mt-10">
                    <button type="submit"
                        class="inline-flex items-center justify-center w-72 h-14 bg-[#68875d] text-[#ffffff] font-semibold uppercase cursor-pointer">
                        Become a member
                    </button>
                </div>
            </form>
        </div>
    </section>

    
    <div class="text-[#000000] max-w-7xl mx-auto text-center text-3xl md:text-4xl xl:text-4xl px-4 py-8">
        <h1> <?php echo e($getCantent[0]->title_5); ?></h1>
    </div>
    <div class="text-[#000000] max-w-7xl mx-auto text-center text-2xl md:text-3xl xl:text-3xl px-4">
        <h1> <?php echo nl2br(e($getCantent[0]->desc_5)); ?></h1>
    </div>

    
    <section class="max-w-[90%] mx-auto px-6 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">

            <!-- LEFT CARD -->
            <div class="bg-white rounded-lg shadow-md border border-gray-200 p-10 text-center">
                <!-- Avatar -->
                <div class="flex justify-center mb-6">
                    <img
                        src="<?php echo e(asset($getCantent[0]->profile_him)); ?>"
                        alt="Ola Sage"
                        class="w-64 h-64 rounded-full object-cover"
                    />
                </div>

                <!-- Name -->
                <h2 class="text-2xl font-semibold text-gray-900 mb-2">
                  <?php echo e($getCantent[0]->name); ?>

                </h2>

                <!-- Meta -->
                <p class="text-gray-700 font-medium">
                     <?php echo nl2br(e($getCantent[0]->position)); ?>

                </p>
                

                <!-- Quote -->
                <p class="text-gray-600 text-lg leading-relaxed italic">
                    <?php echo nl2br(e($getCantent[0]->desc_him)); ?>

                </p>
            </div>

            <!-- RIGHT VIDEO -->
            <div class="lg:col-span-2">
                <div class="relative rounded-lg overflow-hidden shadow-lg bg-black">
                    <video
                        controls
                        class="w-full h-[480px] object-cover"
                        poster="https://cac-center.edu.kh/wp-content/uploads/2017/12/476130730_610434091608946_2648315335922836771_n-1280x800.jpg"
                    >
                        <source src="<?php echo e(asset($getCantent[0]->vdo)); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <!-- Caption -->
                <p class="mt-4 text-gray-800 text-2xl font-semibold">
                     <?php echo e($getCantent[0]->title_v); ?>

                </p>
                <p class="mt-4 text-gray-800 text-xl font-normal">
                     <?php echo nl2br(e($getCantent[0]->desc_v)); ?>

                </p>
            </div>

        </div>
    </section>




   <div class="py-16">
     <?php $__env->startComponent('components.footer'); ?>

    <?php echo $__env->renderComponent(); ?>
   </div>
<script>
    document.querySelector('input[name="cv"]').addEventListener('change', e => {
    const file = e.target.files[0];
    if (file && file.size > 20 * 1024 * 1024) {
        alert('File must be under 20MB');
        e.target.value = '';
    }
});

</script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/chair/lead-group.blade.php ENDPATH**/ ?>
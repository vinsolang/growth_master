<div class="w-full mx-auto flex flex-col md:flex-row justify-center items-start space-x-6 space-y-12 px-4">
    
    <div class="space-y-2 relative top-4">
        <div class="flex flex-col justify-center items-center">
           <!-- Vision SVG Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" 
                class="w-24 h-24 text-blue-900"
                fill="none" 
                viewBox="0 0 24 24" 
                stroke="currentColor" 
                stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5
                    c4.477 0 8.268 2.943 9.542 7
                    -1.274 4.057-5.065 7-9.542 7
                    -4.477 0-8.268-2.943-9.542-7z" />
                <circle cx="12" cy="12" r="3" />
            </svg>
            <h1 class="text-3xl md:text-4xl font-bold text-left text-blue-900"><?php echo e($getContent[0]->title_v); ?></h1>
        </div>
        <p class="max-w-xl text-xl text-blue-900">
             <?php echo nl2br(e(value: $getContent[0]->desc_v)); ?>

        </p>
    </div>
    
    <div class="space-y-2">
        <div class="flex flex-col justify-center items-center">
            <!-- Mission SVG Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" 
                class="w-24 h-24 text-blue-900"
                fill="none" 
                viewBox="0 0 24 24" 
                stroke="currentColor" 
                stroke-width="1.8">
                <circle cx="12" cy="12" r="9" />
                <circle cx="12" cy="12" r="5" />
                <circle cx="12" cy="12" r="2" />
            </svg>
            <h1 class="text-3xl md:text-4xl font-bold text-left text-blue-900"><?php echo e($getContent[0]->title_m); ?></h1>
        </div>
        <p class="max-w-xl text-xl text-blue-900">
          <?php echo nl2br(e(value: $getContent[0]->desc_m)); ?>

        </p>
    </div>
</div>

<div class="px-8">
    <div class="flex flex-col justify-center items-center">
        <!-- Core Value SVG Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="w-24 h-24 text-blue-900"
             fill="none" 
             viewBox="0 0 24 24" 
             stroke="currentColor" 
             stroke-width="1.8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M6 3h12l3 5-9 13L3 8l3-5z" />
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 8h18M9 3l3 5 3-5" />
        </svg>
        <h1 class="text-3xl md:text-4xl font-bold text-left text-blue-900"><?php echo e($getContent[0]->title_c); ?>

    </div>
    <!-- Grid -->
    <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 place-items-start">

        <!-- S -->
        <div class="bg-white rounded-2xl p-6 ">
            <h2 class="text-2xl font-bold text-blue-900 mb-3"><?php echo e($getContent[0]->sub_t_1); ?></h2>
            <p class="text-xl text-blue-900">
                <?php echo nl2br(e(value: $getContent[0]->text_1)); ?>

            </p>
        </div>

        <!-- H -->
        <div class="bg-white rounded-2xl p-6 ">
            <h2 class="text-2xl font-bold text-blue-900 mb-3"><?php echo e($getContent[0]->sub_t_2); ?></h2>
            <p class="text-xl text-blue-900">
                  <?php echo nl2br(e(value: $getContent[0]->text_2)); ?>

            </p>
        </div>

        <!-- A -->
        <div class="bg-white rounded-2xl p-6 ">
            <h2 class="text-2xl font-bold text-blue-900 mb-3"><?php echo e($getContent[0]->sub_t_3); ?></h2>
            <p class="text-xl text-blue-900">
                <?php echo nl2br(e(value: $getContent[0]->text_3)); ?>

            </p>
        </div>

        <!-- R -->
        <div class="bg-white rounded-2xl p-6 ">
            <h2 class="text-2xl font-bold text-blue-900 mb-3"><?php echo e($getContent[0]->sub_t_4); ?></h2>
            <p class="text-xl text-blue-900">
                 <?php echo nl2br(e(value: $getContent[0]->text_4)); ?>

            </p>
        </div>

        <!-- E -->
        <div class="bg-white rounded-2xl p-6  md:col-span-2 lg:col-span-1">
            <h2 class="text-2xl font-bold text-blue-900 mb-3"><?php echo e($getContent[0]->sub_t_5); ?></h2>
            <p class="text-xl text-blue-900">
                  <?php echo nl2br(e(value: $getContent[0]->text_5)); ?>

            </p>
        </div>

    </div>
</div><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/include/vis-mis-core.blade.php ENDPATH**/ ?>
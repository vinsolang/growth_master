
<?php $__env->startSection('title', 'Peer Advisory Groups'); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.navbar'); ?>

    <?php echo $__env->renderComponent(); ?>
    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-screen relative">
                <!-- Hero Image -->
                
                <?php if(!empty($getBanner) && $getBanner[2]->title === 'our approach'): ?>
                    <img 
                        src="<?php echo e(asset('assets/banner/' . $getBanner[2]->image)); ?>"
                        class="w-full h-full object-cover"
                        alt="Hero Image"
                    >
                <?php endif; ?>

                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-24 text-white md:bg-none bg-black/50">

                    <h1
                        class="text-[22px] text-start md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight">
                           <?php if(!empty($getBanner) && $getBanner[2]->title === 'our approach'): ?>
                            <?php echo e($getBanner[2]->name); ?>

                            <?php endif; ?>
                    </h1>

                    <p
                        class="text-[16px] text-start md:text-[18px] mt-5 lg:text-[25px] font-medium max-w-[940px] leading-tight">
                        <?php if(!empty($getBanner) && $getBanner[2]->title === 'our approach'): ?>
                            <?php echo nl2br(e(value: $getBanner[2]->content)); ?>

                            <?php endif; ?>
                    </p>

                  

                    <a href="#approach-form">
                        <button
                        class="mt-6 py-5 px-7 bg-[#68875d] text-[#ffffff] hover:bg-[#003F5F] hover:text-white rounded font-semibold w-max">
                        JOIN A GROUP
                    </button>
                    </a>
                </div>
            </div>

            <div class="flex flex-col justify-center  items-center mt-10  gap-10">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10"><?php echo e($getContent[0]->title); ?></h1>
                <p
                    class="text-start text-[#343434] mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    <?php echo nl2br(e($getContent[0]->content)); ?>

                </p>
            </div>

            <div class="relative mt-10 space-y-8">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-14"><?php echo e($getContent[0]->title_on_card); ?></h1>
                <div class="flex flex-col md:flex-col lg:flex-row justify-center items-center gap-8">
                    
                    <div class="bg-[#68875d] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/Group-91.png" alt="">
                        </div>
                        <div class="text-center text-[#ffffff] text-[22px] px-8 py-2">
                            <h2><?php echo e($getContent[0]->title_card_1); ?></h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p>
                                <?php echo nl2br(e($getContent[0]->desc_card_1)); ?>

                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-[#68875d] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/Group-84.png" alt="">
                        </div>
                        <div class="text-center text-[#ffffff] text-[22px] px-8 py-2">
                            <h2><?php echo e($getContent[0]->title_card_2); ?></h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p><?php echo nl2br(e($getContent[0]->desc_card_2)); ?></p>
                        </div>
                    </div>
                    
                    <div class="bg-[#68875d] w-[380px] h-[600px] space-y-4 py-10">
                        <div class="flex justify-center items-center">
                            <img src="https://www.vistage.com/wp-content/uploads/2025/09/Group-89.png" alt="">
                        </div>
                        <div class="text-center text-[#ffffff] text-[22px] px-8 py-2">
                            <h2><?php echo e($getContent[0]->title_card_3); ?></h2>
                        </div>
                        <div class="text-[#ffffff] text-[17px] text-left px-10 py-8">
                            <p><?php echo nl2br(e($getContent[0]->desc_card_3)); ?></p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-10">
                    <a href="#approach-form">
                        <button class="group py-5 px-[25px] text-[16px] md:text-[18px] border-2 border-[#68875d]
                                text-[#68875d] bg-white rounded 
                                transition-all duration-300 ease-in-out
                                hover:bg-[#68875d] hover:text-white font-semibold">
                        JOIN A GROUP

                        <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    </button>
                    </a>
                </div>
            </div>

            <div class="flex flex-col  justify-center items-center mt-10 gap-10">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10">
                    <?php echo e($getContent[0]->title_1); ?>

                </h1>
                <p
                    class="text-start text-[#343434] mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                   <?php echo nl2br(e($getContent[0]->content_1)); ?>

                </p>
            </div>

            
            <div class="relative w-full space-y-12 py-8">
               
                <?php $__currentLoopData = $showApproach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div
                        class="flex flex-col md:flex-row justify-center items-center gap-8
                        py-4 px-4 xl:py-16 xl:px-35
                        <?php echo e($index % 2 === 0 ? 'bg-[#f5f2f2]' : ''); ?>">

                        
                        <?php if($index % 2 !== 0): ?>
                            <div class="w-full md:w-1/2">
                                <img src="<?php echo e(asset('assets/how_it_work/'. $section->image )); ?>" alt="">
                            </div>
                        <?php endif; ?>

                        
                        <div class="w-full md:w-1/2 space-y-3">
                            <h1 class="text-[#000000] text-[16px] md:text-[20px]">
                                <?php echo e($index + 1); ?>. <?php echo e($section->title); ?>

                            </h1>

                            <p class="text-[#343434] text-[14px] md:text-[18px]">
                                <?php echo e($section->description); ?>

                            </p>

                            <a href="#" class="text-[#003f5e] flex gap-2 font-semibold">
                                <span class="hover:text-[#0c6c9b]"><?php echo e($section->button_text); ?></span>
                                <span class="arrow_r">&rarr;</span>
                            </a>
                        </div>

                        
                        <?php if($index % 2 === 0): ?>
                            <div class="w-full md:w-1/2">
                                <img src="<?php echo e(asset('assets/how_it_work/'. $section->image )); ?>" alt="">
                            </div>
                        <?php endif; ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            <div class="flex justify-center items-center mt-10">
                    <a href="#approach-form">
                        <button class="group py-5 px-[25px] text-[16px] md:text-[18px] border-2 border-[#68875d]
                                text-[#68875d] bg-white rounded 
                                transition-all duration-300 ease-in-out
                                hover:bg-[#68875d] hover:text-white font-semibold">
                        JOIN A GROUP

                        <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    </button>
                    </a>
                </div>
            <div class="relative w-full space-y-4">
                <h1 class="text-center text-[#000000] text-[20px] md:text-[30px] mt-10 px-6 xl:px-50 md:px-16">
                   <?php echo e($getContent[0]->title_2); ?>

                </h1>
                <p
                    class="text-start text-[#343434] font-regular text-[14px] md:text-[18px] px-6 xl:px-50 md:px-16">
                   <?php echo nl2br(e($getContent[0]->created_at)); ?>

                </p>
                
              <?php $__currentLoopData = $showHelpSection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="c-accordion__item py-4 px-6 md:px-16 xl:px-50">

                    <!-- Header -->
                    <div
                        class="flex items-center justify-between cursor-pointer accordion-trigger"
                        aria-expanded="false"
                        aria-controls="accordion-panel-<?php echo e($index); ?>"
                        id="accordion-trigger-<?php echo e($index); ?>"
                    >
                        <h1 class="text-[#000000] text-[16px] md:text-[24px]">
                            <?php echo e($item->question); ?>

                        </h1>

                        <div class="flex items-center justify-center w-8 h-8">
                            <span class="plus text-2xl">+</span>
                            <span class="minus hidden text-2xl">−</span>
                        </div>
                    </div>

                    <!-- Panel -->
                    <div
                        id="accordion-panel-<?php echo e($index); ?>"
                        class="accordion-panel overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out mt-2"
                    >
                        <div class="py-4 text-[#343434] text-[14px] md:text-[18px]">
                            <?php echo $item->answer; ?>

                        </div>
                    </div>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            
            <div class="relative w-full">
                <?php echo $__env->make('frontend.include.faqs', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        </section>
        
        <section class="relative w-full">
            
            
                <?php echo $__env->make('frontend.include.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
        </section>
        <div>
            <?php $__env->startComponent('components.footer'); ?>

            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>

    
<script>
    document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.accordion-trigger').forEach(trigger => {

    trigger.addEventListener('click', () => {
      const panel = document.getElementById(trigger.getAttribute('aria-controls'));
      const isOpen = trigger.getAttribute('aria-expanded') === 'true';

      document.querySelectorAll('.accordion-trigger').forEach(btn => {
        btn.setAttribute('aria-expanded', 'false');
        const otherPanel = document.getElementById(btn.getAttribute('aria-controls'));
        otherPanel.style.maxHeight = null;
        otherPanel.classList.remove('opacity-100');
        otherPanel.classList.add('opacity-0');

        btn.querySelector('.plus').classList.remove('hidden');
        btn.querySelector('.minus').classList.add('hidden');
      });

      if (!isOpen) {
        trigger.setAttribute('aria-expanded', 'true');
        panel.style.maxHeight = panel.scrollHeight + "px";
        panel.classList.remove('opacity-0');
        panel.classList.add('opacity-100');

        trigger.querySelector('.plus').classList.add('hidden');
        trigger.querySelector('.minus').classList.remove('hidden');
      }
    });

  });
});

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/membership/our-aproach.blade.php ENDPATH**/ ?>
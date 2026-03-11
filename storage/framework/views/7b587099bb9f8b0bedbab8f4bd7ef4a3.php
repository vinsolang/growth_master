
<?php $__env->startSection('title', 'Become a Speaker'); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.navbar'); ?>

    <?php echo $__env->renderComponent(); ?>
    <div class="space-y-10">
        <section class="relative w-full">
            <div class="w-full h-screen relative">
                <!-- Hero Image -->
                
                <?php if(!empty($getBanner) && $getBanner[23]->title === 'Become a Speaker'): ?>
                    <img src="<?php echo e(asset('assets/banner/' . $getBanner[23]->image)); ?>" class="w-full h-full object-cover"
                        alt="Hero Image">
                <?php endif; ?>

                <!-- Overlay Content -->
                <div
                    class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-16 lg:px-24 text-white md:bg-none bg-black/50">

                    <h1
                        class="text-[22px] text-start md:text-[35px] lg:text-[45px] font-semibold max-w-[940px] leading-tight">
                        <?php if(!empty($getBanner) && $getBanner[23]->title === 'Become a Speaker'): ?>
                            <?php echo e($getBanner[23]->name); ?>

                        <?php endif; ?>
                    </h1>

                    <p
                        class="text-[16px] text-start md:text-[18px] mt-5 lg:text-[25px] font-medium max-w-[940px] leading-tight">
                        <?php if(!empty($getBanner) && $getBanner[23]->title === 'Become a Speaker'): ?>
                            <?php echo nl2br(e(value: $getBanner[23]->content)); ?>

                        <?php endif; ?>
                    </p>

                </div>
            </div>

            <div class="flex flex-col justify-center items-center mt-10 gap-2 py-4">
                <h1 class="text-center text-blue-900 text-[20px] md:text-[30px]">
                    <?php echo e($getText->title_1); ?>

                </h1>
                <p
                    class="text-start text-blue-900 mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    <?php echo nl2br($getText->desc_1); ?>

                </p>
            </div>
            <div class="bg-[#2A2D79] w-full h-auto p-12 text-white">
                <h1 class="text-center text-[20px] md:text-[35px] mt-10 pb-6"><?php echo e($getText->title_2); ?></h1>
                <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 text-lg">
                   <?php $__currentLoopData = json_decode($getText->text_json ?? '[]', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="flex justify-start items-center">
                            <p><?php echo e($text); ?></p>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                </div>
            </div>

            <div class="max-w-6xl mx-auto px-6">

                <!-- Title -->
                <h2 class="text-center text-3xl md:text-4xl text-blue-900 font-semibold m-12">
                      <?php echo e($getText->title_3); ?>

                </h2>

                <!-- Cards -->
                <div class="grid md:grid-cols-2 gap-10">
                      <?php $__currentLoopData = $getText->card_json ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cards): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Card 1 -->
                    <div class="bg-[#2A2D79] text-white text-center px-10 py-16 flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl md:text-3xl mb-6 font-medium">
                                <?php echo e($cards['title']); ?>

                            </h3>

                            <p class="text-lg leading-relaxed max-w-md mx-auto">
                               <?php echo nl2br($cards['desc']); ?>

                            </p>
                        </div>

                        <div class="mt-14">
                            <a href="<?php echo e(route('chair.application')); ?>"
                                class="bg-[#e8000c] text-white font-semibold tracking-widest px-10 py-4">
                                GET STARTED
                            </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>

            
            <div class="flex flex-col justify-center  items-center mt-10 gap-2">
                <p
                    class="text-start text-blue-900 mx-[40px] xl:mx-[250px] md:mx-[100px] font-regular text-[14px] md:text-[18px]">
                    <?php echo $getText->desc_3; ?>

                </p>
            </div>

            <div class="flex justify-center items-center py-8">
                <a href="<?php echo e(route('membership')); ?>" class="flex justify-center items-center text-[#e8000c] text-lg border border-[#e8000c] w-52 h-12">
                    Explore Membership
                </a>
            </div>

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
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/apply-cac/become-a-speaker.blade.php ENDPATH**/ ?>
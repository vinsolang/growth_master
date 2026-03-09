
<?php $__env->startSection('title', $getMenu[0]->menu_20); ?>
<?php $__env->startSection('content'); ?>
    <div id="eventPage" class="space-y-45">
        <?php $__env->startComponent('components.navbar'); ?>
        <?php echo $__env->renderComponent(); ?>

        <div class="relative w-full h-[50vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            
              <?php if(!empty($getBanner) && $getBanner[22]->title === '4B'): ?>
                    <img 
                        src="<?php echo e(asset('assets/banner/' . $getBanner[22]->image)); ?>"
                        class="w-full h-full object-cover px-4 md:px-8 xl:px-12"
                        alt="Hero Image"
                    >
                <?php endif; ?>

            <!-- Dark overlay (matches image exactly) -->
            

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white bg-black/50">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    <?php if(!empty($getBanner) && $getBanner[22]->title === '4B'): ?>
                            <?php echo e($getBanner[22]->name); ?>

                            <?php endif; ?>
                </h1>

                <p
                    class="text-[18px] md:text-[30px] lg:text-[40px] font-normal max-w-6xl leading-tight mb-3 md:px-10 xl:px-12 md:py-12">
                      <?php if(!empty($getBanner) && $getBanner[22]->title === '4B'): ?>
                            <?php echo nl2br(e(value: $getBanner[22]->content)); ?>

                            <?php endif; ?>
                </p>
            </div>
        </div>
        <div class="space-y-10">
            
            <div class="space-y-6">
                <p class="max-w-7xl mx-auto text-left text-blue-900 font-regular text-[17px] md:text-[20px] px-4">
                     <?php echo nl2br(e(value: $getItem->description)); ?>

                </p>  
            </div>
            
            <div class="text-blue-900 max-w-7xl mx-auto text-center text-3xl md:text-4xl xl:text-5xl px-4">
                <h1> <?php echo nl2br(e(value: $getItem->title)); ?></h1>
            </div>

            <div class="max-w-6xl mx-auto flex flex-col justify-center items-center gap-8">

                <?php $__currentLoopData = $getItem->title_card; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="flex md:flex-row flex-col w-full bg-white border border-gray-200 rounded-lg overflow-hidden">

                    <!-- Image -->
                    <div class="w-full md:w-[320px] md:h-[220px] flex-shrink-0">
                        <img src="<?php echo e(asset($getItem->img_card[$index] ?? '')); ?>"
                            alt="Accounting Block"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Content -->
                    <div class="p-6 flex-1">

                        <h3 class="text-blue-900 font-bold text-xl mb-4">
                            <?php echo nl2br(e($title)); ?>

                        </h3>

                        <p class="text-blue-900 text-base leading-relaxed">
                            <?php echo nl2br(e($getItem->desc_card[$index] ?? '')); ?>

                        </p>

                    </div>

                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            
            <div>
                <?php echo $__env->make('frontend.include.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>

            <?php $__env->startComponent('components.footer'); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menu = document.getElementById("growthMenu");
            const wrapper = document.getElementById("growthMenuWrapper");
            const offsetTop = wrapper.offsetTop;

            window.addEventListener("scroll", () => {
                if (window.scrollY >= offsetTop - 64) {
                    menu.classList.add(
                        "fixed",
                        "top-24",
                        "left-0",
                        "w-full",
                        "z-40",
                        "shadow-md"
                    );
                } else {
                    menu.classList.remove(
                        "fixed",
                        "top-24",
                        "left-0",
                        "w-full",
                        "z-40",
                        "shadow-md"
                    );
                }
            });
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/about/4b.blade.php ENDPATH**/ ?>
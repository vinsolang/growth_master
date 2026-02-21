
<?php $__env->startSection('title', 'About Growth Master'); ?>
<?php $__env->startSection('content'); ?>
    <div id="eventPage" class="space-y-45">
        <?php $__env->startComponent('components.navbar'); ?>
        <?php echo $__env->renderComponent(); ?>

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            
              <?php if(!empty($getBanner) && $getBanner[9]->title === 'climb'): ?>
                    <img 
                        src="<?php echo e(asset('assets/banner/' . $getBanner[9]->image)); ?>"
                        class="w-full h-full object-cover px-4 md:px-8 xl:px-12"
                        alt="Hero Image"
                    >
                <?php endif; ?>

            <!-- Dark overlay (matches image exactly) -->
            

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white bg-black/50">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    <?php if(!empty($getBanner) && $getBanner[9]->title === 'climb'): ?>
                            <?php echo e($getBanner[9]->name); ?>

                            <?php endif; ?>
                </h1>

                <p
                    class="text-[25px] md:text-[45px] lg:text-[55px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-20">
                      <?php if(!empty($getBanner) && $getBanner[9]->title === 'climb'): ?>
                            <?php echo nl2br(e(value: $getBanner[9]->content)); ?>

                            <?php endif; ?>
                </p>
            </div>
        </div>
        <div class="space-y-10">
            
            <div class="space-y-6">
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                     <?php echo nl2br(e(value: $getItem[0]->description)); ?>

                </p>
            </div>
            
            <div class="text-[#000000] max-w-7xl mx-auto text-center text-3xl md:text-4xl xl:text-5xl px-4">
                <h1> <?php echo nl2br(e(value: $getItem[0]->title)); ?></h1>
            </div>

            <div class="flex flex-col md:flex-row justify-center items-center gap-8">
                <!-- Card 1 -->
                <div class="w-full md:max-w-sm lg:h-[500px] bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <!-- Image -->
                    <div class="h-[220px] w-full overflow-hidden">
                        <img src="<?php echo e(asset('storage/' . $getItem[0]->img_card_1)); ?>" alt="Growing faster"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-[#003a5d] font-bold text-xl leading-snug mb-4">
                               <?php echo nl2br(e(value: $getItem[0]->title_card_1)); ?>

                        </h3>

                        <p class="text-gray-600 text-base leading-relaxed">
                               <?php echo nl2br(e(value: $getItem[0]->desc_card_1)); ?>

                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-full md:max-w-sm lg:h-[500px] bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <!-- Image -->
                    <div class="h-[220px] w-full overflow-hidden">
                        <img src="<?php echo e(asset('storage/' . $getItem[0]->img_card_2)); ?>" alt="Growing faster"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-[#003a5d] font-bold text-xl leading-snug mb-4">
                        <?php echo nl2br(e(value: $getItem[0]->title_card_2)); ?>

                        </h3>

                        <p class="text-gray-600 text-base leading-relaxed">
                         <?php echo nl2br(e(value: $getItem[0]->desc_card_2)); ?>

                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-full md:max-w-sm lg:h-[500px] bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <!-- Image -->
                    <div class="h-[220px] w-full overflow-hidden">
                        <img src="<?php echo e(asset('storage/' . $getItem[0]->img_card_3)); ?>" alt="Growing faster"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Content -->
                    <div class="p-6">
                        <h3 class="text-[#003a5d] font-bold text-xl leading-snug mb-4">
                           <?php echo nl2br(e(value: $getItem[0]->title_card_3)); ?>

                        </h3>

                        <p class="text-gray-600 text-base leading-relaxed">
                          <?php echo nl2br(e(value: $getItem[0]->desc_card_3)); ?>

                        </p>
                    </div>
                </div>

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
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/about/ceo-climp.blade.php ENDPATH**/ ?>

<?php $__env->startSection('title',  $getMenu[0]->menu_13); ?>
<?php $__env->startSection('content'); ?>
    <div id="eventPage" class="space-y-45">
        <?php $__env->startComponent('components.navbar'); ?>
        <?php echo $__env->renderComponent(); ?>

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            
            <?php if(!empty($getBanner) && $getBanner[7]->title === 'about'): ?>
                    <img 
                        src="<?php echo e(asset('assets/banner/' . $getBanner[7]->image)); ?>"
                        class="w-full h-full object-cover px-4 md:px-8 xl:px-12"
                        alt="Hero Image"
                    >
                <?php endif; ?>

            <!-- Dark overlay (matches image exactly) -->
            

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white bg-black/50">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                     <?php if(!empty($getBanner) && $getBanner[7]->title === 'about'): ?>
                            <?php echo e($getBanner[7]->name); ?>

                            <?php endif; ?>
                </h1>

                <p
                    class="text-[25px] md:text-[45px] lg:text-[55px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-20">
                      <?php if(!empty($getBanner) && $getBanner[7]->title === 'about'): ?>
                            <?php echo nl2br(e(value: $getBanner[7]->content)); ?>

                            <?php endif; ?>
                </p>
            </div>
        </div>
        <div class="space-y-10">
            <!-- SPACER for navbar -->
            <div class=""></div>
            
            
            

            
            <div class="space-y-6">
                
                <h1 class="text-blue-900 max-w-7xl mx-auto text-left text-3xl md:text-4xl xl:text-5xl px-4">
                    <?php echo nl2br(e(value: $getContent[0]->title)); ?>

                </h1>
                <p class="max-w-7xl mx-auto text-left text-blue-900 font-regular text-[17px] md:text-[20px] px-4">
                    <?php echo nl2br(e(value: $getContent[0]->desc)); ?>

                </p>
            </div>
            
            

            
            

            
            <div class="py-12">
                <?php echo $__env->make('frontend.include.vis-mis-core', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>


            
            
            
        

            
            <div class="space-y-6">
                <h1 class="text-blue-900 md:max-w-7xl mx-auto md:text-left text-center text-3xl md:text-4xl xl:text-5xl px-4">
                   <?php echo nl2br(e(value: $getContent[0]->title_1)); ?>

                </h1>
                <p class="max-w-7xl mx-auto text-left text-blue-900 font-regular text-[17px] md:text-[20px] px-4">
                   <?php echo nl2br(e(value: $getContent[0]->desc_2)); ?>

                </p>
              
                
                <div>
                    <?php echo $__env->make('frontend.include.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
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
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/about/about.blade.php ENDPATH**/ ?>
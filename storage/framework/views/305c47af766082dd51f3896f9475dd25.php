
<?php $__env->startSection('title', 'What is Growth Master?'); ?>
<?php $__env->startSection('content'); ?>
    <div id="eventPage" class="space-y-45">
        <?php $__env->startComponent('components.navbar'); ?>
        <?php echo $__env->renderComponent(); ?>

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            <img src="https://cac-center.edu.kh/wp-content/uploads/2017/12/476130730_610434091608946_2648315335922836771_n-1280x800.jpg"
                class="w-full h-full object-cover px-4 md:px-8 xl:px-12">

            <!-- Dark overlay (matches image exactly) -->
            

            <!-- Text content (padding allowed here) -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white bg-black/50">

                <h1 class="text-[16px] md:text-[18px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    What is Growth Master?
                </h1>

                <p
                    class="text-[25px] md:text-[45px] lg:text-[55px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-20">
                    Growth Master helps CEOs make better decisions by bringing leaders together.
                </p>

            </div>
        </div>
        <div class="space-y-10">
            <!-- SPACER for navbar -->
            <div class=""></div>
            
            <!-- BUTTON SECTION -->
            

            
            <div class="space-y-6">
                
                <h1 class="text-[#000000] max-w-7xl mx-auto text-left text-3xl md:text-4xl xl:text-5xl px-4">
                    Helping high-integrity leaders make great decisions that benefit their companies, families and communities.
                </h1>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    Growth Master is the world’s largest executive coaching organization for small and midsize businesses.
                    For more than 65 years we’ve been helping CEOs, business owners and key executives solve their toughest
                    challenges through a comprehensive approach to success. At the heart of our proven formula is
                    confidential peer advisory groups and executive coaching sessions.
                </p>
            </div>
            
            
            <div class="py-12">
                <?php echo $__env->make('frontend.include.vis-mis-core', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>

            
            
            
            

            
            

            
            <div class="space-y-6">
                <h1 class="text-[#000000] md:max-w-7xl mx-auto md:text-left text-center text-3xl md:text-4xl xl:text-5xl px-4">
                    Inquire About Membership
                </h1>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    With Growth Master you’re joining a powerful community of high-caliber 
                    executives who challenge each other, inspire each other and share 
                    their perspectives to help each other make better decisions, 
                    become better leaders and achieve better outcomes.
                </p>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    Take your success to a new level. Complete the form below to find out if you qualify.
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
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/about/what-is-growth.blade.php ENDPATH**/ ?>
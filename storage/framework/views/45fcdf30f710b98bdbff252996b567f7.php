
<?php $__env->startSection('title', 'Growth Master | Per-to-Per'); ?>
<?php $__env->startSection('content'); ?>
    <div id="eventPage" class="space-y-45">
        <?php $__env->startComponent('components.navbar'); ?>
        <?php echo $__env->renderComponent(); ?>

        <div class="relative w-full h-[40vh] md:h-screen top-24">

            <!-- Background Image (NO padding!) -->
            
            <?php if(!empty($getBanner) && $getBanner[19]->title === 'Emerging Leader Program'): ?>
                <img src="<?php echo e(asset('assets/banner/' . $getBanner[19]->image)); ?>"
                    class="w-full h-full object-cover px-4 md:px-8 xl:px-12" alt="Hero Image">
            <?php endif; ?>

            <!-- Dark overlay (matches image exactly) -->
            

            <!-- Text content (padding allowed here) -->
            <div
                class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white space-y-4 bg-black/50">

                <h1 class="text-2xl md:text-4xl lg:text-5xl font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    <?php if(!empty($getBanner) && $getBanner[19]->title === 'Emerging Leader Program'): ?>
                        <?php echo e($getBanner[19]->name); ?>

                    <?php endif; ?>
                </h1>

                <h1
                    class="text-xl md:text-3xl lg:text-4xl font-medium max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-4">
                    <?php if(!empty($getBanner) && $getBanner[19]->title === 'Emerging Leader Program'): ?>
                        <?php echo nl2br(e(value: $getBanner[19]->content)); ?>

                    <?php endif; ?>
            </h1>
            </div>
        </div>
        <div class="space-y-10">
            <div class="space-y-6">
                <p class="max-w-5xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                   Successful leaders know that the greatest investment you can make is in your people. But how do you prepare 
                   your rising stars to become your next generation of senior leadership? Consider the Emerging Leader Program, a dynamic, 
                   comprehensive curriculum that provides real world leadership training specifically for the middle manager.
                </p>
                <p class="max-w-5xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4 font-semibold">
                  Guided by an accomplished business leader and master facilitator, 
                  members develop core leadership competencies and the confidence to deliver on company goals.
                </p>
                <p class="max-w-5xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    Unlike leadership programs that squeeze a wide-range of material into a few days and leave members without follow up, 
                    the Growth Master Emerging Leader Program cultivates mastery by focusing on one topic at a time. Members are 
                    groomed to advance their careers within your company, rather than seek outside opportunities. The net result is a professional, 
                    empowered team of senior leaders who are prepared to grow with your business, taking it to the next level.
                </p>
            </div>

            
            <div class="space-y-6">
                <h1
                    class="text-[#000000] md:max-w-7xl mx-auto md:text-left text-center text-3xl md:text-4xl xl:text-5xl px-4">
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
            
        <div class="relative w-full">
            <?php echo $__env->make('frontend.include.faqs', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            if (sessionStorage.getItem("scrollPos")) {
                window.scrollTo(0, sessionStorage.getItem("scrollPos"));
                sessionStorage.removeItem("scrollPos");
            }

            document.querySelector("form")?.addEventListener("submit", () => {
                sessionStorage.setItem("scrollPos", window.scrollY);
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sourceSelect = document.getElementById("sourceSelect");
            const referFields = document.getElementById("referFields");

            const referralSources = ['member', 'chair', 'speaker', 'google', 'media'];

            function toggleReferFields() {
                if (referralSources.includes(sourceSelect.value)) {
                    referFields.classList.remove("hidden");
                } else {
                    referFields.classList.add("hidden");
                }
            }

            // On change
            sourceSelect.addEventListener("change", toggleReferFields);

            // On page load (for validation errors)
            toggleReferFields();
        });
    </script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/sitemap/program/emerging-leader-program.blade.php ENDPATH**/ ?>
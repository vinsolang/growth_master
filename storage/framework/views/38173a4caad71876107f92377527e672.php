
<?php $__env->startSection('title', 'CEO’s 7 Laws of Leadership'); ?>
<?php $__env->startSection('content'); ?>
    <div id="eventPage" class="space-y-45">
        <?php $__env->startComponent('components.navbar'); ?>
        <?php echo $__env->renderComponent(); ?>

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            
                  <?php if(!empty($getBanner) && $getBanner[8]->title === 'leadership'): ?>
                    <img 
                        src="<?php echo e(asset('assets/banner/' . $getBanner[8]->image)); ?>"
                        class="w-full h-full object-cover px-4 md:px-8 xl:px-12"
                        alt="Hero Image"
                    >
                <?php endif; ?>

            <!-- Dark overlay (matches image exactly) -->
            

            <!-- Text content (padding allowed here) -->
            <div
                class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white space-y-4 bg-black/50">

                <h1 class="text-[18px] md:text-[20px] lg:text-[25px] font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                   <?php if(!empty($getBanner) && $getBanner[8]->title === 'leadership'): ?>
                            <?php echo e($getBanner[8]->name); ?>

                            <?php endif; ?>
                </h1>

                <p
                    class="text-[25px] md:text-[50px] lg:text-[60px] font-semibold max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-4">
                      <?php if(!empty($getBanner) && $getBanner[8]->title === 'leadership'): ?>
                            <?php echo nl2br(e(value: $getBanner[8]->content)); ?>

                            <?php endif; ?>
                </p>

              
                
                <div class="flex flex-col justify-center items-center mt-10 md:px-10 xl:px-12">
                    <button class="group py-6 px-12 text-[16px] md:text-[18px] border border-[#003F5F]
                                text-[#000000] font-semibold bg-white rounded-t 
                                transition-all duration-300 ease-in-out
                                hover:bg-[#003F5F] hover:text-white">

                        Free PDF Guide
                        <span class="ms-3 transition-all duration-300 ease-in-out group-hover:text-white">
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    </button>
                    <div class="bg-amber-500 h-1 rounded-t w-full"></div>
                </div>
            </div>
        </div>
        <div class="space-y-10">
            <!-- SPACER for navbar -->
            <div class=""></div>
            
            
            

            
            <div class="space-y-6">
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                      <?php echo nl2br(e(value: $getCotentPage[0]->description)); ?>

                </p>
            </div>
            
            <div class="lg:ml-28">
                  <?php
                        $cards = [
                            [
                                'image' => asset('storage/' . $getCotentPage[0]->img_card_1),
                                'text'  => $getCotentPage[0]->desc_card_1,
                                'title' => $getCotentPage[0]->title_card_1,
                            ],
                            [
                                'image' => asset('storage/' . $getCotentPage[0]->img_card_2),
                                'text'  => $getCotentPage[0]->desc_card_2,
                                'title' => $getCotentPage[0]->title_card_2,
                            ],
                        ];
                    ?>
                <div class="flex flex-col space-y-7">
                    <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div
                            class="flex flex-col lg:flex-row justify-center items-center lg:space-y-0 space-y-8 bg-[#d9ebf4] w-full lg:w-[90%] md:h-[700px]">

                            
                            <div class="flex flex-col justify-center items-start lg:w-1/2 w-full lg:h-[480px] order-2 space-y-10 md:py-0 py-4
                                                <?php echo e($index % 2 == 0 ? 'lg:order-1' : 'lg:order-2'); ?>

                                            ">
                                <h1 class="text-[#000000] lg:text-5xl text-2xl font-semibold text-left px-4 md:px-12">
                                    <?php echo e($card['title']); ?>

                                </h1>
                                <p class="text-left text-[#454545] md:text-xl text-[14px] px-4 md:px-12">
                                     <?php echo nl2br(e($card['text'])); ?>

                                </p>
                            </div>
                            
                            <div class="lg:w-1/2 w-full lg:h-[90%] order-1 lg:py-4
                                                <?php echo e($index % 2 == 0 ? 'lg:order-2' : 'lg:order-1'); ?>

                                            ">
                                <img src="<?php echo e($card['image']); ?>" class="w-full h-full object-cover">
                            </div>

                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            
            

            
            

            
            <div class="space-y-6">
                <h1
                    class="text-[#000000] md:max-w-7xl mx-auto md:text-left text-center text-3xl md:text-4xl xl:text-5xl px-4">
                    <?php echo e($getCotentPage[0]->title_1); ?>

                </h1>
                <p class="max-w-7xl mx-auto text-left text-[#343434] font-regular text-[17px] md:text-[20px] px-4">
                    <?php echo nl2br(e(value: $getCotentPage[0]->description_1)); ?>

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

    const referralSources = ['member', 'chair', 'speaker','google','media'];

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
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/about/leadership-laws.blade.php ENDPATH**/ ?>
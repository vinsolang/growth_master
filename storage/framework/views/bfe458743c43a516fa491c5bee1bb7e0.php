
<?php $__env->startSection('title', 'Growth Master | Per-to-Per'); ?>
<?php $__env->startSection('content'); ?>
    <div id="eventPage" class="space-y-45">
        <?php $__env->startComponent('components.navbar'); ?>
        <?php echo $__env->renderComponent(); ?>

        <div class="relative w-full h-[40vh] md:h-screen top-24">

            <!-- Background Image (NO padding!) -->
            
            <?php if(!empty($getBanner) && $getBanner[18]->title === 'Advancing Leader Program'): ?>
                <img src="<?php echo e(asset('assets/banner/' . $getBanner[18]->image)); ?>"
                    class="w-full h-full object-cover px-4 md:px-8 xl:px-12" alt="Hero Image">
            <?php endif; ?>

            <!-- Dark overlay (matches image exactly) -->
            

            <!-- Text content (padding allowed here) -->
            <div
                class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white space-y-4 bg-black/50">

                <h1 class="text-2xl md:text-4xl lg:text-5xl font-normal mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    <?php if(!empty($getBanner) && $getBanner[18]->title === 'Advancing Leader Program'): ?>
                        <?php echo e($getBanner[18]->name); ?>

                    <?php endif; ?>
                </h1>

                <h1
                    class="text-xl md:text-3xl lg:text-4xl font-medium max-w-[940px] leading-tight mb-3 md:px-10 xl:px-12 md:py-4">
                    <?php if(!empty($getBanner) && $getBanner[18]->title === 'Advancing Leader Program'): ?>
                        <?php echo nl2br(e(value: $getBanner[18]->content)); ?>

                    <?php endif; ?>
            </h1>
            </div>
        </div>
        <div class="space-y-10">
            <div class="space-y-6">
                <h1
                    class="text-[#000000] md:max-w-7xl mx-auto text-center text-3xl md:text-4xl xl:text-5xl px-4">
                    Growth Master for Your Advancing Leaders
                </h1>
            </div>

            <section class="relative w-full h-auto md:min-h-screen">

                <!-- Background Image -->
                <img src="https://www.vistage.com/wp-content/uploads/2019/09/2020-Hero-Three-business-professionals-having-small-meeting-on-a-couch-1024x524.jpg"
                    class="absolute inset-0 w-full h-full object-cover" alt="">

                <!-- Dark Blue Overlay -->
                <div class="absolute inset-0 bg-[#68875d]/90"></div>

                <!-- Content -->
                <div class="relative max-w-6xl mx-auto px-8 py-20 text-white">

                   
                    <!-- Grid Layout -->
                    <div class="grid md:grid-cols-2 grid-cols-1">

                        <!-- LEFT SIDE (Challenges) -->
                        <div class="space-y-12">
                            <!-- Title -->
                            <h2 class="text-xl font-semibold mb-12">
                               <span class="py-4">Benefits to your organization</span>
                               <hr class="py-1 bg-[#ffffff] w-64">
                            </h2>

                            <!-- Item -->
                            <div>
                                <p class="font-semibold italic mb-2">Bench strength</p>
                                <p class="text-lg leading-relaxed text-gray-200 italic">
                                    Prepares employees for key leadership positions within your organization.
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold italic mb-2">Improved execution</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    Develops effective leaders who demonstrate cross-functional collaboration to drive results.
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold italic mb-2">Effective leadership</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    Equips senior managers at multiple levels with the tools and confidence to initiate and execute change.
                                </p>
                            </div>


                        </div>
                        <!-- RIGHT SIDE (Solutions) -->
                        <div class="space-y-12">
                             <!-- Title -->
                            <h2 class="text-xl font-semibold mb-12">
                               <span class="py-4">Benefits to advancing leaders</span>
                               <hr class="py-1 bg-[#ffffff] w-64">
                            </h2>

                            <div>
                                <p class="font-semibold mb-2">Broaden cross-functional expertise</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                  Develops effective thinking, communication and collaboration to manage strategic initiatives and deliver results.
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold mb-2">Relationship building</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    Cultivates professional relationships with colleagues across departments and levels.
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold mb-2">Recognition and career advancement</p>
                                <p class="text-lg leading-relaxed text-gray-200">
                                    Enhances development and greater visibility with strong potential to advance within the organization.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </section>

            
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
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/sitemap/program/advancing-leader-program.blade.php ENDPATH**/ ?>
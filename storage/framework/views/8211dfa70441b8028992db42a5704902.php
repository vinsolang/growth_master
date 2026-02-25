
<?php $__env->startSection('title', 'Sitemap | Growth Master'); ?>
<?php $__env->startSection('content'); ?>
    <div id="eventPage" class="space-y-45">
        <?php $__env->startComponent('components.navbar'); ?>
        <?php echo $__env->renderComponent(); ?>

        <div class="relative w-full h-[40vh] md:h-screen top-40">

            <!-- Background Image (NO padding!) -->
            
            <?php if(!empty($getBanner) && $getBanner[12]->title === 'sitemap'): ?>
                    <img 
                        src="<?php echo e(asset('assets/banner/' . $getBanner[12]->image)); ?>"
                       class="w-full h-full object-cover px-4 md:px-8 xl:px-20 -mt-8"
                        alt="Hero Image"
                    >
            <?php endif; ?>


            <!-- Dark overlay (matches image exactly) -->
            

            <!-- Text content (padding allowed here) -->
            <div
                class="absolute inset-0 flex flex-col justify-center items-start px-8 md:px-16 lg:px-24 text-white bg-black/50">

                <h1 class="text-xl md:text-3xl lg:text-5xl font-semibold mb-3 md:px-10 xl:px-12 lg:-mt-4">
                    Sitemap
                </h1>
            </div>
        </div>
        <div class="space-y-10">
            
            <div class="min-h-screen bg-gray-50 py-10 px-4">

                <div class="max-w-5xl mx-auto bg-white overflow-hidden">

                    <div class="bg-[#2A2D79] text-white">
                        <a href="<?php echo e(route('home')); ?>" class="block">
                            <div
                                class="px-6 py-4 font-bold border-b border-[#2A2D79] hover:bg-[#65815b] transition-colors cursor-pointer">
                                Home
                            </div>
                        </a>

                        <a href="<?php echo e(route('membership')); ?>" class="block">
                            <div
                                class="px-6 py-4 font-bold border-b border-[#2A2D79] hover:bg-[#65815b] transition-colors cursor-pointer">
                                Why Join Growth Master
                            </div>
                        </a>
                    </div>

                    <div class="text-[#004a61]">

                        <a href="<?php echo e(route('approach')); ?>" class="block">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                Our Approach
                            </div>
                        </a>

                        <div class="border-b border-gray-200">
                            <a href="<?php echo e(route('program')); ?>" class="block bg-[#eaeff2]">
                                <div class="px-10 py-3.5 font-bold border-b border-gray-300">
                                    Our Programs
                                </div>
                            </a>

                            <div class="bg-white">
                                <a href="<?php echo e(route('chief.executive.coaching.program')); ?>" class="block border-b border-gray-100 hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Chief Executive Coaching Program</div>
                                </a>
                                <a href="<?php echo e(route('small.business.program')); ?>" class="block border-b border-gray-100 hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Small Business Program</div>
                                </a>
                                <a href="<?php echo e(route('trusted.advisor.program')); ?>" class="block border-b border-gray-100 hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Trusted Advisor Program</div>
                                </a>
                                <a href="<?php echo e(route('key.executive.program')); ?>" class="block border-b border-gray-100 hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Key Executive Program</div>
                                </a>
                                <a href="<?php echo e(route('advancing.leader.program')); ?>" class="block border-b border-gray-100 hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Advancing Leader Program</div>
                                </a>
                                <a href="<?php echo e(route('emerging.leader.program')); ?>" class="block border-b border-gray-100 hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Emerging Leader Program</div>
                                </a>
                                <a href="<?php echo e(route('growth.master.inside.program')); ?>" class="block hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Growth Master Inside Program</div>
                                </a>
                            </div>
                        </div>

                        <div class="border-b border-gray-200">
                            <a href="<?php echo e(route('review')); ?>" class="block bg-[#eaeff2]">
                                <div class="px-10 py-3.5 font-bold border-b border-gray-300">
                                    Growth Master Reviews
                                </div>
                            </a>
                            <div class="bg-white">
                                <a href="<?php echo e(route('per.to.per')); ?>" class="block hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Peer-to-Peer Mentoring</div>
                                </a>
                                 <a href="<?php echo e(route('exclusive.peer.groups')); ?>" class="block hover:bg-gray-50">
                                    <div class="pl-20 pr-6 py-3">Exclusive Peer Groups</div>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="bg-[#2A2D79] text-white">
                        <a href="<?php echo e(route('events')); ?>" class="block">
                            <div
                                class="px-6 py-4 font-bold border-b border-[#2A2D79] hover:bg-[#65815b] transition-colors cursor-pointer">
                                Events
                            </div>
                        </a>
                    </div>
                    <div class="bg-[#2A2D79] text-white">
                        <a href="<?php echo e(route('about')); ?>" class="block">
                            <div
                                class="px-6 py-4 font-bold border-b border-[#2A2D79] hover:bg-[#65815b] transition-colors cursor-pointer">
                                About Growth Master
                            </div>
                        </a>
                    </div>
                     <div class="text-[#004a61]">
                        <a href="<?php echo e(route('about')); ?>" class="block">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                               What is Growth Master?
                            </div>
                        </a>
                    </div>
                    <div class="text-[#004a61]">
                        <a href="<?php echo e(route('Laws.of.eadership')); ?>" class="block bg-[#eaeff2]">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                7 Laws of Leadership
                            </div>
                        </a>
                    </div>
                    <div class="text-[#004a61]">
                        <a href="<?php echo e(route('ceo.climp')); ?>" class="block">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                The CEO Climp
                            </div>
                        </a>
                    </div>
                    <div class="bg-[#2A2D79] text-white">
                        <a href="<?php echo e(route('chair.growth')); ?>" class="block">
                            <div
                                class="px-6 py-4 font-bold border-b border-[#2A2D79] hover:bg-[#65815b] transition-colors cursor-pointer">
                                Chair
                            </div>
                        </a>
                    </div>
                    <div class="text-[#004a61]">
                        <a href="<?php echo e(route('chair.growth')); ?>" class="block">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                               Lead a Group
                            </div>
                        </a>
                    </div>
                    <div class="text-[#004a61]">
                        <a href="<?php echo e(route('ceo.coa.qual')); ?>" class="block bg-[#eaeff2]">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                Chair Qualifications
                            </div>
                        </a>
                    </div>
                    <div class="text-[#004a61]">
                        <a href="<?php echo e(route('chair.application')); ?>" class="block">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                Apply to be a Growth Master Chair
                            </div>
                        </a>
                    </div>
                    <div class="bg-[#2A2D79] text-white">
                        <div class="block">
                            <div
                                class="px-6 py-4 font-bold border-b border-[#2A2D79] hover:bg-[#65815b] transition-colors cursor-pointer">
                                Apply for Growth Master
                            </div>
                        </div>
                    </div>
                    <div class="text-[#004a61]">
                        <a href="<?php echo e(route('chair.application')); ?>" class="block">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                Apply to be a Growth Master Chair
                            </div>
                        </a>
                    </div>
                     <div class="text-[#004a61]">
                        <a href="<?php echo e(route('ceo.coa.qual')); ?>" class="block bg-[#eaeff2]">
                            <div
                                class="px-10 py-3.5 font-medium border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                Chair Qualifications
                            </div>
                        </a>
                    </div>
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
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/components/sitemap.blade.php ENDPATH**/ ?>
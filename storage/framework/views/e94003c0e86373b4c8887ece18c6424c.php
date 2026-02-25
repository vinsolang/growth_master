
<?php $__env->startSection('title', 'Program Details'); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.navbar'); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="space-y-10">
        <!-- Hero Section -->
        <section class="relative w-full">
            <div class="w-full h-[110vh] md:h-screen relative">
                <?php if(!empty($getBanner) && $getBanner[21]->title === 'Job Guaranteed Programs'): ?>
                    <img src="<?php echo e(asset('assets/banner/' . $getBanner[21]->image)); ?>" class="w-full h-full object-cover" alt="Hero Image">
                <?php endif; ?>
                <div class="absolute inset-0 bg-black/40 w-full h-full"></div>
                <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-40 md:py-20 text-white bg-black/50">
                    <h1 class="text-3xl md:text-4xl font-semibold max-w-[940px] leading-tight">
                        <?php echo e($getBanner[21]->name ?? ''); ?>

                    </h1>
                    <p class="text-lg md:text-xl mt-5 max-w-[940px] leading-tight">
                        <?php echo nl2br(e($getBanner[21]->content ?? '')); ?>

                    </p>
                </div>
            </div>
        </section>

        <!-- Back Link -->
        <div id="program-details" class="px-4 md:px-32 text-xl md:text-2xl">
            <a href="<?php echo e(route('program.job')); ?>#program-block" class="text-red-600 hover:text-green-700 font-semibold underline">
                ← Back
            </a>
        </div>

        <!-- Program Details Block -->
        <div class="md:px-0 px-4">
            <div class="max-w-7xl mx-auto px-4 py-16">
                <div class="flex flex-col md:flex-row justify-center items-start gap-8">

                    <!-- Program Image -->
                    <div class="relative w-full md:w-1/2 rounded-lg overflow-hidden bg-yellow-200 shadow-lg">
                        <img src="<?php echo e(asset('assets/program_guaranteed/'. $programdetails[0]->img_details)); ?>" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                    <!-- Program Content -->
                    <div class="relative w-full md:w-1/2 bg-white rounded-lg p-6 shadow-lg">
                        <h3 class="text-2xl font-semibold text-blue-900 mb-4">
                            <?php echo e($programdetails[0]->title_details ?? ''); ?>

                        </h3>
                        <div class="text-blue-900 space-y-4">
                            <?php echo $programdetails[0]->desc_details; ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->
        <div>
            <?php $__env->startComponent('components.footer'); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/frontend/program/program-details.blade.php ENDPATH**/ ?>
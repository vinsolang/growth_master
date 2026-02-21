

<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Update
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page-main-title'); ?>
        UPDATE APPROACH OF CONTENT
    <?php $__env->stopSection(); ?>

    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">

                <?php if(session('success')): ?>
                    <div id="successAlert" class="mb-4 rounded bg-green-100 border border-green-400 text-green-800 px-4 py-3">
                        <?php echo e(session('success')); ?>

                    </div>

                    <script>
                        // Hide after 5 seconds (5000ms)
                        setTimeout(function() {
                            const alert = document.getElementById('successAlert');
                            if(alert){
                                // Fade out smoothly
                                alert.style.transition = "opacity 0.5s ease";
                                alert.style.opacity = "0";

                                // Remove from DOM after fade
                                setTimeout(() => alert.remove(), 500);
                            }
                        }, 5000);
                    </script>
                <?php endif; ?>

                <!-- File input -->
                <form action="<?php echo e(route('submit.approachcontent')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <?php if(Session::has('message')): ?>
                            <p class="text-danger text-center"><?php echo e(Session::get('message')); ?></p>
                        <?php endif; ?>
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text below Banner</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title" value="<?php echo e($getContent->title); ?>"
                                            placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="content" class="form-control" id="content"
                                            placeholder="Description"><?php echo e($getContent->content); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Title Of Card</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_on_card"
                                            value="<?php echo e($getContent->title_on_card); ?>" placeholder="Title" />
                                    </div>
                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Card of Content</label>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Section Card 1</label>
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="title_card_1"
                                                value="<?php echo e($getContent->title_card_1); ?>" placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="desc_card_1" class="form-control" id="desc_card_1"
                                                placeholder="Description"><?php echo e($getContent->desc_card_1); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Section Card 2</label>
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="title_card_2"
                                                value="<?php echo e($getContent->title_card_2); ?>" placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="desc_card_2" class="form-control" id="desc_card_2"
                                                placeholder="Description"><?php echo e($getContent->desc_card_2); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Section Card 3</label>
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="title_card_3"
                                                value="<?php echo e($getContent->title_card_3); ?>" placeholder="title_card_3" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="desc_card_3" class="form-control" id="desc_card_3"
                                                placeholder="Description"><?php echo e($getContent->desc_card_3); ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text Below Section Card</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_1"
                                            value="<?php echo e($getContent->title_1); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="content_1" class="form-control" id="content_1"
                                            placeholder="Description"><?php echo e($getContent->content_1); ?></textarea>
                                    </div>

                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text Below Button Join A Group</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_2"
                                            value="<?php echo e($getContent->title_2); ?>" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="content_2" class="form-control" id="content_2"
                                            placeholder="Description"><?php echo e($getContent->content_2); ?></textarea>
                                    </div>

                                </div>
                            <div class="flex gap-3">
                                <input type="submit"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200"
                                    value="Submit">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/approachcontent/update-text.blade.php ENDPATH**/ ?>
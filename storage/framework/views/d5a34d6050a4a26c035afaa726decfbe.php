
<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Help
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page-main-title'); ?>
        ADD HELP DECTION
    <?php $__env->stopSection(); ?>

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="<?php echo e(route('helpsction.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <?php if(Session::has('message')): ?>
                            <p class="text-danger text-center"><?php echo e(Session::get('message')); ?></p>
                        <?php endif; ?>
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Question</label>
                                    <textarea name="question" class="form-control" id="question"></textarea>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="answer" class="form-label text-[#0F4634]">Answer</label>
                                    <textarea name="answer" class="form-control" id="answer" rows="4"></textarea>
                                </div>
                                
                            </div>
                            <div class="flex gap-3">
                                <a href="<?php echo e(route('helpsction.index')); ?>"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200">
                                    Cancel
                                </a>
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
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#answer'), {
            toolbar: [
                'heading',
                '|',
                'bold',
                'italic',
                'underline',
                'strikethrough',
                '|',
                'bulletedList',
                'numberedList',
                '|',
                'link',
                'blockQuote',
                '|',
                'undo',
                'redo'
            ]
        })
        .catch(error => {
            console.error(error);
        });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/helpSection/add-help.blade.php ENDPATH**/ ?>
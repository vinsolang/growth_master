

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('site-title'); ?>
    Admin | Update Program
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-main-title'); ?>
    UPDATE Job Guaranteed Program
<?php $__env->stopSection(); ?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xl-12">

            <form action="<?php echo e(route('job-guaranteed-program.update', $job_guaranteed_program)); ?>"
                  method="POST"
                  enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="card">
                    <div class="card-body">

                        <div class="row">

                            
                            <div class="mb-3 col-12">
                                <label class="form-label text-[#0F4634]">Title</label>
                                <textarea name="title" class="form-control"><?php echo e($job_guaranteed_program->title); ?></textarea>
                            </div>

                            
                            <div class="mb-3 col-12">
                                <label class="form-label text-[#0F4634]">Description</label>
                                <textarea name="description" class="form-control"><?php echo e($job_guaranteed_program->description); ?></textarea>
                            </div>

                            
                            <div class="mb-4 col-12">
                                <label class="form-label text-[#0F4634]">Image Card</label>

                                <div class="mb-3">
                                    <img id="preview_card"
                                        src="<?php echo e(asset('assets/program_guaranteed/' . $job_guaranteed_program->img_card)); ?>"
                                        width="200"
                                        class="rounded shadow">
                                </div>

                                <input type="file"
                                    name="img_card"
                                    id="img_card"
                                    class="form-control">
                            </div>

                            <hr class="my-4">

                            <h4 class="text-[#0F4634]">Program Details</h4>

                            
                            <div class="mb-3 col-12">
                                <label class="form-label text-[#0F4634]">Description Details</label>
                                <textarea name="desc_details"
                                          id="desc_details"
                                          class="form-control"
                                          rows="6"><?php echo e($job_guaranteed_program->desc_details); ?></textarea>
                            </div>

                            
                            <div class="mb-4 col-12">
                                <label class="form-label text-[#0F4634]">Image Details</label>

                                <div class="mb-3">
                                    <img id="preview_details"
                                        src="<?php echo e(asset('assets/program_guaranteed/' . $job_guaranteed_program->img_details)); ?>"
                                        width="200"
                                        class="rounded shadow">
                                </div>

                                <input type="file"
                                    name="img_details"
                                    id="img_details"
                                    class="form-control">
                            </div>

                        </div>

                        <div class="flex gap-3">
                            <a href="<?php echo e(route('programtext')); ?>"
                               class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] rounded-xl">
                                Cancel
                            </a>

                            <button type="submit"
                                    class="px-6 py-3 border-2 border-[#0F4634] bg-[#0F4634] text-white rounded-xl">
                                Update
                            </button>
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
        .create(document.querySelector('#desc_details'))
        .catch(error => console.error(error));
</script>


<script>
    // IMAGE CARD
    const imgCardInput = document.getElementById('img_card');
    const previewCard = document.getElementById('preview_card');

    imgCardInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewCard.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });

    // IMAGE DETAILS
    const imgDetailsInput = document.getElementById('img_details');
    const previewDetails = document.getElementById('preview_details');

    imgDetailsInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewDetails.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/program-job/update-block-program.blade.php ENDPATH**/ ?>
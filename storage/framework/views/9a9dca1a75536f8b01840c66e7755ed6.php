
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <?php $__env->startSection('site-title'); ?>
            Admin | List
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('page-main-title'); ?>
            LIST
        <?php $__env->stopSection(); ?>

        <div class="container-xxl flex-grow-1 container-p-y space-y-2">
            <div class="flex gap-3 justify-end">
            </div>
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $hometext; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($text->title); ?></td>
                                    <td><?php echo e($text->description); ?></td>
                                   <td>
                                        <div class="dropdown position-static">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="<?php echo e(route('htext.edit', $text->id)); ?>"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                 <a href="javascript:void(0);" class="dropdown-item remove-post-key d-none"
                                                    data-id="<?php echo e($text->id); ?>" data-bs-toggle="modal"
                                                    data-bs-target="#basicModal">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-3">
                <form action="" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Are you sure to remove this post?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" class="remove-val" name="remove_id" id="remove_id">
                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>

            <hr class="my-5" />
        </div>
        <!-- / Content -->
    </div>
    </div>
    <script src="//unpkg.com/alpinejs" defer></script>
    </script>

<?php $__env->stopSection(); ?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".remove-btn").forEach(btn => {
            btn.addEventListener("click", function () {
                document.querySelector("#remove_id").value = this.getAttribute("data-id");
            });
        });
    });
</script>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/home-text/view-text.blade.php ENDPATH**/ ?>
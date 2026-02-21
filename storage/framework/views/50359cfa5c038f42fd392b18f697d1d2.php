
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <?php $__env->startSection('site-title'); ?>
            Admin | List 
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('page-main-title'); ?>
            LIST BANNER
        <?php $__env->stopSection(); ?>

        <div class="container-xxl flex-grow-1 container-p-y space-y-2">
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php $__currentLoopData = $card; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <img src="../assets/card/<?php echo e($items->image); ?>" alt="Avatar" class="rounded-circle"
                                                style="width: 50px;
                                                                    object-fit: cover;
                                                                    border-radius: 0px !important;
                                                                    ">
                                        </ul>
                                    </td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong><?php echo e($items->title); ?></strong>
                                    </td>
                                    <td>
                                        <div class="max-w-56 h-32 overflow-y-auto whitespace-pre-line text-sm">
                                            <?php echo e($items->description); ?>

                                        </div>
                                    </td>

                                    <td><span class="badge bg-label-primary me-1"><?php echo e($items->created_at); ?></span></td>

                                    <td>
                                        <div class="dropdown position-static">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="<?php echo e(route('homecard.edit', $items->id)); ?>"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                 <a href="javascript:void(0);" class="dropdown-item remove-post-key d-none"
                                                    data-id="<?php echo e($items->id); ?>" data-bs-toggle="modal"
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
                
                <form id="deleteForm" action="" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <div class="modal fade" id="basicModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title">Are you sure to remove this post?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-footer">
                                    
                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>

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
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Assuming your base route is /contact and your delete form ID is deleteForm
        document.querySelectorAll(".remove-post-key").forEach(btn => {
            btn.addEventListener("click", function () {
                let id = this.dataset.id;
                // FIX: Set the form action dynamically. This targets the delete route: contact/{id}
                document.querySelector("#deleteForm").action = "<?php echo e(url('homecard')); ?>" + '/' + id;
            });
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/homeCard/view-banner.blade.php ENDPATH**/ ?>


<?php $__env->startSection('site-title', 'Admin | Chair Contact List'); ?>
<?php $__env->startSection('page-main-title', 'Chair Contact List'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="container-xxl grow container-p-y">

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Submitted Contacts</h5>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($contacts->firstItem() + $index); ?></td>
                                <td class="fw-semibold">
                                    <?php echo e($contact->firstname); ?> <?php echo e($contact->lastname); ?>

                                </td>
                                <td><?php echo e($contact->email ?? '—'); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo e(route('chair.contact.show', $contact->id)); ?>"
                                       class="btn btn-sm btn-primary">
                                        View
                                    </a>

                                    <form action="<?php echo e(route('chair.contact.destroy', $contact->id)); ?>"
                                          method="POST"
                                          class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Delete this record?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">
                                    No records found
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                <?php echo e($contacts->links()); ?>

            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/chair-contact/index.blade.php ENDPATH**/ ?>
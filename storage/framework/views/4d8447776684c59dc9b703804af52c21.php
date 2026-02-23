
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <?php $__env->startSection('site-title'); ?>
            Admin | List 
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('page-main-title'); ?>
            LIST EVENT
        <?php $__env->stopSection(); ?>

        <div class="container-xxl flex-grow-1 container-p-y space-y-2">
            <div class="flex gap-3 justify-end">
                <a href="<?php echo e(route('event.create')); ?>">
                    <input type="submit"
                        class="px-6 py-2 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200"
                        value="+ Add New">
                </a>
            </div>
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Event Date</th>
                                <th>Event Type</th>
                                <th>Link of Event</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody class="table-border-bottom-0">
                            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr  class="clickable-row" data-href="<?php echo e(route('event.edit', $items->id)); ?>"
                                    style="cursor:pointer;">
                                    
                                    <td>
                                        <?php if($items->image): ?>
                                            <img 
                                                src="<?php echo e(asset($items->image)); ?>"
                                                alt="Event Image"
                                                style="width:50px;height:50px;object-fit:cover;border-radius:6px;">
                                        <?php else: ?>
                                            <span class="text-muted">No Image</span>
                                        <?php endif; ?>
                                    </td>

                                    
                                    <td>
                                        <strong><?php echo e($items->title); ?></strong>
                                    </td>

                                    
                                    <td>
                                        <?php echo e($items->category ?? '-'); ?>

                                    </td>

                                    
                                    <td style="max-width: 250px;">
                                        <div x-data="{ expanded: false }">
                                            <span x-show="!expanded">
                                                <?php echo e(Str::limit($items->description, 10)); ?>

                                            </span>

                                            <span x-show="expanded">
                                                <?php echo e($items->description); ?>

                                            </span>

                                            <?php if(strlen($items->description) > 10): ?>
                                                <button
                                                    class="text-primary border-0 bg-transparent p-0 ms-1"
                                                    x-show="!expanded"
                                                    @click="expanded = true">
                                                    Read more
                                                </button>

                                                <button
                                                    class="text-primary border-0 bg-transparent p-0 ms-1"
                                                    x-show="expanded"
                                                    @click="expanded = false">
                                                    Read less
                                                </button>
                                            <?php endif; ?>
                                        </div>
                                    </td>

                                    
                                    <td>
                                        <?php echo e($items->event_date); ?>

                                    </td>

                                    
                                    <td>
                                        <span class="badge bg-label-info">
                                            <?php echo e(ucfirst($items->event_type)); ?>

                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-info">
                                            <?php echo e(ucfirst($items->link)); ?>

                                        </span>
                                    </td>
                                  

                                    
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item"
                                                href="<?php echo e(route('event.edit', $items->id)); ?>">
                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                </a>

                                                <form action="<?php echo e(route('event.destroy', $items->id)); ?>"
                                                    method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>

                                                    <button type="submit"
                                                            class="dropdown-item text-danger"
                                                            onclick="return confirm('Delete this event?')">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </form>
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
                document.querySelector("#deleteForm").action = "<?php echo e(url('event')); ?>" + '/' + id;
            });
        });
    });
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".clickable-row").forEach(function (row) {
        row.addEventListener("click", function () {
            window.location.href = this.dataset.href;
        });
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/event/view-event.blade.php ENDPATH**/ ?>
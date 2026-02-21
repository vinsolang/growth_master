
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <?php $__env->startSection('site-title'); ?>
            Admin | Submitting
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('page-main-title'); ?>
            LIST USER SUBMITTING
        <?php $__env->stopSection(); ?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <div class="container-xxl grow container-p-y px-4 py-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="table-responsive">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Full Name</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Email</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Company</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Phone</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Professional Role</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    The staff has</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Source</th>
                                <th
                                      class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            <?php $__currentLoopData = $memberships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="hover:bg-gray-50 transition-colors duration-200">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="font-medium text-gray-900"><?php echo e($member->firstname); ?> <?php echo e($member->lastname); ?>

                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600">
                                        <?php echo e($member->email); ?>

                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-sm bg-blue-50 text-blue-700 rounded-md font-medium">
                                            <?php echo e($member->company); ?>

                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="font-medium text-gray-900"><?php echo e($member->phone); ?>

                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600">
                                        <?php echo e($member->role); ?>

                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600">
                                        <?php echo e($member->staff); ?>

                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600">
                                        <?php echo e($member->source); ?>

                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <form action="<?php echo e(route('memberships.destroy', $member->id)); ?>" method="POST"
                                            class="delete-form inline-block">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="button" onclick="confirmDelete(this)"
                                                class="flex items-center gap-2 px-3 py-2 bg-red-50 text-red-600 hover:bg-red-600 hover:text-white rounded-lg transition-all duration-200 text-sm font-medium border border-red-100">
                                                <i class="fa-regular fa-trash-can"></i>
                                                <span>Delete</span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
    </div>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmDelete(button) {
            const form = button.closest('form');

            Swal.fire({
                title: 'Are you sure?',
                text: "This data will be permanently deleted!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#0F4634',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it',
                cancelButtonText: 'No, cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        }
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/becomAmember/view-submit.blade.php ENDPATH**/ ?>
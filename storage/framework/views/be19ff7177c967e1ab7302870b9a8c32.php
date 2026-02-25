
<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Update
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page-main-title'); ?>
        UPDATE PAGE
    <?php $__env->stopSection(); ?>
    
    <!-- Content wrapper -->
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
                <form action="<?php echo e(route('submit.programtext')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <?php if(Session::has('message')): ?>
                            <p class="text-danger text-center"><?php echo e(Session::get('message')); ?></p>
                        <?php endif; ?>
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Title Of Page</label>
                                    <textarea name="title_page" class="form-control" id="title_page"><?php echo e($programJobText->title_page); ?></textarea>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Description Of Page</label>
                                    <textarea name="desc_page" class="form-control" id="desc_page" rows="6"><?php echo e($programJobText->desc_page); ?></textarea>
                                </div>

                            </div>
                             <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Title Of Program</label>
                                    <textarea name="title_program" class="form-control" id="title_program"><?php echo e($programJobText->title_program); ?></textarea>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Description Of Program</label>
                                    <textarea name="content_program" class="form-control" id="content_program" rows="6"><?php echo e($programJobText->content_program); ?></textarea>
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
    
    <div class="container-xxl flex-grow-1 container-p-y space-y-2">
            <div class="flex gap-3 justify-end">
               <a href="<?php echo e(route('job-guaranteed-program.create')); ?>"
                    class="px-6 py-2 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200 inline-block">
                    + Add New
                </a>
            </div>
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image Details</th>
                                <th>Description Details</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php $__currentLoopData = $programBlock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="clickable-row" data-href=""
                                    style="cursor:pointer;">
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <img src="../assets/program_guaranteed/<?php echo e($items->img_card); ?>" alt="Avatar" class="rounded-circle"
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
                                        <div x-data="{ expanded: false }">
                                            <!-- Short Preview -->
                                            <span x-show="!expanded">
                                                <?php echo e(Str::limit($items->description, 20)); ?>

                                            </span>

                                            <!-- Full Text -->
                                            <span x-show="expanded">
                                                <?php echo e($items->description); ?>

                                            </span>

                                            <!-- Buttons -->
                                            <?php if(strlen($items->description) > 20): ?>
                                                <button 
                                                    class="text-blue-600 underline ml-1"
                                                    x-show="!expanded"
                                                    @click="expanded = true">
                                                    Read more
                                                </button>

                                                <button 
                                                    class="text-blue-600 underline ml-1"
                                                    x-show="expanded"
                                                    @click="expanded = false">
                                                    Read less
                                                </button>
                                            <?php endif; ?>
                                        </div>
                                    </td>


                                   <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <img src="../assets/program_guaranteed/<?php echo e($items->img_details); ?>" alt="Avatar" class="rounded-circle"
                                                style="width: 50px;
                                                                    object-fit: cover;
                                                                    border-radius: 0px !important;
                                                                    ">
                                        </ul>
                                    </td>

                                    <td><span class="badge bg-label-primary me-1"></span><?php echo e($items->desc_details); ?></td>

                                    <td>
                                        <div class="dropdown position-static">
                                            <button type="button"
                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>

                                            <div class="dropdown-menu dropdown-menu-end">

                                                
                                                <a class="dropdown-item"
                                                href="<?php echo e(route('job-guaranteed-program.edit', $items->id)); ?>">
                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                </a>

                                                
                                                <a href="javascript:void(0);"
                                                class="dropdown-item remove-post-key"
                                                data-id="<?php echo e($items->id); ?>"
                                                data-bs-toggle="modal"
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

<script>
        ClassicEditor
        .create(document.querySelector('#desc_page'))
        .catch(error => {
            console.error(error);
        });
</script>
 <script src="//unpkg.com/alpinejs" defer></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Assuming your base route is /contact and your delete form ID is deleteForm
        document.querySelectorAll(".remove-post-key").forEach(btn => {
            btn.addEventListener("click", function () {
                let id = this.dataset.id;
                // FIX: Set the form action dynamically. This targets the delete route: contact/{id}
                document.querySelector("#deleteForm").action = "/job-guaranteed-program/" + id;
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/program-job/update-program-text.blade.php ENDPATH**/ ?>
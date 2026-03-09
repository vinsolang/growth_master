
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <?php $__env->startSection('site-title'); ?>
            Admin | List
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('page-main-title'); ?>
            LIST EVENT
        <?php $__env->stopSection(); ?>
        <?php if($errors->any()): ?>
                <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                    <ul class="list-disc pl-5">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if(session('error')): ?>
                <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

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
        <div class="container-xxl flex-grow-1 container-p-y space-y-2">
            <div class="card p-4">

                <div class="flex justify-between mb-4">


                    <button type="button" id="addCardBtn" class="bg-blue-600 text-white px-4 py-2 rounded hidden">
                        Add Card
                    </button>
                </div>

                <form action="<?php echo e(route('events.update')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="py-4">
                        <input type="text" class="form-control" name="title_event_1"
                            value="<?php echo e(optional($eventstype->first())->title_event_1); ?>">
                    </div>

                    <div id="cardContainer" class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <?php $__currentLoopData = $eventstype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="border p-4 rounded space-y-3 bg-gray-50">

                                <input type="hidden" name="id[]" value="<?php echo e($event->id); ?>">

                                <div>
                                    <label>Name</label>
                                    <input type="text" name="name[]" value="<?php echo e($event->name); ?>"
                                        class="w-full border p-2 rounded">
                                </div>

                                <div>
                                    <label>Type</label>
                                    <input type="text" name="type[]" value="<?php echo e($event->type); ?>"
                                        class="w-full border p-2 rounded">
                                </div>

                                <div>
                                    <label>Image</label>
                                    <input type="file" name="image[]" class="imageInput">

                                    <?php if($event->image): ?>
                                        <img src="<?php echo e(asset('storage/' . $event->image)); ?>" class="preview mt-2 w-20">
                                    <?php endif; ?>
                                </div>

                                <div>
                                    <label>Title</label>
                                    <input type="text" name="title[]" value="<?php echo e($event->title); ?>"
                                        class="w-full border p-2 rounded">
                                </div>

                                <div>
                                    <label>Description</label>
                                    <textarea name="description[]"
                                        class="w-full border p-2 rounded"><?php echo e($event->description); ?></textarea>
                                </div>

                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                    <div class="py-4">
                        <input type="text" class="form-control" name="title_event_2"
                            value="<?php echo e(optional($eventstype->first())->title_event_2); ?>">
                    </div>

                    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded mt-4">
                        Save
                    </button>

                </form>

            </div>
        </div>

        <div class="container-xxl flex-grow-1 container-p-y space-y-2">
            <div class="flex gap-3 justify-end">
                <a href="<?php echo e(route('event.create')); ?>">
                    <input type="button"
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
                                
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody class="table-border-bottom-0">
                            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    
                                    <td>
                                        <?php if($items->image): ?>
                                            <img src="<?php echo e(asset($items->image)); ?>" alt="Event Image"
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
                                                <button class="text-primary border-0 bg-transparent p-0 ms-1" x-show="!expanded"
                                                    @click="expanded = true">
                                                    Read more
                                                </button>

                                                <button class="text-primary border-0 bg-transparent p-0 ms-1" x-show="expanded"
                                                    @click="expanded = false">
                                                    Read less
                                                </button>
                                            <?php endif; ?>
                                        </div>
                                    </td>

                                    
                                    

                                    
                                    
                                    


                                    
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="<?php echo e(route('event.edit', $items->id)); ?>">
                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                </a>

                                                <form action="<?php echo e(route('event.destroy', $items->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>

                                                    <button type="submit" class="dropdown-item text-danger"
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
        document.addEventListener("DOMContentLoaded", function () {
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

    <script>

        let maxCards = 6;
        let cardCount = 0;

        document.getElementById("addCardBtn").onclick = function () {

            if (cardCount >= maxCards) {
                alert("Maximum 6 cards allowed");
                return;
            }

            cardCount++;

            let card = `
    <div class="border p-4 rounded space-y-3 bg-gray-50">

    <input type="hidden" name="id[]" value="">

    <div>
    <label>Name</label>
    <input type="text" name="name[]" class="w-full border p-2 rounded">
    </div>

    <div>
    <label>Type</label>
    <input type="text" name="type[]" class="w-full border p-2 rounded">
    </div>

    <div>
    <label>Image</label>
    <input type="file" name="image[]" class="imageInput">
    <img class="preview mt-2 w-20 hidden"/>
    </div>

    <div>
    <label>Title</label>
    <input type="text" name="title[]" class="w-full border p-2 rounded">
    </div>

    <div>
    <label>Description</label>
    <textarea name="description[]" class="w-full border p-2 rounded"></textarea>
    </div>

    </div>
    `;

            document.getElementById("cardContainer").insertAdjacentHTML("beforeend", card);

            previewImage();
        }

        function previewImage() {

            let inputs = document.querySelectorAll(".imageInput");

            inputs.forEach((input) => {

                input.onchange = function (e) {

                    let reader = new FileReader();

                    reader.onload = function () {
                        let preview = input.nextElementSibling;
                        preview.src = reader.result;
                        preview.classList.remove("hidden");
                    }

                    reader.readAsDataURL(e.target.files[0]);

                }

            });

        }

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/event/view-event.blade.php ENDPATH**/ ?>
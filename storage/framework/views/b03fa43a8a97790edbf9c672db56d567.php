
<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Update
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page-main-title'); ?>
        UPDATE MENU
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
                        setTimeout(function () {
                            const alert = document.getElementById('successAlert');
                            if (alert) {
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
                <form action="<?php echo e(route('submit.menu')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <?php if(Session::has('message')): ?>
                            <p class="text-danger text-center"><?php echo e(Session::get('message')); ?></p>
                        <?php endif; ?>
                        <div class="card-body">
                            <div class="row">

                                <!-- Menu 1 -->
                                <div class="col-md-6 mb-4 border border-green-400 p-2">
                                    <h4>Menu 1</h4>
                                    <label class="form-label text-[#0F4634]">Main Menu</label>
                                    <input class="form-control mb-3" type="text" name="menu_1" value="<?php echo e($menu->menu_1); ?>"
                                        placeholder="menu" />

                                    <label class="form-label text-[#0F4634]">Menu dropdown</label>
                                    <input class="form-control mb-2" type="text" name="menu_2" value="<?php echo e($menu->menu_2); ?>"
                                        placeholder="menu" />
                                    <input class="form-control mb-2" type="text" name="menu_3" value="<?php echo e($menu->menu_3); ?>"
                                        placeholder="menu" />
                                    <input class="form-control mb-2" type="text" name="menu_4" value="<?php echo e($menu->menu_4); ?>"
                                        placeholder="menu" />
                                    <input class="form-control mb-2" type="text" name="menu_5" value="<?php echo e($menu->menu_5); ?>"
                                        placeholder="menu" />
                                    <input class="form-control mb-2" type="text" name="menu_6" value="<?php echo e($menu->menu_6); ?>"
                                        placeholder="menu" />
                                </div>

                                <!-- Menu 2 -->
                                <div class="col-md-6 mb-4 border border-green-400 p-2">
                                    <h4>Menu 2</h4>
                                    <label class="form-label text-[#0F4634]">Main Menu</label>
                                    <input class="form-control mb-3" type="text" name="menu_7" value="<?php echo e($menu->menu_7); ?>"
                                        placeholder="menu" />

                                    <label class="form-label text-[#0F4634]">Menu dropdown</label>
                                    <input class="form-control mb-2" type="text" name="menu_8" value="<?php echo e($menu->menu_8); ?>"
                                        placeholder="menu" />
                                    <input class="form-control mb-2" type="text" name="menu_9" value="<?php echo e($menu->menu_9); ?>"
                                        placeholder="menu" />
                                    <input class="form-control mb-2" type="text" name="menu_10" value="<?php echo e($menu->menu_10); ?>"
                                        placeholder="menu" />
                                </div>

                                <!-- Menu 3 -->
                                <div class="col-md-6 mb-4 border border-green-400 p-2">
                                    <h4>Menu 3</h4>
                                    <label class="form-label text-[#0F4634]">Main Menu</label>
                                    <input class="form-control" type="text" name="menu_11" value="<?php echo e($menu->menu_11); ?>"
                                        placeholder="menu" />
                                </div>

                                <!-- Menu 4 -->
                                <div class="col-md-6 mb-4 border border-green-400 p-2">
                                    <h4>Menu 4</h4>
                                    <label class="form-label text-[#0F4634]">Main Menu</label>
                                    <input class="form-control mb-3" type="text" name="menu_12" value="<?php echo e($menu->menu_12); ?>"
                                        placeholder="menu" />

                                    <label class="form-label text-[#0F4634]">Menu dropdown</label>
                                    <input class="form-control mb-2" type="text" name="menu_13" value="<?php echo e($menu->menu_13); ?>"
                                        placeholder="menu" />
                                    <input class="form-control mb-2" type="text" name="menu_14" value="<?php echo e($menu->menu_14); ?>"
                                        placeholder="menu" />
                                    <input class="form-control mb-2" type="text" name="menu_15" value="<?php echo e($menu->menu_15); ?>"
                                        placeholder="menu" />
                                </div>

                                <!-- Menu 5 -->
                                <div class="col-md-6 mb-4 border border-green-400 p-2">
                                    <h4>Menu 5</h4>
                                    <label class="form-label text-[#0F4634]">Main Menu</label>
                                    <input class="form-control mb-3" type="text" name="menu_16" value="<?php echo e($menu->menu_16); ?>"
                                        placeholder="menu" />

                                    <label class="form-label text-[#0F4634]">Menu dropdown</label>
                                    <input class="form-control mb-2" type="text" name="menu_17" value="<?php echo e($menu->menu_17); ?>"
                                        placeholder="menu" />
                                    <input class="form-control mb-2" type="text" name="menu_18" value="<?php echo e($menu->menu_18); ?>"
                                        placeholder="menu" />
                                    <input class="form-control mb-2" type="text" name="menu_19" value="<?php echo e($menu->menu_19); ?>"
                                        placeholder="menu" />
                                </div>

                            </div>

                            <!-- Submit -->
                            <div class="mt-3">
                                <input type="submit"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200"
                                    value="Submit">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>





    <script>
        ClassicEditor
            .create(document.querySelector('#table'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".uploader").forEach(uploader => {

                const fileInput = uploader.querySelector(".file-input");
                const preview = uploader.querySelector(".preview-image");
                const placeholder = uploader.querySelector(".upload-placeholder");
                const resetBtn = uploader.querySelector(".reset-btn");

                const oldImage = preview.src ? preview.src : "";

                // When selecting new image
                fileInput.addEventListener("change", function () {
                    const file = this.files[0];
                    if (!file) return;

                    const reader = new FileReader();
                    reader.onload = e => {
                        preview.src = e.target.result;
                        preview.classList.remove("hidden");
                        placeholder.classList.add("hidden");
                        resetBtn.classList.remove("hidden");
                    };
                    reader.readAsDataURL(file);
                });

                // Reset button clicked
                resetBtn.addEventListener("click", function (e) {
                    e.preventDefault();
                    fileInput.value = "";

                    if (oldImage) {
                        // Restore old image
                        preview.src = oldImage;
                        preview.classList.remove("hidden");
                        placeholder.classList.add("hidden");
                    } else {
                        // No old image originally
                        preview.src = "";
                        preview.classList.add("hidden");
                        placeholder.classList.remove("hidden");
                        resetBtn.classList.add("hidden");
                    }
                });
            });
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/menu/update-menu.blade.php ENDPATH**/ ?>
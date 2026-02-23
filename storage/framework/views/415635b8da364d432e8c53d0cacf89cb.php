
<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Update
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page-main-title'); ?>
        UPDATE EVENT
    <?php $__env->stopSection(); ?>

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl grow container-p-y">
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
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <div class="col-xl-12">
                <!-- File input -->
                <form action="<?php echo e(route('event.update', $event->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="card">
                        <?php if(Session::has('message')): ?>
                            <p class="text-danger text-center"><?php echo e(Session::get('message')); ?></p>
                        <?php endif; ?>
                        <div class="card-body">

                            <div class="row">
                                <input type="hidden" name="update_id" value="<?php echo e($event->id); ?>">
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">title</label>
                                    <input class="form-control" type="text" name="title" value="<?php echo e($event->title); ?>"/>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Category</label>
                                     <input class="form-control" type="text" name="category" value="<?php echo e($event->category); ?>"/>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Description</label>
                                    <textarea name="description" class="form-control" id="" ><?php echo e($event->description); ?></textarea>
                                </div>
                
                                <div class="mb-3 col-12 d-none">
                                    <label for="formFile" class="form-label text-[#0F4634]">Event Time</label>
                                    <input type="text" name="event_time" class="form-control" value="<?php echo e($event->event_time); ?>">
                                </div>

                                <div class="mb-3 col-12 d-none">
                                    <label for="formFile" class="form-label text-[#0F4634]">Event Type</label>
                                     <input class="form-control" type="text" name="event_type" value="<?php echo e($event->event_type); ?>"/>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Link</label>
                                    <input class="form-control" type="text" name="link" value="<?php echo e($event->link); ?>" placeholder="https://example.com"/>
                                </div>
                                 <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Date of Event</label>
                                    <input class="form-control" type="date" name="event_date" value="<?php echo e($event->event_date); ?>" placeholder="10/Jan/2026"/>
                                </div>
                                <!-- ADD: no old image initially -->
                                 <div class="mb-5 col-12">
                                    <label class="block mb-2 text-sm font-medium text-[#0F4634]">Image</label>

                                    <div class="flex">
                                        <label class="uploader relative flex flex-col items-center justify-center 
                                            w-[500px] h-[300px] rounded-lg border-2 border-dashed border-[#0F4634]/40 
                                            cursor-pointer bg-[#F9FAFB] hover:bg-[#F3F4F6] transition overflow-hidden">

                                            <!-- Preview (show old image if exists) -->
                                            <img 
                                                class="preview-image absolute inset-0 m-auto w-[400px] h-[280px] object-cover rounded-lg 
                                                <?php echo e($event->image ? '' : 'hidden'); ?>"
                                                src="<?php echo e($event->image ? asset($event->image) : ''); ?>"
                                            />

                                            <!-- Placeholder -->
                                            <div class="upload-placeholder flex flex-col items-center justify-center text-center
                                                        <?php echo e($event->image ? 'hidden' : ''); ?>">
                                                <svg class="w-10 h-10 mb-2 text-[#0F4634]" fill="none" stroke="currentColor"
                                                    stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 15a4 4 0 014-4h1m0 0a4 4 0 014-4V3m0 4a4 4 0 014 4h1a4 4 0 014 4v1a4 4 0 01-4 4h-1m-4 0a4 4 0 01-4 4v1a4 4 0 01-4-4H7" />
                                                </svg>
                                                <p class="text-xs text-gray-500">Upload</p>
                                            </div>

                                            <!-- Reset -->
                                            <button type="button"
                                                class="reset-btn absolute top-2 right-2 bg-white/80 rounded-full p-1 text-sm
                                                <?php echo e($event->image ? '' : 'hidden'); ?>">✕</button>

                                            <!-- Hidden Old Image -->
                                            <input type="hidden" name="old_image" value="<?php echo e($event->image); ?>">

                                            <!-- File input -->
                                            <input type="file" name="image" accept="image/*"
                                                class="file-input absolute inset-0 w-full h-full opacity-0 cursor-pointer" />

                                        </label>
                                    </div>
                                </div>


                            </div>
                            <div class="flex gap-3">
                                <a href="<?php echo e(route('event.index')); ?>"
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
              <hr class="my-5" />
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.uploader').forEach(uploader => {
    const inputFile = uploader.querySelector("input[type='file']");
    const previewImage = uploader.querySelector(".preview-image");
    const placeholder = uploader.querySelector(".upload-placeholder");
    const resetBtn = uploader.querySelector(".reset-btn");

    // store old src (for update case)
    if (previewImage && previewImage.src) {
      previewImage.dataset.old = previewImage.src || '';
      // if there was an old image shown server-side, ensure placeholder hidden
      if (previewImage.dataset.old && !previewImage.classList.contains('hidden')) {
        if (placeholder) placeholder.classList.add('hidden');
        if (resetBtn) resetBtn.classList.remove('hidden');
      }
    }

    if (!inputFile) return; // safety

    inputFile.addEventListener('change', function () {
      const file = this.files && this.files[0];
      if (!file) return;

      const reader = new FileReader();
      reader.onload = function (e) {
        if (previewImage) {
          previewImage.src = e.target.result;
          previewImage.classList.remove('hidden');
        }
        if (placeholder) placeholder.classList.add('hidden');
        if (resetBtn) resetBtn.classList.remove('hidden');
      };
      reader.readAsDataURL(file);
    });

    if (resetBtn) {
      resetBtn.addEventListener('click', function (ev) {
        ev.preventDefault();
        // Clear file selection
        if (inputFile) inputFile.value = '';

        const oldSrc = previewImage ? previewImage.dataset.old || '' : '';

        if (oldSrc) {
          // restore old image (update form)
          previewImage.src = oldSrc;
          previewImage.classList.remove('hidden');
          if (placeholder) placeholder.classList.add('hidden');
          // keep reset visible (user may still want to clear)
        } else {
          // no old image => clear preview and show placeholder
          if (previewImage) {
            previewImage.src = '';
            previewImage.classList.add('hidden');
          }
          if (placeholder) placeholder.classList.remove('hidden');
          resetBtn.classList.add('hidden');
        }
      });
    }
  });
});
</script>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/event/update-event.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Update
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page-main-title'); ?>
        UPDATE 4Bs Of Accounting
    <?php $__env->stopSection(); ?>

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
                <form action="<?php echo e(route('submit.accounting.admin')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <?php if(Session::has('message')): ?>
                            <p class="text-danger text-center"><?php echo e(Session::get('message')); ?></p>
                        <?php endif; ?>
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text below Banner</label>
                                    <div class="mb-3 col-12">
                                        <textarea name="description" class="form-control" id="description"
                                            placeholder="Description"><?php echo e($ceo->description); ?></textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="title" class="form-control" id="title"
                                            placeholder="title"><?php echo e($ceo->title); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634] p-3">
                                    <label class="form-label text-[#0F4634]">Blocks</label>

                                    <div id="block-wrapper">

                                        <?php if(!empty($ceo->title_card)): ?>
                                            <?php $__currentLoopData = $ceo->title_card; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="block-item border p-3 mb-3 rounded">

                                                <input type="text"
                                                    name="title_card[]"
                                                    class="form-control mb-2"
                                                    placeholder="Title"
                                                    value="<?php echo e($title); ?>">

                                                <textarea name="desc_card[]"
                                                    class="form-control mb-2"
                                                    placeholder="Description"><?php echo e($ceo->desc_card[$i] ?? ''); ?></textarea>

                                                <img
                                                    src="<?php echo e(isset($ceo->img_card[$i]) ? asset($ceo->img_card[$i]) : ''); ?>"
                                                    width="120"
                                                    class="preview mb-2"
                                                    style="display: <?php echo e(isset($ceo->img_card[$i]) ? 'block' : 'none'); ?>">

                                                <input type="file"
                                                    name="img_card[]"
                                                    class="form-control img-input">

                                                <button type="button" class="btn btn-danger mt-2 remove-block">Remove</button>

                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>

                                    </div>

                                    <button type="button" id="addBlock" class="btn btn-success mt-3">
                                        + Add Block
                                    </button>
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
<script>
    document.getElementById('addBlock').addEventListener('click', function(){

    let wrapper = document.getElementById('block-wrapper');

    let html = `
        <div class="block-item border p-3 mb-3 rounded">

            <input type="text"
                name="title_card[]"
                class="form-control mb-2"
                placeholder="Title">

            <textarea name="desc_card[]"
                class="form-control mb-2"
                placeholder="Description"></textarea>

            <img class="preview mb-2" width="120" style="display:none">

            <input type="file"
                name="img_card[]"
                class="form-control img-input">

            <button type="button" class="btn btn-danger mt-2 remove-block">Remove</button>

        </div>
    `;

    wrapper.insertAdjacentHTML('beforeend', html);
});


// Remove Block
document.addEventListener('click', function(e){
    if(e.target.classList.contains('remove-block')){
        e.target.closest('.block-item').remove();
    }
});


// Image Preview
document.addEventListener('change', function(e){

    if(e.target.classList.contains('img-input')){

        let file = e.target.files[0];
        let preview = e.target.previousElementSibling;

        if(file){
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }
    }
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/about/update-baccounting.blade.php ENDPATH**/ ?>
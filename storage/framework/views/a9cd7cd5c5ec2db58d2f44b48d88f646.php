

<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Update
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page-main-title'); ?>
        UPDATE Become A Speaker
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
                <form action="<?php echo e(route('become.update')); ?>" method="post" enctype="multipart/form-data">
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
                                        <input class="form-control" type="text" name="title_1" value="<?php echo e($getContent->title_1); ?>"
                                            placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_1" class="form-control" id="desc_1"
                                            placeholder="Description"><?php echo e($getContent->desc_1); ?></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Title Of Image</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_2"
                                            value="<?php echo e($getContent->title_2); ?>" placeholder="Title" />
                                    </div>
                                    
                                   <div id="textJsonWrapper">
                                      <?php $__empty_1 = true; $__currentLoopData = json_decode($getContent->text_json ?? '[]', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <div class="mb-3 col-12 flex items-start gap-2">
                                                <textarea class="form-control" name="text_json[]"><?php echo e($text); ?></textarea>

                                                <button type="button" class="btn btn-danger" onclick="removeField(this)">
                                                    Remove
                                                </button>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <div class="mb-3 col-12 flex items-start gap-2">
                                                <textarea class="form-control" name="text_json[]" placeholder="Title"></textarea>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                    <button type="button" class="btn btn-primary mt-2" onclick="addTextJson()">+ Add</button>
                                </div>
                                <div class="mb-3 col-12">
                                    <input class="form-control" type="text" name="title_3" value="<?php echo e($getContent->title_3); ?>"
                                        placeholder="Title" />
                                </div>

                                <div class="mb-3 col-12">

                                    <div id="cardJsonWrapper">

                                <?php $__empty_1 = true; $__currentLoopData = $getContent->card_json ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                        <div class="mb-3 col-12 flex items-start gap-2 card-item">

                                            <input type="text"
                                                class="form-control"
                                                name="card_title[]"
                                                value="<?php echo e($card['title'] ?? ''); ?>"
                                                placeholder="Title">

                                        <textarea
                                            class="form-control"
                                            name="card_desc[]"
                                            placeholder="Description"><?php echo e($card['desc'] ?? ''); ?></textarea>

                                        <button type="button" class="btn btn-danger" onclick="removeCard(this)">
                                            Remove
                                        </button>

                                    </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                    <div class="mb-3 col-12 flex items-start gap-2 card-item">

                                        <input type="text" class="form-control" name="card_title[]" placeholder="Title">

                                        <textarea class="form-control" name="card_desc[]" placeholder="Description"></textarea>

                                    </div>

                                    <?php endif; ?>

                                    </div>

                                    <button type="button" class="btn btn-primary mt-2" onclick="addCardJson()">+ Add</button>
                                </div>
                                 <div class="mb-3 col-12">
                                    <textarea class="form-control" name="desc_3" placeholder="Description"><?php echo e($getContent->desc_3); ?></textarea>
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
function addCardJson() {

    let wrapper = document.getElementById('cardJsonWrapper');

    let div = document.createElement('div');

    div.classList.add('mb-3','col-12','flex','items-start','gap-2','card-item');

    div.innerHTML = `
        <input type="text" class="form-control" name="card_title[]" placeholder="Title">

        <textarea class="form-control" name="card_desc[]" placeholder="Description"></textarea>

        <button type="button" class="btn btn-danger" onclick="removeCard(this)">
            Remove
        </button>
    `;

    wrapper.appendChild(div);
}

function removeCard(button){
    button.closest('.card-item').remove();
}
</script>

<script>
function addTextJson() {

    let wrapper = document.getElementById('textJsonWrapper');

    let div = document.createElement('div');

    div.classList.add('mb-3','col-12','flex','items-start','gap-2');

    div.innerHTML = `
        <textarea class="form-control" name="text_json[]" placeholder="Title"></textarea>

        <button type="button" class="btn btn-danger" onclick="removeField(this)">
            Remove
        </button>
    `;

    wrapper.appendChild(div);
}

function removeField(button){
    button.parentElement.remove();
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/apply-of-cac/become-a-speaker.blade.php ENDPATH**/ ?>
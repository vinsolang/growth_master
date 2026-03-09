
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
                
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Event Time</label>
                                    <input type="text" name="event_time" class="form-control" value="<?php echo e($event->event_time); ?>">
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Location Of Event</label>
                                     <input class="form-control" type="text" name="event_type" value="<?php echo e($event->event_type); ?>"/>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634] hidden">Link</label>
                                    <input class="form-control" type="text" name="link" value="<?php echo e($event->link); ?>" placeholder="https://example.com"/>
                                </div>
                                 <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Date of Event</label>
                                    <input class="form-control" type="date" name="event_date" value="<?php echo e(\Carbon\Carbon::parse($event->event_date)->format('Y-m-d')); ?>" placeholder="10/Jan/2026"/>
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



                             
                            <h1 class="text-2xl">Event Details</h1>
                            <div class="row border border-[#0F4634]">
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634] text-xl">title</label>
                                    <input class="form-control" type="text" name="title_overview" value="<?php echo e($event->title_overview); ?>"/>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Description</label>
                                    <textarea name="description_overview" class="form-control" id="description_overview"><?php echo e($event->description_overview); ?></textarea>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Background Image</label>
                                    <div class="mb-3 col-12">
                                        <div class="mb-2">
                                            <img id="previewimg_details"
                                                src="<?php echo e(isset($event->img_details) ? asset($event->img_details) : ''); ?>"
                                                width="150"
                                                class="rounded border"
                                                style="display: <?php echo e(isset($event->img_details) ? 'block' : 'none'); ?>;">
                                        </div>

                                        <input class="form-control"
                                            type="file"
                                            name="img_details"
                                            id="img_details"
                                            accept="image/*">
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Row 1 -->
                                    <div class="mb-3 col-md-6">
                                        <label for="content_card_1" class="form-label text-[#0F4634]">Content 1</label>
                                        <textarea name="content_card_1" class="form-control" id="content_card_1"><?php echo $event->content_card_1; ?></textarea>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="content_card_2" class="form-label text-[#0F4634]">Content 2</label>
                                        <textarea name="content_card_2" class="form-control" id="content_card_2"><?php echo $event->content_card_2; ?></textarea>
                                    </div>

                                    <!-- Row 2 -->
                                    <div class="mb-3 col-md-6">
                                        <label for="content_card_3" class="form-label text-[#0F4634]">Content 3</label>
                                        <textarea name="content_card_3" class="form-control" id="content_card_3"><?php echo $event->content_card_3; ?></textarea>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="content_card_4" class="form-label text-[#0F4634]">Content 4</label>
                                        <textarea name="content_card_4" class="form-control" id="content_card_4"><?php echo $event->content_card_4; ?></textarea>
                                    </div>
                                </div>

                               <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Images (Max 3)</label>

                                    <div class="d-flex flex-row flex-wrap" id="preview_container">
                                        
                                        <?php if(isset($event->img_limit_3) && is_array($event->img_limit_3)): ?>
                                            <?php $__currentLoopData = $event->img_limit_3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="position-relative me-2 mb-2" style="width:150px;">
                                                    <img src="<?php echo e(asset($img)); ?>" class="rounded border w-full h-full object-cover">
                                                    <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 remove-img-btn">&times;</button>
                                                    <input type="hidden" name="existing_img_limit_3[]" value="<?php echo e($img); ?>">
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php elseif(isset($event->img_limit_3)): ?>
                                            <div class="position-relative me-2 mb-2" style="width:150px;">
                                                <img src="<?php echo e(asset($event->img_limit_3)); ?>" class="rounded border w-100">
                                                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 remove-img-btn">&times;</button>
                                                <input type="hidden" name="existing_img_limit_3[]" value="<?php echo e($event->img_limit_3); ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <input class="form-control mt-2"
                                        type="file"
                                        name="img_limit_3[]"
                                        id="img_limit_3"
                                        accept="image/*"
                                        multiple>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="desc_overview" class="form-label text-[#0F4634]">Description Overview</label>
                                    <textarea name="desc_overview" class="form-control" id="desc_overview"><?php echo $event->desc_overview; ?></textarea>
                                </div>
                            </div>

                            <div class="row border border-[#0F4634]">
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634] text-xl">Title</label>
                                    <input type="text" name="title_details" class="form-control" value="<?php echo e($event->title_details); ?>"/>
                                </div>
                                <div class="mb-3">

                                    <div id="details_container">

                                        <?php if(isset($event->name_details) && is_array($event->name_details)): ?>
                                            <?php $__currentLoopData = $event->name_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <div class="row border border-[#0F4634] p-3 mb-3 detail-item">

                                                <!-- Name -->
                                                <div class="mb-3 col-12">
                                                    <label class="form-label text-[#0F4634]">Name</label>
                                                    <input type="text"
                                                        name="name_details[]"
                                                        class="form-control"
                                                        value="<?php echo e($name); ?>">
                                                </div>

                                                <!-- Position -->
                                                <div class="mb-3 col-12">
                                                    <label class="form-label text-[#0F4634]">Description</label>
                                                    <textarea name="position_details[]" class="form-control"><?php echo $event->position_details[$index] ?? ''; ?></textarea>
                                                </div>

                                                <!-- Bio -->
                                                <div class="mb-3 col-12">
                                                    <label class="form-label text-[#0F4634]">Bio / Description</label>
                                                    <textarea name="bio_details[]" class="form-control"><?php echo e($event->bio_details[$index] ?? ''); ?></textarea>
                                                </div>

                                                <!-- Profile Image -->
                                                <div class="mb-3 col-12">
                                                    <label class="form-label text-[#0F4634]">Profile Image</label>

                                                    <div class="mb-2">
                                                        <img
                                                            class="preview-img rounded border"
                                                            width="150"
                                                            src="<?php echo e(isset($event->profile_image[$index]) ? asset($event->profile_image[$index]) : ''); ?>"
                                                            style="display: <?php echo e(isset($event->profile_image[$index]) ? 'block' : 'none'); ?>;">
                                                    </div>

                                                    <input type="file"
                                                        name="profile_image[]"
                                                        class="form-control profile-img-input"
                                                        accept="image/*">
                                                    <input type="hidden" name="old_profile_image[]" 
                                                        value="<?php echo e($event->profile_image[$index] ?? ''); ?>">
                                                </div>

                                                <button type="button"
                                                    class="btn btn-danger remove-detail-btn w-32">
                                                    Remove
                                                </button>

                                            </div>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>

                                    </div>

                                    <button type="button"
                                        id="add_detail_btn"
                                        class="bg-green-700 text-white px-6 py-2 rounded">
                                        + Add
                                    </button>

                                </div>
                            </div>

                            <div class="row border border-[#0F4634] p-4">
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634] text-xl">Title</label>
                                    <input type="text" name="title_agenda" class="form-control" value="<?php echo e($event->title_agenda); ?>"/>
                                </div>
                               <div id="event-wrapper">
                                    <?php if(isset($event->agenda_items) && is_array($event->agenda_items)): ?>

                                        <?php $__currentLoopData = $event->agenda_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $ev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <div class="row mb-3 border p-3 rounded">

                                            <div class="col-md-5">
                                                <label>Event</label>
                                                <input type="text"
                                                    name="agenda_items[<?php echo e($index); ?>][title]"
                                                    class="form-control"
                                                    value="<?php echo e($ev['title'] ?? ''); ?>">
                                            </div>

                                            <div class="col-md-5">
                                                <label>Time</label>
                                                <input type="text"
                                                    name="agenda_items[<?php echo e($index); ?>][date]"
                                                    class="form-control"
                                                    value="<?php echo e($ev['date'] ?? ''); ?>">
                                            </div>

                                            <div class="col-md-2 d-flex align-items-end">
                                                <button type="button"
                                                    onclick="removeEvent(this)"
                                                    class="btn btn-danger w-100">
                                                    Remove
                                                </button>
                                            </div>

                                        </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    </div>

                                <!-- Add Button -->
                                <div class="mt-3">
                                    <button type="button" onclick="addEvent()" 
                                        class="bg-green-700 text-white px-4 py-2 rounded">
                                        + Add
                                    </button>
                                </div>  

                            </div>


                            <div class="row border border-[#0F4634] p-4">
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634] text-xl">Title</label>
                                    <input type="text" name="title_breakout" class="form-control" value="<?php echo e($event->title_breakout); ?>"/>
                                </div>

                                <div id="breakout-wrapper">
                                    <?php if(isset($event->breakout_items) && is_array($event->breakout_items)): ?>
                                        <?php $__currentLoopData = $event->breakout_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $ev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="border p-4 mb-4 rounded position-relative breakout-item">

                                                <!-- Date -->
                                                <div class="mb-3">
                                                    <label class="form-label text-[#0F4634]">Time</label>
                                                    <input type="text" 
                                                        name="breakout_items[<?php echo e($index); ?>][date]" 
                                                        class="form-control"
                                                        value="<?php echo e($ev['date'] ?? ''); ?>" />
                                                </div>

                                                <!-- Profile Image -->
                                                <div class="mb-3">
                                                    <label class="form-label text-[#0F4634]">Profile Image</label>
                                                    <input type="file" 
                                                        name="breakout_items[<?php echo e($index); ?>][profile]" 
                                                        class="form-control breakout-img-input"
                                                        data-index="<?php echo e($index); ?>" />

                                                    <?php if(!empty($ev['profile'])): ?>
                                                        <img id="preview_<?php echo e($index); ?>" 
                                                            src="<?php echo e(asset($ev['profile'])); ?>"
                                                            class="mt-2 rounded border" 
                                                            width="120" />
                                                    <?php else: ?>
                                                        <img id="preview_<?php echo e($index); ?>" 
                                                            class="mt-2 rounded border" 
                                                            width="120" 
                                                            style="display:none;" />
                                                    <?php endif; ?>
                                                </div>

                                                <!-- Description -->
                                                <div class="mb-3">
                                                    <label class="form-label text-[#0F4634]">Description</label>
                                                    <textarea name="breakout_items[<?php echo e($index); ?>][description]" 
                                                        id="description_breakout_<?php echo e($index); ?>" 
                                                        class="form-control"><?php echo e($ev['description'] ?? ''); ?></textarea>
                                                </div>

                                                <!-- Remove Button -->
                                                <button type="button" 
                                                    onclick="this.parentElement.remove()" 
                                                    class="btn btn-danger">
                                                    Remove
                                                </button>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>

                                <!-- Add Breakout Button -->
                                <div class="mt-3">
                                    <button type="button" onclick="addBreakout()" 
                                        class="bg-green-700 text-white px-4 py-2 rounded">
                                        + Add
                                    </button>
                                </div>

                            </div>

                            
                            <div class="row border border-[#0F4634] p-4">

                                <!-- Title -->
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634] text-xl">Title</label>
                                    <input type="text" name="title_sponsor" class="form-control" value="<?php echo e($event->title_sponsor); ?>"/>
                                </div>

                               <!-- Upload -->
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Sponsor Logos</label>
                                    <input type="file"
                                        id="sponsorInput"
                                        name="sponsor_logos[]"
                                        class="form-control"
                                        multiple
                                        accept="image/*">
                                </div>

                                <!-- Preview -->
                                <div id="sponsor-preview" class="d-flex flex-wrap gap-3 mt-3">
                                    <?php if(isset($event->sponsor_logos) && is_array($event->sponsor_logos)): ?>
                                        <?php $__currentLoopData = $event->sponsor_logos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="position-relative" style="width:120px;">
                                                <img src="<?php echo e(asset($logo)); ?>" class="rounded border w-full h-full object-cover" />
                                                <button type="button" class="remove-sponsor-btn btn btn-sm btn-danger position-absolute top-0 end-0">✕</button>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>

                            </div>

                            <div class="row border border-[#0F4634] p-4">

                                <!-- Title -->
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634] text-xl">Title</label>
                                    <input type="text" name="title_location" class="form-control" value="<?php echo e($event->title_location); ?>"/>
                                </div>

                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Link Of Location</label>
                                    <input type="text" name="location_link" class="form-control" value="<?php echo e($event->location_link); ?>"/>
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

<script>
    ClassicEditor
        .create(document.querySelector('#description_details'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#content_card_1'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#content_card_2'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#content_card_3'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#content_card_4'))
        .catch(error => {
            console.error(error);
        });
     ClassicEditor
        .create(document.querySelector('#desc_overview'))
        .catch(error => {
            console.error(error);
        });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Select all description textareas in breakout items
    document.querySelectorAll('.breakout-item textarea').forEach(textarea => {
        ClassicEditor
            .create(textarea)
            .catch(error => {
                console.error(error);
            });
    });

    // Image preview for existing breakout items
    document.querySelectorAll('.breakout-img-input').forEach(input => {
        input.addEventListener('change', function(event){
            const index = this.dataset.index;
            const file = this.files[0];
            const preview = document.getElementById('preview_' + index);

            if(file){
                const reader = new FileReader();
                reader.onload = function(e){
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    });
});
</script>


<script>
document.getElementById('img_limit_3').addEventListener('change', function(e) {

    const container = document.getElementById('preview_container');
    container.innerHTML = ''; // remove old images

    const files = e.target.files;

    if (files.length > 3) {
        alert("You can upload maximum 3 images.");
        this.value = "";
        return;
    }

    Array.from(files).forEach(file => {

        const reader = new FileReader();

        reader.onload = function(event) {

            const div = document.createElement('div');
            div.classList.add('position-relative','me-2','mb-2');
            div.style.width = "150px";

            div.innerHTML = `
                <img src="${event.target.result}" class="rounded border w-100">
                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 remove-img-btn">&times;</button>
            `;

            container.appendChild(div);

            // remove preview
            div.querySelector('.remove-img-btn').addEventListener('click', function() {
                div.remove();
            });

        };

        reader.readAsDataURL(file);

    });

});
</script>


<script>

// ============================
// Image Preview Replace
// ============================
document.addEventListener("change", function(e){

    if(e.target.classList.contains("profile-img-input")){

        const input = e.target;
        const preview = input.closest('.detail-item').querySelector('.preview-img');

        const file = input.files[0];

        if(file){

            const reader = new FileReader();

            reader.onload = function(event){
                preview.src = event.target.result;
                preview.style.display = "block";
            };

            reader.readAsDataURL(file);
        }

    }

});


// ============================
// Add Speaker
// ============================
document.getElementById('add_detail_btn').addEventListener('click', function(){

    const container = document.getElementById('details_container');

    const template = `
    <div class="row border border-[#0F4634] p-3 mb-3 detail-item">

        <div class="mb-3 col-6">
            <label class="form-label text-[#0F4634]">Name</label>
            <input type="text" name="name_details[]" class="form-control">
        </div>

        <div class="mb-3 col-6">
            <label class="form-label text-[#0F4634]">Description</label>
            <textarea name="position_details[]" class="form-control"></textarea>
        </div>

        <div class="mb-3 col-12">
            <label class="form-label text-[#0F4634]">Bio / Description</label>
            <textarea name="bio_details[]" class="form-control"></textarea>
        </div>

        <div class="mb-3 col-12">
            <label class="form-label text-[#0F4634]">Profile Image</label>
            <div class="mb-2">
                <img class="preview-img rounded border" width="150" style="display:none;">
            </div>
            <input type="file" name="profile_image[]" class="form-control profile-img-input" accept="image/*">
        </div>

        <button type="button" class="btn btn-danger remove-detail-btn w-32">Remove</button>

    </div>
    `;

    container.insertAdjacentHTML('beforeend', template);

});


// ============================
// Remove Speaker
// ============================
document.addEventListener("click", function(e){

    if(e.target.classList.contains("remove-detail-btn")){

        e.target.closest(".detail-item").remove();

    }

});

</script>

<script>
document.getElementById('img_details').addEventListener('change', function(event) {

    const file = event.target.files[0];
    const preview = document.getElementById('previewimg_details');

    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };

        reader.readAsDataURL(file);
    }
});
</script>


<script>
function addEvent() {

    let wrapper = document.getElementById('event-wrapper');

    let index = wrapper.children.length;

    let html = `
        <div class="row mb-3 border p-3 rounded">

            <div class="col-md-5">
                <label>Event</label>
                <input type="text"
                    name="agenda_items[${index}][title]"
                    class="form-control"
                    placeholder="Enter Event">
            </div>

            <div class="col-md-5">
                <label>Time</label>
                <input type="text"
                    name="agenda_items[${index}][date]"
                    class="form-control">
            </div>

            <div class="col-md-2 d-flex align-items-end">
                <button type="button"
                    onclick="removeEvent(this)"
                    class="btn btn-danger w-100">
                    Remove
                </button>
            </div>

        </div>
    `;

    wrapper.insertAdjacentHTML('beforeend', html);
}

function removeEvent(btn){
    btn.closest('.row').remove();
}
</script>


<script>
    // let breakoutIndex = 0;
    let breakoutIndex = <?php echo e(isset($event->breakout_items) ? count($event->breakout_items) : 0); ?>;

function addBreakout() {
    let wrapper = document.getElementById('breakout-wrapper');

    let html = `
        <div class="border p-4 mb-4 rounded position-relative breakout-item">

            <div class="mb-3">
                <label class="form-label text-[#0F4634]">Time</label>
                <input type="text" name="breakout_items[${breakoutIndex}][date]" 
                    class="form-control" />
            </div>

            <div class="mb-3">
                <label class="form-label text-[#0F4634]">Profile Image</label>
                <input type="file" 
                    name="breakout_items[${breakoutIndex}][profile]" 
                    class="form-control"
                    onchange="previewImage(event, ${breakoutIndex})" />

                <img id="preview_${breakoutIndex}" 
                    class="mt-2 rounded border" 
                    width="120" 
                    style="display:none;">
            </div>

            <div class="mb-3">
                <label class="form-label text-[#0F4634]">Description</label>
                <textarea 
                    name="breakout_items[${breakoutIndex}][description]" 
                    id="description_breakout_${breakoutIndex}" 
                    class="form-control"></textarea>
            </div>

            <button type="button" 
                onclick="this.parentElement.remove()" 
                class="btn btn-danger">
                Remove
            </button>

        </div>
    `;

    wrapper.insertAdjacentHTML('beforeend', html);

    ClassicEditor
        .create(document.querySelector('#description_breakout_' + breakoutIndex))
        .catch(error => console.error(error));

    breakoutIndex++;
}
</script>


<script>
function previewSponsors(event) {
    const previewContainer = document.getElementById('sponsor-preview');
    previewContainer.innerHTML = ''; // Clear previous previews

    const files = event.target.files;

    if(!files || files.length === 0) return;

    Array.from(files).forEach((file, index) => {
        const reader = new FileReader();

        reader.onload = function(e) {
            const wrapper = document.createElement('div');
            wrapper.classList.add('position-relative', 'm-1');
            wrapper.style.width = '120px';

            wrapper.innerHTML = `
                <img src="${e.target.result}" class="rounded border w-full h-auto">
                <button type="button" class="remove-sponsor-btn btn btn-sm btn-danger position-absolute top-0 end-0">✕</button>
            `;

            previewContainer.appendChild(wrapper);

            // Remove image on click
            wrapper.querySelector('.remove-sponsor-btn').addEventListener('click', () => {
                wrapper.remove();

                // Optional: reset input if all removed
                if(previewContainer.children.length === 0) {
                    document.getElementById('sponsorInput').value = '';
                }
            });
        };

        reader.readAsDataURL(file);
    });
}

// Listen for input change
document.getElementById('sponsorInput').addEventListener('change', previewSponsors);

// Remove old images (from DB) click handler
document.querySelectorAll('.remove-sponsor-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        this.parentElement.remove();
    });
});
</script>
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

<?php $__env->startSection('content'); ?>

    <?php $__env->startSection('site-title'); ?>
        Admin | Add Event
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page-main-title'); ?>
        Add EVENT
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
                <form action="<?php echo e(route('event.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card">
                        <?php if(Session::has('message')): ?>
                            <p class="text-danger text-center"><?php echo e(Session::get('message')); ?></p>
                        <?php endif; ?>
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">title</label>
                                    <input class="form-control" type="text" name="title" />
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Category</label>
                                     <input class="form-control" type="text" name="category" />
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Description</label>
                                    <textarea name="description" class="form-control" id=""></textarea>
                                </div>
                
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Event Time</label>
                                    <input type="text" name="event_time" class="form-control">
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Location of Event</label>
                                     <input class="form-control" type="text" name="event_type" />
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Link Of Event</label>
                                     <input class="form-control" type="text" name="link" placeholder="https://example.com"/>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Event Date</label>
                                     <input class="form-control" type="date" name="event_date" placeholder="10/Jan/2026"/>
                                </div>
                                <!-- ADD: no old image initially -->
                                <div class="mb-5 col-12">
                                    <label class="block mb-2 text-sm font-medium text-[#0F4634]">Image</label>

                                    <div class="flex justify-between items-center">
                                        <label class="uploader flex flex-col items-center justify-center w-[400px] h-[300px]
                                            border-2 border-dashed border-[#0F4634]/40 cursor-pointer bg-[#F9FAFB] hover:bg-[#F3F4F6]
                                            transition relative overflow-hidden">

                                            <!-- Preview (empty for add) -->
                                            <img class="preview-image hidden absolute inset-0 m-auto w-[350px] h-[200px] object-cover"
                                                alt="preview" />

                                            <!-- Placeholder -->
                                            <div
                                                class="upload-placeholder flex flex-col items-center justify-center text-center">
                                                <!-- svg -->
                                                <svg class="w-10 h-10 mb-2 text-[#0F4634]" fill="none" stroke="currentColor"
                                                    stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 15a4 4 0 014-4h1m0 0a4 4 0 014-4V3m0 4a4 4 0 014 4h1a4 4 0 014 4v1a4 4 0 01-4 4h-1m-4 0a4 4 0 01-4 4v1a4 4 0 01-4-4H7" />
                                                </svg>
                                                <p class="text-xs text-gray-500">Upload</p>
                                            </div>

                                            <!-- Reset button (hidden for add until chosen) -->
                                            <button type="button"
                                                class="reset-btn hidden absolute top-2 right-2 bg-white/80 rounded-full p-1 text-sm">✕</button>

                                            <!-- File input — NOT display:none. It covers the whole label and is clickable. -->
                                            <input type="file" name="image" accept="image/*"
                                                class="input-file absolute inset-0 w-full h-full opacity-0 cursor-pointer" />
                                        </label>
                                    </div>
                                </div>


                            </div>
                            
                            
                            <h1 class="text-2xl">Event Details</h1>
                            <div class="row border border-[#0F4634]">
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">title</label>
                                    <input class="form-control" type="text" name="title_overview" />
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Description</label>
                                    <textarea name="description_overview" class="form-control" id="description_overview"></textarea>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Background Image</label>
                                    <div class="mb-3 col-12">
                                        <div class="mb-2">
                                            <img id="previewimg_details"
                                                src="<?php echo e(isset($qualifications->img_details) ? asset($qualifications->img_details) : ''); ?>"
                                                width="150"
                                                class="rounded border"
                                                style="display: <?php echo e(isset($qualifications->img_details) ? 'block' : 'none'); ?>;">
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
                                        <textarea name="content_card_1" class="form-control" id="content_card_1"></textarea>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="content_card_2" class="form-label text-[#0F4634]">Content 2</label>
                                        <textarea name="content_card_2" class="form-control" id="content_card_2"></textarea>
                                    </div>

                                    <!-- Row 2 -->
                                    <div class="mb-3 col-md-6">
                                        <label for="content_card_3" class="form-label text-[#0F4634]">Content 3</label>
                                        <textarea name="content_card_3" class="form-control" id="content_card_3"></textarea>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="content_card_4" class="form-label text-[#0F4634]">Content 4</label>
                                        <textarea name="content_card_4" class="form-control" id="content_card_4"></textarea>
                                    </div>
                                </div>

                               <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Images (Max 3)</label>

                                    <div class="d-flex flex-row flex-wrap" id="preview_container">
                                        
                                        <?php if(isset($qualifications->img_limit_3) && is_array($qualifications->img_limit_3)): ?>
                                            <?php $__currentLoopData = $qualifications->img_limit_3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="position-relative me-2 mb-2" style="width:150px;">
                                                    <img src="<?php echo e(asset($img)); ?>" class="rounded border w-100">
                                                    <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 remove-img-btn">&times;</button>
                                                    <input type="hidden" name="existing_img_limit_3[]" value="<?php echo e($img); ?>">
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php elseif(isset($qualifications->img_limit_3)): ?>
                                            <div class="position-relative me-2 mb-2" style="width:150px;">
                                                <img src="<?php echo e(asset($qualifications->img_limit_3)); ?>" class="rounded border w-100">
                                                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 remove-img-btn">&times;</button>
                                                <input type="hidden" name="existing_img_limit_3[]" value="<?php echo e($qualifications->img_limit_3); ?>">
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
                                    <textarea name="desc_overview" class="form-control" id="desc_overview"></textarea>
                                </div>
                            </div>

                            <div class="row border border-[#0F4634]">
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Title</label>
                                    <input type="text" name="title_details" class="form-control" />
                                </div>
                                <div class="mb-3">
                                    <div id="details_container">
                                        <!-- Initial template -->
                                        <div class="row border border-[#0F4634] p-3 mb-3 detail-item">
                                            <div class="mb-3 col-12">
                                                <label class="form-label text-[#0F4634]">Name</label>
                                                <input type="text" name="name_details[]" class="form-control" />
                                            </div>
                                            <div class="mb-3 col-12">
                                                <label class="form-label text-[#0F4634]">Description</label>
                                                <textarea name="position_details[]" class="form-control" ></textarea>
                                            </div>
                                            <div class="mb-3 col-12">
                                                <label class="form-label text-[#0F4634]">Bio / Description</label>
                                                <textarea name="bio_details[]" class="form-control"></textarea>
                                            </div>

                                            <!-- Profile Image -->
                                            <div class="mb-3 col-12">
                                                <label class="form-label text-[#0F4634]">Profile Image</label>
                                                <div class="mb-2">
                                                    <img class="preview-img rounded border" width="150" style="display:none;">
                                                </div>
                                                <input type="file" name="profile_image[]" class="form-control profile-img-input" accept="image/*">
                                            </div>

                                            <button type="button" class="btn btn-danger remove-detail-btn w-32">Remove</button>
                                        </div>
                                    </div>

                                    <button type="button" id="add_detail_btn" class="bg-green-700 text-white px-6 py-2 rounded">+ Add</button>
                                </div>
                            </div>

                            <div class="row border border-[#0F4634] p-4">
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Title</label>
                                    <input type="text" name="title_agenda" class="form-control" />
                                </div>
                                <div id="event-wrapper">
                                    <!-- Dynamic items will show here -->
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
                                    <label class="form-label text-[#0F4634]">Title</label>
                                    <input type="text" name="title_breakout" class="form-control" />
                                </div>
                                <div id="breakout-wrapper"></div>

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
                                    <label class="form-label text-[#0F4634]">Title</label>
                                    <input type="text" name="title_sponsor" class="form-control" />
                                </div>

                                <!-- Upload -->
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Sponsor Logos</label>
                                    <input type="file"
                                        id="sponsorInput"
                                        name="sponsor_logos[]"
                                        class="form-control"
                                        multiple
                                        accept="image/*"
                                        onchange="previewSponsors(event)">
                                </div>

                                <!-- Preview -->
                                <div id="sponsor-preview" 
                                    class="d-flex flex-wrap gap-3 mt-3">
                                </div>

                            </div>

                            <div class="row border border-[#0F4634] p-4">

                                <!-- Title -->
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Title</label>
                                    <input type="text" name="title_location" class="form-control" />
                                </div>

                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Link Of Location</label>
                                    <input type="text" name="location_link" class="form-control" />
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const input = document.getElementById('img_details');
    const preview = document.getElementById('previewimg_details');

    input.addEventListener('change', function(e) {
        const file = e.target.files[0];

        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        } else {
            // fallback to existing image
            <?php if(isset($qualifications->img_details)): ?>
                preview.style.display = 'block';
            <?php else: ?>
                preview.style.display = 'none';
            <?php endif; ?>
        }
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const input = document.getElementById('img_limit_3');
    const container = document.getElementById('preview_container');

    // Handle new uploads
    input.addEventListener('change', function(e){
        const files = Array.from(e.target.files).slice(0,3); // max 3
        container.innerHTML = ''; // clear previous previews

        files.forEach((file, i) => {
            const wrapper = document.createElement('div');
            wrapper.className = 'position-relative me-2 mb-2';
            wrapper.style.width = '150px';

            const img = document.createElement('img');
            img.src = URL.createObjectURL(file);
            img.className = 'rounded border w-100';
            wrapper.appendChild(img);

            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'btn btn-sm btn-danger position-absolute top-0 end-0 remove-img-btn';
            btn.innerHTML = '&times;';
            btn.addEventListener('click', () => {
                wrapper.remove();
                updateFileInput();
            });
            wrapper.appendChild(btn);

            container.appendChild(wrapper);
        });
    });

    // Remove existing image
    container.addEventListener('click', function(e){
        if(e.target.classList.contains('remove-img-btn')){
            e.target.parentElement.remove();
        }
    });

    // Optional: update file input if needed (advanced)
    function updateFileInput(){
        // You can rebuild DataTransfer if you want input.files to match previews
        // This is optional, server will still get newly uploaded files from input
    }
});
</script>


<script>
document.addEventListener('DOMContentLoaded', function(){
    const container = document.getElementById('details_container');
    const addBtn = document.getElementById('add_detail_btn');

    function updateRemoveButtons() {
        const items = container.querySelectorAll('.detail-item');
        items.forEach((item, index) => {
            const btn = item.querySelector('.remove-detail-btn');
            if(items.length <= 1){
                btn.style.display = 'none';
            } else {
                btn.style.display = 'inline-block';
            }
        });
    }

    // Initial check
    updateRemoveButtons();

    // Add new detail section
    addBtn.addEventListener('click', function() {
        const clone = container.querySelector('.detail-item').cloneNode(true);
        clone.querySelectorAll('input, textarea').forEach(input => input.value = '');
        clone.querySelectorAll('.preview-img').forEach(img => img.style.display = 'none');
        container.appendChild(clone);
        updateRemoveButtons();
    });

    // Remove detail section
    container.addEventListener('click', function(e) {
        if(e.target.classList.contains('remove-detail-btn')){
            e.target.closest('.detail-item').remove();
            updateRemoveButtons();
        }
    });

    // Profile image preview
    container.addEventListener('change', function(e){
        if(e.target.classList.contains('profile-img-input')){
            const file = e.target.files[0];
            const preview = e.target.closest('.detail-item').querySelector('.preview-img');
            if(file){
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            } else {
                preview.style.display = 'none';
            }
        }
    });
});
</script>

<script>
    function addEvent() {
        let wrapper = document.getElementById('event-wrapper');

        let index = wrapper.children.length;

        let html = `
            <div class="row mb-3 border p-3 rounded relative">
                
                <div class="col-md-5">
                    <label>Event</label>
                    <input type="text" name="agenda_items[${index}][title]" 
                        class="form-control" placeholder="Enter Event">
                </div>

                <div class="col-md-5">
                    <label>Date</label>
                    <input type="date" name="agenda_items[${index}][date]" 
                        class="form-control">
                </div>

                <div class="col-md-2 d-flex align-items-end">
                    <button type="button" onclick="this.parentElement.parentElement.remove()" 
                        class="btn btn-danger w-100">
                        Remove
                    </button>
                </div>

            </div>
        `;

        wrapper.insertAdjacentHTML('beforeend', html);
    }
</script>


<script>
    let breakoutIndex = 0;

    function addBreakout() {
        let wrapper = document.getElementById('breakout-wrapper');

        let html = `
            <div class="border p-4 mb-4 rounded position-relative">

                <div class="mb-3">
                    <label class="form-label text-[#0F4634]">Date</label>
                    <input type="date" name="breakout_items[${breakoutIndex}][date]" 
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

        // Initialize CKEditor
        ClassicEditor
            .create(document.querySelector('#description_breakout_' + breakoutIndex))
            .catch(error => {
                console.error(error);
            });

        breakoutIndex++;
    }

    function previewImage(event, index) {
        let reader = new FileReader();
        reader.onload = function() {
            let output = document.getElementById('preview_' + index);
            output.src = reader.result;
            output.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<script>
let selectedFiles = [];

function previewSponsors(event) {
    const previewContainer = document.getElementById('sponsor-preview');
    const input = document.getElementById('sponsorInput');

    selectedFiles = Array.from(event.target.files);
    previewContainer.innerHTML = '';

    selectedFiles.forEach((file, index) => {

        let reader = new FileReader();

        reader.onload = function(e) {

            let wrapper = document.createElement('div');
            wrapper.style.position = 'relative';

            let img = document.createElement('img');
            img.src = e.target.result;
            img.style.width = '120px';
            img.style.height = '120px';
            img.style.objectFit = 'contain';
            img.classList.add('border', 'rounded', 'p-2');

            // Close button
            let closeBtn = document.createElement('button');
            closeBtn.innerHTML = '×';
            closeBtn.type = 'button';
            closeBtn.style.position = 'absolute';
            closeBtn.style.top = '0';
            closeBtn.style.right = '0';
            closeBtn.style.background = 'red';
            closeBtn.style.color = 'white';
            closeBtn.style.border = 'none';
            closeBtn.style.borderRadius = '50%';
            closeBtn.style.width = '24px';
            closeBtn.style.height = '24px';
            closeBtn.style.cursor = 'pointer';

            closeBtn.onclick = function() {
                removeImage(index);
            };

            wrapper.appendChild(img);
            wrapper.appendChild(closeBtn);
            previewContainer.appendChild(wrapper);
        };

        reader.readAsDataURL(file);
    });
}

function removeImage(index) {
    selectedFiles.splice(index, 1);

    const dataTransfer = new DataTransfer();
    selectedFiles.forEach(file => dataTransfer.items.add(file));

    const input = document.getElementById('sponsorInput');
    input.files = dataTransfer.files;

    // Refresh preview
    previewSponsors({ target: input });
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Seed Media\Growth_Master\resources\views/backend/event/add-event.blade.php ENDPATH**/ ?>
@extends('backend.admin')
@section('content')

    @section('site-title')
        Admin | Add Approach
    @endsection
    @section('page-main-title')
        Add Approach
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl grow container-p-y">
            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('error'))
                <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="col-xl-12">
                <!-- File input -->
                <form action="{{ route('approach.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        @if (Session::has('message'))
                            <p class="text-danger text-center">{{ Session::get('message') }}</p>
                        @endif
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">title</label>
                                    <input class="form-control" type="text" name="title" />
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Description</label>
                                    <textarea name="description" class="form-control" id=""></textarea>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Button Text</label>
                                     <input class="form-control" type="text" name="button_text" />
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Has Background Color</label>
                                    <input type="checkbox" name="has_background" value="1" class="w-4 h-4 text-green-600 border-gray-300 rounded">
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
                            <div class="flex gap-3">
                                <a href="{{ route('approach.index') }}"
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

@endsection

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
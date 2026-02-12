@extends('backend.admin')
@section('content')

    @section('site-title')
        Admin | Update
    @endsection
    @section('page-main-title')
        UPDATE PAGE WHY JOIN GROWTH MASTER
    @endsection
    
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                @if (session('success'))
                    <div id="successAlert" class="mb-4 rounded bg-green-100 border border-green-400 text-green-800 px-4 py-3">
                        {{ session('success') }}
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
                @endif
                <!-- File input -->
                <form action="{{ route('submit.whyjoin') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        @if (Session::has('message'))
                            <p class="text-danger text-center">{{ Session::get('message') }}</p>
                        @endif
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Content</label>
                                    <textarea name="content" class="form-control" id="content" rows="6">{{ $whyJoin->content }}</textarea>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text on Image</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title" value="{{ $whyJoin->title }}" placeholder="Title"/>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="description" class="form-control" id="description" placeholder="Description">{{ $whyJoin->description }}</textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text on Table</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_1" value="{{ $whyJoin->title_1 }}" placeholder="Title"/>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="description_1" class="form-control" id="description_1" placeholder="description">{{ $whyJoin->description_1 }}</textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="table" class="form-control" id="table">{!! $whyJoin->table !!}</textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="text" class="form-control" id="text">{{ $whyJoin->text }}</textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text Under Button Bcome a mamber</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_2" value="{{ $whyJoin->title_2 }}" placeholder="Title"/>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="description_3" class="form-control" id="description_3" placeholder="Description">{{ $whyJoin->description_3 }}</textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card 1</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_card_1" value="{{ $whyJoin->title_card_1 }}" placeholder="Title"/>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_card_1" class="form-control" id="desc_card_1" placeholder="Description">{{ $whyJoin->desc_card_1 }}</textarea>
                                    </div>
                                </div>
                                 <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card 2</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_card_2" value="{{ $whyJoin->title_card_2 }}" placeholder="Title"/>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_card_2" class="form-control" id="desc_card_2" placeholder="Description">{{ $whyJoin->desc_card_2 }}</textarea>
                                    </div>
                                </div>
                                 <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card 2</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_card_3" value="{{ $whyJoin->title_card_3 }}" placeholder="Title"/>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_card_3" class="form-control" id="desc_card_3" placeholder="Description">{{ $whyJoin->desc_card_3 }}</textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="flex gap-3">
                                <input type="submit"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200"
                                    value="Update New">
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

@endsection

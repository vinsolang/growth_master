@extends('backend.admin')

@section('content')

    @section('site-title')
        Admin | Update
    @endsection

    @section('page-main-title')
        UPDATE LEADERSHIPS
    @endsection

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
                <form action="{{ route('submit.leaderships') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        @if (Session::has('message'))
                            <p class="text-danger text-center">{{ Session::get('message') }}</p>
                        @endif
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Text below Banner</label>
                                    <div class="mb-3 col-12">
                                        <textarea name="description" class="form-control" id="description"
                                            placeholder="Description">{{ $leaderships->description }}</textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Block 1</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_card_1"
                                            value="{{ $leaderships->title_card_1 }}" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_card_1" class="form-control" id="desc_card_1"
                                            placeholder="Description">{{ $leaderships->desc_card_1 }}</textarea>
                                    </div>
                                    <div class="mb-3 col-12">

                                        <div class="mb-3 col-12">
                                            {{-- img_card_1 Preview --}}
                                            <div class="mb-2">
                                                <img id="previewimg_card_1"
                                                    src="{{ isset($leaderships->img_card_1) ? asset($leaderships->img_card_1) : '' }}"
                                                    width="150"
                                                    class="rounded border"
                                                    style="display: {{ isset($leaderships->img_card_1) ? 'block' : 'none' }};">
                                            </div>

                                            {{-- File Input --}}
                                            <input class="form-control"
                                                type="file"
                                                name="img_card_1"
                                                id="img_card_1"
                                                accept="image/*">
                                        </div>
                                    </div>
                                </div>

                                 <div class="mb-3 col-12 border border-[#0F4634]">
                                    <label for="formFile" class="form-label text-[#0F4634]">Block 2</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_card_2"
                                            value="{{ $leaderships->title_card_2 }}" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_card_2" class="form-control" id="desc_card_2"
                                            placeholder="Description">{{ $leaderships->desc_card_2 }}</textarea>
                                    </div>
                                    <div class="mb-3 col-12">

                                        <div class="mb-3 col-12">
                                            {{-- img_card_2 Preview --}}
                                            <div class="mb-2">
                                                <img id="previewimg_card_2"
                                                    src="{{ isset($leaderships->img_card_2) ? asset($leaderships->img_card_2) : '' }}"
                                                    width="150"
                                                    class="rounded border"
                                                    style="display: {{ isset($leaderships->img_card_2) ? 'block' : 'none' }};">
                                            </div>

                                            {{-- File Input --}}
                                            <input class="form-control"
                                                type="file"
                                                name="img_card_2"
                                                id="img_card_2"
                                                accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-12">
                                        <label for="formFile" class="form-label text-[#0F4634]">Section Card 1</label>
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="title_1"
                                                value="{{ $leaderships->title_1 }}" placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="description_1" class="form-control" id="description_1"
                                                placeholder="Description">{{ $leaderships->description_1 }}</textarea>
                                        </div>
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
document.getElementById('img_card_1').addEventListener('change', function(e){
    const preview = document.getElementById('previewimg_card_1');
    const file = e.target.files[0];

    if(file){
        // Update preview to new img_card_1
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    } else {
        // Keep old img_card_1 if no file selected
        preview.style.display = '{{ isset($leaderships->img_card_1) ? 'block' : 'none' }}';
    }
});
</script>
<script>
document.getElementById('img_card_2').addEventListener('change', function(e){
    const preview = document.getElementById('previewimg_card_2');
    const file = e.target.files[0];

    if(file){
        // Update preview to new img_card_2
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    } else {
        // Keep old img_card_2 if no file selected
        preview.style.display = '{{ isset($leaderships->img_card_2) ? 'block' : 'none' }}';
    }
});
</script>
@endsection
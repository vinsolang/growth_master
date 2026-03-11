@extends('backend.admin')

@section('content')

    @section('site-title')
        Admin | Update
    @endsection

    @section('page-main-title')
        UPDATE Sponsor
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
                <form action="{{ route('sponsors.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        @if (Session::has('message'))
                            <p class="text-danger text-center">{{ Session::get('message') }}</p>
                        @endif
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_1" class="form-control" id="desc_1"
                                            placeholder="Description">{{ $getContent->desc_1 }}</textarea>
                                    </div>
                                </div>

                                 <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_1" value="{{ $getContent->title_1 }}"
                                            placeholder="Title" />
                                    </div>
                                </div>

                                <div class="mb-3 col-12">

                                    <div class="mb-3 col-12">
                                        {{-- img Preview --}}
                                        <div class="mb-2">
                                            <img id="previewimg"
                                                src="{{ isset($getContent->img) ? asset($getContent->img) : '' }}"
                                                width="150"
                                                class="rounded border"
                                                style="display: {{ isset($getContent->img) ? 'block' : 'none' }};">
                                        </div>

                                        {{-- File Input --}}
                                        <input class="form-control"
                                            type="file"
                                            name="img"
                                            id="img"
                                            accept="image/*">
                                    </div>
                                </div>
                                <div class="col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12 border border-[#0F4634]">
                            
                                        <div class="mb-3 col-12">
                                            <textarea name="d_1" class="form-control" id="d_1"
                                                placeholder="Description">{{ $getContent->d_1 }}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 border border-[#0F4634]">
                                      
                                        <div class="mb-3 col-12">
                                            <textarea name="d_2" class="form-control" id="d_2"
                                                placeholder="Description">{{ $getContent->d_2 }}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 border border-[#0F4634]">
                                        
                                        <div class="mb-3 col-12">
                                            <textarea name="d_3" class="form-control" id="d_3"
                                                placeholder="Description">{{ $getContent->d_3 }}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 border border-[#0F4634]">
                                      
                                        <div class="mb-3 col-12">
                                            <textarea name="d_4" class="form-control" id="d_4"
                                                placeholder="Description">{{ $getContent->d_4 }}</textarea>
                                        </div>
                                    </div>
                                </div>



                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <label for="" class="form-controll"> Title Of Form</label>
                                        <textarea class="form-control" type="text" name="title_form"
                                            placeholder="Title">{{ $getContent->title_form }}</textarea>
                                    </div>
                                </div>

                                 <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <label for="" class="form-controll"> Title Logo</label>
                                        <textarea class="form-control" type="text" name="title_logo"
                                            placeholder="Title">{{ $getContent->title_logo }}</textarea>
                                    </div>
                                </div>


                                <div class="border border-[#0F4634] mb-3 col-12 p-3">

                                    <div id="logoPreviewContainer" class="flex flex-wrap gap-4 mb-3">

                                        @if(isset($getContent->logo_img) && is_array($getContent->logo_img))
                                            @foreach($getContent->logo_img as $logo)
                                                <div class="relative">
                                                    <img src="{{ asset($logo) }}"
                                                        width="120"
                                                        class="rounded border">

                                                    {{-- <button type="button"
                                                        class="removeExisting absolute -top-2 -right-2 bg-red-500 text-white w-6 h-6 rounded-full flex items-center justify-center">
                                                        &times;
                                                    </button> --}}
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>

                                    <input class="form-control"
                                        type="file"
                                        name="logo_img[]"
                                        id="logo_img"
                                        multiple
                                        accept="image/*">

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
document.getElementById('img').addEventListener('change', function(e){
    const preview = document.getElementById('previewimg');
    const file = e.target.files[0];

    if(file){
        // Update preview to new img
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    } else {
        // Keep old img if no file selected
        preview.style.display = '{{ isset($leaderships->img) ? 'block' : 'none' }}';
    }
});
</script>
<script>

const logoInput = document.getElementById('logo_img');
const previewContainer = document.getElementById('logoPreviewContainer');

logoInput.addEventListener('change', function(){

    previewContainer.innerHTML = "";

    Array.from(this.files).forEach(file => {

        const reader = new FileReader();

        reader.onload = function(e){

            const wrapper = document.createElement("div");
            wrapper.className = "relative";

            wrapper.innerHTML = `
                <img src="${e.target.result}" width="120" class="rounded border">
                <button type="button"
                    class="removePreview absolute -top-2 -right-2 bg-red-500 text-white w-6 h-6 rounded-full">
                    &times;
                </button>
            `;

            previewContainer.appendChild(wrapper);
        }

        reader.readAsDataURL(file);

    });

});

</script>
@endsection
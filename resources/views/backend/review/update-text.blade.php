@extends('backend.admin')

@section('content')

    @section('site-title')
        Admin | Update
    @endsection

    @section('page-main-title')
        UPDATE APPROACH OF CONTENT
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
                <form action="{{ route('submit.reviewcontent') }}" method="post" enctype="multipart/form-data">
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
                                        <input class="form-control" type="text" name="title" value="{{ $getContent->title }}"
                                            placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="description" class="form-control" id="description"
                                            placeholder="Description">{{ $getContent->description }}</textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card 1</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_card_1"
                                            value="{{ $getContent->title_card_1 }}" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_card_1" class="form-control" id="desc_card_1"
                                                placeholder="Description">{!! $getContent->desc_card_1 !!}</textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="name_card_1"
                                            value="{{ $getContent->name_card_1 }}" placeholder="name" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="positioin_card_1" class="form-control" id="positioin_card_1"
                                                placeholder="position">{!! $getContent->positioin_card_1 !!}</textarea>
                                    </div>
                                </div>
                
                                 <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card 2</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_card_2"
                                            value="{{ $getContent->title_card_2 }}" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_card_2" class="form-control" id="desc_card_2"
                                                placeholder="Description">{!! $getContent->desc_card_2 !!}</textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="name_card_2"
                                            value="{{ $getContent->name_card_2 }}" placeholder="name" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="positioin_card_2" class="form-control" id="positioin_card_2"
                                                placeholder="position">{!! $getContent->positioin_card_2 !!}</textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        {{-- Image Preview --}}
                                        <div class="mb-2">
                                            <img id="previewprofile_card_2"
                                                src="{{ isset($getContent->profile_card_2) ? asset($getContent->profile_card_2) : '' }}"
                                                width="150"
                                                class="rounded border"
                                                style="display: {{ isset($getContent->profile_card_2) ? 'block' : 'none' }};">
                                        </div>

                                        {{-- File Input --}}
                                        <input class="form-control"
                                            type="file"
                                            name="profile_card_2"
                                            id="profile_card_2"
                                            accept="image/*">
                                    </div>
                                </div>

                                 <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card 3</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_card_3"
                                            value="{{ $getContent->title_card_3 }}" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_card_3" class="form-control" id="desc_card_3"
                                                placeholder="Description">{!! $getContent->desc_card_3 !!}</textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="name_card_3"
                                            value="{{ $getContent->name_card_3 }}" placeholder="name" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="positioin_card_3" class="form-control" id="positioin_card_3"
                                                placeholder="Postion">{!! $getContent->positioin_card_3 !!}</textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        {{-- profile_card_3 Preview --}}
                                        <div class="mb-2">
                                            <img id="previewprofile_card_3"
                                                src="{{ isset($getContent->profile_card_3) ? asset($getContent->profile_card_3) : '' }}"
                                                width="150"
                                                class="rounded border"
                                                style="display: {{ isset($getContent->profile_card_3) ? 'block' : 'none' }};">
                                        </div>

                                        {{-- File Input --}}
                                        <input class="form-control"
                                            type="file"
                                            name="profile_card_3"
                                            id="profile_card_3"
                                            accept="image/*">
                                    </div>
                                </div>

                                 <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Section Card 4</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_card_4"
                                            value="{{ $getContent->title_card_4 }}" placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="desc_card_4" class="form-control" id="desc_card_4"
                                                placeholder="Description">{!! $getContent->desc_card_4 !!}</textarea>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="name_card_4"
                                            value="{{ $getContent->name_card_4 }}" placeholder="name" />
                                    </div>
                                    <div class="mb-3 col-12">
                                            <textarea name="positioin_card_4" class="form-control" id="positioin_card_4"
                                                placeholder="positioin">{!! $getContent->positioin_card_4 !!}</textarea>
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
        ClassicEditor
            .create(document.querySelector('#description_2'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#table'))
            .catch(error => {
                console.error(error);
            });
</script>
<script>
document.getElementById('profile_card_2').addEventListener('change', function(event) {
    const preview = document.getElementById('previewprofile_card_2');
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
});
</script>
<script>
document.getElementById('profile_card_3').addEventListener('change', function(event) {
    const preview = document.getElementById('previewprofile_card_3');
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
});
</script>

<script>
    document.getElementById('profile_card_3').addEventListener('change', function(e){
        const file = e.target.files[0];
        if(file){
            if(file.size > 2 * 1024 * 1024){ // 2MB limit
                alert('File is too big! Maximum 2MB.');
                e.target.value = ''; // reset input
                return;
            }
            const reader = new FileReader();
            reader.onload = function(e){
                const img = document.getElementById('previewprofile_card_3');
                img.src = e.target.result;
                img.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });
</script>

<script>
    document.getElementById('profile_card_2').addEventListener('change', function(e){
        const file = e.target.files[0];
        if(file){
            if(file.size > 2 * 1024 * 1024){ // 2MB limit
                alert('File is too big! Maximum 2MB.');
                e.target.value = ''; // reset input
                return;
            }
            const reader = new FileReader();
            reader.onload = function(e){
                const img = document.getElementById('previewprofile_card_2');
                img.src = e.target.result;
                img.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });
</script>

@endsection
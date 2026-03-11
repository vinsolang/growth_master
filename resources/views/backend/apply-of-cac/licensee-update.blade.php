@extends('backend.admin')

@section('content')

    @section('site-title')
        Admin | Update
    @endsection

    @section('page-main-title')
        UPDATE Licensee
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
                <form action="{{ route('licensee.update') }}" method="post" enctype="multipart/form-data">
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
                                        <input class="form-control" type="text" name="title_1" value="{{ $getContent->title_1 }}"
                                            placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_1" class="form-control" id="desc_1"
                                            placeholder="Description">{{ $getContent->desc_1 }}</textarea>
                                    </div>
                                </div>

                                 <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_2" value="{{ $getContent->title_2 }}"
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
                                            <input class="form-control" type="text" name="t_1" value="{{ $getContent->t_1 }}"
                                                placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="d_1" class="form-control" id="d_1"
                                                placeholder="Description">{{ $getContent->d_1 }}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 border border-[#0F4634]">
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="t_2" value="{{ $getContent->t_2 }}"
                                                placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="d_2" class="form-control" id="d_2"
                                                placeholder="Description">{{ $getContent->d_2 }}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 border border-[#0F4634]">
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="t_3" value="{{ $getContent->t_3 }}"
                                                placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="d_3" class="form-control" id="d_3"
                                                placeholder="Description">{{ $getContent->d_3 }}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 border border-[#0F4634]">
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="t_4" value="{{ $getContent->t_4 }}"
                                                placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="d_4" class="form-control" id="d_4"
                                                placeholder="Description">{{ $getContent->d_4 }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_3" value="{{ $getContent->title_3 }}"
                                            placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_3" class="form-control" id="desc_3"
                                            placeholder="Description">{{ $getContent->desc_3 }}</textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_4" class="form-control" id="desc_4"
                                            placeholder="Description">{{ $getContent->desc_4 }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_5" class="form-control" id="desc_5"
                                            placeholder="Description">{{ $getContent->desc_5 }}</textarea>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_meet" value="{{ $getContent->title_meet }}"
                                            placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_meet" class="form-control" id="desc_meet"
                                            placeholder="Description">{{ $getContent->desc_meet }}</textarea>
                                    </div>
                                </div>

                                <div class="border border-[#0F4634] mb-3 col-12">
                                    <div class="mb-3 col-12">

                                        <div class="mb-3 col-12">
                                            {{-- profile Preview --}}
                                            <div class="mb-2">
                                                <img id="previewprofile"
                                                    src="{{ isset($getContent->profile) ? asset($getContent->profile) : '' }}"
                                                    width="150"
                                                    class="rounded border"
                                                    style="display: {{ isset($getContent->profile) ? 'block' : 'none' }};">
                                            </div>

                                            {{-- File Input --}}
                                            <input class="form-control"
                                                type="file"
                                                name="profile"
                                                id="profile"
                                                accept="image/*">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 border border-[#0F4634]">
                                        <div class="mb-3 col-12">
                                            <input class="form-control" type="text" name="name" value="{{ $getContent->name }}"
                                                placeholder="Title" />
                                        </div>
                                        <div class="mb-3 col-12">
                                            <textarea name="position" class="form-control" id="position"
                                                placeholder="Description">{{ $getContent->position }}</textarea>
                                        </div>
                                          <div class="mb-3 col-12">
                                            <textarea name="desc_him" class="form-control" id="desc_him" rows="4"
                                                placeholder="Description">{{ $getContent->desc_him }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                 <div class="mb-3 col-12 border border-[#0F4634]">
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_final" value="{{ $getContent->title_final }}"
                                            placeholder="Title" />
                                    </div>
                                    <div class="mb-3 col-12">
                                        <textarea name="desc_final" class="form-control" id="desc_final"
                                            placeholder="Description">{{ $getContent->desc_final }}</textarea>
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
            .create(document.querySelector('#desc_4'))
            .catch(error => {
                console.error(error);
        });
        ClassicEditor
            .create(document.querySelector('#desc_5'))
            .catch(error => {
                console.error(error);
        });

</script>
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
document.getElementById('profile').addEventListener('change', function(e){
    const preview = document.getElementById('previewprofile');
    const file = e.target.files[0];

    if(file){
        // Update preview to new profile
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    } else {
        // Keep old profile if no file selected
        preview.style.display = '{{ isset($leaderships->profile) ? 'block' : 'none' }}';
    }
});
</script>
@endsection
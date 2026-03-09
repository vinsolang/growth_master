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

                                <div class="mb-3 col-12 border border-[#0F4634] p-3">

                                    <label class="form-label text-[#0F4634]">Blocks</label>

                                    <div id="block-wrapper">

                                    @if(!empty($leaderships->title_card))
                                    @foreach($leaderships->title_card as $i => $title)

                                    <div class="block-item border p-3 mb-3 rounded">

                                    <input type="text"
                                        name="title_card[]"
                                        class="form-control mb-2"
                                        placeholder="Title"
                                        value="{{ $title }}">

                                    <textarea name="desc_card[]"
                                        class="form-control mb-2"
                                        placeholder="Description">{{ $leaderships->desc_card[$i] ?? '' }}</textarea>

                                    <img
                                        src="{{ isset($leaderships->img_card[$i]) ? asset($leaderships->img_card[$i]) : '' }}"
                                        width="120"
                                        class="preview mb-2"
                                        style="display: {{ isset($leaderships->img_card[$i]) ? 'block' : 'none' }}">

                                    <input type="file"
                                        name="img_card[]"
                                        class="form-control img-input">

                                    <button type="button" class="btn btn-danger mt-2 remove-block">Remove</button>

                                    </div>

                                    @endforeach
                                @endif

                                </div>

                                <button type="button" id="addBlock" class="btn btn-success mt-3">
                                + Add Block
                                </button>

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

document.addEventListener('click', function(e){

if(e.target.classList.contains('remove-block')){
e.target.closest('.block-item').remove();
}

});

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

@endsection
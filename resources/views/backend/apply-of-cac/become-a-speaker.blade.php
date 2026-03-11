@extends('backend.admin')

@section('content')

    @section('site-title')
        Admin | Update
    @endsection

    @section('page-main-title')
        UPDATE Become A Speaker
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
                <form action="{{ route('become.update') }}" method="post" enctype="multipart/form-data">
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

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-[#0F4634]">Title Of Image</label>
                                    <div class="mb-3 col-12">
                                        <input class="form-control" type="text" name="title_2"
                                            value="{{ $getContent->title_2 }}" placeholder="Title" />
                                    </div>
                                    {{-- Array --}}
                                   <div id="textJsonWrapper">
                                      @forelse(json_decode($getContent->text_json ?? '[]', true) as $text)
                                            <div class="mb-3 col-12 flex items-start gap-2">
                                                <textarea class="form-control" name="text_json[]">{{ $text }}</textarea>

                                                <button type="button" class="btn btn-danger" onclick="removeField(this)">
                                                    Remove
                                                </button>
                                            </div>
                                        @empty
                                            <div class="mb-3 col-12 flex items-start gap-2">
                                                <textarea class="form-control" name="text_json[]" placeholder="Title"></textarea>
                                            </div>
                                        @endforelse

                                    </div>

                                    <button type="button" class="btn btn-primary mt-2" onclick="addTextJson()">+ Add</button>
                                </div>
                                <div class="mb-3 col-12">
                                    <input class="form-control" type="text" name="title_3" value="{{ $getContent->title_3 }}"
                                        placeholder="Title" />
                                </div>

                                <div class="mb-3 col-12">

                                    <div id="cardJsonWrapper">

                                @forelse($getContent->card_json ?? [] as $card)

                                        <div class="mb-3 col-12 flex items-start gap-2 card-item">

                                            <input type="text"
                                                class="form-control"
                                                name="card_title[]"
                                                value="{{ $card['title'] ?? '' }}"
                                                placeholder="Title">

                                        <textarea
                                            class="form-control"
                                            name="card_desc[]"
                                            placeholder="Description">{{ $card['desc'] ?? '' }}</textarea>

                                        <button type="button" class="btn btn-danger" onclick="removeCard(this)">
                                            Remove
                                        </button>

                                    </div>

                                    @empty

                                    <div class="mb-3 col-12 flex items-start gap-2 card-item">

                                        <input type="text" class="form-control" name="card_title[]" placeholder="Title">

                                        <textarea class="form-control" name="card_desc[]" placeholder="Description"></textarea>

                                    </div>

                                    @endforelse

                                    </div>

                                    <button type="button" class="btn btn-primary mt-2" onclick="addCardJson()">+ Add</button>
                                </div>
                                 <div class="mb-3 col-12">
                                    <textarea class="form-control" name="desc_3" placeholder="Description">{{ $getContent->desc_3 }}</textarea>
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

@endsection
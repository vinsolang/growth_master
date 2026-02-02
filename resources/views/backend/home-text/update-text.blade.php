@extends('backend.admin')

@section('content')

@section('site-title')
    Admin | Update
@endsection

@section('page-main-title')
    UPDATE
@endsection

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-xl-12">

            <form action="{{ route('home-text.update', $hometext->id) }}" method="post">
                @csrf

                <input type="hidden" name="id" value="{{ $hometext->id }}">

                <div class="card">
                    @if (Session::has('message'))
                        <p class="text-danger text-center">{{ Session::get('message') }}</p>
                    @endif

                    <div class="card-body">
                        <div class="row">

                            <div class="mb-3 col-12">
                                <label class="form-label text-[#0F4634]">Question</label>
                                <textarea name="title" class="form-control" id="title">{{ $hometext->title }}</textarea>
                            </div>

                            <div class="mb-3 col-12">
                                <label class="form-label text-[#0F4634]">Answer</label>
                                <textarea name="description" class="form-control" id="description" rows="6">{{ $hometext->description }}</textarea>
                            </div>

                            <div class="flex gap-3 mt-3">
                                <a href="{{ route('home-text.index') }}"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200">
                                    Cancel
                                </a>

                                <button type="submit"
                                    class="px-6 py-3 bg-[#0F4634] text-white font-semibold rounded-xl hover:bg-[#052e21] transition duration-200">
                                    Update 
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection

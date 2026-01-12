@extends('backend.admin')

@section('site-title', 'Admin | Chair Contact Detail')
@section('page-main-title', 'Chair Contact Detail')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Contact Information</h5>
                        <a href="{{ route('chair.contact.index') }}" class="btn btn-sm btn-secondary">
                            ← Back
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-4 fw-semibold">Full Name</div>
                            <div class="col-md-8">
                                {{ $contact->firstname }} {{ $contact->lastname }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4 fw-semibold">Email</div>
                            <div class="col-md-8">
                                {{ $contact->email ?? '—' }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4 fw-semibold">Phone</div>
                            <div class="col-md-8">
                                {{ $contact->phone }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4 fw-semibold">Member Status</div>
                            <div class="col-md-8">
                                {{ $contact->member_status }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4 fw-semibold">Executive Experience</div>
                            <div class="col-md-8">
                                {{ $contact->executive_experience }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4 fw-semibold">Staff</div>
                            <div class="col-md-8">
                                {{ $contact->staff }}
                            </div>
                        </div>

                        @if($contact->comment)
                            <div class="row mb-3">
                                <div class="col-md-4 fw-semibold">Comment</div>
                                <div class="col-md-8">
                                    {{ $contact->comment }}
                                </div>
                            </div>
                        @endif

                        @if($contact->cv)
                            <div class="row">
                                <div class="col-md-4 fw-semibold">CV File</div>
                                <div class="col-md-8">
                                    <a href="{{ asset('storage/'.$contact->cv) }}"
                                       target="_blank"
                                       class="btn btn-outline-primary btn-sm">
                                        Download CV
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="card-footer text-end">
                        <form action="{{ route('chair.contact.destroy', $contact->id) }}"
                              method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"
                                    onclick="return confirm('Delete this record?')">
                                Delete Record
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection

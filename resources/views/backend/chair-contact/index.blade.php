@extends('backend.admin')

@section('site-title', 'Admin | Chair Contact List')
@section('page-main-title', 'Chair Contact List')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl grow container-p-y">

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Submitted Contacts</h5>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contacts as $index => $contact)
                            <tr>
                                <td>{{ $contacts->firstItem() + $index }}</td>
                                <td class="fw-semibold">
                                    {{ $contact->firstname }} {{ $contact->lastname }}
                                </td>
                                <td>{{ $contact->email ?? '—' }}</td>
                                <td class="text-center">
                                    <a href="{{ route('chair.contact.show', $contact->id) }}"
                                       class="btn btn-sm btn-primary">
                                        View
                                    </a>

                                    <form action="{{ route('chair.contact.destroy', $contact->id) }}"
                                          method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Delete this record?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">
                                    No records found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $contacts->links() }}
            </div>
        </div>

    </div>
</div>
@endsection

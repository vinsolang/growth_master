@extends('backend.admin')
@section('content')
    <div class="content-wrapper">
        @section('site-title')
            Admin | List 
        @endsection
        @section('page-main-title')
            LIST EVENT
        @endsection

        <div class="container-xxl flex-grow-1 container-p-y space-y-2">
            <div class="flex gap-3 justify-end">
                <a href="{{ route('event.create') }}">
                    <input type="submit"
                        class="px-6 py-2 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200"
                        value="+ Add New">
                </a>
            </div>
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Event Time</th>
                                <th>Event Type</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody class="table-border-bottom-0">
                            @foreach ($events as $items)
                                <tr>
                                    {{-- Image --}}
                                    <td>
                                        @if ($items->image)
                                            <img 
                                                src="{{ asset($items->image) }}"
                                                alt="Event Image"
                                                style="width:50px;height:50px;object-fit:cover;border-radius:6px;">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>

                                    {{-- Title --}}
                                    <td>
                                        <strong>{{ $items->title }}</strong>
                                    </td>

                                    {{-- Category --}}
                                    <td>
                                        {{ $items->category ?? '-' }}
                                    </td>

                                    {{-- Description (Read more / less) --}}
                                    <td style="max-width: 250px;">
                                        <div x-data="{ expanded: false }">
                                            <span x-show="!expanded">
                                                {{ Str::limit($items->description, 10) }}
                                            </span>

                                            <span x-show="expanded">
                                                {{ $items->description }}
                                            </span>

                                            @if(strlen($items->description) > 10)
                                                <button
                                                    class="text-primary border-0 bg-transparent p-0 ms-1"
                                                    x-show="!expanded"
                                                    @click="expanded = true">
                                                    Read more
                                                </button>

                                                <button
                                                    class="text-primary border-0 bg-transparent p-0 ms-1"
                                                    x-show="expanded"
                                                    @click="expanded = false">
                                                    Read less
                                                </button>
                                            @endif
                                        </div>
                                    </td>

                                    {{-- Event Time --}}
                                    <td>
                                        {{ $items->event_date }}
                                        <br>
                                        <small class="text-muted">{{ $items->event_time }}</small>
                                    </td>

                                    {{-- Event Type --}}
                                    <td>
                                        <span class="badge bg-label-info">
                                            {{ ucfirst($items->event_type) }}
                                        </span>
                                    </td>

                                    {{-- Created At --}}
                                    <td>
                                        {{ $items->created_at->format('d M Y') }}
                                    </td>

                                    {{-- Actions --}}
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item"
                                                href="{{ route('event.edit', $items->id) }}">
                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                </a>

                                                <form action="{{ route('event.destroy', $items->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit"
                                                            class="dropdown-item text-danger"
                                                            onclick="return confirm('Delete this event?')">
                                                        <i class="bx bx-trash me-1"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="mt-3">
                {{-- FIX: Removed the incorrect $contact_us->id from the action and made it dynamic for JS --}}
                <form id="deleteForm" action="" method="POST">
                    @csrf
                    @method('DELETE')

                    <div class="modal fade" id="basicModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title">Are you sure to remove this post?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-footer">
                                    {{-- REMOVED: The unnecessary hidden input #remove_id --}}
                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <hr class="my-5" />
        </div>
        <!-- / Content -->
    </div>
    </div>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Assuming your base route is /contact and your delete form ID is deleteForm
        document.querySelectorAll(".remove-post-key").forEach(btn => {
            btn.addEventListener("click", function () {
                let id = this.dataset.id;
                // FIX: Set the form action dynamically. This targets the delete route: contact/{id}
                document.querySelector("#deleteForm").action = "{{ url('event') }}" + '/' + id;
            });
        });
    });
</script>

@endsection
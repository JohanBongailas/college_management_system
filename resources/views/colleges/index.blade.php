@extends('layouts.main')
@section('content')
    <div class="container-lg mt-4">
        <div class="card shadow-lg p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="text-white">Colleges</h2>
                <a href="{{ route('colleges.create') }}" class="btn btn-success d-flex align-items-center">
                    <span class="material-symbols-outlined me-1">add_circle</span> Add College
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colleges as $college)
                            <tr>
                                <td>{{ $college->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('colleges.edit', $college->id) }}"
                                        class="btn btn-warning btn-sm me-2 edit" title="Edit">
                                        <span class="material-symbols-outlined">edit</span>
                                    </a>

                                    <a href="{{ route('colleges.show', $college->id) }}"
                                        class="btn btn-warning btn-sm me-2 visibility" title="Show">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </a>

                                    <a href="#" data-url="{{ route('colleges.destroy', $college->id) }}"
                                        data-name="{{ $college->name }}"
                                        class="btn btn-danger btn-sm delete-college-btn delete" title="Delete"
                                        data-bs-toggle="modal" data-bs-target="#deleteConfirmationStaticBackdrop">
                                        <span class="material-symbols-outlined">delete</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

{{-- Deletion Modal --}}
<div class="modal fade" id="deleteConfirmationStaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="deleteConfirmationLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg">
            <div class="modal-header bg-danger text-white border-0">
                <h5 class="modal-title fs-5" id="deleteConfirmationLabel">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body fs-5 text-center">
                <p class="mb-4">Are you sure you want to delete <span id="collegeName" class="fw-bold"></span>?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger btn-lg px-4 py-2" data-bs-dismiss="modal">No</button>
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-success btn-lg px-4 py-2">Yes, Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/college_delete_script.js') }}"></script>

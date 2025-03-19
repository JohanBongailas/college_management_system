@extends('layouts.main')
@section('content')
    <div class="container-lg mt-4">
        <div class="card shadow-lg p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="text-white">Students</h2>
                <a href="{{ route('colleges.create') }}" class="btn btn-success d-flex align-items-center">
                    <span class="material-symbols-outlined me-1">add_circle</span> Add Student
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
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('students.edit', $student->id) }}"
                                        class="btn btn-warning btn-sm me-2 edit" title="Edit">
                                        <span class="material-symbols-outlined">edit</span>
                                    </a>

                                    <a href="{{ route('students.show', $student->id) }}"
                                        class="btn btn-warning btn-sm me-2 visibility" title="Show">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </a>

                                    {{-- <a href="#" data-url="{{ route('colleges.destroy', $college->id) }}"
                                        data-name="{{ $college->name }}"
                                        class="btn btn-danger btn-sm delete-college-btn delete" title="Delete"
                                        data-bs-toggle="modal" data-bs-target="#deleteConfirmationStaticBackdrop">
                                        <span class="material-symbols-outlined">delete</span>
                                    </a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

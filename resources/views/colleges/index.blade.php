@extends('layouts.main')
@section('content')
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Colleges</h2>
                        </div>
                    </div>
                </div>
                <table class="table table-dark table-bordered'">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colleges as $college)
                            <tr>
                                <td>{{ $college->name }}</td>
                                <td>{{ $college->address }}</td>
                                <td>
                                    <a class="edit" title="Edit" data-toggle="tooltip"><span
                                            class="material-symbols-outlined">
                                            edit
                                        </span></i></a>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><span
                                            class="material-symbols-outlined" data-bs-toggle="modal"
                                            data-bs-target="#deleteConfirmationStaticBackdrop">
                                            delete
                                        </span></i></a>
                                    <a class="add" title="Add" data-toggle="tooltip"><span
                                            class="material-symbols-outlined">
                                            add_circle
                                        </span></i></a>
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
<div class="modal fade" id="deleteConfirmationStaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="deleteConfirmationLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteConfirmationLabel">Confirmation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>

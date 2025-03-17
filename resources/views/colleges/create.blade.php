@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg p-4">
            <h2 class="mb-4 text-center">Create College</h2>
            <form action="{{ route('colleges.store') }}" method="post" novalidate>
                @csrf
                @method('POST')
                @include('partial._forms', $collegeToEdit ?? [])
            </form>
        </div>
    </div>
@endsection

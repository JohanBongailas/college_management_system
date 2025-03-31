@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg p-4">
        <h2 class="mb-4 text-center">Create Student</h2>
        <form action="{{ route('students.store') }}" method="post" novalidate>
            @csrf
            @method('POST')
            @include('partial._student_form', $studentToEdit ?? [])
        </form>
</div>
@endsection

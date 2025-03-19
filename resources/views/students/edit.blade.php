@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg p-4">
            <h2 class="mb-4 text-center">Edit Student</h2>
            <form action="{{route('students.update', $student->id)}}" method="post" novalidate>
                @csrf
                @method('PUT')
                @include('partial._student_form')
            </form>
        </div>
    </div>
@endsection

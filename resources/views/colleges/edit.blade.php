@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg p-4">
            <h2 class="mb-4 text-center">Edit College</h2>
            <form action="{{route('colleges.update', $collegeToEdit->id)}}" method="post" novalidate>
                @csrf
                @method('PUT')
                @include('partial._forms')
            </form>
        </div>
    </div>
@endsection

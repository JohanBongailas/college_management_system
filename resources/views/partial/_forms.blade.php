@extends('layouts.main')
@section('content')
    <div class="mb-3">
        <label for="nameInput" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="addressInput" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address">
    </div>
@endsection

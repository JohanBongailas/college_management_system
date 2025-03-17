@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between">
                        <!-- Back Arrow on the left -->
                        <a href="{{ route('colleges.index') }}" class="text-white fs-4">
                            <span class="material-symbols-outlined">
                                arrow_back
                            </span>
                        </a>
                        
                        <!-- Title centered in the middle -->
                        <h5 class="m-0 text-center flex-grow-1 fs-4 fw-bold">College Details</h5>
                    </div>
                    <div class="card-body p-4">
                        <!-- College Name Section -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><b>Name:</b></h5>
                            <p class="card-text fs-5">{{ $collegeToShow->name }}</p>
                        </div>

                        <!-- College Address Section -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><b>Address:</b></h5>
                            <p class="card-text fs-5">{{ $collegeToShow->address }}</p>
                        </div>

                        <!-- Optional: Any other fields can follow similar formatting -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

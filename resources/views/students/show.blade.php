@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between">
                        <!-- Back Arrow on the left -->
                        <a href="{{ route('students.index') }}" class="text-white fs-4">
                            <span class="material-symbols-outlined">
                                arrow_back
                            </span>
                        </a>

                        <!-- Title centered in the middle -->
                        <h5 class="m-0 text-center flex-grow-1 fs-4 fw-bold">Student Details</h5>
                    </div>
                    <div class="card-body p-4">
                        <!-- Student Name Section -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><b>Name:</b></h5>
                            <p class="card-text fs-5">{{ $studentToShow->name }}</p>
                        </div>

                        <!-- Student Email Section -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><b>Email:</b></h5>
                            <p class="card-text fs-5">{{ $studentToShow->email }}</p>
                        </div>

                        <!-- Student Phone Section -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><b>Phone:</b></h5>
                            <p class="card-text fs-5">{{ $studentToShow->phone }}</p>
                        </div>

                        <!-- Student Date Of Birth Section -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><b>DOB:</b></h5>
                            <p class="card-text fs-5">{{ $studentToShow->dob }}</p>
                        </div>

                        <!-- Student College Name Section -->
                        <div class="mb-4">
                            <h5 class="card-title text-primary"><b>College:</b></h5>
                            <p class="card-text fs-5">{{ $college->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

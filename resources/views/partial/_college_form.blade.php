<div class="mb-4">
    <label for="name" class="form-label fs-5">Name</label>
    <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter name"
        value="{{ old('name', $collegeToEdit->name ?? '') }}">
    @error('name')
        <div class="text-danger mt-1 small">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="address" class="form-label fs-5">Address</label>
    <input type="text" class="form-control form-control-lg" id="address" name="address" placeholder="Enter address"
        value="{{ old('address', $collegeToEdit->address ?? '') }}">
    @error('address')
        <div class="text-danger mt-1 small">{{ $message }}</div>
    @enderror
</div>

<div class="d-flex justify-content-between align-items-center mt-4">
    <!-- Back Button -->
    <a href="{{ route('colleges.index') }}" class="btn btn-primary btn-lg d-flex align-items-center">
        <span class="material-symbols-outlined me-2">arrow_back</span> Back
    </a>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary btn-lg px-4 py-2">
        Submit
    </button>
</div>

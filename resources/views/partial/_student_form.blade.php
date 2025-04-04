<div class="mb-4">
    <label for="name" class="form-label fs-5">Name</label>
    <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter name"
        value="{{ old('name', $studentToEdit->name ?? '') }}">
    @error('name')
        <div class="text-danger mt-1 small">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="email" class="form-label fs-5">Email</label>
    <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Enter email"
        value="{{ old('email', $studentToEdit->email ?? '') }}">
    @error('email')
        <div class="text-danger mt-1 small">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="phone" class="form-label fs-5">Phone</label>
    <input type="text" class="form-control form-control-lg" id="phone" name="phone" placeholder="Enter phone"
        value="{{ old('phone', $studentToEdit->phone ?? '') }}">
    @error('phone')
        <div class="text-danger mt-1 small">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="dob" class="form-label
        fs-5">Date of Birth</label>
    <input type="date" class="form-control form-control-lg" id="dob" name="dob"
        placeholder="Enter date of birth" value="{{ old('dob', $studentToEdit->dob ?? '') }}">
    @error('dob')
        <div class="text-danger mt-1 small">{{ $message }}</div>
    @enderror
</div>

<div class="mb-4">
    <label for="college_id" class="form-label fs-5">College</label>
    <select class="form-select form-select-lg" id="college_id" name="college_id">
        <option value="{{old("college_id", $studentToEdit->college_id ?? '')}}">Select College</option>
        @foreach ($colleges as $college)
            <option value="{{ $college->id }}"
                {{ (old('college_id', $studentToEdit->college_id ?? '') == $college->id) ? 'selected' : '' }}>
                {{ $college->name }}</option>
        @endforeach
    </select>
    @error('college_id')
        <div class="text-danger mt-1 small">{{ $message }}</div>
    @enderror
</div>

<div class="d-flex justify-content-between align-items-center mt-4">
    <!-- Back Button -->
    <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg d-flex align-items-center">
        <span class="material-symbols-outlined me-2">arrow_back</span> Back
    </a>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary btn-lg px-4 py-2">
        Submit
    </button>
</div>

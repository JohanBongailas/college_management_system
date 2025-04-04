<div class="input-group">
    <select id="filter_college_id" class="custom-select">
        @foreach ($colleges as $id => $name)
            <option {{ $id == request('college_id') ? 'selected' : '' }} value="{{ $id }}">
                {{ $name }}
            </option>
        @endforeach
    </select>
</div>
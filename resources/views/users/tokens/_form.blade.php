<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $token->name ?? '') }}" required>
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

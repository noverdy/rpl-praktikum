<div class="form-floating mb-3">
    @if ($type == 'textarea')
        <textarea name="{{ $name }}" class="form-control @error($name) is-invalid @enderror"
            placeholder="{{ $label }}" id="{{ $id }}" style="height: 200px" required>{{ old($name) }}</textarea>
        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    @else
        <input name="{{ $name }}" type="{{ $type }}"
            class="form-control @error($name) is-invalid @enderror {{ $readonly ? 'bg-light' : '' }}"
            id="{{ $id }}" placeholder="{{ $label }}" value="{{ $value ?: old($name) }}"
            {{ $readonly ? 'readonly' : '' }} required>
        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    @endif
    <label for="{{ $id }}">{{ $label }}</label>
</div>

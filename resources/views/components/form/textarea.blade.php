<div class="mb-3">
    <label class="form-label {{ $required ?? '' }}" for="{{ $name }}">{{ $labelName }}</label>
    <textarea rows="{{ $rows ?? '4' }}" class="form-control {{ $class ?? '' }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder ?? '' }}">{{ $value ?? '' }}</textarea>
    @if (!empty($error))
        @error($error)
        <span class="text-danger">{{ $message }}</span>
        @enderror
    @endif
</div>

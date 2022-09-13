<div class="mb-3">
    <label class="form-label {{ $required ?? '' }}" for="{{ $name }}">{{ $labelName }}</label>
    <input type="{{ $type ?? 'text' }}" class="form-control {{ $class ?? '' }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder ?? '' }}" value="{{ $value ?? '' }}" @if(!empty($multiple)) multiple @endif>
    @if (!empty($error))
        @error($error)
        <span class="text-danger">{{ $message }}</span>
        @enderror
    @endif
</div>

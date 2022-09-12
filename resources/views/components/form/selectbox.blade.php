<div class="mb-3">
    <label class="form-label {{ $required ?? '' }}" for="{{ $name }}">{{ $labelName }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="{{ $class ?? '' }} form-control">
        {{ $slot }}
    </select>
    @if (!empty($error))
        @error($error)
        <span class="text-danger">{{ $message }}</span>
        @enderror
    @endif
</div>

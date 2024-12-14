@props(['id', 'type'])
<div class="input-box">
    <input class="input-field" id="{{ $id }}" placeholder=" " required type="{{ $type }}">
    <label class="input-label" for="{{ $id }}">{{ $slot }}</label>
</div>

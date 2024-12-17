{{-- How to use? --}}
{{-- <x-input-field type='(type?)' id='(id)'>(Label)</x-input-field>
!!!NEED TO IMPORT EXT CSS FILE FOR STYLES!!! --}}


@props(['id', 'type', 'name'])
<div class="input-box">
  <input class="input-field" id="{{ $id }}" name="{{ $name }}" placeholder=" " required
    type="{{ $type }}">
  <label class="input-label" for="{{ $id }}">{{ $slot }}</label>
</div>

{{-- How to use? --}}
{{-- <x-upload-file id='(id)'>(Label)</x-upload-file>
!!!NEED TO IMPORT EXT CSS FILE FOR STYLES!!! --}}

@props(['id', 'name'])
<div class="input-box">
    <label class="file-label" for="{{ $id }}">{{$slot}}</label>
    <div class="upload-button">
        <img class="upload-icon" src="{{ asset('icon/upload.png') }}" alt="upload_icon">
        <label class="file-name" for="{{ $id }}">Upload File</label>
    </div>
    <input id="{{ $id }}" name="{{ $name }}" class="file-input" required type="file" accept=".pdf">
</div>

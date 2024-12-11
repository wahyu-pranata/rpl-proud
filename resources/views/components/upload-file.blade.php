@props(['id'])
<div class="input-box">
    <label class="bukti-label" for="{{$id}}">{{$slot}}</label>
    <div class="upload-button">
        <img class="upload-icon" src="{{ asset('icon/upload.png') }}" alt="upload_icon">
        <label class="file-name" for="">Upload File</label>
    </div>
    <input id="{{$id}}" required type="file">
</div>

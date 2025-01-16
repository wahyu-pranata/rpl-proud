{{-- How to use? --}}
{{-- <x-upload-file id='(id)'>(Label)</x-upload-file>
!!!NEED TO IMPORT EXT CSS FILE FOR STYLES!!! --}}

@props(['id', 'name'])
<div class="input-box group max-w-fit">
    <label class="file-label my-[0.5em]" for="{{ $id }}">{{$slot}}</label>
    <button type="button" class="upload-button group-hover:bg-light-blue text-ellipsis max-w-full w-fit h-[3.2em] border-solid border-light-blue border-2 flex items-center justify-between rounded-lg px-[1em] text-light-blue space-x-2 mb-3 mt-2 active:border-transparent">
        <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.45817 13.1667V4.67716L4.74984 7.3855L3.2915 5.87508L8.49984 0.666748L13.7082 5.87508L12.2498 7.3855L9.5415 4.67716V13.1667H7.45817ZM2.24984 17.3334C1.67692 17.3334 1.18664 17.1296 0.779004 16.722C0.371365 16.3143 0.167198 15.8237 0.166504 15.2501V12.1251H2.24984V15.2501H14.7498V12.1251H16.8332V15.2501C16.8332 15.823 16.6294 16.3136 16.2217 16.722C15.8141 17.1303 15.3234 17.3341 14.7498 17.3334H2.24984Z" fill="#679CE4"
            class="group-hover:fill-light-primary"
            />
        </svg>
        <label class="file-name group-hover:text-light-primary" for="{{ $id }}">Upload File</label>
    </button>
    <input id="{{ $id }}" name="{{ $name }}" class="file-input hidden" required type="file">
</div>

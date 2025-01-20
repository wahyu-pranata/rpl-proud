{{-- How to use? --}}
{{-- <x-input-field type='(type?)' id='(id)'>(Label)</x-input-field>
!!!NEED TO IMPORT EXT CSS FILE FOR STYLES!!! --}}


@props(['id', 'type', 'name'])
<div class="input-box relative">
    <input required type="{{ $type }}" id="{{ $id }}" name="{{ $name }}"
        class="block px-2.5 pb-2.5 pt-4 w-full text-sm rounded-lg border-2 border-gray-500 hover:border-black appearance-none dark:border-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder=" " />
    <label for="{{ $id }}"
        class="absolute text-sm text-gray-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
        {{ $slot }}
    </label>
</div>

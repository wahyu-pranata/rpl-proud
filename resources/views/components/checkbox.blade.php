{{-- How to use? --}}
{{-- <x-checkbox id='(id)'>(Label)</x-checkbox>
!!!NEED TO IMPORT EXT CSS FILE FOR STYLES!!! --}}

@props(['id'])

<div class="check-box">
    <input class="custom-cb" id="{{$id}}" type="checkbox">
    <label class="text-dark-secondary hover:text-light-blue" for="{{$id}}">{{$slot}}</label>
</div>

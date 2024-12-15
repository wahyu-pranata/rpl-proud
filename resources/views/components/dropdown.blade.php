{{-- How to use? --}}
{{-- <x-dropdown :items='(items array)'>(Label)</x-dropdown>
!!!NEED TO IMPORT EXT CSS FILE FOR STYLES!!! --}}

<div class="dropdown">
    <div class="input-field select">
        <span class="selected">{{$slot}}</span>
        <svg class="dropdown-icon" width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.0001 1.5L8.41182 8.5L2.23535 1.5" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
    <ul class="options">
        @foreach ($items as $value => $item)
        <li data-value="{{$value}}">{{ $item }}</li>
        @endforeach
    </ul>
</div>

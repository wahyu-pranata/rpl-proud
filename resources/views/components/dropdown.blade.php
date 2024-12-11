<div class="dropdown">
    <div class="input-field select">
        <span class="selected">{{$slot}}</span>
        <img class="dropdown-icon" src="{{ asset('icon/dropdown.png') }}" alt="dropdown-icon">
    </div>
    <ul class="options">
        @foreach ($items as $value => $item)
        <li data-value="{{$value}}">{{ $item }}</li>
        @endforeach
    </ul>
</div>

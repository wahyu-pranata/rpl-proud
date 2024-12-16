<header class="flex items-center justify-between bg-white px-6 py-4 shadow">
    <a href="#" class="text-xl font-bold">Proud</a>
    {{-- tabs --}}
    <div class="flex items-center space-x-8">
        @foreach ($tabs as $tab)
            <a href="" class="flex items-center gap-2 {{ $tab['icon_class'] }}">
                {{-- icon --}}
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $tab['icon_path'] }}" />
                </svg>
                {{-- label --}}
                <div>{{ $tab['label'] }}</div>
            </a>
        @endforeach
        {{-- profile --}}
        <a href="" class="flex items-center space-x-2 unselect-tab">
            <div class="text-end">
                <div class="font-bold">{{ $dbtop }}</div>
                <div class="text-sm">{{ $dbbottom }}</div>
            </div>
            <div class="w-8 h-8 bg-gray-300 rounded-full"></div> <!-- Placeholder -->
        </a>
    </div>
</header>

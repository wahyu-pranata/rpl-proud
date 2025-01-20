<div class="border-2 rounded-lg p-6 {{ $isConfirmed ? 'border-blue-500' : 'border-gray-400' }} mb-6">
    <div class="flex justify-between items-center">
        <div>
            <h3 class="font-bold text-gray-700">{{ $role }}</h3>
            @if($isConfirmed)
                <div class="flex items-center space-x-2 mt-2">
                    <div class="w-12 h-12 bg-blue-700 rounded-full"></div>
                    <div>
                        <p class="font-semibold text-gray-900">{{ $name }}</p>
                        <p class="text-sm text-gray-500">{{ $id }}</p>
                    </div>
                </div>
            @else
                <p class="text-sm text-gray-500 mt-2">Undang mahasiswa untuk bergabung</p>
            @endif
        </div>
        <div>
            @if($isConfirmed)
                <button class="border-2 font-semibold text-blue-950 border-blue-950 px-4 py-1 rounded-lg hover:bg-blue-950 hover:text-white">
                    Ubah
                </button>
            @else
                <button class="border-2 font-semibold text-blue-950 border-blue-950 px-4 py-1 rounded-lg hover:bg-blue-950 hover:text-white">
                    Undang
                </button>
            @endif
        </div>
    </div>
</div>

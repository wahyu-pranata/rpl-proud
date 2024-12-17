<div class="space-y-4">
@foreach ($items as $item)
    <div class="flex items-center space-x-2 border-lg mt-4">
    <input type="checkbox" id="sie{{ $loop->index + 1 }}" class="w-6 h-6 rounded-md border-2">
    <label for="sie{{ $loop->index + 1 }}" class="text-sm font-medium text-gray-500">{{ $item }}</label>
    </div>
@endforeach
</div>

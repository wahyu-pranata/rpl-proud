@props(['rows', 'headers', 'color', 'data' => 'fit'])

@php
    $calculatedHeight = $data !== 'fit'
        ? ((float) $data * 63.67 + 56.33) . 'px'
        : 'none';
@endphp

<div id="terdaftar-section"
     class="relative mt-6"
     style="--max-height: {{ $calculatedHeight }};">
  <div class="box-border w-full bg-white rounded-lg shadow-md mb-6 overflow-hidden overflow-y-auto"
       style="max-height: var(--max-height);">
    {{-- data table --}}
    <table class="w-full">
      {{-- header --}}
      <thead class="sticky top-0 bg-light-blue text-white" style="background-color: {{ $color }}">
        <tr>
          @foreach ($headers as $header)
            <th class="text-left p-4">{{ $header }}</th>
          @endforeach
        </tr>
      </thead>
      {{-- row --}}
      <tbody>
        @forelse ($rows as $row)
          <tr class="border-t">
            @foreach ($row as $cell)
              <td class="p-4">{{ $cell }}</td>
            @endforeach
            <td class="p-4 text-right">
              <button class="text-gray-primary hover:text-light-blue mr-2 transition">
                <svg width="8" height="23" viewBox="0 0 8 26" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.814453" y="0.5" width="7" height="7" rx="2" fill="currentColor" />
                  <rect x="0.814453" y="9.5" width="7" height="7" rx="2" fill="currentColor" />
                  <rect x="0.814453" y="18.5" width="7" height="7" rx="2" fill="currentColor" />
                </svg>
              </button>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="{{ count($headers) + 1 }}" class="p-4 text-center">No data available</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>

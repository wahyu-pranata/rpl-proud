@extends('layouts.dashboard')
@section('title', 'Mahasiswa')

@section('left-section')
  <div class="px-4 py-8 flex gap-8 items-start border-dark-blue border-2 rounded-lg">
    <div>
      <div class="flex gap-4 ">
        <div>
          <div class="bg-slate-400 rounded-full w-16 h-16">
          </div>
          <div>
            <h2 class="text-xl font-bold max-w-40 text-nowrap overflow-hidden text-ellipsis hover:overflow-visible">I
              Komang
              Wahyu Pranata</h2>
            <p class="text-slate-400 text-sm">2308561026</p>
          </div>
          <table class="border-spacing-4 border-collapse">
            <tr>
              <td>Fakultas</td>
              <td class="pl-6">MIPA</td>
            </tr>
            <tr>
              <td>Program Studi</td>
              <td class="pl-6">Informatika</td>
            </tr>
            <tr>
              <td>Organisasi</td>
              <td class="pl-6">-</td>
            </tr>
            <tr>
              <td>No. Telepon</td>
              <td class="pl-6">081234567890</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <button class="border-2 border-red-500 text-red-500 px-4 py-2 hover:bg-red-500 hover:text-white rounded-lg">
      Logout
    </button>
  </div>
  @include('components.calendar')
@endsection

@section('right-section')
  <h2 class="font-bold text-2xl">Pendaftaran</h2>
  <x-table :headers="['Kepanitiaan', 'Bidang 1', 'Bidang 2', 'Status', '']" :rows="[
      ['Invention', 'Bidang Lomba', 'Bidang 3D', 'Ditolak'],
      ['Invention', 'Bidang Lomba', 'Bidang 3D', 'Ditolak'],
      ['Invention', 'Bidang Lomba', 'Bidang 3D', 'Ditolak'],
      ['Invention', 'Bidang Lomba', 'Bidang 3D', 'Ditolak'],
  ]" />
  <h2 class="font-bold text-2xl">Berjalan</h2>
  <x-table :headers="['Kepanitiaan', 'Bidang', 'Jabatan', 'Acara Selanjutnya', 'Waktu Acara', '']" :rows="[
      ['Invention', 'Bidang Lomba', 'Sub-Koordinator', 'Rapat Umum 1', '01/01/2025'],
      ['Invention', 'Bidang Lomba', 'Sub-Koordinator', 'Rapat Umum 1', '01/01/2025'],
      ['Invention', 'Bidang Lomba', 'Sub-Koordinator', 'Rapat Umum 1', '01/01/2025'],
  ]" />

  <h2 class="font-bold text-2xl">Riwayat</h2>
  <x-table :headers="['Kepanitiaan', 'Bidang', 'Jabatan', 'Waktu', '']" :rows="[
      ['Invention', 'Bidang Lomba', 'Sub-Koordinator', '01/01/2025 - 01/09/2025'],
      ['Invention', 'Bidang Lomba', 'Sub-Koordinator', '01/01/2025 - 01/09/2025'],
      ['Invention', 'Bidang Lomba', 'Sub-Koordinator', '01/01/2025 - 01/09/2025'],
  ]" />
@endsection

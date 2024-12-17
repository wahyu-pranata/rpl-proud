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
            <h2 class="text-xl font-bold max-w-40 text-nowrap overflow-hidden text-ellipsis hover:overflow-visible">
              {{ auth()->user()->name }}
            </h2>
          </div>
          @if (auth()->user()->type != 'organization')
            <table class="border-spacing-4 border-collapse">
              <tr>
                <td>Fakultas</td>
                <td class="pl-6">{{ $user->faculty_name }}</td>
              </tr>
              <tr>
                <td>Program Studi</td>
                <td class="pl-6">{{ $user->major_name }}</td>
              </tr>
              <tr>
                <td>Organisasi</td>
                <td class="pl-6">{{ $user->type == 'organization' ? $user->name : '-' }}</td>
              </tr>
              <tr>
                <td>No. Telepon</td>
                <td class="pl-6">{{ $user->phone }}</td>
              </tr>
            </table>
          @else
            <table class="border-spacing-4 border-collapse">
              <tr>
                <td>Lingkupan</td>
                <td class="pl-6">
                  {{ ($user->faculty_name == 'Any' ? 'Universitas' : $user->major_name == 'Any') ? 'Fakultas' : 'Program Studi' }}
                </td>
              </tr>
              <tr>
                <td>Anggota</td>
                <td class="pl-6">100</td>
              </tr>
            </table>
          @endif
        </div>
      </div>
    </div>
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit"
        class="border-2 border-red-500 text-red-500 px-4 py-2 hover:bg-red-500 hover:text-white rounded-lg">
        Logout
      </button>
    </form>
  </div>
  @if (auth()->user()->type == 'organization')
    <h2 class="font-bold text-2xl">Data Anggota</h2>
    <x-table :headers="['Nama', 'NIM', 'Program Studi', '']" :rows="[
        ['Agus 1', '2300000001', 'Informatika'],
        ['Budi 2', '2300000002', 'Informatika'],
        ['Caca 3', '2300000003', 'Informatika'],
        ['Dedi 4', '2300000004', 'Informatika'],
    ]" />
  @else
    @include('components.calendar')
  @endif
@endsection

@section('right-section')
  @if (auth()->user()->type == 'organization')
    <h2 class="font-bold text-2xl">Rekrutmen</h2>
    <x-table :headers="['Kepanitiaan', 'Ketua', 'Jumlah Responden', 'Sisa Waktu', '']" :rows="[
        ['Invention', 'Agus 1', '20', '3 Hari'],
        ['Bakti Sosial', 'Agus 1', '20', '3 Hari'],
        ['Persiapan PKM', 'Agus 1', '20', '3 Hari'],
        ['Bootcamp', 'Agus 1', '20', '3 Hari'],
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
  @else
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
  @endif
@endsection

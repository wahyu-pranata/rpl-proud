@extends('layouts.dashboard')
@section('title', 'Mahasiswa')

@section('left-section')
<div class="px-4 py-8 flex gap-8 items-start border-dark-blue border-2 rounded-lg relative space-y-7">
    <div class="space-y-4">
        <div class="bg-slate-400 rounded-full w-16 h-16"></div>
        <h2 class="text-xl font-bold max-w-full text-nowrap overflow-hidden text-ellipsis hover:overflow-visible">
            {{ auth()->user()->name }}
        </h2>

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
                <td>No. Telepon</td>
                <td class="pl-6">{{ $user->phone }}</td>
            </tr>
        </table>
        @else
        <table class="border-spacing-4 border-collapse">
            <tr>
                <td>Lingkupan</td>
                <td class="pl-6">
                    {{ $user->faculty_name == 'Any' ? 'Universitas' : ($user->major_name == 'Any' ? 'Fakultas' : 'Program Studi') }}
                </td>
            </tr>
            <tr>
                <td>Anggota</td>
                <td class="pl-6">100</td>
            </tr>
        </table>
        @endif
    </div>

    <div class="flex gap-2 absolute top-4 right-4">
        <a href="#" class="border-2 border-slate-700 text-slate-700 px-4 py-2 hover:bg-slate-700 hover:text-white rounded-lg">Setting</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="border-2 border-red-500 text-red-500 px-4 py-2 hover:bg-red-500 hover:text-white rounded-lg">Logout</button>
        </form>
    </div>
</div>

@if (auth()->user()->type == 'organization')
<h2 class="font-bold text-2xl">Data Anggota</h2>
<x-table color="#679ce4" :headers="['Nama', 'NIM', 'Program Studi', '']" :rows="[
    ['Agus 1', '2300000001', 'Informatika'],
    ['Budi 2', '2300000002', 'Informatika'],
    ['Caca 3', '2300000003', 'Informatika'],
    ['Dedi 4', '2300000004', 'Informatika'],
]" :data="4" />
@else
@include('components.calendar')
@endif
@endsection

@section('right-section')
@if (auth()->user()->type == 'organization')
<h2 class="font-bold text-2xl">Rekrutmen</h2>
<x-table color="#2D4970" :headers="['Kepanitiaan', 'Ketua', 'Jumlah Responden', 'Sisa Waktu', '']" :rows="[
    ['Invention', 'Agus 1', '20', '3 Hari'],
    ['Bakti Sosial', 'Agus 1', '20', '3 Hari'],
    ['Persiapan PKM', 'Agus 1', '20', '3 Hari'],
    ['Bootcamp', 'Agus 1', '20', '3 Hari'],
]" :data="3" />

<h2 class="font-bold text-2xl">Berjalan</h2>
<x-table color="#2D4970" :headers="['Kepanitiaan', 'Bidang', 'Jabatan', 'Acara Selanjutnya', 'Waktu Acara', '']" :rows="[
    ['Invention', 'Bidang Lomba', 'Sub-Koordinator', 'Rapat Umum 1', '01/01/2025'],
    ['Invention', 'Bidang Lomba', 'Sub-Koordinator', 'Rapat Umum 1', '01/01/2025'],
    ['Invention', 'Bidang Lomba', 'Sub-Koordinator', 'Rapat Umum 1', '01/01/2025'],
]" :data="3" />

<h2 class="font-bold text-2xl">Riwayat</h2>
<x-table color="#2D4970" :headers="['Kepanitiaan', 'Bidang', 'Jabatan', 'Waktu', '']" :rows="[
    ['Invention', 'Bidang Lomba', 'Sub-Koordinator', '01/01/2025 - 01/09/2025'],
    ['Invention', 'Bidang Lomba', 'Sub-Koordinator', '01/01/2025 - 01/09/2025'],
    ['Invention', 'Bidang Lomba', 'Sub-Koordinator', '01/01/2025 - 01/09/2025'],
]" :data="3" />
@else
<h2 class="font-bold text-2xl">Pendaftaran</h2>
<x-table color="#2D4970" :headers="['Kepanitiaan', 'Bidang 1', 'Bidang 2', 'Status', '']" :rows="[
    ['Invention', 'Bidang Lomba', 'Bidang 3D', 'Ditolak'],
    ['Invention', 'Bidang Lomba', 'Bidang 3D', 'Ditolak'],
    ['Invention', 'Bidang Lomba', 'Bidang 3D', 'Ditolak'],
    ['Invention', 'Bidang Lomba', 'Bidang 3D', 'Ditolak'],
]" :data="3" />

<h2 class="font-bold text-2xl">Berjalan</h2>
<x-table color="#2D4970" :headers="['Kepanitiaan', 'Bidang', 'Jabatan', 'Acara Selanjutnya', 'Waktu Acara', '']" :rows="[
    ['Invention', 'Bidang Lomba', 'Sub-Koordinator', 'Rapat Umum 1', '01/01/2025'],
    ['Invention', 'Bidang Lomba', 'Sub-Koordinator', 'Rapat Umum 1', '01/01/2025'],
    ['Invention', 'Bidang Lomba', 'Sub-Koordinator', 'Rapat Umum 1', '01/01/2025'],
]" :data="3" />

<h2 class="font-bold text-2xl">Riwayat</h2>
<x-table color="#2D4970" :headers="['Kepanitiaan', 'Bidang', 'Jabatan', 'Waktu', '']" :rows="[
    ['Invention', 'Bidang Lomba', 'Sub-Koordinator', '01/01/2025 - 01/09/2025'],
    ['Invention', 'Bidang Lomba', 'Sub-Koordinator', '01/01/2025 - 01/09/2025'],
    ['Invention', 'Bidang Lomba', 'Sub-Koordinator', '01/01/2025 - 01/09/2025'],
]" :data="3" />
@endif
@endsection

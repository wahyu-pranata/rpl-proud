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
  <table class="w-full text-center">
    <thead class="bg-dark-blue text-white">
      <tr>
        <th>Kepanitiaan</th>
        <th>Bidang 1</th>
        <th>Bidang 2</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>INVENTION</td>
        <td>Bidang Wawww</td>
        <td>Bidang Wawwww</td>
        <td>Aktif</td>
      </tr>
      <tr>
        <td>INVENTION</td>
        <td>Bidang Wawww</td>
        <td>Bidang Wawwww</td>
        <td>Aktif</td>
      </tr>
      <tr>
        <td>INVENTION</td>
        <td>Bidang Wawww</td>
        <td>Bidang Wawwww</td>
        <td>Aktif</td>
      </tr>
    </tbody>
  </table>
  <table></table>
  <table></table>
@endsection

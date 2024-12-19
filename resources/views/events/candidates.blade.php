<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <title>Event - Candidates</title>
</head>

<body>
  <x-navbar auth="admin"></x-navbar>
  <main class="p-8 pt-24">
    <h2 class="font-bold text-2xl">Responden</h2>

    <x-table color="#679ce4" :headers="[
        'Waktu',
        'Status',
        'Nama',
        'NIM',
        'Jurusan',
        'Nomor Telepon',
        'Sie Pertama',
        'Sie Kedua',
        'Alasan Sie Pertama',
        'Alasan Sie Kedua',
        'Bersedia Dipindahkan',
        'Syarat 1',
        'Syarat 2',
        '',
    ]" :rows="[
        [
            'Waktu',
            'Status',
            'Nama',
            'NIM',
            'Jurusan',
            'Nomor Telepon',
            'Sie Pertama',
            'Sie Kedua',
            'Alasan Sie Pertama',
            'Alasan Sie Kedua',
            'Bersedia Dipindahkan',
            'Syarat 1',
            'Syarat 2',
        ],
        [
            'Waktu',
            'Status',
            'Nama',
            'NIM',
            'Jurusan',
            'Nomor Telepon',
            'Sie Pertama',
            'Sie Kedua',
            'Alasan Sie Pertama',
            'Alasan Sie Kedua',
            'Bersedia Dipindahkan',
            'Syarat 1',
            'Syarat 2',
        ],
        [
            'Waktu',
            'Status',
            'Nama',
            'NIM',
            'Jurusan',
            'Nomor Telepon',
            'Sie Pertama',
            'Sie Kedua',
            'Alasan Sie Pertama',
            'Alasan Sie Kedua',
            'Bersedia Dipindahkan',
            'Syarat 1',
            'Syarat 2',
        ],
        [
            'Waktu',
            'Status',
            'Nama',
            'NIM',
            'Jurusan',
            'Nomor Telepon',
            'Sie Pertama',
            'Sie Kedua',
            'Alasan Sie Pertama',
            'Alasan Sie Kedua',
            'Bersedia Dipindahkan',
            'Syarat 1',
            'Syarat 2',
        ],
    ]" />
  </main>
</body>

</html>

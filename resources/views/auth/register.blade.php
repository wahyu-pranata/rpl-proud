<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/dropdown.js')
    @vite('resources/js/submit.js')
    @vite('resources/js/upload_file.js')
    @vite('resources/css/signup.css')
    <title>Signup</title>
</head>
<body class="overflow-x-hidden">
    <x-navbar></x-navbar>
    <form id="myForm" method="POST" action="{{ route('register') }}" class="form">
        <div class="signup-box">
            @csrf


            <div class="signup-title-cont">
                <span class="signup-title">Signup</span>
            </div>
            <x-input-field id="email" type="email">Email</x-input-field>
            <x-input-field id="password" type="password">Password</x-input-field>
            <x-input-field id="nama" type="text">Nama</x-input-field>
            <x-input-field id="nim" type="text">NIM</x-input-field>
            <x-input-field id="telp" type="telp">No. Telp</x-input-field>
            @php
                $Fakultas = ['Ilmu Budaya', 'Kedokteran', 'Hukum', 'Teknik', 'Pertanian', 'Ekonomi dan Bisnis', 'Peternakan', 'Matematika dan Ilmu Pengetahuan Alam', 'Kedokteran Hewan', 'Teknologi Pertanian', 'Pariwisata', 'Ilmu Sosial dan Ilmu Politik', 'Kelautan dan Perikanan'];
                $Prodi = ['Informatika', 'Informatika 2']
            @endphp
            <div required></div>
            <x-dropdown :items="$Fakultas">Fakultas</x-dropdown>
            <x-dropdown :items="$Prodi">Program Studi</x-dropdown>
            <div id="errorMessage" style="display:none; color: red;">Please select an option!</div>
            <x-upload-file id="bukti-mahasiswa">Bukti Mahasiswa Aktif</x-upload-file>
            <x-primary-button type="submit">Signup</x-primary-button>
            <div class="text-dir">
                <span>Already have an account?&nbsp</span>
                <a href="/login">Login</a>
            </div>
        </div>
    </form>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    @vite('resources/js/dropdown.js')
    @vite('resources/js/upload_file.js')
    @vite('resources/css/signup.css')
    <title>Signup</title>
</head>
<body class="overflow-x-hidden">
    <x-navbar></x-navbar>
    <form method="POST" action="{{ route('register') }}" class="form" enctype="multipart/form-data">
        <div class="signup-box">
            @csrf

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="signup-title-cont">
                <span class="signup-title">Signup</span>
            </div>
            <x-input-field name="email" id="email" type="email">Email</x-input-field>
            <x-input-field name="password" id="password" type="password">Password</x-input-field>
            <x-input-field name="name" id="nama" type="text">Nama</x-input-field>
            <x-input-field name="nim" id="nim" type="text">NIM</x-input-field>
            <x-input-field name="phone" id="telp" type="telp">No. Telp</x-input-field>
            <div x-init="selectedFaculty = 0; selectedMajor = 0" x-data="{selectedFaculty: 0, selectedMajor: 0}">
                <x-select-field fieldText="Fakultas">
                    @foreach ($faculties as $faculty)
                    <li x-on:click="selectedFaculty = @js($faculty); selectedMajor = 0;">{{ $faculty->name }}</li>
                    @endforeach
                    <input type="hidden" name="faculty_id" x-bind:value="selectedFaculty.id">
                </x-select-field>
                <x-select-field fieldText="Prodi">
                    @foreach ($majors as $major)
                    <li x-show="selectedFaculty != null && selectedFaculty.id == @js($major).faculty_id" x-on:click="selectedMajor = @js($major)">{{ $major->name }}</li>
                    @endforeach
                    <input type="hidden" name="major_id" x-bind:value="selectedMajor.id">
                </x-select-field>
            </div>
            <x-upload-file name="student_proof" id="bukti-mahasiswa">Bukti Mahasiswa Aktif</x-upload-file>
            <x-primary-button type="submit">Signup</x-primary-button>
            <div class="text-dir">
                <span>Already have an account?&nbsp</span>
                <a href="/login">Login</a>
            </div>
        </div>
    </form>
</body>
</html>


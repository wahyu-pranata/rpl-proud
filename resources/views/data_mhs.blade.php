<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/css/navbar.css')
</head>
<body id="app" class="bg-gray-100 box-border h-screen pt-20 font-hind"
x-init="selectedFacultyId = @js(session('faculty_id')); selectedMajorId = @js(session('major_id'));
searchTerm = @js(session('search_term')); currentTab = @js(empty($currentTab) ? 'terdaftar' : $currentTab);"
x-data="{selectedFacultyId: @js(session('faculty_id')), selectedMajorId: @js(session('major_id')),
searchTerm: @js(session('search_term')), currentTab: @js(empty($currentTab) ? 'terdaftar' : $currentTab)}">
    <x-navbar />
    <div class="flex flex-col h-full">
        <div class="flex flex-1">
            <!-- sidebar -->
            <form action="{{ route('data_mhs.search') }}" method="GET" enctype="application/x-www-form-urlencoded">
                <aside class="w-96 bg-white border-r h-full overflow-hidden pt-8">
                    <input type="hidden" name="tab" x-bind:value="currentTab">
                    <div class="px-6 pt-4">
                        <a href="javascript:history.back()" class="flex items-center space-x-2 text-lg font-semibold">
                            <svg width="23" height="23" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.5322 25L7.46771 13.6452L19.5322 3" stroke="#1E1E1E" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="text-4xl font-bold">Mahasiswa</div>
                        </a>
                        <!-- search Bar -->
                        <div class="mt-6">
                            <div class="flex items-center space-x-2">
                                <input x-model="searchTerm" type="text" name="search_term" placeholder="Student Name" x-model="searchTerm" class="w-full p-2 border rounded-lg hover:ring-1 hover:ring-black focus:ring-2 focus:ring-blue-500 transition">
                                <button type="reset">
                                    <svg width="25" height="25" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.8151 23.5C7.79585 23.5 5.23854 22.3859 3.14313 20.1578C1.04771 17.9297 0 15.2104 0 12C0 8.78958 1.04771 6.07031 3.14313 3.84219C5.23854 1.61406 7.79585 0.5 10.8151 0.5C12.3697 0.5 13.8568 0.841646 15.2763 1.52494C16.6957 2.20727 17.9124 3.18333 18.9263 4.45312V1.9375C18.9263 1.53021 19.0561 1.18856 19.3157 0.912563C19.5743 0.637521 19.8952 0.5 20.2782 0.5C20.6613 0.5 20.9821 0.637521 21.2408 0.912563C21.5003 1.18856 21.6301 1.53021 21.6301 1.9375V9.125C21.6301 9.53229 21.5003 9.87346 21.2408 10.1485C20.9821 10.4245 20.6613 10.5625 20.2782 10.5625H13.5188C13.1358 10.5625 12.8149 10.4245 12.5563 10.1485C12.2967 9.87346 12.1669 9.53229 12.1669 9.125C12.1669 8.71771 12.2967 8.37606 12.5563 8.10006C12.8149 7.82502 13.1358 7.6875 13.5188 7.6875H17.8448C17.1238 6.34583 16.1383 5.29167 14.8883 4.525C13.6373 3.75833 12.2796 3.375 10.8151 3.375C8.56192 3.375 6.64675 4.21354 5.06956 5.89062C3.49236 7.56771 2.70376 9.60417 2.70376 12C2.70376 14.3958 3.49236 16.4323 5.06956 18.1094C6.64675 19.7865 8.56192 20.625 10.8151 20.625C12.3697 20.625 13.8063 20.1875 15.1249 19.3126C16.4425 18.4386 17.428 17.2708 18.0814 15.8094C18.1941 15.5458 18.3802 15.3245 18.6397 15.1452C18.8984 14.9651 19.1629 14.875 19.4333 14.875C19.9515 14.875 20.3404 15.0667 20.6 15.45C20.8586 15.8333 20.8866 16.2646 20.6838 16.7437C19.8276 18.7802 18.5095 20.4151 16.7295 21.6485C14.9496 22.8828 12.9781 23.5 10.8151 23.5Z" fill="#656565"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- dropdowns -->
                        <div class="mt-6">
                            @if (auth()->user()->organizationDetails()->value('organization_level') == 'university')
                            <select
                            name="faculty_id"
                            class="w-full p-2 bg-white border rounded-lg mb-4 hover:ring-1 hover:ring-black focus:ring-2 focus:ring-blue-500 transition"
                            x-model="selectedFacultyId"
                            >
                                <option value="" class="text-gray-500">Fakultas</option>
                                @foreach($faculties as $faculty)
                                <option value="{{ $faculty->id }}" class="text-gray-500">{{ $faculty->name }}</option>
                                @endforeach
                            </select>
                            @endif
                            @if (auth()->user()->organizationDetails()->value('organization_level') == 'university' || auth()->user()->organizationDetails()->value('organization_level') == 'faculty')
                            <select
                            name="major_id"
                            class="w-full p-2 bg-white border rounded-lg mb-4 hover:ring-1 hover:ring-black focus:ring-2 focus:ring-blue-500 transition"
                            x-model="selectedMajorId"
                            >
                                <option value="">Program Studi</option>
                                @foreach($majors as $major)
                                <option value="{{ $major->id }}" class="text-gray-500" x-show="selectedFacultyId == 1 || selectedFacultyId == @js($major->faculty()->value('id'))">{{ $major->name }}</option>
                                @endforeach
                            </select>
                            @endif
                        <button type='submit' class="shadow-none outline-none w-fit h-fit border-2 border-solid border-dark-blue
                        py-[0.5em] px-[1em] bg-dark-blue rounded-lg text-light-primary text-base font-semibold
                        hover:bg-transparent hover:text-dark-blue
                        active:bg-transparent active:border-transparent active:text-dark-blue">Find</button>
                    </div>
                </aside>
            </form>


            <!-- main Content -->
            <main class="flex-1 p-6 h-[90%] pt-12">
                <!-- navigation tabs -->
                <div class="flex space-x-4">
                    <a href="{{ route('data_mhs.search', ['tab' => 'terdaftar', 'faculty_id' => session('faculty_id'), 'major_id' => session('major_id'), 'search_term' => session('search_term') ]) }}"
                        id="terdaftar-tab" class="hover:cursor-pointer" x-on:click="currentTab = 'terdaftar'"
                        :class="currentTab == 'terdaftar' ? 'select-tab' : 'unselect-tab'">Terdaftar</a>

                    @if (auth()->user()->organizationDetails()->value('organization_level') == 'major')
                    <a href="{{ route('data_mhs.search', ['tab' => 'pengajuan', 'faculty_id' => session('faculty_id'), 'major_id' => session('major_id'), 'search_term' => session('search_term') ]) }}"
                        id="pengajuan-tab" class="hover:cursor-pointer" x-on:click="currentTab = 'pengajuan'"
                        :class="currentTab == 'pengajuan' ? 'select-tab' : 'unselect-tab'">Pengajuan</a>
                    @endif
                </div>

                <!-- terdaftar content -->
                @php
                $rows = [];
                foreach ($queriedUsers as $queriedUser) {
                    if ($queriedUser->verified_by_major == 'verified'){
                        array_push($rows, [$queriedUser->name, $queriedUser->nim, $queriedUser->major()->value('name'), $queriedUser->email]);
                    }
                }
                @endphp
                <div x-show="currentTab == 'terdaftar'">
                    <x-table color="#679ce4" tableID="terdaftar-section" :headers="['Nama', 'NIM', 'Program Studi', 'Email', '']" :rows="$rows" />
                </div>

                <!-- pengajuan content -->
                @if (auth()->user()->organizationDetails()->value('organization_level') == 'major')
                @php
                $dataCardRows = [];
                foreach ($queriedUsers as $queriedUser) {
                    if ($queriedUser->verified_by_major == 'unverified'){
                        array_push($dataCardRows, [
                            'id' => $queriedUser->id,
                            'name' => $queriedUser->name,
                            'nim' => $queriedUser->nim,
                            'details' => [
                                ['label' => 'No. Telp', 'value' => $queriedUser->phone],
                                ['label' => 'Email', 'value' => $queriedUser->email],
                                ['label' => 'Program Studi', 'value' => $queriedUser->major()->value('name')],
                            ]
                        ]);
                    }
                }
                @endphp
                <div x-show="currentTab == 'pengajuan'">
                    <x-datacard :rows="$dataCardRows" />
                </div>
                @endif
            </main>
        </div>
    </div>
    @stack('scripts')
</body>

</html>

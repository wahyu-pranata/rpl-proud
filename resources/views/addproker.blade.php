<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proker</title>
    @vite(['resources/css/app.css', 'resources/js/addproker.js']) 

</head>
<body>
    <nav class="w-full h-20">
        <i class="fa-solid fa-chevron-left"></i>
    </nav>
    <header>
        <div class="flex justify-center">
            <h1 class="font-bold text-4xl" >MEMBUAT KEPANITIAAN</h1>
        </div>
    </header>
    <article class="mx-60 my-20">
        <div>
            <h2 class="font-semibold text-3xl">
                RINCIAN
            </h2>
        </div>
        <form>
            <!-- Input Nama Kepanitiaan -->
            <div class="my-6 relative">
                    <input type="text" id="nama_kepanitiaan" class="block px-2.5 pb-2.5 pt-4 w-full text-sm rounded-lg border-2 border-gray-500 hover:border-black appearance-none dark:border-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="nama_kepanitiaan" class="absolute text-sm text-gray-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Nama Kepanitiaan</label>
            </div>

            <!-- Input Deskripsi Kegiatan -->
            <div class="mb-6 relative">
                <textarea 
                    id="deskripsi_kegiatan" 
                    rows="10" 
                    class="block px-2.5 pb-2.5 pt-4 w-full resize-none text-sm rounded-lg border-2 border-gray-500 hover:border-black appearance-none dark:border-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "
                ></textarea>
                <label for="deskripsi_kegiatan" class="absolute text-sm text-gray-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-5 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Deskripsi Kegiatan</label>
            </div>
        </form>
            <!-- Tambah Sie -->
            <div class="flex items-center mb-4">
            <button 
                id="addSieButton"
                class="flex items-center justify-center w-10 h-10 text-blue-600 bg-white border-2 rounded-lg border-gray-600 hover:bg-blue-100"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="black" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
            <input 
                type="text" 
                id="sieInput" 
                placeholder="Tambah Sie yang dibutuhkan"
                class="ml-3 flex-grow px-3 py-2 text-sm border border-gray-500 rounded-lg hover:border-black focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
            />
            </div>

            <!-- Dynamic Sie list -->
            <div id="sieList" class="flex flex-wrap gap-3 mb-4">
            <!-- Chips will be added dynamically here -->
            </div>

        <div class="flex items-center gap-4">
        <!-- Awal Kegiatan -->
        <div class="flex items-center border border-gray-300 rounded-lg px-4 py-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10m2 5a2 2 0 01-2 2H7a2 2 0 01-2-2m0-10a2 2 0 012-2h10a2 2 0 012 2m0 10V7" />
        </svg>
        <input 
            type="date" 
            id="startDate" 
            class="focus:outline-none text-gray-700"
            placeholder="Awal Kegiatan"
        />
        </div>

        <!-- Separator -->
        <span class="text-gray-500">-</span>

        <!-- Akhir Kegiatan -->
        <div class="flex items-center border border-gray-300 rounded-lg px-4 py-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10m2 5a2 2 0 01-2 2H7a2 2 0 01-2-2m0-10a2 2 0 012-2h10a2 2 0 012 2m0 10V7" />
        </svg>
        <input 
            type="date" 
            id="endDate" 
            class="textbox-n focus:outline-none text-gray-700"
            placeholder="Akhir Kegiatan" 
            onfocus="(this.type'date')" 
            onblur="(this.type'text')"
        />
        </div>
    </div>

    <div class="max-w-3xl space-y-6 my-6">
    <!-- Tombol Tambah Agenda -->
    <button 
        id="add-agenda"
        class="flex items-center space-x-2 text-black hover:text-blue-700">
        <div class="flex items-center justify-center w-10 h-10 text-blue-600 bg-white border-2 rounded-lg border-gray-600 hover:bg-blue-100">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="black" class="w-7 h-7">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        </div>
        <span class="text-medium">Tambah Agenda</span>
    </button>

    <!-- Daftar Agenda -->
    <div id="agenda-list" class="space-y-4">
    <!-- Contoh Template Agenda -->
    <div 
        class="bg-blue-100 p-4 rounded-lg flex items-center space-x-4"
        data-agenda>
        <!-- Nama Agenda -->
        <input 
        type="text" 
        name="agenda_name[]" 
        placeholder="Nama Agenda"
        class="flex-1 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />

        <!-- Waktu Agenda -->
        <div class="relative flex-1">
        <input 
            type="date" 
            name="agenda_date[]" 
            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        <div class="absolute left-3 top-3 text-gray-400 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v.01M12 7v.01M16 7v.01M21 11.5a2.5 2.5 0 01-5 0m-2-4h10m-2 4h10m-9 4h2m-5 4h2m-5 4h2m2-8a2.5 2.5 0 00-5 0h0m6-2.5a2.5 2.5 0 00-5 0m5-4h10m-2 4h10" />
            </svg>
        </div>
        </div>

        <!-- Tombol Hapus -->
        <button 
        class="w-8 h-8 border-2 border-red-500 text-red-500 flex items-center justify-center rounded-md hover:bg-red-500 hover:text-white remove-agenda">
        <span class="font-semibold text-4xl align-text-top">-</span>
        </button>
    </div>
    </div>
</div>

<!--Desain Poster-->
<label class="block text-gray-700 font-medium mb-2" for="poster">
        Desain Poster
        </label>
<div class="w-48 border-2 border-blue-400 border rounded-lg p-4 text-center text-blue-500 cursor-pointer hover:bg-blue-400 hover:text-white">
        <label for="poster" class="flex items-center justify-center space-x-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16V8a2 2 0 012-2h14a2 2 0 012 2v8m-6-2l-3 3m0 0l-3-3m3 3V4" />
            </svg>
            <span>Tambahkan File</span>
        </label>
        <input 
            type="file" 
            id="poster" 
            name="poster" 
            class="hidden" 
            accept=".jpg,.jpeg,.png,.pdf" />
        </div>

<!--File Jobdesk-->
<label class="block text-gray-700 font-medium mt-3 mb-2" for="jobdesk">
        File Jobdesk
        </label>
<div class="w-48 border-2 border-blue-400 border rounded-lg p-4 text-center text-blue-500 cursor-pointer hover:bg-blue-400 hover:text-white">
        <label for="poster" class="flex items-center justify-center space-x-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16V8a2 2 0 012-2h14a2 2 0 012 2v8m-6-2l-3 3m0 0l-3-3m3 3V4" />
            </svg>
            <span>Tambahkan File</span>
        </label>
        <input 
            type="file" 
            id="jobdesk" 
            name="jobdesk" 
            class="hidden" 
            accept=".doc,.docx,.pdf" />
        </div>

<h1 class="font-semibold text-4xl my-4">Undangan</h1>
<h2 class="font-semibold text-gray-600 text-2xl my-4">Inti</h2>

    <x-invitation-list />

<h2 class="font-semibold text-gray-600 text-2xl my-4">Koordinator</h2>
    </article>
</body>
</html>
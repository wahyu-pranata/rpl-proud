<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Open Rekrutmen</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @vite(['resources/css/editrecruitment.css', 'resources/js/editrecruitment.js'])
</head>
<body id="app" class="font-hind">
    <nav>
        <!-- Tombol Panah Kiri -->
<button onclick="goBack()" class="p-4 bg-gray-200 rounded-full hover:bg-gray-300">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-black">
    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
    </svg>
</button>
    </nav>
    <header>
        <div class="flex justify-center">
            <h1 class="font-bold text-4xl tracking-widest">REKRUTMEN PANITIA</h1>
        </div>
        <div class="flex justify-center">
            <h1 class="font-bold text-4xl tracking-widest mt-4">NAMA KEPANITIAAN</h1>
        </div>
    </header>
    <article class="mx-60 my-20">
        <h2 class="font-semibold text-3xl tracking-widest">
            Rincian
        </h2>
        <!-- Input link Kepanitiaan -->
        <div class="my-6 relative">
            <input required type="text" id="link_kepanitiaan" class="block px-2.5 pb-2.5 pt-4 w-full text-sm rounded-lg border-2 border-gray-500 hover:border-black appearance-none dark:border-gray-500 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="link_kepanitiaan" class="absolute text-sm text-gray-500 dark:text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Link Grup Calon Panitia</label>
        </div>

        <h3 class="font-semibold">
            Sie yang dibutuhkan
        </h3>

        <!-- List sie -->
    <div>
        <x-checkbox-list :items="['Sie 1', 'Sie 2', 'Sie 3', 'Sie 4', 'Sie 5', 'Sie 6']" />
    </div>

        <!-- Periode Rekrutmen -->
    <div class="flex items-center gap-4 my-6">
        <!-- Awal Rekrutmen -->
        <div class="flex items-center border-2 border-gray-300 rounded-lg px-4 py-2">
        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.673 0.5C5.85865 0.5 6.0367 0.57375 6.16797 0.705025C6.29925 0.836301 6.373 1.01435 6.373 1.2V2.509H13.89V1.209C13.89 1.02335 13.9637 0.845301 14.095 0.714025C14.2263 0.58275 14.4043 0.509 14.59 0.509C14.7757 0.509 14.9537 0.58275 15.085 0.714025C15.2162 0.845301 15.29 1.02335 15.29 1.209V2.509H18C18.5303 2.509 19.0388 2.71958 19.4139 3.09443C19.7889 3.46929 19.9997 3.97774 20 4.508V18.501C19.9997 19.0313 19.7889 19.5397 19.4139 19.9146C19.0388 20.2894 18.5303 20.5 18 20.5H2C1.46974 20.5 0.961184 20.2894 0.58614 19.9146C0.211096 19.5397 0.00026513 19.0313 0 18.501L0 4.508C0.00026513 3.97774 0.211096 3.46929 0.58614 3.09443C0.961184 2.71958 1.46974 2.509 2 2.509H4.973V1.199C4.97327 1.01352 5.04713 0.835731 5.17838 0.704672C5.30963 0.573612 5.48752 0.5 5.673 0.5ZM1.4 8.242V18.501C1.4 18.5798 1.41552 18.6578 1.44567 18.7306C1.47583 18.8034 1.52002 18.8695 1.57574 18.9253C1.63145 18.981 1.69759 19.0252 1.77039 19.0553C1.84319 19.0855 1.92121 19.101 2 19.101H18C18.0788 19.101 18.1568 19.0855 18.2296 19.0553C18.3024 19.0252 18.3685 18.981 18.4243 18.9253C18.48 18.8695 18.5242 18.8034 18.5543 18.7306C18.5845 18.6578 18.6 18.5798 18.6 18.501V8.256L1.4 8.242ZM6.667 15.119V16.785H5V15.119H6.667ZM10.833 15.119V16.785H9.167V15.119H10.833ZM15 15.119V16.785H13.333V15.119H15ZM6.667 11.142V12.808H5V11.142H6.667ZM10.833 11.142V12.808H9.167V11.142H10.833ZM15 11.142V12.808H13.333V11.142H15ZM4.973 3.908H2C1.92121 3.908 1.84319 3.92352 1.77039 3.95367C1.69759 3.98382 1.63145 4.02802 1.57574 4.08374C1.52002 4.13945 1.47583 4.20559 1.44567 4.27839C1.41552 4.35119 1.4 4.42921 1.4 4.508V6.843L18.6 6.857V4.508C18.6 4.42921 18.5845 4.35119 18.5543 4.27839C18.5242 4.20559 18.48 4.13945 18.4243 4.08374C18.3685 4.02802 18.3024 3.98382 18.2296 3.95367C18.1568 3.92352 18.0788 3.908 18 3.908H15.29V4.837C15.29 5.02265 15.2162 5.2007 15.085 5.33197C14.9537 5.46325 14.7757 5.537 14.59 5.537C14.4043 5.537 14.2263 5.46325 14.095 5.33197C13.9637 5.2007 13.89 5.02265 13.89 4.837V3.908H6.373V4.828C6.373 5.01365 6.29925 5.1917 6.16797 5.32297C6.0367 5.45425 5.85865 5.528 5.673 5.528C5.48735 5.528 5.3093 5.45425 5.17803 5.32297C5.04675 5.1917 4.973 5.01365 4.973 4.828V3.908Z" fill="#656565"/>
        </svg>
        <input required type="text" id="startDate" class="date-placeholder border-0 max-w-[9em] focus:ring-0" placeholder="Awal Rekrutmen"
        onfocus="(this.type='date'); this.classList.remove('date-placeholder');"
        onblur="if(!this.value){ this.type='text'; this.classList.add('date-placeholder'); }">
        </div>

        <!-- Separator -->
        <span class="text-gray-500">-</span>

        <!-- Akhir Rekrutmen -->
        <div class="flex items-center border-2 border-gray-300 rounded-lg px-4 py-2">
        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.673 0.5C5.85865 0.5 6.0367 0.57375 6.16797 0.705025C6.29925 0.836301 6.373 1.01435 6.373 1.2V2.509H13.89V1.209C13.89 1.02335 13.9637 0.845301 14.095 0.714025C14.2263 0.58275 14.4043 0.509 14.59 0.509C14.7757 0.509 14.9537 0.58275 15.085 0.714025C15.2162 0.845301 15.29 1.02335 15.29 1.209V2.509H18C18.5303 2.509 19.0388 2.71958 19.4139 3.09443C19.7889 3.46929 19.9997 3.97774 20 4.508V18.501C19.9997 19.0313 19.7889 19.5397 19.4139 19.9146C19.0388 20.2894 18.5303 20.5 18 20.5H2C1.46974 20.5 0.961184 20.2894 0.58614 19.9146C0.211096 19.5397 0.00026513 19.0313 0 18.501L0 4.508C0.00026513 3.97774 0.211096 3.46929 0.58614 3.09443C0.961184 2.71958 1.46974 2.509 2 2.509H4.973V1.199C4.97327 1.01352 5.04713 0.835731 5.17838 0.704672C5.30963 0.573612 5.48752 0.5 5.673 0.5ZM1.4 8.242V18.501C1.4 18.5798 1.41552 18.6578 1.44567 18.7306C1.47583 18.8034 1.52002 18.8695 1.57574 18.9253C1.63145 18.981 1.69759 19.0252 1.77039 19.0553C1.84319 19.0855 1.92121 19.101 2 19.101H18C18.0788 19.101 18.1568 19.0855 18.2296 19.0553C18.3024 19.0252 18.3685 18.981 18.4243 18.9253C18.48 18.8695 18.5242 18.8034 18.5543 18.7306C18.5845 18.6578 18.6 18.5798 18.6 18.501V8.256L1.4 8.242ZM6.667 15.119V16.785H5V15.119H6.667ZM10.833 15.119V16.785H9.167V15.119H10.833ZM15 15.119V16.785H13.333V15.119H15ZM6.667 11.142V12.808H5V11.142H6.667ZM10.833 11.142V12.808H9.167V11.142H10.833ZM15 11.142V12.808H13.333V11.142H15ZM4.973 3.908H2C1.92121 3.908 1.84319 3.92352 1.77039 3.95367C1.69759 3.98382 1.63145 4.02802 1.57574 4.08374C1.52002 4.13945 1.47583 4.20559 1.44567 4.27839C1.41552 4.35119 1.4 4.42921 1.4 4.508V6.843L18.6 6.857V4.508C18.6 4.42921 18.5845 4.35119 18.5543 4.27839C18.5242 4.20559 18.48 4.13945 18.4243 4.08374C18.3685 4.02802 18.3024 3.98382 18.2296 3.95367C18.1568 3.92352 18.0788 3.908 18 3.908H15.29V4.837C15.29 5.02265 15.2162 5.2007 15.085 5.33197C14.9537 5.46325 14.7757 5.537 14.59 5.537C14.4043 5.537 14.2263 5.46325 14.095 5.33197C13.9637 5.2007 13.89 5.02265 13.89 4.837V3.908H6.373V4.828C6.373 5.01365 6.29925 5.1917 6.16797 5.32297C6.0367 5.45425 5.85865 5.528 5.673 5.528C5.48735 5.528 5.3093 5.45425 5.17803 5.32297C5.04675 5.1917 4.973 5.01365 4.973 4.828V3.908Z" fill="#656565"/>
        </svg>
        <input required type="text" id="endDate" class="date-placeholder border-0 max-w-[9em] focus:ring-0" placeholder="Akhir Rekrutmen"
        onfocus="(this.type='date'); this.classList.remove('date-placeholder');"
        onblur="if(!this.value){ this.type='text'; this.classList.add('date-placeholder'); }">
        </div>
    </div>

    <h2 class="font-semibold text-3xl tracking-widest my-10">
        Tambahan
    </h2>

<!-- Daftar Pertanyaan -->
    <div id="question-list" class="space-y-4">
    <!-- Contoh Template Pertanyaan -->
    <div
        class="bg-blue-100 p-4 rounded-lg flex items-center space-x-4"
        data-pertanyaan>
        <!-- Pertanyaan -->
        <input
        required
        type="text"
        name="question_name[]"
        placeholder="Pertanyaan"
        class="flex-1 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />

        <!-- Jawaban Singkat -->
        <!-- Dropdown Container -->
<div class="relative">

    <!-- Dropdown Menu -->
    <select required id="dropdownMenu" name="option[]" class="px-4 py-2 border rounded focus:outline-none">
        <option>Ya</option>
        <option>Tidak</option>
        <option>Tidak tau</option>
    </select>
</div>

<script>
    // Ambil elemen tombol dan menu dropdown
    const dropdownMenu = document.getElementById('dropdownMenu');

    // Tambahkan event listener untuk toggle dropdown
    dropdownButton.addEventListener('click', (e) => {
      e.stopPropagation(); // Menghentikan event bubbling
    dropdownMenu.classList.toggle('hidden');
    });

    // Tutup dropdown jika klik di luar area dropdown
    window.addEventListener('click', () => {
    dropdownMenu.classList.add('hidden');
    });

    // Fungsi untuk mengatur opsi yang dipilih
    function selectOption(option) {
      dropdownButton.textContent = option; // Mengubah teks pada tombol
      dropdownMenu.classList.add('hidden'); // Menyembunyikan menu dropdown
    }
</script>

        <!-- Tombol Hapus -->
        <button
        class="w-8 h-8 border-2 border-red-500 text-red-500 flex items-center justify-center rounded-md hover:bg-red-500 hover:text-white remove-pertanyaan">
        <span class="font-semibold text-4xl align-text-top">-</span>
        </button>
    </div>
    </div>
</div>

<div class="max-w-3xl space-y-6 my-6">
    <!-- Tombol Tambah Pertanyaan -->
    <button
        id="add-pertanyaan"
        class="flex items-center space-x-2 text-black hover:text-blue-700">
        <div class="flex items-center justify-center w-10 h-10 text-blue-600 bg-white border-2 rounded-lg border-gray-600 hover:bg-blue-100">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="black" class="w-7 h-7">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        </div>
        <span class="text-medium text-gray-500 hover:text-blue-400">Tambahkan Pertanyaan</span>
    </button>
</article>
<!-- Container Tombol -->
    <div class="flex items-center justify-center my-16">
<!-- Tombol Unggah -->
        <input type="submit" value="Simpan" class="bg-blue-900 text-white font-semibold mx-5 py-2 px-6 rounded-lg cursor-pointer hover:bg-blue-700">
<!-- Tombol Hapus -->
        <button
        class="border border-red-500 text-red-500 mx-5 px-6 py-2 rounded hover:bg-red-500 hover:text-white"
        onclick="refreshPage()">
        Hapus
        </button>
    </div>

    <script>
    // Fungsi untuk me-refresh halaman
    function refreshPage() {
    window.location.reload();
    }
    </script>
@stack('scripts')
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PROUD</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Styles / Scripts -->
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  @vite('resources/js/dropdown.js')
</head>
<body>
    <div class="font-hind ">
        <x-navbar auth="guest"></x-navbar>
        <div class="relative w-screen h-[36em] overflow-hidden">
            <div class="absolute inset-0 bg-black bg-opacity-30"></div>
            <div class="absolute h-[60%] w-1 bg-light-primary left-[6em]"></div>
            <div class="absolute bottom-0 h-[5%] w-1 bg-light-primary left-[6em]"></div>
            <p class="absolute bottom-14 w-[25em] left-[4em] text-light-primary tracking-widest text-lg">Proud (Program Kerja Udayana) adalah platform bagi mahasiswa Universitas Udayana
                untuk berpartisipasi dalam program kerja kampus yang diselenggarakan oleh berbagai
                organisasi mahasiswa. </p>
            <header class="absolute top-[30%] w-fit h-fit left-[22%] text-[3em] font-semibold text-light-primary tracking-[0.3em]">PROGRAM KERJA UDAYANA</header>
            <img class="mt-[-13em] min-w-full min-h-[50em]" src="{{ asset('images/cover.webp') }}" alt="">
        </div>
    </div>
    <div class="overflow-hidden text-nowrap bg-dark-blue">
        <div class="inline-block animate-slide py-4 text-2xl text-light-primary space-x-[5em] tracking-widest font-libre px-[2.45em]">
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
        </div><div class="inline-block animate-slide py-4 text-2xl text-light-primary space-x-[5em] tracking-widest font-libre px-[2.45em]">
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
        </div>
    </div>
    <div id="problem" class="py-40 space-y-10">
        <div class="font-hind mx-10">
            <header class="text-[2.8em] font-semibold tracking-widest">OPEN RECRUITMENS</header>
            <p class="text-[18px]">Ayo daftarkan dirimu dalam kegiatan-kegiatan kepanitiaan yang menarik, kami tunggu kontribusi kalian!</p>
        </div>
        @php
            $filter = ['Universitas', 'Fakultas', 'Program Studi'];
            $proker = ['proker 1' => '', 'proker 2' => '', 'proker 3' => '', 'proker 4' => '', 'proker 5' => '', 'proker 6' => '', 'proker 7' => '', 'proker 8' =>''];
        @endphp
        <div class="mx-10">
            <x-dropdown :items="$filter">Filter</x-dropdown>
        </div>
        <div class="mySwiper">
            <div class="swiper-wrapper">
                @foreach ( $proker as $namaProker => $poster)
                    <a class="swiper-slide" href="">
                        <div class="flex flex-col">
                            <span class="text-xl w-4/5 overflow-ellipsis">{{$namaProker}}</span>
                            <span class="text-sm text-dark-primary">Waktu Proker</span>
                        </div>
                        <div id='img' class="h-[24em] w-[-16em] bg-slate-300 rounded-xl"></div>
                    </a>
                @endforeach
            </div class="swiper-pagination"></div>
        </div>
    </div>
    <div id="wrong" class="overflow-hidden text-nowrap bg-dark-blue">
        <div class="inline-block animate-slidereverse py-4 text-2xl text-light-primary space-x-[5em] tracking-widest font-libre px-[2.45em]">
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
        </div><div class="inline-block animate-slidereverse py-4 text-2xl text-light-primary space-x-[5em] tracking-widest font-libre px-[2.45em]">
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
            <span>Unggul</span>
            <span>Mandiri</span>
            <span>Berbudaya</span>
        </div>
    </div>
    <div class="bg-dark-secondary py-10 w-full">

    </div>




</body>

</html>

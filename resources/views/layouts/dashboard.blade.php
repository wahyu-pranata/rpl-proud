<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard - @yield('title')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/dashboard.css'])
</head>

<body>
  <!-- header -->
  <header class="flex items-center justify-between bg-white px-6 py-4 shadow">
    <a href="#" class="text-xl font-bold">Proud</a>
    <div class="flex items-center space-x-8">
      @if (auth()->user()->type == 'organization')
        <div class="flex items-center gap-1 unselect-tab">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M9.348 14.652a3.75 3.75 0 0 1 0-5.304m5.304 0a3.75 3.75 0 0 1 0 5.304m-7.425 2.121a6.75 6.75 0 0 1 0-9.546m9.546 0a6.75 6.75 0 0 1 0 9.546M5.106 18.894c-3.808-3.807-3.808-9.98 0-13.788m13.788 0c3.808 3.807 3.808 9.98 0 13.788M12 12h.008v.008H12V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
          </svg>
          <a href="#">Broadcast</a>
        </div>

        <div class="flex items-center gap-1 select-tab">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
          </svg>
          <a href="#">Mahasiswa</a>
        </div>
      @else
        <div class="flex items-center gap-1 select-tab">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M21.2497 9.125C23.6659 9.125 25.6247 7.16625 25.6247 4.75C25.6247 2.33375 23.6659 0.375 21.2497 0.375C18.8334 0.375 16.8747 2.33375 16.8747 4.75C16.8747 7.16625 18.8334 9.125 21.2497 9.125Z"
              fill="#1E1E1E" />
            <path
              d="M13.958 4.75C13.958 3.71167 14.1811 2.72729 14.5734 1.83333H3.74967C2.14113 1.83333 0.833008 3.14146 0.833008 4.75V22.25C0.833008 23.8585 2.14113 25.1667 3.74967 25.1667H21.2497C22.8582 25.1667 24.1663 23.8585 24.1663 22.25V11.4262C23.2469 11.83 22.2539 12.0396 21.2497 12.0417C19.3158 12.0417 17.4611 11.2734 16.0937 9.90599C14.7262 8.53853 13.958 6.68387 13.958 4.75Z"
              fill="#1E1E1E" />
          </svg>
          <a href="#">Inbox</a>
        </div>
      @endif

      <div
        class="flex items-center space-x-2 unselect-tab {{ request()->routeIs('dashboard') ? 'border-b-4 border-b-light-blue' : '' }}">
        <a href="#" class="text-end">
          <div class="font-bold {{ request()->routeIs('dashboard') ? 'text-light-blue' : '' }}">Organisasi Mahasiswa
          </div>
          <div class="text-sm {{ request()->routeIs('dashboard') ? 'text-light-blue' : '' }}">Lingkup Organisasi</div>
        </a>
        <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
      </div>
    </div>
  </header>
  <main class="px-12 mt-4">
    <h1 class="text-3xl font-bold tracking-wider">Dashboard</h1>
    <div class="flex flex-col md:flex-row gap-8 mt-8">
      <section class="flex-grow-0">
        @yield('left-section')
      </section>
      <section class="flex-1">
        @yield('right-section')
      </section>
    </div>
    @yield('content')
  </main>
</body>

</html>

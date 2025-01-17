<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard - @yield('title')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/dashboard.css'])
</head>

<body id="app" class="font-hind">
  <!-- header -->
  <x-navbar/>
  <main class="px-12 pt-28 ">
    <h1 class="text-3xl font-bold tracking-wider">Dashboard</h1>
    <div class="flex flex-col md:flex-row gap-8 mt-8">
      <section class="flex-grow-0 space-y-10">
        @yield('left-section')
      </section>
      <section class="flex-1">
        @yield('right-section')
      </section>
    </div>
    @yield('content')
    </main>

    @stack('scripts')
</body>

</html>

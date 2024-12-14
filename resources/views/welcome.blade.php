<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Styles / Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    @php
        $tabs = [
            ['url' => '/home', 'icon_class' => 'home-icon', 'icon_paths' => ['M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'], 'label' => 'Home'],
            ['url' => '/profile', 'icon_class' => 'profile-icon', 'icon_paths' => ['M12 12c2.5 0 4.5 2 4.5 4.5S14.5 21 12 21 7.5 19 7.5 16.5 9.5 12 12 12zM12 3c-2.5 0-4.5 2-4.5 4.5S9.5 12 12 12s4.5-2 4.5-4.5S14.5 3 12 3z'], 'label' => 'Profile'],
            // Add more tabs here
        ];
    @endphp

    <x-navbar></x-navbar>
<body>
</body>

</html>

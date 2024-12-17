<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('style/login.css') }}">
  @vite('resources/css/login.css')
  <title>Login</title>
</head>

<body>
  <x-navbar></x-navbar>
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <form class='form' method="POST" action="{{ route('login.store') }}">
    @csrf
    <div class="login-box">
      <div class="login-title-cont">
        <span class="login-title">Login</span>
      </div>
      <x-input-field id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
        autofocus autocomplete="username">Email</x-input-field>
      <x-input-error :messages="$errors->get('email')" class="mt-2" />

      <x-input-field id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="current-password">Password</x-input-field>

      <x-input-error :messages="$errors->get('password')" class="mt-2" />

      <div class="remember-forgot">
        <x-checkbox id="remember">Remember me</x-checkbox>
        <div>
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
              {{ __('Forgot your password?') }}
            </a>
          @endif
        </div>
      </div>
      <x-primary-button type="submit">Login</x-primary-button>
      <div class="text-dir">
        <span>Don't have an account?&nbsp</span>
        <a href="/register">Signup</a>
      </div>
    </div>
  </form>
</body>

</html>

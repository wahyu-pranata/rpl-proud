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
    <form class='form' method="POST" action="{{ route('login') }}">
        @csrf



        <div class="login-box">
            <div class="login-title-cont">
                <span class="login-title">Login</span>
            </div>
            <x-input-field id="email" type="email">Email</x-input-field>
            <x-input-field id="password" type="password">Password</x-input-field>
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


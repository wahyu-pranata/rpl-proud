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
    <div class="login-box">
        <div class="login-title-cont">
            <span class="login-title">Login</span>
        </div>
        <x-input-field id="email" type="email">Email</x-input-field>
        <x-input-field id="password" type="password">Password</x-input-field>
        <div class="remember-forgot">
            <div class="remember-me">
                <input class="custom-cb" id="remember" type="checkbox">
                <label class="remember-label" for="remember">Remember me</label>
            </div>
            <div>
                <a href="">Forgot Password?</a>
            </div>
        </div>
        <div class="button-box">
            <button class="dark-blue-button">Login</button>
        </div>
        <div class="text-dir">
            <span>Don't have an account?&nbsp</span>
            <a href="/signup">Signup</a>
        </div>
    </div>
</body>
</html>

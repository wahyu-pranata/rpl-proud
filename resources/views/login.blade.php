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
        <div class="input-box">
            <input class="input-field" id="email"  placeholder=" " required type="email">
            <label class="input-label" for="email">Email</label>
        </div>
        <div class="input-box">
            <input class="input-field" id="password"  placeholder=" " required type="password">
            <label class="input-label" for="password">Password</label>
        </div>
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

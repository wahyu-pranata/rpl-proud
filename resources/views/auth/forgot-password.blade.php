<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/forgot.css')
    <title>Forgot Password</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="form">
        <div class="forgot-box">
            <div class="forgot-title-cont">
                <span class="forgot-title">Forgot Password?</span>
            </div>
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-field name="email" id="email" type="email">Email</x-input-field>
                </div>

                <div class="button-box">
                    <x-primary-button type="submit">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
                <div class="text-dir">
                    <a href="/login">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <div class="form-header">
            <div class="titles">
                <div class="title-login">Login</div>
            </div>
        </div>
        <!-- LOGIN FORM -->
        <form method="POST" action="{{ route('login') }}" class="login-form" autocomplete="off">
            @csrf
            <!-- Email Address -->
            <div class="input-box">
                <input type="email" class="input-field" id="log-email" name="email"value="{{ old('email') }}" required autofocus />
                <label for="log-email" class="label">Email</label>
                <i class='bx bx-envelope icon'></i>
                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
             <!-- Password -->
            <div class="input-box">
                <input 
                    type="password" 
                    class="input-field" 
                    id="log-pass" 
                    name="password" 
                    required
                />
                <label for="log-pass" class="label">password</label>
                <i class='bx bx-lock-alt icon'></i>
                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <!-- Forgot Password Link -->
            <div class="form-cols">
                <div class="col-1"></div>
                <div class="col-2">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot Password</a>
                    @endif
                </div>
            </div>
            <!-- Submit Button -->
            <div class="input-box">
                <button type="submit" class="btn-submit" id="SignInBtn">Sing in<i class='bx bx-log-in'></i>
                </button>
            </div>

            <!-- Register Link -->
            <div class="switch-form">
                <span>Dont have any account?<a href="{{ route('register') }}">Singup</a></span>
            </div>
        </form>
    </div>

    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <title>Register</title>
</head>
<body>
    <div class="wrapper">
        <div class="form-header">
            <div class="titles">
                <div class="title-login">Register</div>
            </div>
        </div>
        <!-- LOGIN FORM -->

        <!-- REGISTER FORM -->
        <form method="POST" action="{{ route('register') }}" class="login-form" autocomplete="off">
            @csrf

            <!-- Username (Name) -->
            <div class="input-box">
                <input 
                    type="text" 
                    class="input-field" 
                    id="reg-name" 
                    name="name" 
                    value="{{ old('name') }}" 
                    required 
                    autofocus 
                />
                <label for="reg-name" class="label">Username</label>
                <i class='bx bx-user icon'></i>
                @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="input-box">
                <input 
                    type="email" 
                    class="input-field" 
                    id="reg-email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                />
                <label for="reg-email" class="label">Email</label>
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
                    id="reg-pass" 
                    name="password" 
                    required 
                />
                <label for="reg-pass" class="label">Password</label>
                <i class='bx bx-lock-alt icon'></i>
                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="input-box">
                <input 
                    type="password" 
                    class="input-field" 
                    id="reg-pass-confirm" 
                    name="password_confirmation" 
                    required 
                />
                <label for="reg-pass-confirm" class="label">Confirm Password</label>
                <i class='bx bx-lock-alt icon'></i>
            </div>

            <!-- Terms and Conditions -->
            <div class="form-cols">
                <div class="col-1">
                    <input 
                        type="checkbox" 
                        id="agree" 
                        name="agree" 
                        required 
                    />
                    <label for="agree">I agree to terms & conditions</label>
                </div>
                <div class="col-2"></div>
            </div>

            <!-- Submit Button -->
            <div class="input-box">
                <button type="submit" class="btn-submit" id="SignUpBtn">
                    Sing Up <i class='bx bx-user-plus'></i>
                </button>
            </div>

            <!-- Login Link -->
            <div class="switch-form">
                <span>Already have an account? <a href="{{ route('login') }}"> Login</a></span>
            </div>
        </form>
    </div>

    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
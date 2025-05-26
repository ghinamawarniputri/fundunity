<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - FundUnity CMS</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: #f0f6fd;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .left {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
        }

        .right {
            flex: 1;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            box-shadow: -5px 0 20px rgba(0, 0, 0, 0.05);
        }

        .form-box {
            width: 100%;
            max-width: 400px;
        }

        .form-box h2 {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .form-box img.logo {
            display: block;
            margin: 0 auto 1rem;
            height: 40px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 16px;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .forgot {
            display: block;
            text-align: right;
            margin-bottom: 1rem;
            font-size: 13px;
            color: #3b82f6;
            text-decoration: none;
        }

        .captcha {
            margin-bottom: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-box img {
            width: 300px;
            max-width: 100%;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="left image-box">
            <img src="{{ asset('img/donasi.png') }}" alt="Donasi">
        </div>
        <div class="right">
            @if (session('error'))
            <div style="color: red; text-align: center; margin-bottom: 1rem;">
                {{ session('error') }}
            </div>
            @endif

            @if (session('success'))
            <div style="color: green; text-align: center; margin-bottom: 1rem;">
                {{ session('success') }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="form-box">
                @csrf
                <img src="{{ asset('img/LOGOcms.jpg') }}" alt="LOGOcms" style="width: 200px; height: auto; display: block; margin: 0 auto;">
                <h2>Please enter your details</h2>
                
                <input type="email" name="email" placeholder="Your Account" required>
                <input type="password" name="password" placeholder="Your Password" required>
                
                <div class="captcha">
                    {!! NoCaptcha::display() !!}
                </div>
                
                @if ($errors->has('g-recaptcha-response'))
                    <div style="color: red; font-size: 14px; margin-top: 0.5rem;">
                        {{ $errors->first('g-recaptcha-response') }}
                    </div>
                @endif
                
                <a href="#" class="forgot">Forgot Password?</a>
                <button type="submit">Login</button>
            </form>

        </div>
    </div>

    {!! NoCaptcha::renderJs() !!}

</body>

</html>
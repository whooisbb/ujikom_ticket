<!DOCTYPE html>
<html lang="en" div="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring ACS</title>
    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
            overflow: hidden;
            position: relative;
        }

        .background-decor {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .background-decor::before, .background-decor::after {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 20%, transparent 20%);
            background-size: 50px 50px;
            animation: moveBackground 10s linear infinite;
        }

        .background-decor::before {
            top: -50%;
            left: -50%;
        }

        .background-decor::after {
            bottom: -50%;
            right: -50%;
            animation-direction: reverse;
        }

        @keyframes moveBackground {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(50px, 50px);
            }
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 1200px;
            padding: 20px;
        }

        .wrapper {
            background: white;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            padding: 40px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }

        .title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
            animation: slideInDown 1s ease-in-out;
        }

        .signup-link {
            margin: 20px 0;
            font-size: 18px;
            color: #666;
            animation: slideInUp 1s ease-in-out;
        }

        .signup-link a {
            color: #4e6bff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .signup-link a:hover {
            color: #2e4bff;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .button-container a {
            display: inline-block;
            padding: 15px 30px;
            border-radius: 30px;
            background: #4e6bff;
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.3s ease;
        }

        .button-container a:hover {
            background: #2e4bff;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideInDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .wrapper {
                padding: 20px;
            }

            .title {
                font-size: 28px;
            }

            .signup-link {
                font-size: 16px;
            }

            .button-container {
                flex-direction: column;
                gap: 10px;
            }

            .button-container a {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="background-decor"></div>
    <div class="container">
        <div class="wrapper">
            <img src="{{ url('public/images/logo.png') }}" alt="Sarana Pactindo Logo" class="logo">
            <div class="title"><span>Welcome to Monitoring PAC</span></div>
            <form>
                @if(Auth::check())
                    @if(Auth::user()->is_role == 2)
                        <div class="signup-link">Super Admin Already Logged In<a href="{{ url('superadmin/dashboard') }}"> Dashboard </a></div>
                    @elseif(Auth::user()->is_role == 1)
                        <div class="signup-link">Admin Already Logged In<a href="{{ url('admin/dashboard') }}"> Dashboard </a></div>
                    @elseif(Auth::user()->is_role == 0)
                        <div class="signup-link">User Already Logged In<a href="{{ url('user/dashboard') }}"> Dashboard </a></div>
                    @endif
                @else
                    <div class="button-container">
                        <a href="{{ url('login') }}">Sign In</a>
                        <a href="{{ url('registration') }}">Sign Up</a>
                    </div>
                @endif
            </form>
        </div>
    </div>
</body>
</html>
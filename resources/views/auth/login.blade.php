<!DOCTYPE html>
<html lang="en" div="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%);
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
            background: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            padding: 40px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            backdrop-filter: blur(10px);
        }

        .title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
            animation: slideInDown 1s ease-in-out;
        }

        .row {
            margin-bottom: 20px;
            position: relative;
        }

        .row i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #666;
        }

        .row input {
            width: 100%;
            padding: 12px 12px 12px 45px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f5f5f5;
            outline: none;
            font-size: 16px;
        }

        .row input:focus {
            border-color: #ff6f61;
            background: #ffe6e6;
        }

        .pass {
            margin-bottom: 20px;
            text-align: right;
        }

        .pass a {
            color: #ff6f61;
            text-decoration: none;
        }

        .regisbtn input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #ff6f61;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 20px;
            transition: background 0.3s ease;
        }

        .regisbtn input[type="submit"]:hover {
            background: #ff4b3e;
        }

        .signup-link {
            text-align: center;
            margin-bottom: 15px;
            color: #666;
        }

        .signup-link a {
            color: #ff6f61;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .signup-link a:hover {
            color: #ff4b3e;
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

        @media (max-width: 768px) {
            .wrapper {
                padding: 20px;
            }

            .title {
                font-size: 28px;
            }

            .row input {
                padding: 10px 10px 10px 40px;
            }

            .regisbtn input[type="submit"] {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="background-decor"></div>
    <div class="container">
        @include('_message')
        <div class="wrapper">
            <div class="title"><span>Login</span></div>
            <form action="{{url('login_post')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <input type="email" value="{{ old ('email') }}" placeholder="Email" required name="email">
                </div>
                <div class="row">
                    <input type="password" value="" placeholder="Password" required name="password">
                </div>
                <div class="pass"><a href="{{url('forgot')}}">Forgot Password</a></div>
                <div class="regisbtn">
                    <input type="submit" value="Login">
                </div>
                <div class="signup-link">No have an account? <a href="{{url('registration')}}">Register</a></div>
                <div class="signup-link">Main Menu <a href="{{url('/')}}">Home</a></div>
            </form>
        </div>
    </div>
</body>
</html>
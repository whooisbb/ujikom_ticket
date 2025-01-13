<!DOCTYPE html>
<html lang="en" div="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
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
            background-color: #f0f2f5;
        }

        .container {
            display: flex;
            justify-content: center;
            width: 100%;
            max-width: 800px;
        }

        .wrapper {
            background: white;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            display: flex;
            overflow: hidden;
        }

        .registration-side {
            flex: 3;
            padding: 35px;
        }

        .welcome-side {
            flex: 1;
            background: #4e6bff;
            padding: 40px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
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

        .row input, .row select {
            width: 100%;
            padding: 12px 12px 12px 45px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f5f5f5;
            outline: none;
            font-size: 16px;
        }

        .row input:focus, .row select:focus {
            border-color: #4e6bff;
            background: #e0e7ff;
        }

        .pass {
            margin-bottom: 20px;
            text-align: right;
        }

        .pass a {
            color: #4e6bff;
            text-decoration: none;
        }

        .regisbtn input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #4e6bff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .signup-link {
            text-align: center;
            margin-bottom: 15px;
            color: #666;
        }

        .signup-link a {
            color: #4e6bff;
            text-decoration: none;
            font-weight: 500;
        }

        .welcome-side h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .welcome-side p {
            margin-bottom: 20px;
        }

        .welcome-side a {
            padding: 12px 40px;
            border: 2px solid white;
            border-radius: 8px;
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column;
                margin: 20px;
            }
            
            .welcome-side {
                padding: 30px;
            }
        }
    </style>
</head>
<body>  
    <div class="container">
        @include('_message')
        <div class="wrapper">
            <div class="registration-side">
                <div class="title"><span>Create Account</span></div>
                <form action="{{ url('registration_post') }}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <input type="text" value="{{ old('name') }}" placeholder="Username" required name="name">
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <input type="email" value="{{ old('email') }}" placeholder="Email" required name="email">
                    </div>
                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" value="" placeholder="Password" required name="password">
                    </div>
                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" value="" placeholder="Confirm Password" required name="confirm_password">
                    </div>
                    <div class="row">
                        <select class="selectbox" name="is_role" required> 
                            <option value="">Select Role</option> 
                            <option {{ old('is_role') == '2' ? 'selected' :''}} value="2">Super Admin</option>
                            <option {{ old('is_role') == '1' ? 'selected' :''}} value="1">Admin</option>
                            <option {{ old('is_role') == '0' ? 'selected' :''}} value="0">User</option>
                        </select>
                    </div>
                    <div class="pass"><a href="{{url('forgot')}}">Forgot Password</a></div>
                    <div class="regisbtn">
                        <input type="submit" value="Registration">
                    </div>
                    <div class="signup-link">Already have an account? <a href="{{url('login')}}"> Login </a></div>
                    <div class="signup-link">Main Menu <a href="{{url('/')}}"> Home </a></div>
                </form>
            </div>
            <div class="welcome-side">
                <h1>Welcome!</h1>
                <p>Enter your personal details to create an account</p>
                <a href="{{url('login')}}">Login</a>
            </div>
        </div>
    </div>
</body>
</html>
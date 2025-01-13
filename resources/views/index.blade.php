<!DOCTYPE html>
<html lang="en" div="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring System</title>
    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Welcome Page</span></div>
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
                    <div class="signup-link"> Sign In <a href="{{ url('login') }}"> Login </a></div>
                    <div class="signup-link"> Sign Up <a href="{{ url('registration') }}"> Register </a></div>
                @endif
            </form>
        </div>
    </div>

</body>
</html>
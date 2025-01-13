<!DOCTYPE html>
<html lang="en" div="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>  
    <div class="container">
    @include('_message')
        <div class="wrapper">
            <div class="title"><span>Forgot Password</span></div>
            <form>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" value="" placeholder="Email" required name="email">
                </div>

                <div class="pass"><a href="{{url('login')}}">Login</a></div>

                <div class="regisbtn  ">
                    <input type="submit" value="Forgot Password">
                </div>

                <div class="signup-link">No have an account? <a href="{{url('registration')}}"> Register  </a>
                </div>
                
                <div class="signup-link">Main Menu <a href="{{url('/ ')}}"> Home  </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
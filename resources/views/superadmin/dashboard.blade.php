<!DOCTYPE html>
<html lang="en" div="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Dashboard</title>
    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Super Admin Dashboard</span></div>
            <form>
                <div class="row">
                    <p><b>Name -</b> {{ $getRecord->name }}</p>
                    <p><b>Email -</b> {{ $getRecord->email }}</p>
                </div>

                <div class="signup-link"> Logout <a href="{{url('logout')}}"> Logout </a> 
            </div>
            <div class="signup-link"> Home Page <a href="{{url('/')}}"> Welcome Page (Home) </a>
            </form>
        </div>
    </div>
</body>
</html>

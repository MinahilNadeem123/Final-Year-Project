<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
</head>
<body style="background-image:url({{url('/login/images.jpg')}})">
<div class="container">
   <img style="margin-left:340px;height:100px;width:100px;border-radius:100px;margin-top:60px" src="{{asset('login/chap medi care.jpg')}}">
   <h1 style="color:#0b3cb8;margin-top:-70px;margin-left:450px" >Chap Medicare</h1>

    <div class="d-flex justify-content-center">

        <div class="card">
            <div class="card-header">
                <h3>Sign In</h3>

            </div>
            <div class="card-body">
                <form data-toggle="validator" id="login"  method="post" action="{{route('login1')}}">
                    @csrf
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Email" name="email">

                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="password" name="password">
                    </div>
                    <div class="row align-items-center remember">
                        <input type="checkbox" name="remember_me">Remember Me
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" name="submit" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            <div class="card-footer">

                <div class="d-flex justify-content-center">
                    <a href="#">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css\bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="{{route('login')}}" >
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      {{ csrf_field() }}
      <h1 class="h3 mb-3 font-weight-normal">Login {{ config('app.name')}}</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
       <a href="{{route('register')}}" class="btn btn-lg btn-primary btn-block" > <i class="glyphicon glyphicon-play"></i> Register
      </a>
      <p class="mt-1 mb-1 text-muted"> account preview</p>
     <p class="mt-1 mb-1 text-muted">&copy; username : admin123</p>
     <p class="mt-1 mb-1 text-muted">&copy; password : admin123</p>
    </form>
    <br>
    
    
  </body>
</html>

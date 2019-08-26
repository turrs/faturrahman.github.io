<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

  

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/signin.css')}}" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" id="myForm" action="{{route('register')}}">
     
      <h1 class="h3 mb-3 font-weight-normal"> Register in {{ config('app.name') }}</h1>
      {{ csrf_field()}}
      <div class="form-group">
      <label for="inputName" class="sr-only">Name</label>
      <input type="text" id="Name" name="name" class="form-control {{ $errors->has('name') ? is-invalid : ''}}" placeholder="insert your name" required autofocus>
      </div>
      <div class="form-group">
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email"  id="Email" name="email" class="form-control {{ $errors->has('email') ? is-invalid : ''}}" placeholder="Email address" required autofocus> 
      </div>
      <div class="form-group">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password"  id="Password" name="password" class="form-control {{ $errors->has('password') ? is-invalid : ''}}" placeholder="Password" required> 
      </div>
      <div class="form-group">
      <label for="inputPassword" class="sr-only">Password Confirmation</label>
      <input type="password"  id="PasswordConfirmation" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? is-invalid : ''}}" placeholder="Confirm Password" required>
      </div>
     <button class="btn btn-lg btn-primary" type="submit">Register</button>

     <button class="btn btn-lg btn-danger " data-toggle="modal" data-target="#exampleModal" >Login</button>
   </form>


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" action="{{route('register')}} tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              
            </div>
            <div class="modal-body">
              Apakah anda tidak ingin mendaftar ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a href="{{asset('home')}}" class="btn btn-danger" > <i class="glyphicon glyphicon-play"></i> Yes
              </a>
            </div>
          </div>
        </div>
      </div>
      <script src="{{asset('/assets/myJs.js')}}"  type="text/javascript" ></script>
      <script src="{{asset('/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('/js/bootstrap.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('/jquery.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('/jquery.slim.min.js')}}" type="text/javascript"></script>
      

  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    
  	<link rel="stylesheet" href="{{asset('css/style.css')}}" >
    <link rel="stylesheet" href="{{asset('3/css/style.css')}}" >

    <title>Computer Science Student Club</title>
  </head>
  <body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#home">Fatur Rahman</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portofolio">Portfolio</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar -->
   


         
    <!-- akhir navbar -->
    <!-- jumbotron -->
    <div class="jumbotron text-center">
        <img src="{{asset ('img/fatur.jpg')}}" class="img rounded-circle">
        <h1> Fatur Rahman </h1>
        <p> Student | Web Developer | Blogger </p>
        <p><a href="{{route('login')}}" class="btn btn-danger" > <i class="glyphicon glyphicon-ok"></i> Login
         </a></p>
    </div>
  <!-- akhir jumbotron -->

    <!-- about -->
    <section class="about" id="about">
      <div class="container" >
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2> About </h2>
            <hr>
          </div>
        </div>
        <div class="row" >
          <div class="col-sm-5-6">
            <p></p>
          </div>
            <div class="col-sm-6" >
              <p></p>
            </div>
          </div>
    </div>
    </section>
    <!-- akhir about -->

  <!-- Portofolio -->
    <section class="portofolio" id="portofolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2> Portofolio </h2>
            <hr>
          </div>
        </div>

      <div class="row">
        <div class="col-sm-4">
          <a href="" >
          <img src ="{{asset('img/1.jpg')}}"class="img-thumbnail" >
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" >
          <img src ="{{asset('img/2.jpg')}}" class="img-thumbnail" >
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" >
          <img src ="{{asset('img/3.jpg')}}" class="img-thumbnail" >
        </a>
        </div>
        <div class="col-sm-4">
          <a href="" >
          <img src ="{{asset('img/4.jpg')}}" class="img-thumbnail">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" >
          <img src ="{{asset('img/5.jpg')}}" class="img-thumbnail">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" >
          <img src ="{{asset('img/6.jpg')}}" class="img-thumbnail">
          </a>
        </div>
    </div>
    </div>
    </section>
  <!-- akhir Portofolio -->

  <!-- contact -->
  <section id="contact">
  <div class="contact" >
    <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h1> Contact </h1>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <form>
          <div class="form-group">
            <label for="nama">Nama </label>
            <input type="text" id="nama" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email </label>
            <input type="text" id="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="telepon">No Telepon </label>
            <input type="text" id="telepon" class="form-control">
          </div>
          <select class="form-control">
            <option>-- Choose Category --</option>
            <option>Web Developer</option>
            <option>Blogger</option>
        </select>
             <div class="form-group">
               <label for="pesan"> Pesan </label>
              <textarea class="form-control" rows="10" placeholder="Masukkan Pesan"></textarea>
            </div>
            <button type="submit" class="btn btn-primary"> Kirim Pesan </button>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
  <!-- Akhir contact -->
<!-- footer -->
  <footer>
    <div class="container text-center" >
      <div class="row">
        <div class="col-sm-12">
          <p>&copy; copyright 2018 | built by bootstrap | <a href="http://instagram.com/faturrhmn25">
            Fatur Rahman </a>.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
         <a href="https://www.youtube.com/channel/UCyuUpDBAOSHooyEFb3amZrw" class="btn btn-danger"> <i class="glyphicon glyphicon-play"></i> Subscribe to Youtube
         </a>

        </div>
      </div>
    </div>
  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src ="{{asset('js/3/bootstrap.min.js')}}"></script>
      <script src="{{asset('3/js/jquery.min.js')}}"></script>
      <script src ="{{asset('3/js/3/bootstrap.min.js')}}"></script>
      <script src ="{{asset('js/script.js')}}"></script>
      <script src ="{{asset('js/jquery.easing.1.3.js')}}"></script>
  </body>
</html>
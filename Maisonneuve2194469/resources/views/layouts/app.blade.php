<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TP1 Gabi</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet"> 
</head>
<body>

<div class="card bg-dark text-white">
  <img class="img-fluid" src="{{ asset('css/img/background_3.jpg')}}"> 
  <div class="card-img-overlay">
    <h1 class="display-1 ">Maisonneuve</h1>
    <p class="lead">Un Projet encroyable de Laravel</p>
    <p class="lead">https://github.com/Gabi-Tho/TP_1</p>
    <nav class="position-absolute bottom-0 end-0 p-5 display-6">
      <a  class="text-decoration-none btn btn-light" href="{{ route('etudiant.index') }}">HOME</a>
      <a  class="text-decoration-none btn btn-light" href="{{ route('user.index') }}">LOGIN</a>
    </nav>
  </div>
</div>

    @yield('content')

    <footer class="text-center text-lg-start text-white">

    <div class="text-center p-3 primary">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Gabriela</a>
    </div>

  </footer>

</body>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>
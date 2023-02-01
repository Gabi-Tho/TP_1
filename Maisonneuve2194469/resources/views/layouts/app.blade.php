<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TP1 Gabi</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<!-- <div class="jumbotron bg-primary">
    <img class="card-img" src="/css/img/background_8.jpg" alt="Card image">
  <h1 class="display-4">Maisonneuve de Gabi</h1>
  <hr class="my-4">
</div> -->


<div class="jumbotron">
  <div>  
    <img src="{{ asset('css/img/background_3.jpg')}}">
  </div>

  <h1 class="display-4">Maisonneuve de Gabi</h1>
  <p class="lead">Un Projet encroyable de Laravel</p>
</div>
    @yield('content')
</body>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>
@extends('layouts.app')

@section('content')


<div class="container-md mt-10">


<div class="card mx-auto">
  <div class="card-body">
    <h5 class="card-title">create</h5>
  </div>
</div>

<form  method="post">
    @csrf
    @method('put')

  <div class="form-group">
    <label for="exampleFormControlInput1">Nom</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" value="{{ $etudiant->nom }}">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Addresse</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Phone</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Date de Naissance</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Ville</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="{{ $etudiant->etudiantHasVille->ville }}">
  </div>

</form>

</div>





@endsection
@extends('layouts.app')

@section('content')





<div class="container-md mt-10">



<div class="card mx-auto">
  <div class="card-body">
    <h5 class="card-title">create</h5>
  </div>
</div>

<form>

  <div class="form-group">
    <label for="exampleFormControlInput1">Nom</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
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
    <label for="exampleFormControlSelect1">Ville</label>
    <select class="form-control" id="exampleFormControlSelect1">
    @foreach($villes as $ville)
      <option>{{ $ville->ville }}</option>
    @endforeach
    </select>
  </div>
</form>

</div>





@endsection
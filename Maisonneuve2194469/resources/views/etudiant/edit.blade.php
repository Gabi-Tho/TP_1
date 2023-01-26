@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class=" col-12 text-center mt-2">
    <h1 class="display-1">Edit Etudiant</h1>
    </div>
  </div>
</div>

<hr>

<hr>

<div class="container-md mt-10">


<form  method="post">
    @csrf
    @method('put')

  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" name="nom" id="exampleFormControlInput1" value="{{ $etudiant->nom }}">
  </div>

  <div class="form-group">
    <label for="addresse">Addresse</label>
    <input type="text" class="form-control" id="addresse" name="addresse" value="{{ $etudiant->addresse }}">
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{ $etudiant->phone }}">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="{{ $etudiant->email }}">
  </div>

  <div class="form-group">
    <label for="date_naissance">Date de Naissance</label>
    <input type="text" class="form-control" id="date_naissance" name="date_naissance" value="{{ $etudiant->date_naissance}}">
  </div>

  <div class="form-group">
    <label for="ville_id">Ville</label>
    <select class="form-control" id="ville_id" name="ville_id">
        <option value="{{ $etudiant->etudiantHasVille->ville }}" selected>
        {{ $etudiant->etudiantHasVille->ville }}
        </option>
        @foreach($villes as $ville)
        <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
        @endforeach
    </select>
  </div>



<div class="d-flex align-items-center justify-content-center" style="height: 100px;">

    <div class="p-2 m-2 text-white rounded-2">
        <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="text-center">
            <button type="button" class="btn btn-success">
            <input type="submit" value="edit">
            </button>
        </a>
    </div>
    
    <form action="{{ route('etudiant.edit', $etudiant->id) }}"method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="supprimer">
    </form>


</div>

</form>
</div>





@endsection
@extends('layouts.app')

@section('content')


<div class="container">

    <h3>list des etudiants</h3>

    <table>
        <tr>
            <th>Etudiant</th>

            <th>Ville</th>
        </tr>
        @foreach($etudiants as $etudiant)
        <tr>
            <td><a href="{{ route('etudiant.edit', $etudiant->id) }}"> {{ $etudiant->nom }}</a></td>
            <td>{{ $etudiant->etudiantHasVille->ville }}</td>
        </tr>
        @endforeach
    </table>

</div>


@endsection
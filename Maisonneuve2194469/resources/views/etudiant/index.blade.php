<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiants</title>
</head>
<body>
    <h3>list des etudiants</h3>
<table>
    <tr>
        <th>Etudiant</th>
        <th>Ville</th>
    </tr>
    @foreach($etudiants as $etudiant)
    <tr>
        <td>{{ $etudiant->nom }}</td>
        <td>{{ $etudiant->ville_id }}</td>
    </tr>
    @endforeach
</table>



</body>
</html>
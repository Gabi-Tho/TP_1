<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    
    public function index()
    {

        $etudiants = Etudiant::all();
        return view('etudiant.index', ['etudiants'=>$etudiants]);
        
    }

    public function create(){

        $villes = Ville::all();
        return view('etudiant.create', ['villes'=>$villes]);
    }

    //button functionality
    public function update(Etudiant $etudiant){

        return view('etudiant.edit', ['etudiant'=>$etudiant]);
        
    }
    //the link to the route
    public function edit(Etudiant $etudiant){

        return view('etudiant.edit', ['etudiant'=>$etudiant]);
        
    }

    public function destroy(Etudiant $etudiant){

        return view('etudiant.edit', ['etudiant'=>$etudiant]);
        
    }

    

}

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


}

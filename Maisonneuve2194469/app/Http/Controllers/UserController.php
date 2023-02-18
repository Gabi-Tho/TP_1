<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {

        // $etudiants = Etudiant::all();
        return view('user.index');
        
    }
}

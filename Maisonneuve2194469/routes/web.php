<?php
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('etudiant');
});

            //URL    //Controller              //Method         //folder.file of view
Route::get('index',  [EtudiantController::class,'index'])->name('etudiant.index'); //renaming the route so you can customize links
Route::get('create', [EtudiantController::class,'create'])->name('etudiant.create'); 
Route::post('create', [EtudiantController::class,'store'])->name('etudiant.store');

//affiche etudiant
Route::get('show/{etudiant}',   [EtudiantController::class,'show'])->name('etudiant.show');

//affiche formulaire
Route::get('edit/{etudiant}',   [EtudiantController::class,'edit'])->name('etudiant.edit'); 
//submit button
Route::put('edit/{etudiant}',   [EtudiantController::class,'update']); 

Route::delete('edit/{etudiant}',   [EtudiantController::class,'destroy']); 


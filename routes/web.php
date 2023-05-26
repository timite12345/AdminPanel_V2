<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddChauffeur;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FacturesController;
use App\Http\Controllers\HopitalControllers;
use App\Http\Controllers\VehiculeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/auth/register', function () {
    return view('auth.register');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/AddNewChauffeur', function () {
    return view('AddNewChauffeur');
});

Route::get('/ListesChauffeur', function () {
    return view('ListesChauffeur');
});

Route::get('/PdfFacture', function () {
    return view('PdfFacture');
});



Route::get('/AjouterHopital', function () {
    return view('AjouterHopital');
});

Route::get('/AjouterPatient', function () {
    return view('AjouterPatient');
});

Route::get('/AjouterVehicule', function () {
    return view('AjouterVehicule');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update1'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy1'])->name('profile.destroy');

});

Route::post('/NewMission',[Controller::class, "CreateNewMission"])->name('mission');
Route::post('/ListesHopitals',[HopitalControllers::class, "CreateHopital"])->name('NewHopital');
Route::post('/AddNewChauffeur',[AddChauffeur::class, "CreateChauf"])->name('addChauffeur');
Route::post('/ListesVehicules',[VehiculeController::class, "CreateVehicule"])->name('NewVehicule');





Route::get('/AjouterMission',[Controller::class, "NewMission"])->name('NewMission');
Route::get('/Accueil',[Controller::class, "show"])->name('Accueil');
Route::get('/Supprimer/{id}', [Controller::class, 'destroye'])->name('Supprimer');
Route::get('/destroye2/{id}', [HopitalControllers::class, 'destroye2'])->name('destroyehopital');
Route::get('/destroye1/{id}', [FacturesController::class, 'destroye1'])->name('destroyefacture');
Route::get('/Supprimer/{id}', [Controller::class, 'destroye'])->name('Supprimer');

Route::get('/Modifier/{id}', [Controller::class, 'modifier'])->name('Edit');
Route::get('/Voir/{id}', [Controller::class, 'voir'])->name('Details');
Route::get('/ListesChauffeur',[AddChauffeur::class, "showChauff"])->name('SelectChauffeur');
Route::get('/ListesFactures',[FacturesController::class, "index"])->name('SelectFactures');
Route::get('/ListesHopitals',[HopitalControllers::class, "GetListes"])->name('ListeHopitals');
Route::get('/getFacturePdf/{id}', [FacturesController::class, 'getFacturePdf'])->name('SelectFacturePdf');
Route::get('/ListesVehicules',[VehiculeController::class, "GetListes"])->name('ListesVehicules');

Route::get('/EditerFactures',[FacturesController::class, "EditerFactures"]);//recuperer champs hopital et chauffeur
Route::post('/EditerFactures',[FacturesController::class, "CreateFacture"])->name('NewFacture');//creer facture

// Route::get('/dashboard', [Controller::class, 'Compte'])->name('Compte');


require __DIR__.'/auth.php';

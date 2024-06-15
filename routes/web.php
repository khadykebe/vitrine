<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\EcoleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PartenaireContoller;
use App\Http\Controllers\ScolaireController;
use App\Http\Controllers\ProgrammeController;



Route::get('/',[ClientController::class,'index'])->name('login');
Route::post('/contact',[ClientController::class,'sendEmail'])->name('contact');


Route::post('login',[UserController::class,'login'])->name('connexion');

// ->middleware('auth')


// for activité
Route::get('/activite',[ActiviteController::class,'index'])->name('activite');
Route::post('/addActivite',[ActiviteController::class,'store'])->name('addActivite');
Route::delete('/deleteActivite/{id}',[ActiviteController::class,'destroy'])->name('deleteActivite');


// for evenement
Route::get('/evenement',[EvenementController::class,'index'])->name('evenement');
Route::post('/addEvenement',[EvenementController::class,'store'])->name('addEvenement');
Route::delete('/delete/{id}',[EvenementController::class,'destroy'])->name('deleteEvent');


//for users

Route::get('/all',[UserController::class,'index'])->name('index.all');
Route::post('/addUser',[UserController::class,'store'])->name('addUser');
Route::delete('/deleteUser/{id}',[UserController::class,'destroy'])->name('delete.user');

//for cantact

Route::get('/allContact',[ContactController::class,'index'])->name('allContact');
Route::post('/addContact',[ContactController::class,'store'])->name('addContact');

// for image
Route::get('/allImage',[ImageController::class,'index'])->name('allImage');
Route::post('/addImage',[ImageController::class,'store'])->name('addImage');
Route::delete('/daleteImag/{id}e',[ImageController::class,'destroy'])->name('daleteImage');

//for video

Route::get('/allVideo',[VideoController::class,'index'])->name('allVideo');
Route::post('/addVideo',[VideoController::class,'store'])->name('addVideo');

//admin
Route::get('/ad',function(){return view('admin.index');});
Route::get('/info',[DescriptionController::class,'index'])->name('info');
Route::post('/descrp', [DescriptionController::class,'store'])->name('descrip');
Route::delete('/delete',[DescriptionController::class,'destroy'])->name('deleteDescrip');
Route::post('/addEcole',[EcoleController::class,'store'])->name('addEcole');

//client
//partenaire
Route::get('/partenaire',[PartenaireContoller::class,'partenaire'])->name('partenaire');
Route::post('/addpart',[PartenaireContoller::class,'store'])->name('addpart');
Route::delete('/deletepart/{id}',[PartenaireContoller::class,'destroy'])->name('deletepart');
// Route::post


//scolaire
Route::get('/scolaire',[ScolaireController::class,'scolaire'])->name('scolaire');
Route::post('/addscol',[ScolaireController::class,'store'])->name('addscol');
Route::put('/updatescol/{id}',[ScolaireController::class,'update'])->name('updatescol');
Route::delete('/deletescol/{id}',[ScolaireController::class,'destroy'])->name('deletescol');


//programme
Route::get('/programme',[ProgrammeController::class,'programme'])->name('programme');
Route::post('/addProg',[ProgrammeController::class,'store'])->name('addProg');
Route::put('/updateProg/{id}',[ProgrammeController::class,'update'])->name('updateProg');
Route::delete('/deleteProg/{id}',[ProgrammeController::class,'destroy'])->name('deleteProg');




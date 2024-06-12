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


Route::get('/', function () {
    return view('welcome');
})->name('login');



Route::post('login',[UserController::class,'login'])->name('login');

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
Route::delete('/daleteImage',[ImageController::class,'store'])->name('daleteImage');

//for video

Route::get('/allVideo',[VideoController::class,'index'])->name('allVideo');
Route::post('/addVideo',[VideoController::class,'store'])->name('addVideo');

//admin
Route::get('/ad',function(){return view('admin.index');});
Route::get('/info',[DescriptionController::class,'index'])->name('info');
Route::post('/descrp', [DescriptionController::class,'store'])->name('descrip');
Route::delete('/delete',[DescriptionController::class,'destroy'])->name('deleteDescrip');
Route::post('/addEcole',[EcoleController::class,'store'])->name('addEcole');




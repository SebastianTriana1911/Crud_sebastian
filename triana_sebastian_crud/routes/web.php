<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Requests\CandidateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Rutas para el controlador Role
Route::get("roles/index", [RoleController::class,"index"])->name("roles.index");
Route::get("roles/show/{id}", [RoleController::class,"show"])->name("roles.show");
Route::get("roles/create", [RoleController::class,"create"])->name("roles.create");
Route::post("roles/index", [RoleController::class,"store"])->name("roles.store");
Route::get("roles/edit/{id}", [RoleController::class,"edit"])->name("roles.edit");
Route::put("roles/{id}", [RoleController::class,"update"])->name("roles.update");
Route::delete("roles/{id}", [RoleController::class,"destroy"])->name("roles.destroy");

// Rutas para el controlador User
Route::get("users/index", [UserController::class,"index"])->name("users.index");
Route::get("users/show/{id}", [UserController::class,"show"])->name("users.show");
Route::get("users/create", [UserController::class,"create"])->name("users.create");
Route::post("users/index", [UserController::class,"store"])->name("users.store");
Route::get("users/edit/{id}", [UserController::class,"edit"])->name("users.edit");
Route::put("users/{id}", [UserController::class,"update"])->name("users.update");
Route::delete("users/{id}", [UserController::class, "destroy"])->name("users.destroy");

// Rutas para el controlador Candidate
Route::get("candidates/index", [CandidateController::class,"index"])->name("candidates.index");
Route::get("candidates/show{id}", [CandidateController::class, "show"])->name("candidates.show");
Route::get("candidates/create", [CandidateController::class,"create"])->name("candidates.create");
Route::post("candidates/index", [CandidateController::class,"store"])->name("candidates.store");
Route::get("candidates/edit/{id}",[CandidateController::class,"edit"])->name("candidates.edit");
Route::put("candidates/{id}", [CandidateController::class,"update"])->name("candidates.update");
Route::delete("candidates/{id}", [CandidateController::class,"destroy"])->name("candidates.destroy");




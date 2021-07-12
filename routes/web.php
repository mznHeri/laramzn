<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController\InitController;
use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\AdminController\ExtendbController;
use App\Http\Controllers\AdminController\UserController;

$var = new ExtendbController();
$loginname = $var->getLoginName();

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

// Route::get('/', function () {
//     return view('welcome');
// });

 
Route::get('/', [InitController::class, 'index'])->name('home');
Route::get('home', [InitController::class, 'index'])->name('home');
Route::get($loginname, [AuthController::class, 'showFormLogin'])->name($loginname);
Route::post($loginname, [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
Route::group(['middleware' => 'auth'], function () {
     Route::get('logout', [AuthController::class, 'logout'])->name('logout');
     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
     Route::get('dashboard/users', [UserController::class, 'index'])->name('users');
     Route::get('dashboard/users/create', [UserController::class, 'create'])->name('createusers');
     Route::post('dashboard/users/create', [UserController::class, 'store']);
     Route::get('dashboard/users/delete/{id}', [UserController::class, 'delete']);
});
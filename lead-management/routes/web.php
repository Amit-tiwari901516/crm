<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);

//leads
Route::get('/view_lead', [AdminController::class, 'view_lead']);
Route::post('/add_lead', [AdminController::class, 'add_lead']);
Route::get('/manage_leads', [AdminController::class, 'manage_leads']);
Route::get('/delete_lead/{id}', [HomeController::class, 'delete_lead']);
Route::get('/edit_lead/{id}', [AdminController::class, 'edit_lead']);
Route::post('/update_lead/{id}',[AdminController::class,'update_lead']);
Route::get('show_lead/{id}',[HomeController::class,'show_lead']);
Route::get('/convert_lead/{id}', [AdminController::class, 'convert_lead']);
Route::post('/convert_lead/{id}', [AdminController::class, 'convert_lead_confirm']);

//accounts
Route::get('/manage_accounts', [AdminController::class, 'manage_accounts']);
Route::post('/add_account', [AdminController::class, 'add_account']);
Route::get('/view_account', [AdminController::class, 'view_account']);
Route::get('/edit_account/{id}', [AdminController::class, 'edit_account']);
Route::post('/edit_account_confirm/{id}', [AdminController::class, 'edit_account_confirm']);


//contacts
Route::get('/manage_contact', [AdminController::class, 'manage_contact']);

//Deals
Route::get('/manage_deal', [AdminController::class, 'manage_deal']);
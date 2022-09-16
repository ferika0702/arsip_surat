<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipController;

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
Route::get('/', function () {
    return view('dashboard.main');
});
// // Route::get('/arsip', function () {
// //     return view('arsip.index');
// // });
// // Route::resource('/arsip',ArsipController::class);
// Route::resource('/arsip',ArsipController::class);
Route::get('/admin/surat', [ArsipController::class, 'index']);
Route::get('/admin/surat/about', [ArsipController::class, 'about']);
Route::get('/admin/surat/download/{id}', [ArsipController::class, 'download_pdf']);
Route::get('/admin/surat/create_page', [ArsipController::class, 'createPage']);
Route::get('/admin/surat/edit/{id}', [ArsipController::class, 'editPage']);
Route::get('/admin/surat/detail/{id}', [ArsipController::class, 'detailPage']);
Route::post('/admin/surat/create', [ArsipController::class, 'create']);
Route::post('/admin/surat/update/{id}', [ArsipController::class, 'update']);
Route::get('/admin/surat/delete/{id}', [ArsipController::class, 'delete']);
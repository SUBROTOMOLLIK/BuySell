<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

// welcome home route
Route::get('/', [ProductController::class,'home'])->name('index');

Auth::routes(/**['verify'=> true]**/);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); /**->middleware('verified');**/
Route::get('admin/home',[HomeController::class, "handleAdmin"])->name('admin.route')->middleware('admin');

//route for details page
Route::get('/details/{id}',[ProductController::class, 'show'])->name('details'); /**-->middleware('verified');**/

// edit product page route
Route::get('/edit/{id}',[ProductController::class, 'edit'])->name('edit');

Route::get('/list',[ProductController::class, 'list'])->name('list');
//email verification route

// Route::get('/email/verify', function (){
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice')

// Route::get('/email/verify/{id}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
//     return redirect('/');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();

//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// email verification route

//route for create product page
Route::get('/create',[ProductController::class, 'create'])->name('create');/**-->middleware('verified');**/
Route::post('/store',[ProductController::class, 'store'])->name('store');/**-->middleware('verified');**/

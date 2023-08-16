<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contentController;
use App\Http\Controllers\sliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Distributor;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\popupController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\User;




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

Route::get('/ResetPasswordLoad', [frontendController::class, 'ResetPasswordLoad'])->name('ResetPasswordLoad');
Route::post('/ResetPassword', [frontendController::class, 'ResetPassword'])->name('ResetPassword');
Route::get('admin_login', function () {
    return view('auth.login');
});
Route::resource('items', Distributor::class);
Route::get('/', [frontendController::class, 'index']);
Route::get('/page/{id}', [frontendController::class, 'page']);
Route::get('/forget_password', [frontendController::class, 'forget_password']);
Route::post('/forget_mail', [frontendController::class, 'forget_mail']);
Route::get('/change_password', [Distributor::class, 'index']);
Route::post('update_password', [Distributor::class, 'create'])->name('create');
Route::get('/items/{item}', [Distributor::class, 'destroy'])->name('destroy');
Route::get('/list', [frontendController::class, 'list']);
Route::get('/add_distributor', [frontendController::class, 'add_distributor']);
Route::get('items/edit/{item}', [Distributor::class, 'edit'])->name('edit');
Route::post('items/{item}', [Distributor::class, 'update'])->name('update');

Route::post('/save_distributor', [frontendController::class, 'save_distributor']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');



    Route::get('/addcontent', [contentController::class, 'addcontent']);
    Route::post('/savecontent', [contentController::class, 'savecontent']);
    Route::get('/listcontant', [contentController::class, 'listcontant']);
    Route::get('/editcontent/{id}', [contentController::class, 'editcontent']);
    Route::put('/updatecontent/{id}', [contentController::class, 'updatecontent']);
    Route::get('/deletecontent/{id}', [contentController::class, 'deletecontent']);

    Route::get('/addslider', [sliderController::class, 'addslider']);
    Route::post('/saveslider', [sliderController::class, 'saveslider']);
    Route::get('/listslider', [sliderController::class, 'listslider']);
    Route::get('/editslider/{id}', [sliderController::class, 'editslider']);
    Route::put('/updateslider/{id}', [sliderController::class, 'updateslider']);
    Route::get('/deletesilder/{id}', [sliderController::class, 'deletesilder']);


    Route::get('/addcategory', [CategoryController::class, 'addcategory']);
    Route::post('/savecategory', [CategoryController::class, 'savecategory']);
    Route::get('/listcategory', [CategoryController::class, 'listcategory']);
    Route::get('/editcategory/{id}', [CategoryController::class, 'editcategory']);
    Route::put('/updatecategory/{id}', [CategoryController::class, 'updatecategory']);
    Route::get('/deletecategory/{id}', [CategoryController::class, 'deletecategory']);
    Route::get('/active/{id}', [CategoryController::class, 'activeInactive']);
    Route::get('/inactive/{id}', [CategoryController::class, 'Inactive']);

    Route::get('/addsubcategory', [SubCategoryController::class, 'addsubcategory']);
    Route::post('/savesubcategory', [SubCategoryController::class, 'savesubcategory']);
    Route::get('/listsubcategory', [SubCategoryController::class, 'listsubcategory']);
    Route::get('/editsubcategory/{id}', [SubCategoryController::class, 'editsubcategory']);
    Route::put('/updatesubcategory/{id}', [SubCategoryController::class, 'updatesubcategory']);
    Route::get('/deletesubcategory/{id}', [SubCategoryController::class, 'deletesubcategory']);


    Route::get('/addpopup', [popupController::class, 'addpopup']);
    Route::post('/savepopup', [popupController::class, 'savepopup']);
    Route::get('/listpopup', [popupController::class, 'listpopup']);
    Route::get('/editpopup/{id}', [popupController::class, 'editpopup']);
    Route::put('/updatepopup/{id}', [popupController::class, 'updatepopup']);
    Route::get('/deletepopup/{id}', [popupController::class, 'deletepopup']);
});




Route::get('/logout', function () {
    auth()->Logout();
    Session()->flush();
    return Redirect::to('/admin_login');
})->name('Logout');

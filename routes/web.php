<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\slidercategoryController;
use App\Http\Controllers\SliderController;

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


Route::get('/post',[PostController::class,'index'])->middleware(['auth'])->name('post_index') ;
Route::post('/post',[PostController::class,'create'])->middleware(['auth'])->name('post_create') ;




// Route::get('/post', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/dashboard',[DashboardController::class,'show_post'])->middleware(['auth'])->name('dashboard') ;

require __DIR__.'/auth.php';



// admin 


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->group(function(){
        // admin  login route
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('adminlogin');

    });
     Route::get('dashboard','HomeController@index')->name('dashboard');
     Route::POST('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');

     //***************Company Route******************//

    Route::get('/company-list', 'CompanyController@index')->name('company-list');
    Route::get('/company/create', 'CompanyController@create')->name('company-create');
    Route::post('/company/store', 'CompanyController@store')->name('company-store');
    Route::get('/company/edit/{id}', 'CompanyController@edit')->name('company-edit');
    Route::post('/company/update/{id}', 'CompanyController@update')->name('company-update');
    Route::get('/company/delete/{id}', 'CompanyController@destroy')->name('company-delete');
    
    //***************Company Route End***************//

    //***************Employer Route End***************//

     Route::get('/employees-list', 'EmployeesController@index')->name('employees-list');
    Route::get('/employees/create', 'EmployeesController@create')->name('employees-create');
    Route::post('/employees/store', 'EmployeesController@store')->name('employees-store');
    Route::get('/employees/edit/{id}', 'EmployeesController@edit')->name('employees-edit');
    Route::post('/employees/update/{id}', 'EmployeesController@update')->name('employees-update');
    Route::get('/employees/delete/{id}', 'EmployeesController@destroy')->name('employees-delete');

     
});

//post data url 



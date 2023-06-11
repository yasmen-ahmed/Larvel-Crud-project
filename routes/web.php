<?php

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


// Route::get('/test', function () {
//     return 'test1';
// });

// Route::controller('App\Http\Controllers\StudentController')-> prefix('tracks')->group(function(){

//     Route::get('create', ['create']);
// });

// Route::prefix('tracks')->group(function(){

    
//     // Route::get('', function () {
//     //     return 'List of tracks page';
//     // });

     

//     Route::get('{id}', function ($id) {
//         return "<h1>this is Details of tracks $id </h1>";
//     });

//     Route::get('{id}/{name?}', function ($id,string $name = 'ali') {
//         return "<h1> Details page of tracks #$id  named $name</h1>";
//     });

    
// });



//    Route::get('tracks/create', function () {
//     return 'create page';
//    });

   
//     Route::POST('tracks', function () {
//         return '<h1>contact page</h1>';
//     }); 

    
 
//     Route::get('/tracks/{id}/edit', function ($id) {
//         return "<h1>this is edit form of tracks $id </h1>";
       
//     });


//     Route::PUT('/tracks/{id}', function ($id) {
//         return "<h1>this is edit form of tracks $id </h1>";
       
//     });
    
//     Route::delete('tracks/{id}', function ($id) {
//         return "<h1>Deleted successfully</h1>";
//     });


///////
Route::resource('students','App\Http\Controllers\StudentController');

    
    
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
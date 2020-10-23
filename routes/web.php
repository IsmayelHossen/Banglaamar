<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('index');
}); */
Route::get('/','indexcontroller@topnews');
Route::get('users', 'UserController@index')->name('users');

Route::get('changeStatus', 'UserController@changeStatus');

/*Route::prefix('newspaper')->group(function(){
	Route::get('/about',function () {
     return view('about',['name'=>'ismayel']);
});
Route::get('/contact', function () {
     return view('contact');
});

});
Route::get('/about',function () {
     return view('about',['name'=>'ismayel']);
});
Route::get('/home',function () {
    echo"Home Page";
});
Route::get('/contact', function () {
     return view('contact');
})->middleware('age'); */
Route::get('district','individual@search2');
Route::get('individiual34/{category}/{catb}','categoriescontroller@national1')->name('individiual');
Route::get('details/{postid}','individual@details');
Route::get('Search/result','individual@search')->name('search');


Auth::routes();// add all news
Route::group(['middleware'=>'auth'], function(){
Route::get('/Addnews/all', 'addallnewscontroller@addallnews')->name('addallnews');
Route::post('/Addnews/save', 'addallnewscontroller@saveallnews')->name('allnewssave');
Route::get('/delete{id}', 'addallnewscontroller@allpostdelete')->name('allpostdelete');
Route::get('/Addnews/editpost/{id}', 'addallnewscontroller@postedit')->name('postedit');
Route::post('/Addnews/editpostsave', 'addallnewscontroller@editpostsave')->name('editpostsave');
Route::delete('delete/{id}','addallnewscontroller@deleteall')->name('deletepostall');


Route::get('/Addnews/manage', 'addallnewscontroller@managenews')->name('managenews');
Route::get('/Addnews/inactive', 'addallnewscontroller@inactive')->name('inactive');
Route::get('/Addnews/allpostmanage/{id}', 'addallnewscontroller@status1')->name('status1');
Route::get('/Ajaxcrud/data','addallnewscontroller@ajaxget');

// breking news
Route::get('/Addbreaking/add', 'breakingnewsconntroller@addbreaking')->name('addbreakingnews');
Route::post('/Addbreaking/save', 'breakingnewsconntroller@breakinnewssave')->name('breakinnewssave');
Route::get('/Addbreaking/manage', 'addallnewscontroller@managebreakingnews')->name('ManageBreakingnews');
Route::post('/Addbreaking/opinion_edit', 'addallnewscontroller@OpinionEdit')->name('opinion_edit');

Route::get('changeStatus', 'addallnewscontroller@changeStatus');


Route::get('/home', 'HomeController@index')->name('home');


});
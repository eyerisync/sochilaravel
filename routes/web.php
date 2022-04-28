<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\healthcontroller;

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

Route::get('/fbpage', 'fbcon@fbpage');

//Sample Website <start>
Route::get('/index', 'ModeController@index');
Route::get('/crud', 'ModeController@index');
Route::get('/retData', 'ModeController@retData');
//<end>

//CAS Website <start>
Route::get('/casweb', 'cas@casweb');
Route::get('/cashome', 'cashome@cashome');
Route::get('/casfac', 'casfaculty@casfac');
Route::get('/casstories', 'casstories@casstories');
Route::get('/casres', 'casresearch@casres');
Route::get('/casgal', 'casgallery@casgal');
Route::get('/casabout', 'casabout@casabout');
Route::get('/cascon', 'cascontact@cascon');
//<end>

//Health System <start>
Route::get('/log', 'logincontroller@login');
Route::get('/login/adminview', 'logincontroller@adminview');
Route::get('/login/logout', 'logincontroller@logout');
//Route::get('/logout', 'healthcontroller@logout');
Route::get('main/admin', 'admincontroller@admin');
//Route::get('admin', 'admincontroller@admin');
Route::get('main/health', 'healthcontroller@health');
//Route::get('health', 'healthcontroller@health');
Route::get('main/showData', 'healthcontroller@showData');
Route::get('main/showWeight', 'healthcontroller@showWeight');
Route::get('main/showAdmin', 'admincontroller@showAdmin');
Route::get('/main/import-form', 'healthcontroller@importForm');
Route::get('healthview', ['uses'=>'healthcontroller@showChilds', 'as'=>'healthcontroller.showChilds']);
Route::get('/main/childs/{child_id}/edit/}', 'healthcontroller@edit');

Route::post('login/validator', 'logincontroller@validator');
//Route::post('/login', 'healthcontroller@postlogin');
Route::post('/main/delete_child', 'healthcontroller@delete_child');
Route::post('/main/delete_admin', 'admincontroller@delete_admin');
Route::post('/main/insert_child', 'healthcontroller@insert_child');
Route::POST('/main/update_child', 'healthcontroller@update_child');
Route::post('/main/insert_admin', 'admincontroller@insert_admin');
Route::post('/main/update_admin', 'admincontroller@update_admin');
Route::post('/main/calculate_status', 'healthcontroller@calculate_status');
Route::post('/main/upload', 'healthcontroller@upload');
Route::post('/main/import', 'healthcontroller@import')->name('childs.import');
//<end>

//NCF Social Network Portal <start>
Route::get('/portal', 'portalcontroller@portal');
//<end>

Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/adminview', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');

//Google
Route::get('login/google', 'logincontroller@redirectToProvider');
Route::get('login/google/callback', 'logincontroller@handleProviderCallback');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('profile', function() {
	return '<h1>This is profile page</h1>';
})->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('home', 'healthcontroller@health');
Route::get('/password/log', 'logincontroller@login');

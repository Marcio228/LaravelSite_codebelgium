<?php

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
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'Front\FrontendController@index');
Route::get('/about', 'Front\FrontendController@about');
Route::get('/contact', 'Front\FrontendController@contact');
Route::get('/apply', 'Front\FrontendController@apply');
Route::get('/faq', 'Front\FrontendController@faq');
Route::get('/privacy-policy', 'Front\FrontendController@privacy');
Route::get('/terms', 'Front\FrontendController@terms');
Route::post('/apply', 'Front\FrontendController@applyStore');
Route::post('/contact', 'Front\FrontendController@contactSubmission');

Route::resource('courses', 'Front\CoursesController');
Route::resource('blog', 'Front\PostsController');


Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'Backend\Dashboard\Dashboard@index')->name('dashboard');

        Route::group(['middleware' => ['permission:manage-posts']], function () {
            Route::resource('posts', 'Backend\Posts\PostsController');
        });

    });
});


Auth::routes();
Auth::routes(['verify' => true]);
Route::get('logout', 'Auth\LoginController@logout');


Route::get('login/facebook', 'Auth\FacebookController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\FacebookController@handleProviderCallback');

Route::get('login/twitter', 'Auth\TwitterController@redirectToProvider');
Route::get('login/twitter/callback', 'Auth\TwitterController@handleProviderCallback');

Route::get('login/google', 'Auth\GoogleController@redirectToProvider');
Route::get('login/google/callback', 'Auth\GoogleController@handleProviderCallback');





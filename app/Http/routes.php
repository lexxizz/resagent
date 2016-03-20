<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::group(['prefix'=>'admin'], function()

    {
        Route::get('/', function()
        {
            return view('admin.dashboard.index');
        });

        Route::get('/add', 'admin\MenuController@add');
        Route::get('/show', 'admin\MenuController@show');
        Route::post('/store', 'admin\MenuController@store');
        Route::get('/categories/add', 'admin\CategoriesController@add');
        Route::get('/places/add', 'admin\PlacesController@add');
        Route::post('/categories/store', 'admin\CategoriesController@store');
        Route::post('/places/store', 'admin\PlacesController@store');

    });

});

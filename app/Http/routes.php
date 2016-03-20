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

        Route::get('/goods/add', 'admin\MenuController@add');
        Route::get('/goods/show', 'admin\MenuController@show');
        Route::get('/goods/edit/{id}', 'admin\MenuController@edit');
        Route::post('/goods/update/{id}', 'admin\MenuController@update');
        Route::post('/goods/store', 'admin\MenuController@store');
        Route::get('/categories/add', 'admin\CategoriesController@add');
        Route::get('/categories/show', 'admin\CategoriesController@show');
        Route::get('/places/add', 'admin\PlacesController@add');
        Route::get('/places/show', 'admin\PlacesController@show');
        Route::post('/categories/store', 'admin\CategoriesController@store');
        Route::post('/places/store', 'admin\PlacesController@store');

    });

});

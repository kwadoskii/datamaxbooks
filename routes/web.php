<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Input;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['prefix' => 'api'], function () {
    Route::get('users/{id}', function ($id) {
        return response()->json($id);
    });

    Route::get('external-books', [
        'uses' => 'bookcontroller@getExternalBooks'
    ]);

    //v1 API
    Route::group(['prefix' => 'v1'], function () {
        Route::post('books/', [
            'uses' => 'bookcontroller@postAddNewBook'
        ]);

        Route::get('books/', [
            'uses' => 'bookcontroller@getBookLists',
            'as' => 'booklists'
        ]);

        Route::patch('books/{id}', [
            'uses' => 'bookcontroller@patchUpdateBook'
        ]);

        Route::delete('books/{id}', [
            'uses' => 'bookcontroller@deleteRemoveBook'
        ]);

        Route::get('books/{id}', [
            'uses' => 'bookcontroller@getBook'
        ]);
    });
});

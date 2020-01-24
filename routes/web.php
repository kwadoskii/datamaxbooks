<?php

use GuzzleHttp\Client;
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
});

Route::group(['prefix' => 'api'], function () {
    Route::get('users/{id}', function ($id) {
        return response()->json($id);
    });

    Route::get('external-books', function () {
        $name = Input::get('name');

        $client = new Client();
        $res = $client->request('GET', 'https://www.anapioficeandfire.com/api/books', [
            'query' => ['name' => $name]
        ]);

        if (($res->getBody()->__toString() == '[]') || $name == null) {
            $result = [];
            $result['status_code'] = 200;
            $result['status'] = "success";
            $result['data'] = [];

            return response()->json($result);
        } else {

            $book = json_decode($res->getBody(), false);

            $result = [];
            $result['status_code'] = 200;
            $result['status'] = "success";
            $result['data'] = [
                'name' => $book[0]->name,
                'isbn' =>$book[0]->isbn,
                'authors' => $book[0]->authors,
                'number_of_pages' => $book[0]->numberOfPages,
                'publisher' => $book[0]->publisher,
                'country' => $book[0]->country,
                'release_date' => date_format(date_create($book[0]->released),"Y-m-d")
            ];
            return response()->json($result);
        }
    });

    Route::group(['prefix' => 'v1'], function () {
        Route::post('books/', [
            'uses' => 'bookcontroller@postAddNewBook'
            ]);
    });
});

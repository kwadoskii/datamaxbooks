<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class bookcontroller extends Controller
{
    // name isbn authors country number_of_pages publisher release_date;
    public function postAddNewBook(Request $request)
    {
        $session = $request->session;

        $newbook = new Book();

        $newbook->name = $request->name;
        $newbook->isbn = $request->isbn;
        $newbook->authors = $request->authors;
        $newbook->country = $request->country;
        $newbook->number_of_pages = $request->number_of_pages;
        $newbook->publisher = $request->publisher;
        $newbook->release_date = $request->release_date;
        $newbook->save();

        $response = [];
        $response['status_code'] = 201;
        $response['status'] = 'success';
        $response['data'] = $newbook;
        $response['data']['book'] = [
            'name' => $newbook->name,
            'isbn' => $newbook->isbn,
            'authors' => $newbook->authors,

        ];

        return response()->json($response);
    }
}

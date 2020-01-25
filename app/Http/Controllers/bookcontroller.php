<?php

namespace App\Http\Controllers;

use App\Book;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class bookcontroller extends Controller
{
    // name isbn authors country number_of_pages publisher release_date;
    public function getExternalBooks()
    {
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
                'isbn' => $book[0]->isbn,
                'authors' => $book[0]->authors,
                'number_of_pages' => $book[0]->numberOfPages,
                'publisher' => $book[0]->publisher,
                'country' => $book[0]->country,
                'release_date' => date_format(date_create($book[0]->released), "Y-m-d")
            ];
            return response()->json($result);
        }
    }

    public function postAddNewBook(Request $request)
    {
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

        $book = [
            'name' => $newbook->name,
            'isbn' => $newbook->isbn,
            'authors' => [$newbook->authors]
        ];

        $response['data'] = ['book' => $book];
        $response['data']['number_of_pages'] = $newbook->number_of_pages;
        $response['data']['publisher'] = $newbook->publisher;
        $response['data']['country'] =  $newbook->country;
        $response['data']['release_date'] = date_format(date_create($newbook->release_date), "Y-m-d");

        return response()->json($response);
    }

    public function getBookLists()
    {
        // $booklist = Book::all();
        $booklist = Book::orderBy('id', 'asc')->get();
        $response = [];

        if ($booklist) {

            $response['status_code'] = 200;
            $response['status'] = 'success';

            for ($i = 0; $i < count($booklist); $i++) {
                $response['data']['book'][$i]['id'] = $booklist[$i]->id;
                $response['data']['book'][$i]['name'] = $booklist[$i]->name;
                $response['data']['book'][$i]['isbn'] = $booklist[$i]->isbn;
                $response['data']['book'][$i]['authors'][] = $booklist[$i]->authors;
                $response['data']['book'][$i]['number_of_pages'] = $booklist[$i]->number_of_pages;
                $response['data']['book'][$i]['publisher'] = $booklist[$i]->publisher;
                $response['data']['book'][$i]['country'] = $booklist[$i]->country;
                $response['data']['book'][$i]['release_date'] = date_format(date_create($booklist[$i]->release_date), "Y-m-d");
            }
            return response()->json($response);
        } else {
            $response['status_code'] = 200;
            $response['status'] = 'success';
            $response['data'] = [];

            return response()->json($response);
        }
    }

    public function patchUpdateBook(Request $request)
    {
        $bookId = $request->id;
        $keys = ['name', 'isbn', 'authors', 'country', 'number_of_pages', 'publisher', 'release_date'];
        $newBookDetails = [];
        $response = [];
        $updateBook = Book::find($bookId);

        for ($i = 0; $i < count($keys); $i++) {
            if ($request[$keys[$i]]) {
                $newBookDetails[$keys[$i]] = $request[$keys[$i]];
            }
        }

        $updateBook->update($newBookDetails);

        $response['status_code'] = 200;
        $response['status'] = 'success';
        $response['message'] = "The book " . $updateBook->name . " was updated successfully";

        $response['data'] =  [
            'id' => $updateBook->id,
            'name' => $updateBook->name,
            'isbn' => $updateBook->isbn,
            'authors' => [$updateBook->authors],
            'number_of_pages' => $updateBook->number_of_pages,
            'publisher' => $updateBook->publisher,
            'country' => $updateBook->country,
            'release_date' => date_format(date_create($updateBook->release_date), "Y-m-d")
        ];

        return response()->json($response);
    }

    public function deleteRemoveBook(Request $request)
    {
        $response = [];
        $bookId = $request->id;

        $delBook = Book::find($bookId);
        if ($delBook != null) {
            $bookName = $delBook->name;
            $delBook->delete();

            $response['status_code'] = 204;
            $response['status'] = 'success';
            $response['message'] = "The book " . $bookName . " was deleted successfully";
            $response['data'] = [];

            return response()->json($response);
        }
    }

    public function getBook(Request $request)
    {
        $response = [];
        $bookId = $request->id;
        $book = Book::find($bookId);

        if ($book) {
            $response['status_code'] = 200;
            $response['status'] = 'success';
            $response['data'] =  [
                'id' => $book->id,
                'name' => $book->name,
                'isbn' => $book->isbn,
                'authors' => [$book->authors],
                'number_of_pages' => $book->number_of_pages,
                'publisher' => $book->publisher,
                'country' => $book->country,
                'release_date' => date_format(date_create($book->release_date), "Y-m-d")
            ];
            return response()->json($response);
        }
    }
}

<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::post('reg', 'Api\LibraryController@postReg');
Route::post('/category','Api\LibraryController@postCategory');

Route::post('/author','Api\LibraryController@postAuthor');

Route::post('/students','Api\LibraryController@postStudents');
Route::post('/bookshelves','Api\LibraryController@postBookshelves');
Route::post('/library/books','Api\LibraryController@postAllBooks');
/*Route::group([ 'middleware' => 'auth' ], function () {
    Route::post('/issued/books', 'Api\LibraryController@postIssuedbooks');
});*/
//Get Routes
Route::get('/getcategory', 'Api\LibraryController@getCategory');
Route::get('/getauthor', 'Api\LibraryController@getAuthor');
Route::get('/getshelf', 'Api\LibraryController@getShelves');
Route::get('/getbooks', 'Api\LibraryController@getAllBooks');
Route::get('/getcategor', 'Api\LibraryController@getCategor');
Route::get('/getautho', 'Api\LibraryController@getAutho');
Route::get('/getshel', 'Api\LibraryController@getShelve');

Route::get('/notification/get', 'Api\NotificationController@get');

Route::get('/allstudent', 'Api\LibraryController@getstudent');

Route::delete('/delete-sell/{id}', 'ManageController@destroy');

Route::get('/getbooks', 'Api\LibraryController@getBooks');

Route::get('/notification/get', 'Api\LibraryController@getBooks');

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

/*Route::get('/', 'UsersController@ind');*/
Route::get('/log',  'UsersController@login')->name('credentials.login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/', 'UsersController@register')->name('credentials.register');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('profile', 'UsersController@getProfile')->name('credentials.profile');

Route::get('/user', 'UsersController@registerUser')->name('credentials.userReg');
Route::get('/home', 'UsersController@dash');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/addcategory', 'ManageController@addCat')->name('library.addCategory');
Route::get('/managecategory', 'ManageController@manCat')->name('library.manageCategory');
Route::get('/addauthor', 'ManageController@addAuthor')->name('library.addAuthor');
Route::get('/manageauthor', 'ManageController@manageAuthor')->name('library.manageAuthor');
Route::get('/addshelf', 'ManageController@addShelf')->name('library.addShelf');
Route::get('/delete-shelf/{id}', 'ManageController@destroy');

Route::get('/manageshelf', 'ManageController@manageShelf')->name('library.manageShelf');
Route::get('/addbooks', 'ManageController@addBooks')->name('library.addBooks');

Route::get('/managebooks', 'ManageController@manageBooks')->name('library.manageBooks');

Route::get('/issuebooks', 'ManageController@issueBooks')->name('library.issueBooks');

Route::get('/manage/issued/books', 'ManageController@manageIssuedBooks')->name('library.manageIssuedBooks');
Route::get('/manage/issued/id', 'ManageController@manageIssuedId')->name('library.manageStudentId');

Route::get('/manage/reg/students', 'ManageController@manageRegStudents')->name('library.manageRegStudents');
Route::post('library/issued/books', 'HomeController@postIssuedbooks');


Route::group(['prefix' => 'api', 'middleware' => 'auth' ], function () {

    Route::get('user', function (Request $request) {
        return auth()->user();
    });

    Route::get('getissuedbooks', 'Api\LibraryController@getIssuedBooks');

    Route::get('getissued/student', 'Api\LibraryController@getIssuedStudent');
    /*Route::post('library/issued/books', 'Api\LibraryController@postIssuedbooks');
    */Route::get('id', 'ManageController@id');
});


// EDIT and UPDATE Api Route For Auth User
Route::group(['prefix' => 'api', 'middleware' => 'auth' ], function () {

    Route::get('loginusers', function(Request $request){
        return auth()->user();
    });

    Route::post('post','UsersController@postUser');
});



// PASSWORD RESET ROUTE
Route::get('password/reset/{token?}', 'Auth\ForgetPasswordController@showResetForm');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//Admin RESET PASSWORD

/*//Reset password
Route::get('admin-reset', 'UsersController@adminReset')->name('admin.passwords.reset');
Route::get('admin-reset/email', 'ForgotPasswordController@showLinkRequestForm')->name('admin.passwords.email');
Route::post('admin-reset/email', 'ForgotPasswordController@sendResetLinkEmail');*/

//====DELETE ROUTES
Route::get('/delete-shelf/{id}', 'ManageController@destroy');
Route::get('/delete-category/{id}', 'ManageController@catDestroy');
Route::get('/delete-authors/{id}', 'ManageController@authorDestroy');
Route::get('/delete-books/{id}', 'ManageController@bookDestroy');
Route::get('/delete-issuebook/{id}', 'ManageController@issuebookDestroy');
Route::get('/delete-issuedstudent/{id}', 'ManageController@studDestroy');


//===Redirecting my register and login route
Route::get('register', function(){
    return redirect()->to(url('/'));

});

Route::get('login', ['as' => 'login', 'uses' => function(){
    return redirect()->to(url('/'))->with('danger', 'You have to login first');
}]);

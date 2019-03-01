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

Route::get('/test', function () {
    // echo $books = App\Book::find(1)->category_id;
    // echo $post->tags()->attach($request->tags);
           
    $user = App\User::first();
    
    
    // echo $users = App\Type::find(1)->types;

    // toastr()->success('Data has been saved successfully!');
    // return view('welcome');
    // foreach ($categories->name as $category) {
    //     echo $category;
    // }

});

Auth::routes();


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [
    'uses' => 'HomeController@index',
    'as' => 'dashboard',
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
Route::get('/attendance', [
    'uses' => 'AttendanceController@index',
    'as' => 'attendance',
]);

Route::post('/attendance/store', [
    'uses' => 'AttendanceController@store',
    'as' => 'attendance.store',
]);

Route::get('/transaction', [
    'uses' => 'TransactionController@index',
    'as' => 'transaction',
]);

// Route::resource('books', 'BookController');
Route::get('/books', [
    'uses' => 'BookController@index',
    'as' => 'books',
]);

Route::get('/books/create', [
    'uses' => 'BookController@create',
    'as' => 'books.create',
]);

Route::post('/books/store', [
    'uses' => 'BookController@store',
    'as' => 'books.store',
]);

Route::get('/books/edit/{id}', [
    'uses' => 'BookController@edit',
    'as' => 'books.edit',
]);

Route::post('/books/update/{id}', [
    'uses' => 'BookController@update',
    'as' => 'books.update',
]);

Route::get('/books/delete/{id}', [
    'uses' => 'BookController@destroy',
    'as' => 'books.delete',
]);

Route::get('/books/borrow', [
    'uses' => 'BookController@borrow_index',
    'as' => 'borrow.index',
]);

Route::post('/books/borrows', [
    'uses' => 'BookController@borrow',
    'as' => 'books.borrow',
]);

Route::get('/books/return', [
    'uses' => 'BookController@index_return',
    'as' => 'return.index',
]);

Route::post('/books/returns', [
    'uses' => 'BookController@return',
    'as' => 'books.return',
]);

Route::get('/books/reserve', [
    'uses' => 'BookController@index_reserve',
    'as' => 'reserve.index',
]);

Route::post('/books/reserve', [
    'uses' => 'BookController@reserve',
    'as' => 'books.reserve',
]);

Route::get('/books/restore', [
    'uses' => 'BookController@index_restore',
    'as' => 'restore.index',
]);

Route::get('/books/restore/{id}', [
    'uses' => 'BookController@restore',
    'as' => 'books.restore',
]);

Route::resource('categories', 'CategoryController');

Route::get('/categories/delete/{id}', [
    'uses' => 'CategoryController@destroy',
    'as' => 'categories.delete',
]);

Route::resource('types', 'TypeController');

Route::get('/types/delete/{id}', [
    'uses' => 'TypeController@destroy',
    'as' => 'types.delete',
]);


Route::get('/settings', [
    'uses' => 'SettingController@index',
    'as' => 'settings',
]);

Route::resource('users', 'UserController');

Route::get('/users/delete/{id}', [
    'uses' => 'UserController@destroy',
    'as' => 'users.delete',
]);

Route::resource('year_levels', 'YearLevelController');

Route::get('/year_levels/delete/{id}', [
    'uses' => 'YearLevelController@destroy',
    'as' => 'year_levels.delete',
]);

Route::get('/reports', [
    'uses' => 'ReportController@index',
    'as' => 'reports',
]);

Route::get('/myproductsDeleteAll', [
    'uses' => 'ReportController@index',
    'as' => 'reports',
]);

Route::any('/search/books', [
    'uses' => 'BookController@search',
    'as' => 'search.books',
]);

});


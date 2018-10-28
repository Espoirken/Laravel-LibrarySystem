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
    $users = App\Category::find(1);
    
    // echo $users = App\Type::find(1)->types;

    // toastr()->success('Data has been saved successfully!');
    // return view('welcome');
    foreach ($users->books as $user) {
        echo $user;
    }

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [
    'uses' => 'HomeController@index',
    'as' => 'dashboard',
]);

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

// Route::get('/categories', [
//     'uses' => 'CategoryController@index',
//     'as' => 'categories',
// ]);

// Route::get('/categories/create', [
//     'uses' => 'CategoryController@create',
//     'as' => 'categories.create',
// ]);

// Route::post('/categories/store', [
//     'uses' => 'CategoryController@store',
//     'as' => 'categories.store',
// ]);

// Route::get('/categories/edit/{id}', [
//     'uses' => 'CategoryController@edit',
//     'as' => 'categories.edit',
// ]);

// Route::post('/categories/update/{id}', [
//     'uses' => 'CategoryController@update',
//     'as' => 'categories.update',
// ]);

// Route::get('/categories/delete/{id}', [
//     'uses' => 'CategoryController@destroy',
//     'as' => 'categories.delete',
// ]);

// Route::get('/users', [
//     'uses' => 'UserController@index',
//     'as' => 'users',
// ]);

// Route::get('/users/create', [
//     'uses' => 'UserController@create',
//     'as' => 'users.create',
// ]);

// Route::post('/users/store', [
//     'uses' => 'UserController@store',
//     'as' => 'users.store',
// ]);

// Route::get('/users/edit/{id}', [
//     'uses' => 'UserController@edit',
//     'as' => 'users.edit',
// ]);

// Route::post('/users/update/{id}', [
//     'uses' => 'UserController@update',
//     'as' => 'users.update',
// ]);

// Route::get('/users/delete/{id}', [
//     'uses' => 'UserController@destroy',
//     'as' => 'users.delete',
// ]);

Route::resource('categories', 'CategoryController');

Route::get('/categories/delete/{id}', [
    'uses' => 'CategoryController@destroy',
    'as' => 'categories.delete',
]);


Route::resource('users', 'UserController');

Route::get('/users/delete/{id}', [
    'uses' => 'UserController@destroy',
    'as' => 'users.delete',
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

Route::get('/reports', [
    'uses' => 'ReportController@index',
    'as' => 'reports',
]);

Route::get('/myproductsDeleteAll', [
    'uses' => 'ReportController@index',
    'as' => 'reports',
]);



Route::get('/results', function(){
    if (App\Post::first()) {    
    $posts = App\Post::where('book_title', 'like', '%' . request('query') . '%')->get();
    return view('results')->with('posts', $posts);
    }
    else{
        toastr()->error('No results found!');
        return redirect('/');
    }
    
});

Auth::routes();


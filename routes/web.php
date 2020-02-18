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

Route::get('/', function () {

// $user=\App\User::first();
 
// $user->roles()->sync([
//     1=>[
//         'name'=>'victor'
//     ]
// ]);
// dd($user->roles()->first()->pivot->name);
//     return view('welcome');

    // $role = \App\Role::find(4);
    // $role->users()->sync([5]);

});

Route::resource('products','ProductController');
Route::resource('productCategory','ProductCategoryController');
Route::resource('users', 'UserController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {

    $articles = \App\Article::all();

    // return view('articles', $articles);
    return View::make('articles')->with('articles',$articles);
});
Route::get('/profile/{username}', function ($username) {
    $user = App\User::where('name',$username)->firstOrFail();
    // dd($user->roles);
    return View::make('profile')->with('user',$user);
});

Route::get('/posts/country/{countryId}', function ($countryId) {
    $country= App\Country::findOrFail($countryId);
    return View::make('country_posts')->with('country',$country);
});

Route::get('/user','UserController@index')->name('user');
Route::get('/role','RoleController@index')->name('role');
Route::get('/flights', 'FlightController@index')->name('flights.index');
Route::get('/categories', 'ProductController@category')->name('product.categories' );


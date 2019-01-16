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

//public route for home page
Route::get('/', 'HomeController@homeIndex')->name('welcome');

// authorization routes
Auth::routes();

//public route for home page
Route::get('/home', 'HomeController@index')->name('home');


//public route for posts aka blog.

Route::get('/post/{id}',['as'=>'home.post','uses'=>'AdminPostsController@post']);

//public route for single post

Route::get('/posts',['as'=>'home.posts','uses'=>'AdminPostsController@allPosts']);


//Routes only accessible to admins, you need to have admin role and be active
Route::group(['middleware'=>'admin'],function(){

    Route::get('/admin',['as'=>'admin.index','uses'=>'AdminUsersController@adminDash']);

    Route::resource('admin/users','AdminUsersController');

    Route::resource('admin/posts','AdminPostsController');

    Route::resource('admin/categories','AdminCategoriesController');

    Route::resource('admin/media','AdminMediaController');

    Route::resource('admin/comments','PostCommentsController');

    Route::resource('admin/comment/replies','CommentRepliesController');

});

//Routes available to authorized users,admins,authors,etc...
Route::group(['middleware'=>'auth'],function(){

    Route::post('comment/reply','CommentRepliesController@createReply');

    Route::post('comment/replies','PostCommentsController@createComment');

});


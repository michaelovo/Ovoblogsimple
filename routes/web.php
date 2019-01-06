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
    return view('landing');

});
route::get('/admin',function(){
  return view('auth.login');
});

route::get('landing','PagesController@landing');
route::get('post','PagesController@post');
route::get('blog','PagesController@blog');
route::get('about','PagesController@about');
route::get('faceb','PagesController@faceb');
route::get('contactus','PagesController@contactus');

route::get('index','AdminController@index');
route::get('pagecreator','AdminController@pagecreator');
//route::get('welcome','AdminController@welcome');

route::get('all_blogs','Ovoblogsimple@Allblogs');
route::get('edit_blog/{id}','Ovoblogsimple@editblog');
route::post('updateblog/{id}','Ovoblogsimple@updateblog');
route::get('view_blog/{id}','Ovoblogsimple@viewblog');
route::get('delete_blog/{id}','Ovoblogsimple@deleteblog');


route::post('createblog','Ovoblogsimple@createblog');
route::get('pagecreator','Ovoblogsimple@pagecreator');
//route::get('all_blogs','AdminController@Allblogs');//->name('all_blogs');


//route::resource('post','SharedController');
route::post('insertcomment','Ovoblogsimple@insertcomment');
route::get('post','Ovoblogsimple@post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homeauth', 'HomeController@homeauth')->name('homeauth');

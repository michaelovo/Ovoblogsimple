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
    return view('index');

});
route::get('/admin',function(){
  return view('admin.index');
});

route::get('home','PagesController@home');
route::get('post','PagesController@post');
route::get('blog','PagesController@blog');
route::get('about','PagesController@about');
route::get('faceb','PagesController@faceb');
route::get('contactus','PagesController@contactus');
route::get('index','AdminController@index');
route::get('pagecreator','AdminController@pagecreator');
route::get('all_blogs','Ovoblogsimple@Allblogs');
route::get('all_blogs','AdminController@Allblogs');//->name('all_blogs');


//route::resource('post','SharedController');
route::post('insertcomment','Ovoblogsimple@insertcomment');
route::get('post','Ovoblogsimple@post');

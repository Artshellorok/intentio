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
use \App\Category;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('welcome');
});
Route::get('/categories', function(){
    $categories = Category::all();
    return view('categories', compact('categories'));
});
Route::get('/projects', function(){
    return view('projects');
});
Route::get('/project', function(){
    return view('project');
});
Route::get('/project_create', function(){
    return view('create_project');
});
Route::get('/scientist_reg', function(){
    return view('register_scientists');
});
Route::get('/business_reg', function(){
    return view('register_business');
});
Route::get('/login_scientists', function(){
    return view('login_scientists');
});
Route::get('/login_business', function(){
    return view('login_business');
});
Route::get('/type_login', function(){
    return view('type_login');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/chat', function(){
    return view('chat');
});
Route::get('/category/{category}', function($category){
    if (Category::find($category)) {
        session(['category' => $category]);
        if (request('type') == 'business') {
            return redirect('/business_reg');
        }
        if (request('type') == 'scientist') {
            return redirect('/scientist_reg');
        }
    }
});
Route::post('/business_reg', 'AdminController@register');
Route::post('/scientist_reg', 'UserController@register');
Route::post('/login_scientists', 'UserController@login');
Route::post('/login_business', 'AdminController@login');
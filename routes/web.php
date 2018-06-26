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

Route::get('/',['as'=>'home' ,'uses'=>'FrontendController@getHome']);
Route::group(['prefix'=>''],function (){
    Route::get('product/{id}/',['as'=>'product','uses'=>'FrontendController@getProduct']);
    Route::get('detail/{id}',['as'=>'product.detail','uses'=>'FrontendController@getDetail']);
    Route::get('search',['as'=>'search','uses'=>'FrontendController@getSearch']);
    Route::get('login',['as'=>'login','uses'=>'FrontendController@getLogin']);
    Route::post('login',['as'=>'login','uses'=>'FrontendController@postLogin']);
    Route::get('logout',['as'=>'logout','uses'=>'FrontendController@getLogout']);
    Route::get('dangky',['as'=>'dangky','uses'=>'FrontendController@getDangKy']);
    Route::post('dangky',['as'=>'user.dangky','uses'=>'FrontendController@postDangKy']);
    Route::get('cart',['as'=>'cart','uses'=>'FrontendController@getCart']);
});
Route::group(['prefix'=>'cart'],function (){
    Route::get('add/{id}/',['as'=>'cart.add','uses'=>'CartController@getAddCart']);
    Route::get('show',['as'=>'cart.show','uses'=>'CartController@getShowCart']);
    Route::post('delete/{id}/',['as'=>'cart.delete','uses'=>'CartController@getDeleteCart']);
    Route::get('update',['as'=>'update.cart','uses'=>'CartController@getUpdateCart']);
    Route::post('show',['as'=>'show.complete','uses'=>'CartController@postComplete']);
});

Route::get('complete','CartController@getComplete');

Route::get('admin',['as'=>'admin.login','uses'=>'AdminController@showLogin']);
Route::post('admin',['as'=>'admin.postLogin','uses'=>'AdminController@postLogin']);
Route::get('admin/logout',['as'=>'admin.logout','uses'=>'AdminController@getLogout']);
Route::group(['prefix'=>'admin'],function (){
    Route::group(['prefix'=>'category'],function (){
        Route::get('list',['as'=>'admin.category.list','uses'=>'CategoryController@getList'])->middleware('admin.auth');
        Route::get('add',['as'=>'admin.category.getAdd','uses'=>'CategoryController@getAdd'])->middleware('admin.auth');
        Route::post('add',['as'=>'admin.category.postAdd','uses'=>'CategoryController@postAdd'])->middleware('admin.auth');
        Route::get('delete/{id}',['as'=>'admin.category.getDelete','uses'=>'CategoryController@getDelete'])->middleware('admin.auth');
        Route::get('edit/{id}',['as'=>'admin.category.getEdit','uses'=>'CategoryController@getEdit'])->middleware('admin.auth');
        Route::post('edit/{id}',['as'=>'admin.category.postEdit','uses'=>'CategoryController@postEdit'])->middleware('admin.auth');
        Route::post('search',['as'=>'admin.category.postSearch','uses'=>'CategoryController@postSearch'])->middleware('admin.auth');
    });
    Route::group(['prefix'=>'hang'],function (){
       Route::get('list',['as'=>'admin.hang.list','uses'=>'HangController@getList'])->middleware('admin.auth');
       Route::get('add',['as'=>'admin.hang.getAdd','uses'=>'HangController@getAdd'])->middleware('admin.auth');
       Route::post('add',['as'=>'admin.hang.postAdd','uses'=>'HangController@postAdd'])->middleware('admin.auth');
       Route::get('delete/{id}',['as'=>'admin.hang.getDelete','uses'=>'HangController@getDelete'])->middleware('admin.auth');
       Route::get('edit/{id}',['as'=>'admin.hang.getEdit','uses'=>'HangController@getEdit'])->middleware('admin.auth');
       Route::post('edit/{id}',['as'=>'admin.hang.postEdit','uses'=>'HangController@postEdit'])->middleware('admin.auth');
       Route::post('search',['as'=>'admin.hang.postSearch','uses'=>'HangController@postSearch'])->middleware('admin.auth');
    });
    Route::group(['prefix'=>'ktmh'],function (){
        Route::get('list',['as'=>'admin.ktmh.list','uses'=>'KtmhController@getList'])->middleware('admin.auth');
        Route::get('add',['as'=>'admin.ktmh.getAdd','uses'=>'KtmhController@getAdd'])->middleware('admin.auth');
        Route::post('add',['as'=>'admin.ktmh.postAdd','uses'=>'KtmhController@postAdd'])->middleware('admin.auth');
        Route::get('delete/{id}',['as'=>'admin.ktmh.getDelete','uses'=>'KtmhController@getDelete'])->middleware('admin.auth');
        Route::get('edit/{id}',['as'=>'admin.ktmh.getEdit','uses'=>'KtmhController@getEdit'])->middleware('admin.auth');
        Route::post('edit/{id}',['as'=>'admin.ktmh.postEdit','uses'=>'KtmhController@postEdit'])->middleware('admin.auth');
        Route::post('search',['as'=>'admin.ktmh.postSearch','uses'=>'KtmhController@postSearch'])->middleware('admin.auth');
    });

    Route::group(['prefix'=>'loaitivi'],function (){
        Route::get('list',['as'=>'admin.loaitivi.list','uses'=>'LoaitiviController@getList'])->middleware('admin.auth');
        Route::get('add',['as'=>'admin.loaitivi.getAdd','uses'=>'LoaitiviController@getAdd'])->middleware('admin.auth');
        Route::post('add',['as'=>'admin.loaitivi.postAdd','uses'=>'LoaitiviController@postAdd'])->middleware('admin.auth');
        Route::get('delete/{id}',['as'=>'admin.loaitivi.getDelete','uses'=>'LoaitiviController@getDelete'])->middleware('admin.auth');
        Route::get('edit/{id}',['as'=>'admin.loaitivi.getEdit','uses'=>'LoaitiviController@getEdit'])->middleware('admin.auth');
        Route::post('edit/{id}',['as'=>'admin.loaitivi.postEdit','uses'=>'LoaitiviController@postEdit'])->middleware('admin.auth');
        Route::post('search',['as'=>'admin.loaitivi.postSearch','uses'=>'LoaitiviController@postSearch'])->middleware('admin.auth');
    });

    Route::group(['prefix'=>'dophangiai'],function (){
        Route::get('list',['as'=>'admin.dophangiai.list','uses'=>'DophangiaiController@getList'])->middleware('admin.auth');
        Route::get('add',['as'=>'admin.dophangiai.getAdd','uses'=>'DophangiaiController@getAdd'])->middleware('admin.auth');
        Route::post('add',['as'=>'admin.dophangiai.postAdd','uses'=>'DophangiaiController@postAdd'])->middleware('admin.auth');
        Route::get('delete/{id}',['as'=>'admin.dophangiai.getDelete','uses'=>'DophangiaiController@getDelete'])->middleware('admin.auth');
        Route::get('edit/{id}',['as'=>'admin.dophangiai.getEdit','uses'=>'DophangiaiController@getEdit'])->middleware('admin.auth');
        Route::post('edit/{id}',['as'=>'admin.dophangiai.postEdit','uses'=>'DophangiaiController@postEdit'])->middleware('admin.auth');
        Route::post('search',['as'=>'admin.dophangiai.postSearch','uses'=>'DophangiaiController@postSearch'])->middleware('admin.auth');
    });
    Route::group(['prefix'=>'product'],function (){
        Route::get('list',['as'=>'admin.product.list','uses'=>'ProductController@getList'])->middleware('admin.auth');
        Route::get('add',['as'=>'admin.product.getAdd','uses'=>'ProductController@getAdd'])->middleware('admin.auth');
        Route::post('add',['as'=>'admin.product.postAdd','uses'=>'ProductController@postAdd'])->middleware('admin.auth');
        Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'ProductController@getDelete'])->middleware('admin.auth');
        Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit'])->middleware('admin.auth');
        Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit'])->middleware('admin.auth');
        Route::post('search',['as'=>'admin.product.postSearch','uses'=>'ProductController@postSearch'])->middleware('admin.auth');
    });
    Route::group(['prefix'=>'quanli'],function (){
        Route::get('list',['as'=>'admin.quanli.list','uses'=>'AdminController@getList'])->middleware('admin.auth');
        Route::get('add',['as'=>'admin.quanli.getAdd','uses'=>'AdminController@getAdd'])->middleware('admin.auth');
        Route::post('add',['as'=>'admin.quanli.postAdd','uses'=>'AdminController@postAdd']);
        Route::get('delete/{id}',['as'=>'admin.quanli.getDelete','uses'=>'AdminController@getDelete'])->middleware('admin.auth');
        Route::get('edit/{id}',['as'=>'admin.quanli.getEdit','uses'=>'AdminController@getEdit'])->middleware('admin.auth');
        Route::post('edit/{id}',['as'=>'admin.quanli.postEdit','uses'=>'AdminController@postEdit'])->middleware('admin.auth');
        Route::post('search',['as'=>'admin.quanli.postSearch','uses'=>'AdminController@postSearch'])->middleware('admin.auth');
    });
    Route::group(['prefix'=>'users'],function (){
        Route::get('list',['as'=>'admin.users.list','uses'=>'UsersController@getList'])->middleware('admin.auth');
        Route::get('add',['as'=>'admin.users.getAdd','uses'=>'UsersController@getAdd'])->middleware('admin.auth');
        Route::post('add',['as'=>'admin.users.postAdd','uses'=>'UsersController@postAdd'])->middleware('admin.auth');
        Route::get('delete/{id}',['as'=>'admin.users.getDelete','uses'=>'UsersController@getDelete'])->middleware('admin.auth');
        Route::get('edit/{id}',['as'=>'admin.users.getEdit','uses'=>'UsersController@getEdit'])->middleware('admin.auth');
        Route::post('edit/{id}',['as'=>'admin.users.postEdit','uses'=>'UsersController@postEdit'])->middleware('admin.auth');
        Route::post('search',['as'=>'admin.users.postSearch','uses'=>'UsersController@postSearch'])->middleware('admin.auth');
    });
});
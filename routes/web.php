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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('past_event', 'EventController@pastevent');

Route::post('past_event/{manifestation}', [
    'uses' => 'EventController@uploadImage',
    'as' => 'upload',
]);

Route::get('past_event/report/{image}', [
    'uses' => 'EventController@getReportImage',
    'as' => 'reportimage',
]);

Route::get('past_event/like/{image}', [
    'uses' => 'EventController@getLike',
    'as' => 'userlike',
]);

Route::get('past_event/delete/{image}/{comment}', [
    'uses' => 'EventController@getRemoveImageByIdea',
    'as' => 'AdmindeleteImg',
]);

Route::get('past_event/commentreport/{comment}', [
    'uses' => 'EventController@getReportComment',
    'as' => 'reportcomment',

]);

Route::post('past_event/com/{image}', [
    'uses' => 'EventController@uploadCom',
    'as' => 'uploadcom',
]);

Route::get('shop', 'ProductController@getIndex');

Route::post('idea_box', 'Idea_BoxController@store');

Route::get('idea_box', [
    'uses' => 'Idea_BoxController@index',
    'as' => 'idea.index',
]);
Route::get('idea_remove/{id}', [
    'uses' => 'Idea_BoxController@getRemoveIdea',
    'as' => 'idea.remove',
]);

Route::get('idea_vote/{suggestion}', [
    'uses' => 'Idea_BoxController@getVote',
    'as' => 'idea.vote',
]);

Route::get('/', function () {
    return view('home');
});

Route::get('/reduce/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne',
]);

Route::get('/remove/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove',
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart',
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart',
])->middleware('auth');

Route::get('/shop', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.shop',
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
])->middleware('auth');

Route::get('legal_notice', "Legal_NoticeController@index");

Route::get('cgv', "CgvController@index");

Route::get('cgu', "CguController@index");

Route::get('/logged', 'HomeController@index');

Route::get('event', 'EventController@futurevent');

Route::get('event/{manifestation}', [
    'uses' => 'EventController@getUserInscribe',
    'as' => 'user.inscribe',
]);

Route::get('send', 'MailController@send');

Route::get('report',  [
    'uses' => 'PagesController@report',
    'as' => 'report'
]);

Route::get('order', 'PagesController@order');
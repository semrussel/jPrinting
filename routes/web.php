<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/services', 'ServicesController@index');
Route::get('/services-calendars', 'ServicesController@callCalendars');
Route::get('/services-stickers', 'ServicesController@callStickers');
Route::get('/services-invitations', 'ServicesController@callInvitations');
Route::get('/services-newsletters', 'ServicesController@callNewsletters');
Route::get('/services-books', 'ServicesController@callBooks');
Route::get('/services-yearbooks', 'ServicesController@callYearbooks');
Route::get('/services-business-cards', 'ServicesController@callBusinesscards');
Route::get('/services-gift-wrappers', 'ServicesController@callGiftwrappers');
Route::get('/services-souvenir-programs', 'ServicesController@callSouvenirPrograms');
Route::get('/services-paper-bags', 'ServicesController@callPaperBags');
Route::get('/services-bag-tags', 'ServicesController@callBagtags');
Route::get('/services-corporate-folders', 'ServicesController@callCorporateFolders');
Route::get('/services-tickets', 'ServicesController@callTickets');
Route::get('/services-posters', 'ServicesController@callPosters');
Route::get('/services-office-forms', 'ServicesController@callOfficeforms');
Route::get('/services-certificates', 'ServicesController@callCertificates');
Route::get('/services-boxes', 'ServicesController@callBoxes');
Route::get('/services-receipts', 'ServicesController@callReceipts');
Route::get('/services-notebooks', 'ServicesController@callNotebooks');
Route::get('/services-flyers-brochures', 'ServicesController@callFlyersbrochures');

Route::get('/admin', 'AdminController@index');
Route::get('/admin-dash', 'AdminController@adminDash');
Route::post('/admin-login', 'AdminController@login');

Route::get('/request-quote', 'QuoteController@index');
Route::post('/create-request', 'QuoteController@create');



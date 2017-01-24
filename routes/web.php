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

Route::get('/login', 'HomeController@Login');

Route::get('/profile', 'UserController@Profile');

Route::get('/services', 'ServicesController@index');

Route::get('/services-calendars-poster', 'ServicesController@callCalendarsPoster');
Route::get('/services-calendars-monthly', 'ServicesController@callCalendarsMonthly');
Route::get('/services-calendars-table', 'ServicesController@callCalendarsTable');
// --->
Route::get('/services-stickers-round', 'ServicesController@callStickersRound');
Route::get('/services-stickers-square', 'ServicesController@callStickersSquare');
Route::get('/services-stickers-rectangle', 'ServicesController@callStickersRectangle');
// --->
Route::get('/services-invitations', 'ServicesController@callInvitations');
Route::get('/services-newsletters', 'ServicesController@callNewsletters');
Route::get('/services-books', 'ServicesController@callBooks');
Route::get('/services-yearbooks', 'ServicesController@callYearbooks');
// --->
Route::get('/services-business-cards-1side', 'ServicesController@callBusinesscards1Side');
Route::get('/services-business-cards-2side', 'ServicesController@callBusinesscards2Side');
// --->
Route::get('/services-gift-wrappers', 'ServicesController@callGiftwrappers');
Route::get('/services-souvenir-programs', 'ServicesController@callSouvenirPrograms');
Route::get('/services-paper-bags', 'ServicesController@callPaperBags');
Route::get('/services-bag-tags', 'ServicesController@callBagtags');
Route::get('/services-corporate-folders', 'ServicesController@callCorporateFolders');
// --->
Route::get('/services-tickets-1side', 'ServicesController@callTickets1Side');
Route::get('/services-tickets-2side', 'ServicesController@callTickets2Side');
// --->
Route::get('/services-posters', 'ServicesController@callPosters');
Route::get('/services-office-forms', 'ServicesController@callOfficeforms');
Route::get('/services-certificates', 'ServicesController@callCertificates');
Route::get('/services-boxes', 'ServicesController@callBoxes');
// --->
Route::get('/services-receipts-carbon', 'ServicesController@callReceiptsCarbon');
Route::get('/services-receipts-carbonless', 'ServicesController@callReceiptsCarbonless');
// --->
Route::get('/services-notebooks-wire-soft', 'ServicesController@callNotebooksWireSoft');
Route::get('/services-notebooks-wire-hard', 'ServicesController@callNotebooksWireHard');
Route::get('/services-notebooks-perfect-soft', 'ServicesController@callNotebooksPerfectSoft');
Route::get('/services-notebooks-perfect-hard', 'ServicesController@callNotebooksPerfectHard');
// --->
Route::get('/services-flyers-1side', 'ServicesController@callFlyers1Side');
Route::get('/services-flyers-2side', 'ServicesController@callFlyers2Side');
Route::get('/services-brochures-bifold', 'ServicesController@callBrochuresBifold');
Route::get('/services-brochures-trifold', 'ServicesController@callBrochuresTrifold');
Route::get('/services-brochures-quadfold', 'ServicesController@callBrochuresQuadfold');

Route::get('/admin', 'AdminController@index');
Route::get('/admin-dash', 'AdminController@adminDash');
Route::get('/admin-orders', 'AdminController@adminOrders');
Route::get('/admin-orders-view/{id}', 'AdminController@adminOrdersView'); //order-view
Route::get('/admin-request-quotes', 'AdminController@adminRequestQuotes');
Route::post('/admin-login', 'AdminController@login');

Route::get('/request-quote', 'QuoteController@index');
Route::post('/create-request', 'QuoteController@create');

Route::post('/create-order', 'OrderController@create');
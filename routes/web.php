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
   // return view('welcome');

   $isRegistered = 'notsuccess';
   return view('pages.index')->with('isRegistered',$isRegistered);
});



Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/why', function () {
    return view('pages.why');
});



Route::get('/mission', function () {
    return view('pages.mission');
});


Route::get('/banking', function () {
    return view('pages.banking');
});



Route::get('/csp', function () {
    return view('pages.csp');
});



Route::get('/moneytransfer', function () {
    return view('pages.moneytransfer');
});



Route::get('/utilitypayments', function () {
    return view('pages.utilitypayments');
});

Route::get('/jan', function () {
    return view('pages.jan');
});


Route::get('/alt', function () {
    return view('pages.alt');
});



Route::get('/bima', function () {
    return view('pages.bima');
});



//Route::get('/apply', 'RegisterController@register');
Route::resource('/apply', 'ApplicantController');                  


Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/status', function () {
    return view('pages.status');
});





//Authentication Routes
Auth::routes();

//Users Auth Routes
//Route::get('users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
//Route::get('/login', 'Auth\LoginController@login')->name('user.login');
Route::get('/home/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/home', 'HomeController@index')->name('home');

//Admin Auth routes
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');
Route::get('/admin/applicant/{userid}', 'AdminController@show');
Route::get('/admin/regusers', 'AdminController@get_all_registered_users');
Route::get('/admin/regusers/{userid}', 'AdminController@get_register_user_by_id');
Route::put('/admin/regusers/update/{id}', 'AdminController@update_user_data');
//Route::post('/admin/regusers/sendmail/{id}', 'AdminController@send_email');
Route::post('/admin/regusers/sendmail/{id}', function(Illuminate\Http\Request $request,\Illuminate\Mail\Mailer $mailer){

    $mailer
    ->to($request->input('email'))
    ->send(new \App\Mail\MyMail($request->input('title'),$request->input('userid'),$request->input('userpassword')));

    return redirect()->back();
});

//Admin Password Reset Routes
Route::post('admin/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password/reset',  'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin/password/reset', 'Auth\AdminResetPasswordController@reset');
Route::get('admin/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

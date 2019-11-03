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
    return view('home2');
});

Route::resource('/jobs', 'JobController');
Route::get('/jobdetails/{id}', 'JobController@jobdetails')->name('jobdetails');

Route::get('/createjob', 'JobController@create')->name('createjob')->middleware('auth');


Route::resource('/jobcategory', 'JobCategoryController');


Route::resource('/company', 'CompanyController');

Route::resource('/jobseeker', 'JobSeekerController');


Route::resource('/book', 'BookController');

Route::resource('/scholarship', 'ScholarshipController');

Route::resource('/rfp', 'RfpController');

Route::resource('/blog', 'NewsController');

Route::resource('/bookcategory', 'BookCategoryController');








Route::get('/companyprofile', 'CompanyController@companyprofile')->name('companyprofile');

Route::post('/jobseekerprofile', 'JobSeekerController@jobseekerprofile')->name('jobseekerprofile');
Route::post('/jobseekerchangepic', 'JobSeekerController@jobseekerchangepic')->name('jobseekerchangepic');
Route::get('/companyalljobs/{id}', 'JobController@companyalljobs')->name('companyalljobs');






Route::get('/company/verify/{token}', 'CompanyController@varifycompany');

Route::get('/ccompletion/{id}', 'CompanyController@ccompletion')->name('ccompletion');
Route::get('/jobapplication/{id}', 'JobSeekerController@jobapplication');
Route::post('/jobapplicationsend', 'JobSeekerController@jobapplicationsend')->name('jobapplicationsend');

Route::get('/admin', 'AdminController@login')->name('admin');

Route::get('/privacypolicy', 'HomeController@privacypolicy')->name('privacypolicy');
Route::get('/about', 'HomeController@about')->name('about');








Route::get('/lang/{lang}', 'LocalizationController@index')->name('lang');

Route::post('/subscription', 'SubscriptionController@store')->name('subscription');

Route::post('/scholarshipoutside', 'ScholarshipController@scholarshipoutside')->name('scholarshipoutside');

Route::get('/adminpanel', 'AdminController@adminpanel')->name('adminpanel');
Route::post('/adminedit', 'AdminController@adminedit')->name('adminedit');







Route::post('/deletejobcategory', 'JobCategoryController@deletejobcategory');
Route::post('/deletebookcategory', 'BookCategoryController@deletebookcategory');
Route::post('/deletesubscriber', 'SubscriptionController@deletesubscriber');
Route::post('/deletescholarship', 'ScholarshipController@deletescholarship');
Route::post('/deleteuser', 'JobSeekerController@deleteuser');
Route::post('/deleterfp', 'RfpController@deleterfp');
Route::post('/deletebook', 'BookController@deletebook');
Route::post('/deletenews', 'NewsController@deletenews');
Route::post('/deletecompany', 'CompanyController@deletecompany');
Route::post('/deleteadmin', 'AdminController@deleteadmin');
Route::post('/editjobs', 'JobController@editjobs')->name('editjobs');


Route::post('/editpost', 'NewsController@editpost')->name('editpost');






Auth::routes(['password.request' => false, 'password.email' => false]);
Route::get('/forcelogout', '\App\Http\Controllers\Auth\LoginController@logout')->name('forcelogout');

Route::get('/home', 'HomeController@index')->name('home2');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/home2', function () {
    return view('home2');
})->name('home2');


Route::post('/companyeditdata', 'CompanyController@companyeditdata');
Route::post('/jobseekerinfoupdate', 'JobSeekerController@jobseekerinfoupdate')->name('jobseekerinfoupdate');

Route::post('/downloadfile', 'JobController@downloadfile')->name('downloadfile');
Route::get('/downloadbook/{id}', 'BookController@downloadbook')->name('downloadbook');

Route::post('/changecompanypassword', 'CompanyController@changecompanypassword')->name('changecompanypassword');

Route::post('/changeseekerpassword', 'JobSeekerController@changeseekerpassword')->name('changeseekerpassword');
Route::post('/changeadminpassword', 'AdminController@changeadminpassword')->name('changeadminpassword');

Route::post('/companyprofilejobeditingsubmit', 'JobController@companyprofilejobeditingsubmit')->name('companyprofilejobeditingsubmit');
Route::post('/deletejob', 'JobController@deletejob')->name('deletejob');
Route::post('/deactivatejob', 'JobController@deactivatejob')->name('deactivatejob');


Route::post('/searchrfp', 'RfpController@searchrfp')->name('searchrfp');

Route::post('/searchjob', 'JobController@searchjob')->name('searchjob');

Route::post('/searchscholarship', 'ScholarshipController@searchscholarship')->name('searchscholarship');

Route::post('/searchbook', 'BookController@searchbook')->name('searchbook');










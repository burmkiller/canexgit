<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/social-media', 'HomeController@social_media')->name('user.social-media');
Route::get('/media', 'HomeController@media')->name('user.media');
Route::view('/account-settings',"account-settings");
Route::post("/update-account","HomeController@update_account")->name("user.update-account");


Route::put('/home', 'HomeController@profile_update')->name('home.profile.update');
Route::put('/social-media', 'HomeController@social_media_update')->name('home.social-media.update');
Route::put('/media', 'HomeController@media_update')->name('home.media.update');


Route::post('/company-contact/{company_email}', 'NavigationController@company_contact')->name('company-contact');


Route::post("info-letter","NavigationController@infoLetter")->name("info-letter");
Route::get("page/{page}","NavigationController@getView");
Route::get("/lang/{lang}","NavigationController@change_lang");
Route::post("register-user","NavigationController@register")->name("user.register");
Route::delete("register_back/{id}","NavigationController@register_back")->name("register.back");
Route::post("register-revive","PaymentController@create")->name("user.register-revive");
Route::post("contact","ContactController@contact")->name("contact-us");

Route::get("category/{slug}","NavigationController@getCategoryBySlug");

Route::get("profile/{id}","NavigationController@getProfile");

Route::get("event/{id}","NavigationController@getEvent");
Route::view("inquiries-to-bay","inquiries-to-bay");

Route::post("comment","NavigationController@sendAndStoreComment")->name("comment");
Route::post("inquire-mail","NavigationController@inquire_send")->name("inquire-mail");




//**********************paypal payment route ****************************/
Route::post("create-payment","PaymentController@create")->name("create-payment");
Route::get("execute-payment","PaymentController@execute")->name("execute-payment");
Route::get("cancel-payment","PaymentController@cancel");




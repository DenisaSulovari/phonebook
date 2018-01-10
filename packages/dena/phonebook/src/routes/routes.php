<?php

Route::group(['middleware' => ['web']], function () {

});

Route::get('demo',function (){
    return "this is a demo route";
});


Route::get('/', [
    'as' => 'home',
    'uses' => 'Dena\Phonebook\PagesController@home'
]);

Route::resource('contacts', 'Dena\Phonebook\ContactsController');
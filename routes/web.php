<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
})->name('awal');

Route::get('/katalog','FrontEndController@katalog')->name('katalog');
Route::get('/detail/{id}','FrontEndController@detail')->name('detail');
Route::get('/tentang','FrontEndController@tentang')->name('tentang');
Route::get('/thanks','FrontEndController@thanks')->name('thanks');

Auth::routes();

Route::get('/logout',function() {
    Auth::logout();
    return redirect(route('login'))->with('success','Anda Berhasil Logout !');
})->name('logout');

Route::group(['middleware'=>'auth'],function (){
    Route::get('/profiles', 'HomeController@index')->name('profiles');
    Route::get('/profiles/edit/{id}', 'ProfileController@edit')->name('profiles.edit');
    Route::post('/profiles/update/{id}', 'ProfileController@update')->name('profiles.update');

    Route::get('/designs', 'ProductController@index')->name('design.index');
    Route::get('/designs/create', 'ProductController@create')->name('design.create');
    Route::post('/designs', 'ProductController@store')->name('design.store');
    Route::get('/designs/show/{id}', 'ProductController@show')->name('design.show');
    Route::get('/designs/edit/{id}', 'ProductController@edit')->name('design.edit');
    Route::post('/designs/update/{id}', 'ProductController@update')->name('design.update');

    Route::get('/approvals', 'ApprovalController@index')->name('approval.index');
    Route::get('/approvals/show/{id}', 'ApprovalController@show')->name('approval.show');
    Route::get('/approvals/terima/{id}', 'ApprovalController@terima')->name('approval.terima');
    Route::get('/approvals/tolak/{id}', 'ApprovalController@tolak')->name('approval.tolak');
    Route::get('/approvals/hapus/{id}', 'ApprovalController@hapus')->name('approval.hapus');
});


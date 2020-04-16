<?php



Route::get('/','MidtermController@index');

Route::get('users/{id}','MidtermController@show');

Route::post('store','MidtermController@store');

Route::delete('delete/{id}','MidtermController@destroy');

Route::get('edit/{id}','MidtermController@edit');

Route::put('update/{id}','MidtermController@update');
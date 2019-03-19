<?php

Route::group(['namespace' => 'Taitt\HelloWorld\Http\Controllers'], function () {
   Route::get('/hello', 'HelloWorldController@getIndex');
});
<?php
Route::post('/tasks', 'App\\Http\\Controllers\\TaskController@store')->name('tasks.store');
Route::get('/tasks', 'App\\Http\\Controllers\\TaskController@index')->name('tasks.index');
Route::get('/tasks/{id}', 'App\\Http\\Controllers\\TaskController@show')->name('tasks.show');
Route::put('/tasks/{id}', 'App\\Http\\Controllers\\TaskController@update')->name('tasks.update');
Route::delete('/tasks/{id}', 'App\\Http\\Controllers\\TaskController@delete')->name('tasks.delete');

<?php

Route::get('/', 'HomeController@index');

Route::get('resume', 'PageController@resume');

Route::get('blog', 'BlogController@index');
Route::get('blog/{post}', 'BlogController@show');

Route::get('projects', 'ProjectController@index');
Route::get('projects/{post}', 'ProjectController@show');

Route::get('contact', 'ContactController@index');
Route::post('contact', 'ContactController@send');

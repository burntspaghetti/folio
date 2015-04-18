<?php


//clean blog
Route::get('/template1', function()
{
	return View::make('test4');
});
//Route::get('/test4', 'HomeController@home');

//dashboard
Route::get('/template2', function()
{
	return View::make('test5');
});

//blog post
Route::get('/template3', function()
{
	return View::make('test6');
});

//blog home
Route::get('/template4', function()
{
	return View::make('test7');
});

//slate
Route::get('/template5', function()
{
	return View::make('test8');
});

Route::get('/template6', function()
{
	return View::make('test9');
});


Route::get('/', function()
{
	return View::make('grayscale');
});
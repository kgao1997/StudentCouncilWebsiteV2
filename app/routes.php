<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
	return View::make('main');
});
Route::get('main', function()
{
	return View::make('main');
});
Route::get('aboutUs', function()
{
	return View::make('aboutUs');
});
Route::get('news', function()
{
	return View::make('news');
});
Route::get('events', function()
{
	return View::make('events');
});
Route::get('schedule', function()
{
	return View::make('schedule');
});
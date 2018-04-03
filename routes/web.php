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

// 报告首页
Route::get('/', function () {return view('welcome');});
// 基本信息，数据的重要性，数据的来源，数据的选择，数据量
Route::get('/basic', function () {return view('basic');});
Route::get('/platform', function () {return view('platform');});
Route::get('/crawler', function () {return view('crawler');});
Route::get('/analysis', function () {return view('analysis');});
Route::get('/thanks', function () {return view('thanks');});

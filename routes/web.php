<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('welcome');
});
Route::get('/',function()
{
    return view('Home');
})->name('mainPages');
Route::get('/result',function(){
    return view('Result.Result');
})->name('results');
Route::get('/resView',function(){
    return view('Result.viewResult');
})->name('viewRes');

Route::get('/ResultVerify',function(){
    return view('Result.verifyResult');
})->name('ResVerify');

Route::get('/ResultEnter',function(){
    return view('Result.EnterScores');
})->name('EnterScores');

Route::get('/req',function(){
    return view('RequestPage.request');
})->name('request');
Route::get('/report',function(){
    return view('Reports.reportPage');
})->name('Report');

Route::get('/setting',function(){
    return view('Settings.SettingPage');
})->name('Setting');
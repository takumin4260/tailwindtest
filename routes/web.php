<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('event/create',function(){
    return view('event.create');
});

Route::get('event/edit',function(){
    return view('event.edit');
});

Route::get('event',function(){
    return view('event.index');
});

Route::get('event/dash',function(){
    return view('event.dashboard');
});

<?php

use Illuminate\Support\Facades\Route;

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

Route::get('saas',function(){
    return view('saas.dashboard');
});

Route::get('saas/persona/create',function(){
    return view('saas.persona.create');
});

Route::get('saas/persona/index',function(){
    return view('saas.persona.index');
});

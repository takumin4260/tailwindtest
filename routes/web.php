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

// SaaS Routes
Route::get('saas', function () {
    return view('saas.index');
})->name('saas.index');

Route::get('saas/dashboard', function () {
    return view('saas.dashboard');
})->name('saas.dashboard');

Route::get('saas/help', function () {
    return view('saas.help');
})->name('saas.help');

Route::get('saas/persona/create', function () {
    return view('saas.persona.create');
})->name('saas.persona.create');

Route::get('saas/persona/edit', function () {
    return view('saas.persona.edit');
})->name('saas.persona.edit');

Route::get('saas/persona', function () {
    return view('saas.persona.index');
})->name('saas.persona.index');

Route::get('saas/posting', function () {
    return view('saas.posting.index');
})->name('saas.posting.index');

Route::get('saas/posting/create', function () {
    return view('saas.posting.create');
})->name('saas.posting.create');

Route::get('saas/posting/edit', function () {
    return view('saas.posting.edit');
})->name('saas.posting.edit');

Route::get('saas/posting/beforeCreate', function () {
    return view('saas.posting.beforeCreate');
})->name('saas.posting.beforeCreate');

Route::get('saas/applier/detail', function () {
    return view('saas.applier.detail');
})->name('saas.applier.detail');

Route::get('saas/applier/action', function () {
    return view('saas.applier.action');
})->name('saas.applier.action');

Route::get('saas/applier/actionAfter', function () {
    return view('saas.applier.actionAfter');
})->name('saas.applier.actionAfter');

Route::get('saas/applier/', function () {
    return view('saas.applier.index');
})->name('saas.applier.index');







//ユーザー画面
Route::get('stapedia',function(){ return view('stapedia.user.dashboard'); });
Route::get('stapedia/create',function(){return view('stapedia.user.create');});
Route::get('stapedia/textbook',function(){return view('stapedia.user.textbook.index');});
Route::get('stapedia/textbook/detail',function(){return view('stapedia.user.textbook.detail');});
Route::get('stapedia/report',function(){return view('stapedia.user.report.index');});
Route::get('stapedia/report/view',function(){return view('stapedia.user.report.view');});
Route::get('stapedia/plan',function(){return view('stapedia.user.plan');});

//管理画面
Route::get('stapedia/admin/student',function(){return view('stapedia.admin.student.index');});
Route::get('stapedia/admin/student/create',function(){return view('stapedia.admin.student.create');});
Route::get('stapedia/admin/teacher',function(){return view('stapedia.admin.teacher.index');});
Route::get('stapedia/admin/teacher/create',function(){return view('stapedia.admin.teacher.create');});
Route::get('stapedia/admin/textbook',function(){return view('stapedia.admin.textbook.index');});
Route::get('stapedia/admin/textbook/create',function(){return view('stapedia.admin.textbook.create');});
Route::get('stapedia/admin/person/',function(){return view('stapedia.admin.person.dashboard');});
Route::get('stapedia/admin/person/todo',function(){return view('stapedia.admin.person.todo.index');});
Route::get('stapedia/admin/person/todo/create',function(){return view('stapedia.admin.person.todo.create');});
Route::get('stapedia/admin/person/mtg',function(){return view('stapedia.admin.person.mtg.index');});
Route::get('stapedia/admin/person/mtg/create',function(){return view('stapedia.admin.person.mtg.create');});
Route::get('stapedia/admin/person/exam',function(){return view('stapedia.admin.person.exam.index');});
Route::get('stapedia/admin/person/exam/create',function(){return view('stapedia.admin.person.exam.create');});
Route::get('stapedia/admin/person/textbook',function(){return view('stapedia.admin.person.textbook.index');});
Route::get('stapedia/admin/person/textbook/detail',function(){return view('stapedia.admin.person.textbook.detail');});
Route::get('stapedia/admin/person/textbook/create',function(){return view('stapedia.admin.person.textbook.create');});
Route::get('stapedia/admin/person/report',function(){return view('stapedia.admin.person.report.index');});
Route::get('stapedia/admin/person/report/create',function(){return view('stapedia.admin.person.report.create');});
Route::get('stapedia/admin/person/process',function(){return view('stapedia.admin.person.process.index');});

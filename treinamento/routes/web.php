<?php

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', function () {
    return view('templates.home');
});


Route::get('/funcionario', function () {
    return view('admin.addemployee');
});
Route::get('/desempenho_funcionario', function () {
    return view('admin.employeedevelopment');
});
Route::get('/treinamento', function () {
    return view('admin.addtraining');
});
Route::get('/teste', function () {
    return view('admin.addtest');
});


/*
Route::get('/informacao', function () {
    return view('employee.employee');
});
Route::get('/desempenho', function () {
    return view('employee.development');
});
Route::get('/treinamento', function () {
    return view('employee.training');
});
Route::get('/teste', function () {
    return view('employee.test');
});
*/
<?php

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', function () {
    return view('templates.home');
});

//Fronts ADM
//Funcionário
Route::get('/funcionario', function () {
    return view('admin.employee');
});
Route::get('/cadastrar_funcionario', function () {
    return view('admin.registrations.registeremployee');
});
Route::get('/alterar_funcionario', function () {
    return view('admin.changes.changeemployee');
});

//Desempenho
Route::get('/desempenho_funcionario', function () {
    return view('admin.employeedevelopment');
});

//Treinamento
Route::get('/treinamento', function () {
    return view('admin.training');
});
Route::get('/cadastrar_treinamento', function () {
    return view('admin.registrations.registertraining');
});
Route::get('/alterar_treinamento', function () {
    return view('admin.changes.changetraining');
});

//Teste
Route::get('/teste', function () {
    return view('admin.test');
});
Route::get('/cadastrar_teste', function () {
    return view('admin.registrations.registertest');
});
Route::get('/alterar_teste', function () {
    return view('admin.changes.changetest');
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
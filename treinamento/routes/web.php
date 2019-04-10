<?php


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/adm', 'Administrator@admPainel');
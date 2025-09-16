<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $friends = [
        ["name" => "iqbal", "frenpoint" => 75, "id" => "1"],
        ["name" => "ali", "frenpoint" => 60, "id" => "2"]
    ];
    return view('foldertest.index', ["greeting" => "hello", "friends" => $friends]);
});

Route::get('/test/create', function () {
    return view('foldertest.create');
});


Route::get('/test/{id}', function ($id) {
    return view('foldertest.show', ["id" => $id]);
});

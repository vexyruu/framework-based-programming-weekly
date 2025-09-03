<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $friend = [
        ["name" => "iqbal", "skill" => 75, "id" => "1"],
        ["name" => "ali", "skill" => 60, "id" => "2"]
    ];
    return view('foldertest.index', ["greeting" => "hello", "friend" => $friend]);
});

Route::get('/test/{id}', function ($id) {
    return view('foldertest.show', ["id" => $id]);
});

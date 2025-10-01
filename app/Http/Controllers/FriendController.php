<?php

namespace App\Http\Controllers;

use App\Models\friend;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index() {
        $greeting = "hello";
        $friends = Friend::orderBy('created_at', 'desc')->paginate(10);
        return view('foldertest.index', ["friends" => $friends, "greeting" => $greeting]);
    }

    public function show($id) {
        $friend = Friend::findorFail($id);
        return view('foldertest.show', ["friend" => $friend]);
    }

    public function create() {
         return view('foldertest.create');
    }

    public function store() {
    }
}
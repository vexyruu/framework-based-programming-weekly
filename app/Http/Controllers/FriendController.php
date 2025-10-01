<?php

namespace App\Http\Controllers;

use App\Models\friend;
use Illuminate\Http\Request;
use App\Models\House;

class FriendController extends Controller
{
    public function index() {
        $greeting = "hello";
        $friends = Friend::with('house')->orderBy('created_at', 'desc')->paginate(10);
        return view('foldertest.index', ["friends" => $friends, "greeting" => $greeting]);
    }

    public function show($id) {
        $friend = Friend::with('house')->findOrFail($id);
        return view('foldertest.show', ["friend" => $friend]);
    }

    public function create() {
      $houses = House::all();
      return view('foldertest.create', ['houses' => $houses]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'frenpoint' => 'required|integer|min:0|max:100',
        'bio' => 'required|string|min:20|max:1000',
        'house_id' => 'required|exists:houses,id',
      ]);

      Friend::create($validated);

      return redirect()->route('friends.index');
    }
}
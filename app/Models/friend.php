<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class friend extends Model
{
    protected $fillable = ['name', 'frenpoint', 'bio'];
    /** @use HasFactory<\Database\Factories\FriendFactory> */
    use HasFactory;
}

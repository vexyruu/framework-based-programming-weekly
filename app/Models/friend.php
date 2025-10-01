<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class friend extends Model
{
    protected $fillable = ['name', 'skill', 'bio', 'house_id'];
    /** @use HasFactory<\Database\Factories\FriendFactory> */
    use HasFactory;

    public function house()
    {
        return $this->belongsTo(House::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bookmark extends Model
{
    use HasFactory;
    // public $timestamps=false;
    protected $fillable = ['bookmarkID', 'userEmail'];

    //Functions for Relations
    public function user()
    {
        return $this->belongsTo(User::class, 'userEmail');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'postID');
    }
    
    //Needed Functions
}

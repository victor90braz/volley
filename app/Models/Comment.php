<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // if a have a comment i want to fecth the posts associate with it

    public function posts() {
        return $this->belongsTo(Post::class);
    }
}

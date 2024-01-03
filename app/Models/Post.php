<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    // lets associate post with tags so isntead to user hasMany we use belongsToMany

    public function tags()
    {
        return $this->belongsToMany(Tag::class);

        // personal, family, vacation
    }

    // todo -> lets create an association between posts/tag

    // posts
    // tags('family', 'personal', 'work', 'vacation')
    // post_tag
}

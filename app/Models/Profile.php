<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // todo - if i have a profile it's belongsTo from the user

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

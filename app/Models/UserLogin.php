<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserLogin extends Model
{
    protected $fillable = [
        'user_id',
        'logged_in_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_account extends Model
{
    protected $fillable = [
        'name', 'number', 'bank', 'bitcoin', 'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}

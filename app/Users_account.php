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

    public static function uploadCredentials($valid_id, $passport) {
        $validIdName = str_replace(' ', '_', time(). 'valid_id' .$valid_id->getClientOriginalName());
        $validPassportName = str_replace(' ', '_', time() . 'passport' . $passport->getClientOriginalName());
        auth()->user()->update([
            'valid_id' => $validIdName
        ]);
        auth()->user()->update([
            'passport' => $validPassportName
        ]);
        $valid_id->storeAs('images', $validIdName, 'public');
        $passport->storeAs('images', $validPassportName, 'public');
    }
}

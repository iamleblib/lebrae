<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepositRequest extends Model
{
    protected $fillable = [
        'email', 'plan', 'amount', 'payout', 'user_id'
    ];

    public function users() {
        return $this->belongsTo(User::class );
    }
}

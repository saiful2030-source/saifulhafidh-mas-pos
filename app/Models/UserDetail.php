<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'phone_number',
        'date_of_birth',
        'avatar',
        'gender',
        'address',
        'remember_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

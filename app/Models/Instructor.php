<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Instructor extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key', 'user_id');
    }

    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'address'
    ];
}

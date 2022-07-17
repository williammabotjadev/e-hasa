<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Instructor;

class Student extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key', 'user_id');
    }

    public function instructors()
    {
        return $this->hasMany(Instructor::class);
    }

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'address'
    ];
}

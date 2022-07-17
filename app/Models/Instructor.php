<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Student;

class Instructor extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key', 'instructor_user_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'address'
    ];
}

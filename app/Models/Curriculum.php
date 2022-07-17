<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lesson;
use App\Models\Instructor;

class Curriculum extends Model
{
    use HasFactory;

    public function lessons() 
    {
        return $this->hasMany(Lesson::class);
    }

    public function instructor()
    {
        return $this->hasMany(Instructor::class);
    }


    protected $fillable = [
        'name',
        'description',
        'manager',
        'created_at'
    ];
}

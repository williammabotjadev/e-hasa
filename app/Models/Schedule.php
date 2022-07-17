<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classroom;

class Schedule extends Model
{
    use HasFactory;

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    protected $fillable = [
        'name',
        'description'
    ];
}

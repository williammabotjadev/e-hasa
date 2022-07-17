<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curriculum;
use App\Models\Students;
use App\Models\Instructor;
use App\Models\Resource;

class Classroom extends Model
{
    use HasFactory;

    public function curriculum()
    {
        return $this->hasOne(Curriculum::class);
    }

    public function students() 
    {
        return $this->hasMany(Student::class);
    }

    public function instructors() 
    {
        return $this->hasMany(Instructor::class);
    }

    public function resources() 
    {
        return $this->hasMany(Resource::class);
    }

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'duration',
        'start_time',
        'end_time'
    ];
}

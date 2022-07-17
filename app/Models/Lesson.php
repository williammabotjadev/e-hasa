<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Insert;
use App\Models\Instructor;
use App\Models\Quiz;
use App\Models\Curriculum;

class Lesson extends Model
{
    use HasFactory;

    public function inserts() 
    {
        return $this->hasMany(Insert::class);
    }

    public function instructors()
    {
        return $this->hasMany(Instructor::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function curriculum() 
    {
        return $this->belongsTo(Curriculum::class, 'foreign_key', 'curriculum_id');
    }

    protected $fillable = [
        'name',
        'description',
        'author',
        'created_at',
        'duration',
        'tags'
    ];
}

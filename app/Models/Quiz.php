<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Instructor;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Curriculum;

class Quiz extends Model
{
    use HasFactory;

    public function questions() 
    {
        return $this->hasMany(Question::class);
    }

    public function answers() 
    {
        return $this->hasMany(Answer::class);
    }

    public function instructor() 
    {
        return $this->hasMany(Instructor::class);
    }

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class, 'foreing_key', 'curriculum_id');
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quiz;
use App\Models\Question;

class Answer extends Model
{
    use HasFactory;

    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'foreing_key', 'quiz_id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'foreing_key', 'question_id');
    }

    protected $fillable = [
        'name',
        'description',
        'content'
    ];
}

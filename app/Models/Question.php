<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answer;
use App\Models\Quiz;

class Question extends Model
{
    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'foreing_key', 'quiz_key');
    }

    public function answer() 
    {
        return $this->hasOne(Answer::class);
    }

    protected $fillable = [
        'name',
        'description',
        'content'
    ];
    use HasFactory;
}

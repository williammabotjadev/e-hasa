<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lesson;

class Insert extends Model
{
    use HasFactory;

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'foreign_key', 'lesson_id');
    }

    protected $fillable = [
        'name',
        'description',
        'content',
        'created_at'
    ];
}

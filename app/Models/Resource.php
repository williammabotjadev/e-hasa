<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classroom;

class Resource extends Model
{
    use HasFactory;

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'foreign_key', 'classroom_id');
    }

    protected $fillable = [
        'name',
        'description',
        'image',
        'link'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'yearBlock_id',
        'course_id',
    ];

    public function yearblock()
    {
        return $this->belongsTo(Yearblock::class, 'yearBlock_id');
    }
}

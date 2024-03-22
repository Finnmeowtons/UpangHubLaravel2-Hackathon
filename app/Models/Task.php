<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'yearblock_id',
        'course_id',
    ];

    public function year_block()
    {
        return $this->belongsTo(Yearblock::class, 'yearblock_id');
    }
}

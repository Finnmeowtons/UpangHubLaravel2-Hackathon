<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearBlock extends Model
{
    use HasFactory;

    protected $fillable = [
        'course',
        'year',
        'block',
    ];

    // public function tasks()
    // {
    //     return $this->hasMany(Task::class);
    // }
}

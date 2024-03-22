<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'goodmoral',
        'form',
        'user_id',
        'message',
        'ammount',
        'grade',
        'status',
        'mod'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id');
    }
}

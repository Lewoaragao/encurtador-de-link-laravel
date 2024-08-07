<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'alias',
        'url',
        'slug',
        'num_clicks',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

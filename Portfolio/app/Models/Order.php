<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        
    ];

    public function bubbleTeas()
    {
        return $this->hasMany(BubbleTea::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

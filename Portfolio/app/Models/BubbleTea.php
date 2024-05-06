<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Taste;
use App\Models\Topping;

class BubbleTea extends Model
{
    use HasFactory;

    protected $fillable = [
        'taste_id',
        'topping_id',
        'sugar',
        'price'
    ];

    public function taste()
    {
        return $this->hasOne(Taste::class, 'id', 'taste_id');
    }

    public function topping()
    {
        return $this->hasOne(Topping::class, 'id', 'topping_id');
    }
}

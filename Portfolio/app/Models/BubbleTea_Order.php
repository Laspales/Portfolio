<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BubbleTea_Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'bubble_tea_id',
    ];

    protected $table = 'bubble_tea_order';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taste extends Model
{
    use HasFactory;

    protected $table = 'tastes';
    protected $fillable = ['taste', 'price', 'image'];
}

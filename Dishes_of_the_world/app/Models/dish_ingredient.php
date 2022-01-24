<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dish_ingredient extends Model
{
    use HasFactory;
    protected $table = 'dish_ingredient';
    protected $fillable = ['ingredient_id', 'dish_id'];
}

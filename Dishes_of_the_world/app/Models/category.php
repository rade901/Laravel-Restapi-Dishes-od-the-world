<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title', 'slug'];
    protected $hidden = ['created_at', 'updated_at','deleted_at','dish_id'];
}

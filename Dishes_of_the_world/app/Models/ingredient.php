<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ingredient extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title', 'slug'];
    protected $hidden = ['created_at', 'updated_at','pivot','ingredient_id','deleted_at'];
}

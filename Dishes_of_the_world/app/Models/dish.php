<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dish extends Model
{
    use HasFactory;
    protected $fillable = ['title'];
    protected $hidden = ['created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsToMany(category::class, 'dish_category', 'category_id', 'dish_id');
    }
}

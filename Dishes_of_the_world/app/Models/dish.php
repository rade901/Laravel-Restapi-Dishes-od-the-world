<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dish extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title', 'description'];
    protected $hidden = ['created_at', 'updated_at'];

    public function category()
    {
        return $this->hasOne(category::class,  'id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'dish_tag', 'tag_id', 'dish_id');
    }
    public function ingredients()
    {
        return $this->belongsToMany(ingredient::class, 'dish_ingredient', 'ingredient_id', 'dish_id');
    }
}

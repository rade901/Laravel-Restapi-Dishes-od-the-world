<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dish extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title', 'description', 'category_id','tag_id','ingredient_id'];
    protected $hidden = ['created_at', 'updated_at','deleted_at'];

    public function category()
    {
        return $this->hasOne(category::class,  'id','category_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'dishes','id', 'tag_id');
    }
    public function ingredients()
    {
        return $this->belongsToMany(ingredient::class, 'dishes','id', 'ingredient_id');
    }
}

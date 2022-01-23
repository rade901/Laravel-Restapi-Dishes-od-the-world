<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title', 'slug'];
    protected $hidden = ['created_at', 'updated_at','pivot','tag_id','deleted_at'];
}

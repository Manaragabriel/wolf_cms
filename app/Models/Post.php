<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['id','title','subtitle','content','views','image','image_mobile','author_id'];

    protected $attributes = [
        'views' => 0,
    ];

}
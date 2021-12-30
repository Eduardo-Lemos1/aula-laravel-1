<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "publish_date",
        "image",
        "subject",
        "text",
        "slug",
        "user_id"
    ];

    protected $dates = [
        "publish_date"
    ];
    

    
}
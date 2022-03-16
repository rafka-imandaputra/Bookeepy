<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Posts;

//...create_posts_table.php



//app/Models/Post.php
class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'judul',
        'author',
        'synopsis',
        'penerbit'
    ];
}



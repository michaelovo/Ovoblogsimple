<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogpage extends Model
{
  protected $fillable = [
    'pagename','blog_title','category','author','page_content',
  ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
  protected $fillable = [
    'username','useremail','usercomment',
  ];
}

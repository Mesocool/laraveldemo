<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $perPage = 10;

    protected $dates = ['published_at'];

}

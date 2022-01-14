<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //

    protected $fillable = [
        'title', 'amount-of-upvotes', 'author-name',
    ];
}

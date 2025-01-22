<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deadline extends Model
{
    //

    protected $fillable = [
        'chapter_name',
        'due_date',
    ];
}

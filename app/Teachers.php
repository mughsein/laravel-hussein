<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'class_id',
        'teacher_type',
    ];
}

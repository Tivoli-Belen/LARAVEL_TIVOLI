<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table = 'resume';
    protected $fillable = [
        'name',
        'job_title',
        'about',
        'email',
        'phone',
        'location',
        'tertiary',
        'secondary',
        'primary',
        'civil_status',
        'birth',
        'age',
        'religion',
        'nationality',
        'gender',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = [
        'name',
        'industry',
        'area',
        'degree_tags',
        'sample_roles',
        'website',
    ];

    protected $casts = [
        'degree_tags' => 'array',
        'sample_roles' => 'array',
    ];
}

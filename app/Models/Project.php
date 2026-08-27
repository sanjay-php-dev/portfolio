<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'project_url',
        'technologies',
        'sort_order',
    ];

    protected $casts = [
        'technologies' => 'array',
    ];
}

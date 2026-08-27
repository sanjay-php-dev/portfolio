<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'name',
        'headline',
        'short_bio',
        'about',
        'logo',
        'profile_image',
        'email',
        'phone',
        'location',
        'github_url',
        'linkedin_url',
        'facebook_url',
        'instagram_url',
        'twitter_url',
    ];
}
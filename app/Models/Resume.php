<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'summary',
        'education',
        'experience',
        'skills',
        'certifications',
        'languages',
        'email',
        'phone',
        'address',
        'website',
        'linkedin',
        'github',
        'profile_photo',
    ];
}

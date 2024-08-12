<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use HasFactory, HasTranslations, HasTags;

    protected $guarded = [];

    protected $translatable = ['title', 'content', 'description'];
}

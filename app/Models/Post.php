<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;
use Carbon\Carbon;
use phpDocumentor\Reflection\Types\Boolean;

class Post extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'lang',
        'excerpt',
        'tags',
        'cover',
        'content',
    ];

    public function getCreatedAtGregorianAttribute()
    {
        return $this->created_at->format('Y-m-d');
    }

    public function getCreatedAtJalaliAttribute()
    {
        return Jalalian::fromCarbon($this->created_at)->format('Y-m-d');
    }

    public function isEnglish() : bool {
        return $this->lang == 'en';
    }
}

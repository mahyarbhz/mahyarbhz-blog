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
        'category',
        'excerpt',
        'tags',
        'cover',
        'content',
    ];

    public function getCreatedAtGregorian() : string {
        return $this->created_at->format('Y-m-d');
    }

    public function getCreatedAtJalali() : string {
        return Jalalian::fromCarbon($this->created_at)->format('Y-m-d');
    }

    public function isEnglish() : bool {
        return $this->lang == 'en';
    }

    public function getSlug() : string {
        return $this->lang . '/' . $this->category . '/' . $this->slug;
    }
}

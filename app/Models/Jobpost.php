<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Jobpost extends Model
{
    use HasFactory;

    protected $guarded = [];

     /**
     * Set the title.
     * Set the slug.
     *
     * @param  string  $value
     * @return void
    */
    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }
}

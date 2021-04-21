<?php

namespace App\Models;

use Carbon\Carbon;
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

    /**
     * Format the upcoming date
     * format yyyy-mm-dd
     */
    public function setDeadlineAttribute($value)
    {
        $date = Carbon::parse($value)->format('Y-m-d H:i:s'); // 2015-10-28 19:18:44

        $this->attributes['deadline'] = $date;
    }

    /**
     * Format the upcoming date
     * format yyyy-mm-dd
     */
    public function dateFormate($value)
    {
       return \Carbon\Carbon::parse($value)->format('Y-m-d'); // 2015-10-28 19:18:44
    }
}

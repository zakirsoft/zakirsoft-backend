<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'title_slug',
        'image',
        'description',
        'live_link',
        'bahance_link',
        'project_length',
        'our_role',
        'tool_used',
        'client_name',
        'client_email',
        'work_type',
    ];
}

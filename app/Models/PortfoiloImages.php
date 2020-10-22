<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfoiloImages extends Model
{
    use HasFactory;
    protected $fillable=[
        'portfolio_id',
        'm_image',
    ];
}

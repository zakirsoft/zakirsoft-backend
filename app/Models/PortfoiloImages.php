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

    public function portfolio_images(){
        return $this->belongsTo(Portfolio::class,'portfolio_id');
    }

}

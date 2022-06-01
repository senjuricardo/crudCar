<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Brand;

class Car extends Model
{
    use SoftDeletes;

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    protected $fillable = [
        'brand_id',
        'registration',
        'year_of_manufacture',
        'color',
    ];
}

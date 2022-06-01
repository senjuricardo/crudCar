<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Car;


class Brand extends Model
{


    use SoftDeletes;
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
    protected $fillable = [
        'name'];

    protected static function booted()
    {
        static::deleting(function ($brand) {
            if ($brand->cars()->exists()) {
                throw new \Exception('Related goals found');
            }
        });
    }
}

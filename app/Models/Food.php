<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'food';

    protected $fillable = ['name', 'image', 'detail', 'price'];

    public function foodbuys()
    {
        return $this->hasMany(FoodBuy::class);
    }
}

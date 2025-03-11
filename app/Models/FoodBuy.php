<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodBuy extends Model
{
    use HasFactory;

    protected $table = 'food_buys';

    protected $fillable = ['user_id', 'food_id', 'quantity', 'total_price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}

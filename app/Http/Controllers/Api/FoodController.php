<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\FoodBuy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['foodlist', 'fooddetail']]);
    }

    public function foodlist()
    {
        return response()->json(Food::all(), 200);
    }

    public function fooddetail($id)
    {
        $food = Food::find($id);

        if (!$food) {
            return response()->json(['message' => 'Food not found'], 404);
        }

        return response()->json($food, 200);
    }

    public function foodbuy(Request $request)
    {
        $request->validate([
            'foods' => 'required|array|min:1',
            'foods.*.food_id' => 'required|exists:food,id',
            'foods.*.quantity' => 'required|integer|min:1',
        ]);

        // initiate
        $user = Auth::user();
        $totalPrice = 0;
        $orderItems = [];

        foreach ($request->foods as $foodItem) {
            $food = Food::find($foodItem['food_id']);
            $subtotal = $food->price * $foodItem['quantity'];
            $totalPrice += $subtotal;
    
            FoodBuy::create([
                'user_id' => $user->id,
                'food_id' => $foodItem['food_id'],
                'quantity' => $foodItem['quantity'],
                'total_price' => $subtotal,  
            ]);
    
            $orderItems[] = [
                'food_name' => $food->name,
                'quantity' => $foodItem['quantity'],
                'price_per_item' => $food->price,
                'subtotal' => $subtotal,
            ];
        }
    
        return response()->json([
            'message' => 'Purchase successful',
            'user' => $user->name,
            'total_price' => $totalPrice, 
            'items' => $orderItems,
        ], 201);
    }

    public function userFood()
    {
        $user = Auth::user(); 

        $purchases = FoodBuy::where('user_id', $user->id)
            ->with('food')
            ->get();

        return response()->json([
            'message' => 'User purchase list retrieved successfully',
            'purchases' => $purchases
        ], 200);
    }

}

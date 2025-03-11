<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Food::insert([
            [
                'name' => 'Special Salad',
                'image' => 'https://example.com/special-salad.jpg',
                'detail' => 'Food is any substance consumed by an organism for nutritional support.',
                'price' => 12.00,
            ],
            [
                'name' => 'Russian Salad',
                'image' => 'https://example.com/russian-salad.jpg',
                'detail' => 'Food is any substance consumed by an organism for nutritional support.',
                'price' => 12.00,
            ],
            [
                'name' => 'Asian Salad',
                'image' => 'https://example.com/asian-salad.jpg',
                'detail' => 'Food is any substance consumed by an organism for nutritional support.',
                'price' => 12.00,
            ],
            [
                'name' => 'American Salad',
                'image' => 'https://example.com/american-salad.jpg',
                'detail' => 'Food is any substance consumed by an organism for nutritional support.',
                'price' => 12.00,
            ],
        ]);
    }
}

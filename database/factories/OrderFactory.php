<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'product_id' => Product::factory(), 
            'count' => $this->faker->numberBetween(1, 10),
            'summ' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}

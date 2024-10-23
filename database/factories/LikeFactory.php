<?php

namespace Database\Factories;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    protected $model = Like::class;

    public function definition()
    {
        return [
            'post_id' => Post::factory(), // Associate with a post
            'user_id' => User::factory(), // Assuming you have a User model
            'is_active' => $this->faker->boolean(),
        ];
    }
}
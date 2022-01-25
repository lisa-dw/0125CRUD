<?php

namespace Database\Factories\Forum;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ForumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'contents'=>$this->faker->paragraph,
            'user_id'=>User::inRandomORder()->first()->id,
        ];
    }
}
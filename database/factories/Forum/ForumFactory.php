<?php

namespace Database\Factories\Forum;

use App\Models\Forum\Forum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ForumFactory extends Factory
{
    protected $model = Forum::class;    // 안써주면 시딩 안됨.(에러남)

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->country,
            'contents'=>$this->faker->paragraph,
            'user_id'=>User::inRandomORder()->first()->id,
        ];
    }
}

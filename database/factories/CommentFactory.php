<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'user_id' => $this->faker->numberBetween(1, 10),
            // 'post_id' => $this->faker->numberBetween(1, 10),
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'message' => $this->faker->paragraph(5),
            'commenter_id' => $this->faker->numberBetween(1, 10),
            'post_id' => $this->faker->numberBetween(1, 10),
            'commenter_type' => $this->faker->randomElement(['App\User', 'App\Models\Post']),
            'commentable_id' => $this->faker->numberBetween(1, 10),
            'guest_name' => $this->faker->name,
            'guest_email' => $this->faker->unique()->safeEmail(),
            'comment' => $this->faker->paragraph(5),
            'approved' => $this->faker->boolean,
            'child_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}

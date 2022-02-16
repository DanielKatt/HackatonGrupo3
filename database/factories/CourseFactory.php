<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->text(5),
            'slug' =>$this->faker->slug,
            'img' =>$this->faker->imageUrl (1280,720),
            'description' =>$this->faker->text(800),
            

            'price' => rand(5,50),
            'user_id' => rand(1,5)
        ];
    }
}

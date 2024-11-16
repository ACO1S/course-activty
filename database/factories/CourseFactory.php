<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Course::class;

    public function definition(): array
    {
        $courses = [
            'Responsive Web Development',
            'Web Application Development',
            'IT Infrastruture',
            'Data Structures and Algorithms',
            'Contemporary World',
            'PATHFit',
            'Christian Teaching',
            'Pagturo ng Pagtataya sa Pagbasa at Pagsulat',
            'Organization Management'
        ];

        return [
            'course_name' => $this->faker->randomElement($courses),
        ];
    }
}
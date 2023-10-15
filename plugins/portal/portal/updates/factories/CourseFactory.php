<?php namespace Portal\Portal\Updates\Factories;

use October\Rain\Database\Factories\Factory;
use Portal\Portal\enums\CourseStatuses;
use Portal\Portal\enums\CourseTypes;

/**
 * CourseFactory
 */
class CourseFactory extends Factory
{
    /**
     * definition for the default state.
     * @return array<string, mixed>
     */
    public function definition()
    {
        $f = \Faker\Factory::create();

        return [
            'title' => $f->text(50),
            'text' => $f->text(500),
            'status' => CourseStatuses::ACTIVE,
            'type' => CourseTypes::FREE
        ];
    }
}

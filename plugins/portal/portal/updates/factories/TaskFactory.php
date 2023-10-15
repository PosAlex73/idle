<?php namespace Portal\Portal\Updates\Factories;

use October\Rain\Database\Factories\Factory;
use Portal\Portal\enums\CommonStatuses;
use Portal\Portal\enums\TaskTypes;

/**
 * TaskFactory
 */
class TaskFactory extends Factory
{
    /**
     * definition for the default state.
     * @return array<string, mixed>
     */
    public function definition()
    {
        $f = \Faker\Factory::create();

        return [
            'title' => $f->text(20),
            'text' => $f->text(200),
            'status' => CommonStatuses::ACTIVE,
            'type' => TaskTypes::THEORY
        ];
    }
}

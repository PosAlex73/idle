<?php namespace Portal\Portal\Updates\Factories;

use October\Rain\Database\Factories\Factory;
use Portal\Portal\enums\CommonStatuses;

/**
 * CategoryFactory
 */
class CategoryFactory extends Factory
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
            'status' => CommonStatuses::ACTIVE,
            'image' => $f->imageUrl()
        ];
    }
}

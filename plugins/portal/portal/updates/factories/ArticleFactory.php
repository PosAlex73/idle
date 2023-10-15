<?php namespace Portal\Portal\Updates\Factories;

use October\Rain\Database\Factories\Factory;
use Portal\Portal\enums\CommonStatuses;

/**
 * ArticleFactory
 */
class ArticleFactory extends Factory
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
            'status' => CommonStatuses::ACTIVE
        ];
    }
}

<?php namespace Portal\Portal\Updates\Factories;

use October\Rain\Database\Factories\Factory;

/**
 * UserFactory
 */
class UserFactory extends Factory
{
    /**
     * definition for the default state.
     * @return array<string, mixed>
     */
    public function definition()
    {
        $f = \Faker\Factory::create();

        return [
            'name' => $f->firstName,
            'email' => $f->email,
        ];
    }
}

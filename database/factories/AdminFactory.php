<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'username'=>fake()->unique()->userName(),
            'email'=>fake()->unique()->safeEmail(),
            'password'=>'646784653',
            'remember_token'=>'hjshdfiuyuirehj'
        ];
    }
}

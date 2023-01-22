<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // $type= $this->faker->randemElement(['I','B']);
            // $name =  $type == 'I' ? $this->faker->name() : $this->faker->company(); 'I$this->faker->randemElement(['I','B'])
        ];
    }
}

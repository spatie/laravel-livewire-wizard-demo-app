<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
    public function definition()
    {
        return [
            'text' => $this->faker->text,
        ];
    }
}

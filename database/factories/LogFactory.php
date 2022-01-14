<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LogFactory extends Factory
{
    public function definition()
    {
        return [
            'level' => 'info',
            'driver' => 'database',
            'message' => $this->faker->name,
            'trace' => $this->faker->text,
            'channel' => 'default'
        ];
    }
}

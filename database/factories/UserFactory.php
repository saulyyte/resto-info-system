<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
protected $model = \App\Models\User::class;

public function definition()
{
return [
'name' => $this->faker->name(),
'email' => $this->faker->unique()->safeEmail(),
'email_verified_at' => now(),
'password' => bcrypt('password'), // password
'remember_token' => Str::random(10),
'role' => $this->faker->randomElement(['admin', 'user']),
];
}

public function unverified()
{
return $this->state(fn (array $attributes) => [
'email_verified_at' => null,
]);
}
}

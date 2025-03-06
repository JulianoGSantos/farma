<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'company' => $this->faker->company,
            'cnpj' => $this->faker->randomNumber(8, true),
            'responsible' => $this->faker->name,
            'cellphone' => $this->faker->phoneNumber(),
            'cellphone2' => $this->faker->phoneNumber(),
            'email' => $this->faker->email,
            'cep' => $this->faker->randomNumber(8, true),
            'street' => $this->faker->name,
            'number' => $this->faker->numberBetween(0, 1000),
            'complement' => $this->faker->name,
            'city' => $this->faker->name,
            'state' => $this->faker->name,
        ];
    }
}

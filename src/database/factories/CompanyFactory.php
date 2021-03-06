<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>  fake()->unique()->company(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->unique()->phoneNumber()
        ];
    }

    public function local()
    {
        return $this->state(
            fn(array $attributes) => [
                'name' => Company::LOCAL_COMPANY,
                'email' => Company::LOCAL_EMAIL,
                'phone' => Company::LOCAL_PHONE
            ]);
    }
}

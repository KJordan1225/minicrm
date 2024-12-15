<?php

namespace Database\Factories;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('secret'),
            'remember_token' => Str::random(10),
            'address1' => fake()->streetAddress(),
            'address2' => null,
            'city' => fake()->city(),
            'state' => fake()->state(),
            'zip_code' => '24017',
            'phone_number' => fake()->phoneNumber(),
            'phone_type' => 'Mobile'

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    
    public function user(): static
    {       
        return $this->afterCreating(function (User $user) {
            $user->assignRole(RoleEnum::USER);
        });
    }

    public function admin(): static
    {
        return $this->afterCreating(function (User $user) {
            $user->assignRole(RoleEnum::ADMIN);
        });
    }
}

<?php

namespace Database\Factories;

use App\Enums\DocumentStatus;
use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::pluck('id');
        $clients = Client::pluck('id');
        $projects = Project::pluck('id');

        return [
            'title'       => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'user_id'     => $users->random(),
            'client_id'   => $clients->random(),
            'project_id'  => $projects->random(),
            'filepathname' => fake()->sentence(3),
            'display_name' => fake()->sentence(3),
            'last_revised' => fake()->dateTimeBetween('+1 month', '+6 month'),
            'status'      => fake()->randomElement(DocumentStatus::cases())->value,
        ];
    }
}
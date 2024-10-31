<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Client::factory(5)->create();
        Client::factory()->create([
            'contact_name'         => 'Tony Kolb',
            'contact_email'        => fake()->unique()->safeEmail(),
            'contact_phone_number' => fake()->phoneNumber(),
            'company_name'         => 'Budget',
            'company_address'      => '216 12th Street, Roanoke, VA, 24017',
            'company_city'         => 'Roanoke',
            'company_zip'          => '24017',
            'company_vat'          => '2024-2025',
        ]);
        
        Client::factory()->create([
            'contact_name'         => 'Tony Kolb',
            'contact_email'        => fake()->unique()->safeEmail(),
            'contact_phone_number' => fake()->phoneNumber(),
            'company_name'         => 'Ways and Means',
            'company_address'      => '216 12th Street, Roanoke, VA, 24017',
            'company_city'         => 'Roanoke',
            'company_zip'          => '24017',
            'company_vat'          => '2024-2025',
        ]);
        
        Client::factory()->create([
            'contact_name'         => 'Keith Jordan',
            'contact_email'        => 'shadow902@gmail.com',
            'contact_phone_number' => '540-521-8487',
            'company_name'         => 'Policies and Proceedures',
            'company_address'      => '216 12th Street, Roanoke, VA, 24017',
            'company_city'         => 'Roanoke',
            'company_zip'          => '24017',
            'company_vat'          => '2024-2025',
        ]);
        
        Client::factory()->create([
            'contact_name'         => 'Keith Jordan',
            'contact_email'        => 'shadow902@gmail.com',
            'contact_phone_number' => '540-521-8487',
            'company_name'         => 'Policies and Proceedures',
            'company_address'      => '216 12th Street, Roanoke, VA, 24017',
            'company_city'         => 'Roanoke',
            'company_zip'          => '24017',
            'company_vat'          => '2024-2025',
        ]);
        
        Client::factory()->create([
            'contact_name'         => 'Jeff Williams',
            'contact_email'        => fake()->unique()->safeEmail(),
            'contact_phone_number' => fake()->phoneNumber(),
            'company_name'         => 'Talent Hunt',
            'company_address'      => '216 12th Street, Roanoke, VA, 24017',
            'company_city'         => 'Roanoke',
            'company_zip'          => '24017',
            'company_vat'          => '2024-2025',
        ]);
    }
}
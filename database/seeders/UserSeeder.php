<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\RoleEnum;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'secret',
        ])->syncRoles([RoleEnum::ADMIN]);
        User::factory()->create([
            'first_name' => 'User',
            'last_name' => 'User',
            'email' => 'user@user.com',
            'password' => 'secret',
        ])->syncRoles([RoleEnum::USER]);
    }
}

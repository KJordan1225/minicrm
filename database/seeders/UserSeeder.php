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
        // User::factory(10)->create();
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
        User::factory()->create([
            'first_name' => 'One',
            'last_name' => 'One',
            'email' => 'one@one.com',
            'password' => 'secret',
            'address1' => '111 One St. NW',
            'city' => 'Roanoke',
            'state' => 'VA',
            'zip_code' => '24017',
            'phone_number' => '(540) 111-1111',
            'phone_type' => 'Mobile',
        ])->syncRoles([RoleEnum::USER]);
        User::factory()->create([
            'first_name' => 'Two',
            'last_name' => 'Two',
            'email' => 'two@two.com',
            'password' => 'secret',
            'address1' => '111 One St. NW',
            'city' => 'Roanoke',
            'state' => 'VA',
            'zip_code' => '24017',
            'phone_number' => '(540) 111-1111',
            'phone_type' => 'Mobile',
        ])->syncRoles([RoleEnum::USER]);
        User::factory()->create([
            'first_name' => 'Three',
            'last_name' => 'One',
            'email' => 'three@three.com',
            'password' => 'secret',
            'address1' => '111 One St. NW',
            'city' => 'Roanoke',
            'state' => 'VA',
            'zip_code' => '24017',
            'phone_number' => '(540) 111-1111',
            'phone_type' => 'Mobile',
        ])->syncRoles([RoleEnum::USER]);
        User::factory()->create([
            'first_name' => 'Four',
            'last_name' => 'One',
            'email' => 'four@four.com',
            'password' => 'secret',
            'address1' => '111 One St. NW',
            'city' => 'Roanoke',
            'state' => 'VA',
            'zip_code' => '24017',
            'phone_number' => '(540) 111-1111',
            'phone_type' => 'Mobile',
        ])->syncRoles([RoleEnum::USER]);
        User::factory()->create([
            'first_name' => 'Five',
            'last_name' => 'One',
            'email' => 'five@five.com',
            'password' => 'secret',
            'address1' => '111 One St. NW',
            'city' => 'Roanoke',
            'state' => 'VA',
            'zip_code' => '24017',
            'phone_number' => '(540) 111-1111',
            'phone_type' => 'Mobile',
        ])->syncRoles([RoleEnum::USER]);
        User::factory()->create([
            'first_name' => 'Six',
            'last_name' => 'One',
            'email' => 'six@six.com',
            'password' => 'secret',
            'address1' => '111 One St. NW',
            'city' => 'Roanoke',
            'state' => 'VA',
            'zip_code' => '24017',
            'phone_number' => '(540) 111-1111',
            'phone_type' => 'Mobile',
        ])->syncRoles([RoleEnum::USER]);
        User::factory()->create([
            'first_name' => 'Seven',
            'last_name' => 'One',
            'email' => 'seven@seven.com',
            'password' => 'secret',
            'address1' => '111 One St. NW',
            'city' => 'Roanoke',
            'state' => 'VA',
            'zip_code' => '24017',
            'phone_number' => '(540) 111-1111',
            'phone_type' => 'Mobile',
        ])->syncRoles([RoleEnum::USER]);
        User::factory()->create([
            'first_name' => 'Eight',
            'last_name' => 'One',
            'email' => 'eight@eight.com',
            'password' => 'secret',
            'address1' => '111 One St. NW',
            'city' => 'Roanoke',
            'state' => 'VA',
            'zip_code' => '24017',
            'phone_number' => '(540) 111-1111',
            'phone_type' => 'Mobile',
        ])->syncRoles([RoleEnum::USER]);
        User::factory()->create([
            'first_name' => 'Nine',
            'last_name' => 'One',
            'email' => 'nine@nine.com',
            'password' => 'secret',
            'address1' => '111 One St. NW',
            'city' => 'Roanoke',
            'state' => 'VA',
            'zip_code' => '24017',
            'phone_number' => '(540) 111-1111',
            'phone_type' => 'Mobile',
        ])->syncRoles([RoleEnum::USER]);
        User::factory()->create([
            'first_name' => 'Ten',
            'last_name' => 'One',
            'email' => 'ten@ten.com',
            'password' => 'secret',
            'address1' => '111 One St. NW',
            'city' => 'Roanoke',
            'state' => 'VA',
            'zip_code' => '24017',
            'phone_number' => '(540) 111-1111',
            'phone_type' => 'Mobile',
        ])->syncRoles([RoleEnum::USER]);
    }
}

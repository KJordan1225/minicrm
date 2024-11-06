<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('allows user to login with valid credentials', function () {
    // Create a user with known credentials
    $user = User::factory()->create([
        'email' => 'test@example.com',
        'password' => Hash::make('password123'),
    ]);

    // Attempt to login with correct credentials
    $response = $this->post('/login', [
        'email' => 'test@example.com',
        'password' => 'password123',
    ]);

    // Assert the login was successful and the user is authenticated
    $response->assertStatus(302); // Assuming successful login redirects
    $this->assertAuthenticatedAs($user);
});

it('prevents user from logging in with invalid credentials', function () {
    // Create a user with known credentials
    $user = User::factory()->create([
        'email' => 'test@example.com',
        'password' => Hash::make('password123'),
    ]);

    // Attempt to login with incorrect credentials
    $response = $this->post('/login', [
        'email' => 'test@example.com',
        'password' => 'wrongpassword',
    ]);

    // Assert the login failed and user is not authenticated
    $response->assertStatus(302); // Assuming failed login redirects back to login 
								  // page
    $response->assertSessionHasErrors('email'); // Check for error on the 'email' 
												// field
    $this->assertGuest(); // Assert that no user is authenticated
});

it('validates login fields are required', function () {
    // Attempt to login without a password
    $response = $this->post('/login', [
        'email' => 'test@example.com',
    ]);

    // Assert validation errors for the missing password
    $response->assertStatus(302);
    $response->assertSessionHasErrors('password');

    // Attempt to login without an email
    $response = $this->post('/login', [
        'password' => 'password123',
    ]);

    // Assert validation errors for the missing email
    $response->assertStatus(302);
    $response->assertSessionHasErrors('email');
});
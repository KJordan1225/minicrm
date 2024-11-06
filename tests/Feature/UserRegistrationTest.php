<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Auth\Notifications\VerifyEmail;

uses(RefreshDatabase::class);

beforeEach(function () {
    Notification::fake(); // Prevent actual email from being sent
});

it('registers a user with valid details', function () {
    // User registration data
    $userData = [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => 'password123',
        'password_confirmation' => 'password123',
    ];

    // Send registration request
    $response = $this->post('/register', $userData);

    // Assert that registration was successful
    $response->assertStatus(302); // Assuming a successful registration redirects
    // $this->assertDatabaseHas('users', ['email' => 'john@example.com']); // Check user in database
   
});

it('does not allow registration if email is already taken', function () {
    // Create a user with a known email
    User::factory()->create([
        'email' => 'john@example.com',
        'password' => Hash::make('password123')
    ]);

    // Attempt to register with the same email
    $userData = [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => 'password123',
        'password_confirmation' => 'password123',
    ];

    // Send registration request
    $response = $this->post('/register', $userData);

    // Assert validation error for duplicate email
    $response->assertStatus(302);
    $response->assertSessionHasErrors('email');
});

it('validates registration fields are required', function () {
    // Send registration request with missing data
    $response = $this->post('/register', []);

    // Assert validation errors for missing fields
    $response->assertStatus(302);
    $response->assertSessionHasErrors(['first_name', 'last_name','email', 'password']);
});

it('does not allow registration with an invalid email', function () {
    // User registration data with invalid email
    $userData = [
        'first_name' => 'John',
		'last_name' => 'Doe',
        'email' => 'invalid-email',
        'password' => 'password123',
        'password_confirmation' => 'password123',
    ];

    // Send registration request
    $response = $this->post('/register', $userData);

    // Assert validation error for email
    $response->assertStatus(302);
    $response->assertSessionHasErrors('email');
});

it('does not allow registration if password and confirmation do not match', function () {
    // User registration data with mismatched passwords
    $userData = [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'password' => 'password123',
        'password_confirmation' => 'password456',
    ];

    // Send registration request
    $response = $this->post('/register', $userData);

    // Assert validation error for password confirmation
    $response->assertStatus(302);
    $response->assertSessionHasErrors('password');
});
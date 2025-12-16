<?php

namespace Database\Factories;

use App\Models\Token;
use App\Models\User;
use App\Models\Counter;
use Illuminate\Database\Eloquent\Factories\Factory;

class TokenFactory extends Factory
{
    protected $model = Token::class;

    public function definition(): array
    {
        $counter = Counter::inRandomOrder()->first() ?? Counter::factory()->create();
        $client = User::where('role', 'client')->inRandomOrder()->first();

        return [
            'token_number' => 'TKN-' . strtoupper(substr($counter->name, -1)) . '-' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT),
            'client_id' => $client?->id ?? User::factory()->create(['role' => 'client'])->id,
            'counter_id' => $counter->id,
            'purpose' => fake()->sentence(4),
            'status' => fake()->randomElement(['pending', 'assigned', 'completed']),
            'assigned_at' => fake()->optional()->dateTimeBetween('-2 days', 'now'),
            'completed_at' => fake()->optional()->dateTimeBetween('-1 day', 'now'),
        ];
    }
}
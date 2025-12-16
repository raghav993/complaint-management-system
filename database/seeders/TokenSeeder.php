<?php

namespace Database\Seeders;

use App\Models\Token;
use App\Models\User;
use App\Models\Counter;
use App\Models\Purpose;
use Illuminate\Database\Seeder;

class TokenSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure data exists
        $user     = User::where('role', 'user')->first();
        $counter  = Counter::first();
        $purpose  = Purpose::first();

        if (!$user || !$counter || !$purpose) {
            dd("❌ Seed users, counters, and purposes before seeding tokens!");
        }

        for ($i = 1; $i <= 5; $i++) {

            $token = Token::create([
                'user_id'     => $user->id,
                'counter_id'  => $counter->id,
                'purpose_id'  => $purpose->id,
                'notes'       => 'Demo generated token '.$i,
                'status'      => 'pending',
            ]);

            // Sequential number (10000 + ID)
            $token->number = 10000 + $token->id;
            $token->save();
        }
    }
}

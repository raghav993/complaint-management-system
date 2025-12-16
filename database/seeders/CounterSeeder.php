<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    public function run(): void
    {
        // GOOD: Use factory
        Counter::factory()->count(6)->create();

        // OR: Manual create with named keys
        /*
        $letters = ['A', 'B', 'C', 'D', 'E', 'F'];
        foreach ($letters as $letter) {
            Counter::create([
                'name'   => "Counter $letter",
                'status' => 'idle',
            ]);
        }
        */
    }
}
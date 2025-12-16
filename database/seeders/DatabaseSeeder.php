<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | 1. ADMIN USER
        |--------------------------------------------------------------------------
        */
        DB::table('users')->insert([
            [
                'name'      => 'System Admin',
                'email'     => 'admin@tmc.in',
                'password'  => Hash::make('Admin@12345'),
                'role'      => 'admin',
                'enrollment_no' => null,
                'created_at' => now(),
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | 2. NORMAL USERS (5 Realistic Indian Users)
        |--------------------------------------------------------------------------
        */
        $normalUsers = [
            ['Amit Sharma', 'amit.sharma@example.in'],
            ['Priya Verma', 'priya.verma@example.in'],
            ['Rahul Mehra', 'rahul.mehra@example.in'],
            ['Sneha Kapoor', 'sneha.kapoor@example.in'],
            ['Vikas Singh', 'vikas.singh@example.in'],
        ];

        foreach ($normalUsers as $user) {
            DB::table('users')->insert([
                'name'      => $user[0],
                'email'     => $user[1],
                'password'  => Hash::make('User@123'),
                'role'      => 'user',
                'enrollment_no' => null,
                'created_at' => now(),
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | 3. ADVOCATES (5 Realistic Advocates)
        |--------------------------------------------------------------------------
        */
        $advocates = [
            ['Adv. Suresh Dubey',      'suresh.dubey@law.in',        'MP/Adv/2023/1201'],
            ['Adv. Ritu Agrawal',      'ritu.agrawal@law.in',        'MP/Adv/2022/1178'],
            ['Adv. Manish Trivedi',    'manish.trivedi@law.in',      'MP/Adv/2021/1033'],
            ['Adv. Nisha Verma',       'nisha.verma@law.in',         'MP/Adv/2020/1402'],
            ['Adv. Harish Patidar',    'harish.patidar@law.in',      'MP/Adv/2024/1550'],
        ];

        foreach ($advocates as $adv) {
            DB::table('users')->insert([
                'name'          => $adv[0],
                'email'         => $adv[1],
                'password'      => Hash::make('Advocate@123'),
                'role'          => 'advocate',
                'enrollment_no' => $adv[2],
                'created_at'    => now(),
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | 4. COUNTERS (MP High Court Real Counters)
        |--------------------------------------------------------------------------
        */
        $counters = [
            'Filing Counter',
            'Copying Counter',
            'Case Status Counter',
            'Certified Copy Counter',
            'E-Filing Support Counter',
        ];

        foreach ($counters as $counter) {
            DB::table('counters')->insert([
                'name'       => $counter,
                'created_at' => now(),
            ]);
        }
        /*
        |--------------------------------------------------------------------------
        | 5. PURPOSES (20 Realistic High Court Purposes)
        |--------------------------------------------------------------------------
        */
        $purposes = [
            'Case Filing',
            'Certified Copy Request',
            'Case Status Inquiry',
            'Document Verification',
            'Affidavit Submission',
            'New Petition Filing',
            'Application for Certified Orders',
            'Hearing Date Inquiry',
            'Case Transfer Request',
            'FIR Copy Request',
            'Bail Application Filing',
            'RTI Complaint Submission',
            'Civil Case Document Submission',
            'Criminal Case Document Submission',
            'Payment Receipt Verification',
            'Court Fee Refund Request',
            'Case Bundle Submission',
            'Notice Copy Request',
            'Interim Application Filing',
            'Miscellaneous Case Filing',
        ];

        foreach ($purposes as $purpose) {
            DB::table('purposes')->insert([
                'name'       => $purpose,
                'created_at' => now(),
            ]);
        }

        $this->call([
            TokenSeeder::class,
        ]);

        // Attach one advocate to each counter (1:1)
        $advocates = DB::table('users')->where('role', 'advocate')->get();
        $counters  = DB::table('counters')->get();

        foreach ($counters as $index => $counter) {
            if (isset($advocates[$index])) {
                DB::table('counter_user')->insert([
                    'counter_id'   => $counter->id,
                    'user_id'      => $advocates[$index]->id,
                    'created_at'   => now(),
                ]);
            }
        }
    }
}

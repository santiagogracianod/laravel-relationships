<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $phones = [
            [
                'prefix' => 123,
                'phone_number' => 1234567890,
                'user_id' => 1,
            ],
            [
                'prefix' => 321,
                'phone_number' => 9876543210,
                'user_id' => 2,
            ],
            [
                'prefix' => 88,
                'phone_number' => 652316,
                'user_id' => 2,
            ],
            [
                'prefix' => 442,
                'phone_number' => 6546145,
                'user_id' => 2,
            ],
        ];

        foreach ($phones as $phone) {
            Phone::create($phone);
        }
    }
}

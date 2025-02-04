<?php

namespace Database\Seeders;

use App\Models\Sim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sim::create([
            'serial_number' => 64654,
            'company' => 'Tigo',
            'phone_id' => 1,
        ]);
        Sim::create([
            'serial_number' => 231,
            'company' => 'Claro',
            'phone_id' => 2,
        ]);
        Sim::create([
            'serial_number' => 88,
            'company' => 'Movistar',
            'phone_id' => 3,
        ]);
    }
}

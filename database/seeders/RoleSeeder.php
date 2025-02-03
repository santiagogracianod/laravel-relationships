<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'superadmin',
            ],
            [
                'name' => 'admin',
            ],
            [
                'name' => 'staff',
            ],
            [
                'name' => 'user',
            ],
        ];

        foreach ($roles as  $rol) {
            Role::create($rol);
        }

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
            'added_by' => 'Santi',

        ]);
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 1,
            'added_by' => 'Santi' ,

        ]);
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 2,
            'added_by' => 'Jose',

        ]);
        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 2,
            'added_by' => 'Santi',

        ]);
        DB::table('role_user')->insert([
            'role_id' => 4,
            'user_id' => 3,
            'added_by' => 'Kami',

        ]);
    }
}

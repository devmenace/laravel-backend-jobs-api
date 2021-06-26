<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UserSeeder
 * @package Database\Seeders
 */
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $users = [
            [
                'name' => 'Demo',
                'email' => 'demo@demo.com',
                'password' => bcrypt('demo'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
            ],
            [
                'name' => 'Test',
                'email' => 'test@test.com',
                'password' => bcrypt('test'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}

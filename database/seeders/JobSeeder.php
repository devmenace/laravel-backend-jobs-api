<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

/**
 * Class JobSeeder
 * @package Database\Seeders
 */
class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::factory(15)->create();
    }
}

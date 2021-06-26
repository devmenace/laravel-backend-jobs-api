<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

/**
 * Class PropertySeeder
 * @package Database\Seeders
 */
class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::factory(15)->create();
    }
}

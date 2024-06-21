<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnersServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners_services')->insert([
            [
                'partners_id' => 1,
                'services_id' => 1,
            ],
            [
                'partners_id' => 1,
                'services_id' => 2,
            ],
            [
                'partners_id' => 1,
                'services_id' => 3,
            ],
            [
                'partners_id' => 1,
                'services_id' => 4,
            ],
            [
                'partners_id' => 1,
                'services_id' => 5,
            ],
        ]);
    }
}

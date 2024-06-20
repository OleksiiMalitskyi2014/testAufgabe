<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            [
                'name' => 'Propain Delivery',
                'longitude' => '9.765710',
                'latitude' => '47.775280',

            ],
            [
                'name' => 'Propain Service',
                'longitude' => '9.180770',
                'latitude' => '48.777110',
            ],
        ]);
    }
}

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
                'longitude' => 9.765710,
                'latitude' => 47.775280,
                'debitor_nr' => '101',
                'street' => 'BeethowenStr',
                'haus_nr' => 2,
                'plz' => 734569,
                'country' => 'Deutschland',
                'website' => 'https://google.com',
                'phone' => '+49151000000',
                'email' => 'propain.delivery@gmail.com',
                'logo' => 'PropainDelivery',
                'pin_logo' => 'PropainDelivery',
                'slug' => 'https://google.com'
            ],
            [
                'name' => 'Propain Service',
                'longitude' => 9.180770,
                'latitude' => 48.777110,
                'debitor_nr' => '102',
                'street' => 'WagnerStr',
                'haus_nr' => 4,
                'plz' => 734569,
                'country' => 'Deutschland',
                'website' => 'https://google.com',
                'phone' => '+491517777777',
                'email' => 'propain.service@gmail.com',
                'logo' => 'PropainService',
                'pin_logo' => 'PropainService',
                'slug' => 'https://wikipedia.com'
            ],
        ]);
    }
}

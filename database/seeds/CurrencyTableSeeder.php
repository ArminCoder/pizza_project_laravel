<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            [
                'currency' => 'EUR',
                'symbol' => '€',
                'rate' => '1',
                'active' => true
            ],
            [
                'currency' => 'USD',
                'symbol' => '$',
                'rate' => '1.18424',
                'active' => false
            ],
         ]);
    }
}

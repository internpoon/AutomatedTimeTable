<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        DB::table('venues')->insert([
            [
                'location' => 'LT1',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'location' => 'LT2',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'location' => 'LT3',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'location' => 'LT4',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'location' => 'LT5',
                'created_at' => $date,
                'updated_at' => $date
            ]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LecturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        DB::table('lecturers')->insert([
            [
                'id' => 'L01',
                'name' => 'Chua Hui Na',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'id' => 'L02',
                'name' => 'Dhamindran',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'id' => 'L03',
                'name' => 'Chia Wai Chong',
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'id' => 'L04',
                'name' => 'Kwong Siaw Chiun',
                'created_at' => $date,
                'updated_at' => $date
            ]
        ]);
    }
}

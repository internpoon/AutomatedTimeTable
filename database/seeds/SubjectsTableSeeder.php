<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        DB::table('subjects')->insert([
           [
               'id' => 'CSC011',
               'name' => 'Human Computer Interaction',
               'total_session' => 4,
               'created_at' => $date,
               'updated_at' => $date
           ],
           [
               'id' => 'CSC022',
               'name' => 'Object-Oriented Programming',
               'total_session' => 4,
               'created_at' => $date,
               'updated_at' => $date
           ],
           [
               'id' => 'CSC033',
               'name' => 'Digital Image Processing',
               'total_session' => 4,
               'created_at' => $date,
               'updated_at' => $date
           ],
           [
               'id' => 'CSC055',
               'name' => 'Computer Networks',
               'total_session' => 4,
               'created_at' => $date,
               'updated_at' => $date
           ]
        ]);
    }
}

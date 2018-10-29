<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             SubjectsTableSeeder::class,
             LecturerTableSeeder::class,
             VenuesTableSeeder::class,
             SessionsTableSeeder::class,
         ]);
    }
}

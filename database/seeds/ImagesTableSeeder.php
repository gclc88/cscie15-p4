<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('Images')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'owner_id' => 1,
          'number' => 1,
          'file_name' => 'number1.jpg',
      ]);

      DB::table('Images')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'owner_id' => 1,
          'number' => 2,
          'file_name' => 'number2.jpg',
      ]);

    }
}

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
#      $user_id = \MemGame\User::where('name','=','gclc88')->pluck('id');
#      echo 'user_id: '.$user_id;
      DB::table('images')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'file_name' => 'number1.jpg',
          'user_id' => 1
      ]);

      DB::table('images')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'file_name' => 'number2.jpg',
          'user_id' => 1
      ]);
    }
}

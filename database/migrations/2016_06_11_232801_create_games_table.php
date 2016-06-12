<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('games', function (Blueprint $table) {

          # This generates two columns: `created_at` and `updated_at` to
          # keep track of changes to a row
          $table->timestamps();

          # The rest of the fields...
          $table->increments('id');       // needed by Model
          $table->string('name');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('games');
    }
}

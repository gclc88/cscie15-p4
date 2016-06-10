<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('images', function (Blueprint $table) {

          # This generates two columns: `created_at` and `updated_at` to
          # keep track of changes to a row
          $table->timestamps();

          # The rest of the fields...
          $table->integer('owner_id');
          $table->integer('number');
          $table->string('file_name');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('images');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('region_id');
            $table->string('name_uz',30);
            $table->string('name_ru',30);
            $table->string('name_en',30);
            $table->string('name_cyrl',30);
            $table->string('phone_kod', 5);
            $table->integer('c_order');
            $table->integer('ns11_code');
            $table->integer('soato');
            $table->integer('region_sector');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}

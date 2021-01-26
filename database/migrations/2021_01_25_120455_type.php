<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Type extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('students', function (Blueprint $table) {
            $table->text('tell_number')->change();
        });

        Schema::table('edu_centers', function (Blueprint $table) {
            $table->text('tell_number')->change();
        });

        Schema::table('students', function (Blueprint $table) {
            $table->text('TIN')->change();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

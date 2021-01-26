<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Data extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->date('data_birth')->change();
        });

        Schema::table('students', function (Blueprint $table) {

            $table->renameColumn('data_birth', 'date_birth');

        });

        Schema::table('students', function (Blueprint $table) {

            $table->renameColumn('firs_name', 'first_name');

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

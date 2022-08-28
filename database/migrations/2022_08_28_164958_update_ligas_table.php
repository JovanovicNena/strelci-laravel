<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLigasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ligas', function (Blueprint $table) {
            $table->renameColumn('br_klubova', 'broj_klubova');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ligas', function (Blueprint $table) {
            $table->renameColumn('broj_klubova', 'br_klubova');
        });
    }
}

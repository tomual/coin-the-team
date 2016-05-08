<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('groups')->insert([
            array('id' => '1', 'name' => 'Staff'),
            array('id' => '2', 'name' => 'League of Legends A'),
            array('id' => '3', 'name' => 'League of Legends B'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('groups')->delete();
    }
}

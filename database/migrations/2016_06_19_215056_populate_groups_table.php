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
            array('id' => '1', 'name' => 'Staff', 'slug' => 'staff'),
            array('id' => '2', 'name' => 'League of Legends A', 'slug' => 'leagueoflegendsa'),
            array('id' => '3', 'name' => 'League of Legends B', 'slug' => 'leagueoflegendsb'),
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

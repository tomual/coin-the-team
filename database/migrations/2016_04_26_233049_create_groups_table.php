<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::table('users', function ($table) {
            $table->foreign('group_id')->references('id')->on('groups');
        });
        DB::table('groups')->insert(
            array(
                'id' => '1',
                'name' => 'Unassigned'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropForeign('users_group_id_foreign');
        });
        Schema::drop('groups');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('idea', 100)->nullable();
            $table->string('good', 800)->nullable();
            $table->string('task', 800)->nullable();
            $table->string('done', 800)->nullable();
            $table->string('opponent', 100)->nullable();
            $table->integer('my_score')->nullable();
            $table->integer('opponent_score')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}

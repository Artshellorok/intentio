<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('cost');
            $table->string('image');
            $table->integer('category_id');
            $table->integer('user_id');
            $table->timestamps();
        });
        Schema::create('employer_project', function (Blueprint $table) {
            $table->increments('channel_id');
            $table->integer('project_id');
            $table->integer('employer_id');
            $table->string('offer');
            $table->timestamps();
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}

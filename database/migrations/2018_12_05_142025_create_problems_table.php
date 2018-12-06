<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('demands');
            $table->string('budget');
            $table->boolean('dogovor');
            $table->string('image');
            $table->integer('category_id');
            $table->integer('employer_id');
            $table->timestamps();
        });
        Schema::create('problem_user', function (Blueprint $table) {
            $table->integer('problem_id');
            $table->integer('user_id');
            $table->string('offer');
            $table->string('status');
            $table->primary(['problem_id', 'user_id']);
        });
        DB::statement('ALTER Table problem_user add channel_id INTEGER NOT NULL UNIQUE AUTO_INCREMENT;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problems');
        Schema::dropIfExists('problem_user');
    }
}

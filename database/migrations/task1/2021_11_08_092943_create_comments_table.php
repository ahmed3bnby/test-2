<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned(); // Change to bigInteger and add 'unsigned'
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('task_id')->unsigned(); // Change to task_id and add 'unsigned'
            $table->foreign('task_id')->references('id')->on('tasks'); // Correct the foreign key reference to 'tasks' table
            $table->string('comment_text');
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
        Schema::dropIfExists('comments');
    }
}

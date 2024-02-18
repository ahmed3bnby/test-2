<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

             // TASK: edit this migration so country_id would allow NULL values

    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable(); // Remove 'constrained()' and add 'nullable()' separately
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null'); // Manually define foreign key constraint
            $table->string('ip_address');
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
        Schema::dropIfExists('visitors');
    }
}

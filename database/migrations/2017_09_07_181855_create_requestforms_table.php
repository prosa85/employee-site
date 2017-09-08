<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequestformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestforms', function(Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->date('date_of_request');
            $table->string('status');
            $table->string('type_of_absence');
            $table->string('hr_status')->default("Pending");
            $table->integer('status_changed_by')->nullable();
            $table->integer('user_id');
            $table->integer('number_of_days');
            $table->decimal('hours', 3,2)->default(0);
            $table->text('notes')->nullable();
            $table->boolean('rollover')->default(0);
            $table->boolean('returned_copy')->default(0);
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
        Schema::dropIfExists('requestforms');
    }
}

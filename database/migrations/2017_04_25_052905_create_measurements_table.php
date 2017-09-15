<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('order_id');
            $table->string('neck')->default('0');
            $table->string('chest')->default('0');
            $table->string('shoulder')->default('0');
            $table->string('waist')->default('0');
            $table->string('hips')->default('0');
            $table->string('sleeve')->default('0');
            $table->string('bicep')->default('0');
            $table->string('wrist')->default('0');
            $table->string('length')->default('0');
            $table->string('thigh')->default('0');
            $table->string('crotch')->default('0');
            $table->string('ankles')->default('0');
            $table->string('inseam')->default('0');
            $table->string('outseam')->default('0');
            $table->text('other_measurements')->default('0');

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
        Schema::dropIfExists('measurements');
    }
}

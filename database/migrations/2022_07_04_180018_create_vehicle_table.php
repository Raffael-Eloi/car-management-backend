<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->string('license_plate');
            $table->string('year_model');
            $table->string('color');
            $table->string('axle_quantity');
            $table->string('torque');
            $table->unsignedBigInteger('gearbox_id');
            $table->float('relation_first_gear');
            $table->float('axle_differential');
            $table->foreign('gearbox_id')->references('id')->on('gearboxes')->onUpdate('restrict')->onDelete('restrict');
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
        Schema::dropIfExists('vehicles');
    }
};

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
            $table->string('axle_quantity')->nullable();
            $table->string('torque')->nullable();
            $table->unsignedBigInteger('gearbox_id')->nullable();
            $table->unsignedBigInteger('owner_id');
            $table->float('relation_first_gear')->nullable();
            $table->float('axle_differential')->nullable();
            $table->float('weight')->nullable();
            $table->float('potency')->nullable();
            $table->float('front_balance')->nullable();
            $table->float('back_balance')->nullable();
            $table->float('between_axles_first')->nullable();
            $table->float('between_axles_second')->nullable();
            $table->float('between_axles_third')->nullable();
            $table->foreign('gearbox_id')->references('id')->on('gearboxes')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('owner_id')->references('id')->on('owner')->onUpdate('restrict')->onDelete('restrict');
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

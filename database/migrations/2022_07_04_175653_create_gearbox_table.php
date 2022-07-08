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
        Schema::create('gearboxes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('cl')->nullable();
            $table->float('cr')->nullable();
            $table->float('gear_1');
            $table->float('gear_2');
            $table->float('gear_3');
            $table->float('gear_4');
            $table->float('gear_5')->nullable();
            $table->float('gear_6')->nullable();
            $table->float('gear_7')->nullable();
            $table->float('gear_8')->nullable();
            $table->float('gear_9')->nullable();
            $table->float('gear_10')->nullable();
            $table->float('gear_11')->nullable();
            $table->float('gear_12')->nullable();
            $table->float('gear_13')->nullable();
            $table->float('gear_14')->nullable();
            $table->float('gear_15')->nullable();
            $table->float('gear_16')->nullable();
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
        Schema::dropIfExists('gearboxes');
    }
};
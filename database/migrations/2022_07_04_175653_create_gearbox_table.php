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
            $table->float('CL')->nullable();
            $table->float('CR')->nullable();
            $table->float('1');
            $table->float('2');
            $table->float('3');
            $table->float('4');
            $table->float('5')->nullable();
            $table->float('6')->nullable();
            $table->float('7')->nullable();
            $table->float('8')->nullable();
            $table->float('9')->nullable();
            $table->float('10')->nullable();
            $table->float('11')->nullable();
            $table->float('12')->nullable();
            $table->float('13')->nullable();
            $table->float('14')->nullable();
            $table->float('15')->nullable();
            $table->float('16')->nullable();
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

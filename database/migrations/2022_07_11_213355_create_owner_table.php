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
        Schema::create('owner', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('document');
            $table->string('rg')->nullable();
            $table->string('phone')->nullable();
            $table->string('address');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('email')->nullable();
            $table->string('login_br')->nullable();
            $table->string('password_br')->nullable();
            $table->string('login_ba')->nullable();
            $table->string('password_ba')->nullable();
            $table->string('login_go')->nullable();
            $table->string('password_go')->nullable();
            $table->string('login_mg')->nullable();
            $table->string('password_mg')->nullable();
            $table->string('login_sp')->nullable();
            $table->string('password_sp')->nullable();
            $table->string('login_pr')->nullable();
            $table->string('password_pr')->nullable();
            $table->string('login_pe')->nullable();
            $table->string('password_pe')->nullable();
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
        Schema::dropIfExists('owner');
    }
};

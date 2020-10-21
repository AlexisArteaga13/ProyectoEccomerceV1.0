<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->string('id');
            $table->string('label')->nullable();
            $table->timestamps();

        });
        Schema::create('role_user', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->string( 'id');
            $table->string('label')->nullable();
            $table->timestamps();
            $table->foreing('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreing('user_id')
            ->references('id')
            ->on('roles')
            ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_user', function (Blueprint $table) {
            //
         
        });
    }
}

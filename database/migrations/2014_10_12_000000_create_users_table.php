<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 255);
            $table->string('email' , 255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password' , 255);
            $table->integer('role');
            $table->string('ville', 255);
            $table->string('adresse' , 255);
            $table->integer('phone')->unique();
            $table->integer('code')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }

}

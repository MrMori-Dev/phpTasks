<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('userName');
            $table->string('password');
            $table->string('phoneNumber')->nullable();
            $table->string('countryCode')->nullable();
            $table->enum('sex',['male','female'])->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->integer('city_id')->nullable();
            $table->enum('accessibility',['level1','level2','level3'])->default('level3');
            $table->string('email')->unique();
            $table->string('postalCode')->nullable();
            $table->timestamp('lastLoginTime')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();


//            $table->string('email');
//            $table->timestamp('email_verified_at');
//            $table->string('password');
//            $table->rememberToken();
//            $table->timestamps();
        });

//        Schema::create('password_reset_tokens', function (Blueprint $table) {
//            $table->string('email')->primary();
//            $table->string('token');
//            $table->timestamp('created_at')->nullable();
//        });
//
//        Schema::create('sessions', function (Blueprint $table) {
//            $table->string('id')->primary();
//            $table->foreignId('user_id')->nullable()->index();
//            $table->string('ip_address', 45)->nullable();
//            $table->text('user_agent')->nullable();
//            $table->longText('payload');
//            $table->integer('last_activity')->index();
//        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
//        Schema::dropIfExists('password_reset_tokens');
//        Schema::dropIfExists('sessions');
    }
};

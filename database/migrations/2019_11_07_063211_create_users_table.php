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
            $table->bigIncrements('id');
            $table->string('userid')->unique();;
            $table->string('password');
            $table->string('userpassword');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('bankname');
            $table->string('mobileno');
            $table->string('city');
            $table->string('csp_approval');
            $table->string('settlement_account');
            $table->string('area_verification');
            $table->string('software_installed');
            $table->string('work_training');
            $table->string('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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

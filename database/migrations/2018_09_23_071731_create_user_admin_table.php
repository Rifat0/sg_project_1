<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_admin', function (Blueprint $table) {
            $table->increments('user_admin_id');
            $table->string('status',30)->default('1');
            $table->string('avater',30)->default('0.png');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('birthday',10);
            $table->string('birthmonth',10);
            $table->string('birthyear',10);
            $table->string('gender',20);
            $table->string('address',255)->default('0');
            $table->string('mobile_email',100)->unique();
            $table->string('password',200);
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
        Schema::dropIfExists('user_admin');
    }
}

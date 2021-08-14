<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
           $table->id();
            $table->string('teacher_id',11);
            $table->string('index_id',20);
            $table->string('name',30);
            $table->string('designation',30);
            $table->string('email',30)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('degree',30);
            $table->string('address',30);
            $table->string('password',50);
            $table->string('mobile',30);
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
        Schema::dropIfExists('teachers');
    }
}

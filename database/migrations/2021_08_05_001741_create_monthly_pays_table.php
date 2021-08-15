<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlyPaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_pays', function (Blueprint $table) {
            $table->id();
            $table->string('reg_id',20);
            $table->date('date',50);
            $table->string('section',50);
            $table->string('roll',50);
            $table->string('receiptNo',20);
            $table->string('monthsName',50)->nullable();
            $table->double('admission',20,2)->nullable();
            $table->double('reAdmission',20,2)->nullable();
            $table->double('school',20,2)->nullable();
            $table->double('cityCorp',20,2)->nullable();
            $table->double('guide',20,2)->nullable();
            $table->double('redCrecent',20,2)->nullable();
            $table->double('current',20,2)->nullable();
            $table->double('due',20,2)->nullable();
            $table->double('advance',20,2)->nullable();
            $table->double('examFee',20,2)->nullable();
            $table->double('admitCard',20,2)->nullable();
            $table->double('syllebus',20,2)->nullable();
            $table->double('others',20,2)->nullable();
            $table->double('total',20,2);
            $table->string('pic');
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
        Schema::dropIfExists('monthly_pays');
    }
}

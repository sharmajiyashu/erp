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
        Schema::create('productions', function (Blueprint $table) {
            $table->id();
            $table->date('production_date')->nullable();
            $table->bigInteger('employee_id')->nullable();
            $table->bigInteger('department_id')->nullable();
            $table->time('punch_in')->nullable();
            $table->time('punch_out')->nullable();
            $table->string('salary_calculation')->nullable();
            $table->string('work_shift')->nullable();
            $table->string('status')->default(1);
            $table->longText('desc')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('productions');
    }
};

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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('remark')->nullable();
            $table->string('monthly_salary')->nullable();
            $table->string('per_day_salary')->nullable();
            $table->string('duty_hour')->nullable();
            $table->string('per_hour')->nullable();
            $table->date('salary_increase_date')->nullable();
            $table->string('transportation_cost')->nullable();
            $table->string('security_deposit')->nullable();
            $table->string('interest_salary_deposit')->nullable();
            $table->string('old_rate')->nullable();
            $table->date('old_rate_date')->nullable();
            $table->string('status')->default(1);
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
        Schema::dropIfExists('employees');
    }
};

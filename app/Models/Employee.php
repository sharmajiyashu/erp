<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillabe = ['employee_id','first_name','last_name','remark','monthly_salary','per_day_salary','duty_hour','per_hour','salary_increase_date','transportation_cost','security_deposit','interest_salary_deposit','old_rate','old_rate_date','status'];

    
}

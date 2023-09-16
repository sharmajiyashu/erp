<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['name','department_id','per_unit_cost_new','per_unit_cost_old','desc','status'];
    static $active = 1;
    static $inactive = 0;

    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['id','name','dob','gender','number','address','email','department','image','join_date','about'];
}

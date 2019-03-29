<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $employee = Employee::all();
        return view ('pages.index')->with('employee',$employee);
    }
//     public function getAgeAttribute()
// {
//     return Carbon::parse($this->attributes['birthdate'])->age;
// }
    
}

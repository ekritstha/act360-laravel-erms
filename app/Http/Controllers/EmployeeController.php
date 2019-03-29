<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Carbon\Carbon;
class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->image_url = 'images';
    }
    public function addEmployee(){
        return view ('pages.addEmployee');
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'number' => 'required',
            'address' => 'required',
            'email' => 'required',
            'department' => 'required',
            'image' => 'required',
            'join_date' => 'required',
            'about' => 'required'
        ]);
        if (!file_exists($this->image_url)) {
            mkdir($this->image_url);
        }
        if ($image = $request->file('image')) {
            $image_name = str_replace(' ', '_', rand(1857, 9899) . '_' . $image->getClientOriginalName());
            $image->move($this->image_url, $image_name);
        }

        $employee = new Employee;
        $employee->name = $request->input('name');
        $employee->dob = $request->input('dob');
        $employee->gender = $request->input('gender');
        $employee->number = $request->input('number');
        $employee->address = $request->input('address');
        $employee->email = $request->input('email');
        $employee->department = $request->input('department');
        $employee->image = $image_name;
        $employee->join_date = $request->input('join_date');
        $employee->about = $request->input('about');
        $employee->save();

        return redirect('/')->with('success','Employee successfully added');

    }
    public function edit($id){
        $employee = Employee::find($id);
        return view('pages.editEmployee')->with('employee',$employee);
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'number' => 'required',
            'address' => 'required',
            'email' => 'required',
            'department' => 'required',
            'join_date' => 'required',
            'about' => 'required'
        ]);

        $employee=Employee::find($id);
        $employee->name = $request->input('name');
        $employee->dob = $request->input('dob');
        $employee->gender = $request->input('gender');
        $employee->number = $request->input('number');
        $employee->address = $request->input('address');
        $employee->email = $request->input('email');
        $employee->department = $request->input('department');
        $employee->join_date = $request->input('join_date');
        $employee->about = $request->input('about');
        $employee->save();

        return redirect('/')->with('success','Employee details successfully edited');
    }
    public function destroy($id){
        $employee = Employee::find($id);
        $employee -> delete();
        return redirect('/')->with('success','Employee deleted');
    }
    public function list()
    {
        $employee = Employee::all();
        return view('pages.listEmployee')->with('employee',$employee);
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addDepartment(){
        return view ('pages.addDepartment');
    }
    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);


        $department = new Department;
        $department->title = $request->input('title');
        $department->description = $request->input('description');
        $department->save();
        return redirect('/')->with('success','Department successfully added');
    }
    public function edit($id){
        $department = Department::find($id);
        return view('pages.editDepartment')->with('department',$department);
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);

        $department = Department::find($id);
        $department->title = $request->input('title');
        $department->description = $request->input('description');
        $department->save();
        return redirect('/')->with('success','Department edited'); 
    }
    public function destroy($id){
        $department = Department::find($id);
        $department -> delete();
        return redirect('/')->with('success','Department deleted');
    }
    public function list()
    {
        $department = Department::all();
        return view('pages.listDepartment')->with('department',$department);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    public function index(){
        $data['students']=student::orderBy('id','asc')->paginate(5);
        return view('home',$data);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $request->validate([
            'student_id'=>'required',
            'name'=>'required'
        ]);
        $student =new Student;
        $student->student_id=$request->student_id;
        $student->name=$request->name;
        $student->save();
        return redirect()->route('students.index')->with('success','success');
    }
    public function edit(Student $student) {
        return view('edit',compact('student'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'student_id'=>'required',
            'name'=>'required'
        ]);
        $student = Student::find($id);
        $student->student_id=$request->student_id;
        $student->name=$request->name;
        $student->save();
        return redirect()->route('students.index')->with('success','updated');
    }
    public function destroy(Student $student){
        $student->delete();
        return redirect()->route('students.index')->with('success','deleted');
    }
}

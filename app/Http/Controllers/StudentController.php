<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //
    public function GetStudents(){
        return response()->json(Student::all(),200);
    }
    public function GetStudentsById($id){
        $student = Student::find($id);
        if(is_null($student)){
            return response()->json(['message'=>'Student not found']);
        }
        return response()->json(Student::find($id),200);
    }
    public function AddStudent(Request $request){
        $student = Student::create($request->all());
        return response($student,201);
    }
    public function UpdateStudent(Request $request,$id){
        $student = Student::find($id);
        $student->update($request->all());
        return response($student,200);
    }
    public function DeleteStudent(Request $request,$id){
        $student = Student::find($id);
        $student->delete();
        return response()->json(null,204);
    }
}

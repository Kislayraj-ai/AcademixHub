<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student ;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View {
            $students  = Student::all();
            return view('student.index')->with('students',$students) ;
    }


    public function create() : View {
        return view("student.create") ;
    }


    public function store(Request $re){
            $input  = $re->all() ; 
            Student::create($input);
            return redirect('students')->with('flash_message','Student Added');
    }

    public function show(string $id): View {
       $student = Student::find($id);

       return view('student.show')->with('students',$student) ;
}
    public function edit(string $id): View  {
        $student = Student::find($id);
        return view('student.edit')->with('students',$student);

    }
    public function update(Request $req ,  string $id) : RedirectResponse{
        $student = Student::find($id);
        $input = $req->all() ;

        $student->update($input) ;
        return redirect('students')->with('flash_message',"Student Updated");

    }


    public  function destroy(string $id):RedirectResponse {

        Student::destroy($id);
        return redirect('students')->with("flash message" , "Student Deleted") ;

    }


}
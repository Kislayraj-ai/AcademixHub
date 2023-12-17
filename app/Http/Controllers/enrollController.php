<?php

namespace App\Http\Controllers;

use App\Models\enrollModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class enrollController extends Controller
{
    //
    public function index(): View {
        $enrollQuery  = DB::select("select en.* ,  students.name ,courses.coursename  from enrolls as en left join students on en.student = students.id  
        left join courses on en.course = courses.id
    
        ") ;

        return view('enroll.index')->with('enrolls',$enrollQuery) ;
}


public function create() : View {
    $courses = DB::table('courses')->get();

    $students = DB::table('students')->get() ;

    return view("enroll.create" ,['students'=>$students ,'courses' =>  $courses ]) ;
    
}


public function store(Request $req){
        $input  = $req->all() ; 
        enrollModel::create($input);
        return redirect('enrolls')->with('flash_message','Student Added');
}


public function edit(string $id): View  {
    // $student =  enrollModel::fisnd($id);
    // echo "<pre>";
    // print_r($student); echo "</pre>"; die;

 $enrollEdit =   DB::select("select en.* ,  students.name ,courses.coursename  from enrolls as en left join students on en.student = students.id  
    left join courses on en.course = courses.id where en.id = :id
    " , ['id'=>$id]) ;

    $courses = DB::table('courses')->get() ;

    return view('enroll.edit' ,[ "courses" => $courses  ,'enroll'=>$enrollEdit ]);

}

public function update(Request $req ,  string $id) : RedirectResponse{
    $enroll = enrollModel::find($id);
    $input = $req->all() ;

    $enroll->update($input) ;
    return redirect('enrolls')->with('flash_message',"Enrollments Updated");

}




public  function destroy(string $id): RedirectResponse {

    enrollModel::destroy($id);
    return redirect('enrolls')->with("flash message" , "Student Deleted") ;

}

}
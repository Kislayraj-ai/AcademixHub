<?php

namespace App\Http\Controllers;

use App\Models\CourseModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class courseController extends Controller
{
    public function index(): View {
        $course  = CourseModel::all();
        return view('course.index')->with('courses',$course) ;
    }


    public function create() : View {
        return view("course.create") ;
    }

    public function store(Request $req){

        $courses = $req->all();
        CourseModel::create($courses);
        return redirect('courses') ;
    }

    public function show(string $id) : View {
        $courseView = DB::table('courses')
                        ->where("id","=",$id)->get() ;
        return view("course.show" ,['course'=> $courseView ]) ;
    }


    public function edit(string $id)  {
        $courseEdit =  DB::table('courses')
        ->where("id","=",$id)->get() ;
        
        return view('course.edit' , ['courses'=>$courseEdit]);
    }

    
    public function update(Request $req , string $id)  {
        $courseData = CourseModel::find($id);
        $courseData->update($req->all());
        
        return redirect('courses')->with('falsh message',"Course Updated") ;
    }


    public function destroy(string $id)  {
    $courseDestroy = CourseModel::destroy($id);

    if($courseDestroy){
        return redirect('courses');

    }else{
        echo "Error Occured On Deleting " ;
    }
    
    }





    

}
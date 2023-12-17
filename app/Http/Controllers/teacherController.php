<?php

namespace App\Http\Controllers;

use App\Models\TeacherModal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class teacherController extends Controller
{

    public function createTeacher(){
        $course = DB::table("courses")->get();
        
        return view('teacher.create' ,['courses'=>$course] );
    }
    public function showAllTeacher(){
        $tb = DB::table("teachers")->select("teachers.*" , "courses.coursename as selectedCourse")
        ->leftJoin('courses', 'courses.id', '=', 'teachers.courseName')
        ->get();
        
        return view('teacher.index' ,['Teachers' => $tb]);
        
    }
    public function addTeacher(Request $req){
        // $tb = DB::insert
        $teacher = $req->all() ;
        // print_r($teacher);die;
        TeacherModal::create($teacher) ;

        return redirect()->route('teacher');
        // return redirect()->route('home');
        
    }
    
    public function showSingleTeacher(string $id){
    $teacher = DB::select("select th.* , cs.coursename  as courseName from teachers as th  left join courses as cs on th.courseName = cs.id where th.id = :id " , ['id'=>$id]) ;
        
    return view('teacher.show',['teacher'=>$teacher]) ;
    
    }

    public function editSingleTeacher(string $id){
        $teacher = DB::select("select th.* ,  cs.coursename  as nameCourse from teachers as th  left join courses as cs on th.courseName = cs.id where th.id = :id " , ['id'=>$id]) ;

        $course = DB::table("courses")->get();
        return view('teacher.edit',['teacher'=>$teacher , 'courses' =>  $course]) ;
        
    }

    public function updateSingleTeacher(Request $req , string $id){
        $teacher = DB::update("update teachers set teachername = :teachername , teacherage = :teacherage , coursename = :coursename , teacheremail =  :teacheremail 
        where id = :id
        "  
        ,
        ['teachername'=>$req->teachername , 'teacherage' => $req->teacherage ,'coursename' => $req->courseName , 'teacheremail' => $req->teacheremail  , 'id' => $id]) ;

        return redirect()->route('teacher') ;
        
    }
    
    public  function deleteTeacher(string $id) {

        // teacherController::destroy($id);
        $teacher = DB::table('teachers')
        ->where("id","=",$id)
        ->delete();
        
        if($teacher){
        return redirect('teacher')->with("flash message" , "Student Deleted") ;
        }else{
            echo "Some Error Occurred" ;
        }

    }
    
}
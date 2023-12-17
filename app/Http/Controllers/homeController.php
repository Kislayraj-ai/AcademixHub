<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function viewAllStudentData(){
        $data = DB::table('students as stud')
        ->select("stud.name" ,"en.*" ,"cs.coursename" ,"tc.teachername")
        ->leftJoin('enrolls as en', 'en.student', '=', 'stud.id')
        ->leftJoin('courses as cs', 'cs.id', '=', 'en.course')
        ->leftJoin('teachers as tc', 'tc.courseName', '=', 'cs.id')
        ->get();

        return view('home',['data'=> $data])->with('loginSuccess',true);
    }


    public function loginToPortal(Request $req){
        $data = $req->all() ;

        $user = strtolower($data['username']) ;
        $pass = $data['password'];
        $loginDetails = DB::table('login_studs')
        ->where("username","=",$user)
        ->get();
        
        $userPass = '' ;
        foreach( $loginDetails as $val){
         $userPass =  $val->password   ;
         
        }
      if( $userPass == $pass){
            session_start();

            $_SESSION['username'] = ucfirst($user) ;

            return redirect('home');
      }else{
        return redirect('/');
      }
    }

    public function logoutPortal(){
        session_start();

        session_unset();
        session_destroy();

        return redirect("/");
        
    }

}
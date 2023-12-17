<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paymentController extends Controller
{
    //
    public function index(): View{

        $paymentsData = DB::select("select stud.* ,en.id as enrollID ,en.payment ,cs.* from students stud
         inner join enrolls
            en on stud.id = en.student 
            inner join courses cs on cs.id = en.course
        ") ;

        return view('payment.index',["paymentsData"=> $paymentsData ]) ;
    }

    public function show(string $id){

        $paied  = DB::update('update enrolls set payment = 1 where id = :id  and payment = 0' ,['id'=>$id]) ;
        if($paied){
            return redirect('payments');
        }else{
            echo "Error in payments " ;
        }
   
    }
}
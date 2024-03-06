<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class InnerJoinController extends Controller
{   
    public function inerjoiN(Request $request){

        $search= $request['search']?? "";
        if ($search != ""){ 
            $jd = DB::table('employees')
                    ->join('jobs', 'employees.JOB_ID', '=', 'jobs.JOB_ID')
                    ->select('employees.*', 'jobs.*')
                    
                    ->where('employees.FIRST_NAME', '=',$search)
                    ->paginate(10);
                    return view('join', ['data' => $jd]);
                    //->get();

        }else{
        $jd = DB::table('employees')
                    ->join('jobs', 'employees.JOB_ID', '=', 'jobs.JOB_ID')
                    ->select('employees.*', 'jobs.*')
                    ->paginate(10);
                    //->where('employees.FIRST_NAME', 'like','S%')
                    //->get();


                    
       
        //return $jd;
        return view('join', ['data' => $jd]);
        }
        
        }




    public function rightjoiN(Request $request){
        $search= $request['search']?? "";
        if ($search != ""){ 
            $jd = DB::table('employees')
                    ->rightJoin('jobs', 'employees.JOB_ID', '=', 'jobs.JOB_ID')

                    ->where('employees.FIRST_NAME', '=',$search)
                    ->paginate(10);
                    return view('join', ['data' => $jd]);
        }else{

        $jd = DB::table('employees')
                    ->rightJoin('jobs', 'employees.JOB_ID', '=', 'jobs.JOB_ID')

                    ->paginate(10);
                    //->get();
                    

        return view('right', ['data' => $jd]);
}
    }


public function leftjoiN(Request $request){
    $search= $request['search']?? "";
    if ($search != ""){ 
        $jd = DB::table('employees')
                        ->join('departments', 'employees.DEPARTMENT_ID', '=', 'departments.DEPARTMENT_ID')
                        //->select('employees.*', 'departments.DEPARMENT_NAME')
                        ->where('employees.FIRST_NAME', '=',$search)
                        //->get();
                        ->paginate(10);
           
            //return $jd;
            return view('left', ['data' => $jd]);
    }else{
   
    $jd = DB::table('employees')
                    ->join('departments', 'employees.DEPARTMENT_ID', '=', 'departments.DEPARTMENT_ID')
                    //->select('employees.*', 'departments.DEPARMENT_NAME')
                    //->where('employees.FIRST_NAME', 'like','t%')
                    //->get();
                    ->paginate(10);
       
        //return $jd;
        return view('left', ['data' => $jd]);}

    
}
}
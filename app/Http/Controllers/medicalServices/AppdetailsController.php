<?php

namespace App\Http\Controllers\medicalServices;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Workbasket;
use App\Caseinfo;
use App\Reftable;
use DB;
use Cookie;
use Response;
use Mail;

class AppdetailsController extends Controller
{
    public function index(Request $req)
    {
        $operid = session('loginname');
        if ($operid == '')
        {
            return redirect('/login');
        }
        //  $caserefno= session('caserefno');
        $caserefno = $req ->query('caserefno');
        // $casetype = $req  ->query('casetype');
        $casetype =  'Occupational Diesease';

        $schemerefno = $req ->query('schemerefno');
        // return $schemerefno;
        session(['caserefno'=>$caserefno]);
        session(['schemerefno'=>$schemerefno]);
       
        
         
        if($casetype=='Accident')
        {
            return redirect('/noticeAccident');
        }
        else if($casetype =='Occupational Diesease')
        {
            return redirect('/noticeOd');
        }

        else{
            return redirect('/Medicallola');
        }
        //  ,'OBdetails'=>$OBdetails,'Empdetails'=>$Empdetails,'Accdetails'=>$Accdetails,'SDNotice'=>$SDNotice,'Ilatdetails'=>$Ilatdetails,'Ddetails'=>$Ddetails,'MCDetails'=>$MCDetails,'calculateAge'=>$calculateAge
    }

    
    
}

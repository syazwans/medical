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

class WbmedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operid = session('loginname');
        if ($operid == '')
        {
            return redirect('/login');
        }

       

        $jsondecodems= "";
        $this->getWbMedicalServices($jsondecodems);
        
       
        $wbmedical = $jsondecodems;
        // $caserefno= $jsondecodems->{'caserefno'};
       
        //  session(['caserefno'=>$caserefno]);
          
         return view('MedicalServices.general.medical_services',['wbmedical'=>$wbmedical]);


    }

    public function getWbMedicalServices(&$jsondecodems)
    {    
        $operid= session('loginname');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetWorkBasket?loginname='.$operid;

        //  return $url;

        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        curl_close($ch);
        $jsondecodems = json_decode($result);

        // return $jsondecodems;
        //close connection
        // dd($url);
        
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
}


        // if($jsondecodems && $jsondecodems != '')
        // {
        //     $errorcode = $jsondecodems->{'errorcode'};
        //     if($errorcode == 0)
        //     {
        //         $msrefno = $jsondecodems->{'msrefno'};
        //     }
        //     else
        //     {
        //         $msrefno = null;
        //     }
        // }
        

        // $a=$this->getWbMedicalServices($jsondecodems);

        // return $a;
        // return $jsondecodems;
        // if ($jsondecodems && $jsondecodems!='')//irina
        // {
        //     // return $jsondecodems;
        //     $msrefno = $jsondecodems->{'msrefno'};
        //     // return $msrefno;
        //     // session(['mfrefno'=>$msrefno]);
        //     // return $msrefno;
        //     // return redirect('/medical_services');
        // }
        // else
        // {
        //     $errorcode = $jsondecodems->{'errorcode'};
        //     // return $errorcode;
        // }
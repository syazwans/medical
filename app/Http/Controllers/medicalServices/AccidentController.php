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

class AccidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $id = session('caserefno');

        $jsondecodems= "";

        $a=$this->getAppdetails($jsondecodems,$id);
        // return $a;
        //  dd($jsondecodems);
       
        $appdetails = $jsondecodems;
        //  return $appdetails;

        $jsondecodeobd= "";
        $a=$this->getOBD($jsondecodeobd,$id);
        // return $a;
        //  dd($jsondecodeobd);
       
        // $OBdetails = $jsondecodeobd;

        // $birthyear = $jsondecodeobd->{'dob'};
        // $birthyear1 = substr($birthyear, 0, 4);
        // $currentYear = date('Y');
        // $calculateAge = $currentYear - $birthyear1;
        //  return $OBdetails;
        // dd($birthyear);

        
        $jsondecodeed= "";
        $a=$this->getEmployer($jsondecodeed,$id);
        // return $a;
        //  dd($jsondecodeed);
       
        $Empdetails = $jsondecodeed;

        $jsondecodeacc= "";
        $a=$this->getAcc($jsondecodeacc,$id);
        // return $a;
        //  dd($jsondecodeacc);
       
        $Accdetails = $jsondecodeacc;

        $jsondecodeSDN= "";
        $a=$this->getSDN($jsondecodeSDN,$id);
        // return $a;
        //  dd($jsondecodeacc);
       
        $SDNotice = $jsondecodeSDN;
        
        $jsondecodeIlat= "";
        $a=$this->getIlat($jsondecodeIlat,$id);
        // return $a;
        //  dd($jsondecodeacc);
       
        $Ilatdetails = $jsondecodeIlat;
        

        $jsondecodeddetails= "";
        $a=$this->getDDetails($jsondecodeddetails,$id);
        // return $a;
        //  dd($jsondecodeacc);
       
        $Ddetails = $jsondecodeddetails;


        $jsondecodeMCD= "";
        $a=$this->getMCD($jsondecodeMCD,$id);
        // return $a;
        //  dd($jsondecodeacc);
       
        $MCDetails = $jsondecodeMCD;


        $jsondecodeFcase="";
        $a=$this->getFcase($jsondecodeFcase,$id);

        $FactC = $jsondecodeFcase;

        $jsondecodecurrentC="";
        $a=$this->getcurrentCase($jsondecodecurrentC,$id);

        $cCase = $jsondecodecurrentC;

        return view('MedicalServices.noticeAccident.information',['appdetails'=>$appdetails,'FactC'=>$FactC,'cCase'=>$cCase]);
    }
    public function getAppdetails(&$jsondecodems,$id)
    {    
        // $caserefno= session('caserefno');
        
        $caserefno = $id;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetApplicationDetails?caserefno='.$caserefno;

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
        // close connection
        // dd($url);
        // dd($jsondecodems->errorcode);
        // dd($result);
        // $return = $jsondecodems->errorcode;
        
        // if($return =='-1')
        // {
        //     $appdetails->brname = '';
            
            // $brname = '';
        //    $jsondecodems = '';
        
        // else{
        //     $jsondecodems = json_decode($result);
        // }
        
    }

    public function getOBD(&$jsondecodeobd,$id)
    {
        $caserefno = $id;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetOBDetails?caserefno='.$caserefno;
                          

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
        $jsondecodeobd = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);
    }
    public function getEmployer(&$jsondecodeed,$id)
    {
        $caserefno = $id;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetEmployeeDetails?caserefno='.$caserefno;
                          

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
        $jsondecodeed = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);
    }

    public function getAcc(&$jsondecodeacc,$id)
    {
        $caserefno = $id;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetAccNoticeDetails?caserefno='.$caserefno;
                          

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
        $jsondecodeacc = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);
    }

    public function getSDN(&$jsondecodeSDN,$id)
    {
        $caserefno = $id;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetSDNoticeDetails?caserefno='.$caserefno;
                          

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
        $jsondecodeSDN = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);
    }
    public function getIlat(&$jsondecodeIlat,$id)
    {
        $caserefno = $id;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetILATDetails?caserefno='.$caserefno;
                          

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
        $jsondecodeIlat = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);
    }
    public function getDDetails(&$jsondecodeddetails,$id)
    {
        $caserefno = $id;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetDeathDetails?caserefno='.$caserefno;
                          

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
        $jsondecodeddetails = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);
    }


    public function getMCD(&$jsondecodeMCD,$id)
    {
        $caserefno = $id;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetMCDetails?caserefno='.$caserefno;
                          

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
        $jsondecodeMCD = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //-------------------------------------------------------------------

    public function getFcase(&$jsondecodeFcase,$id)
    {
        $caserefno = $id;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetFactCaseInfo?caserefno='.$caserefno;
                          

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
        $jsondecodeFcase = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);


        
    }
    public function getcurrentCase(&$jsondecodecurrentC,$id)
    {
        $caserefno = $id;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetCurrentCaseDetails?caserefno='.$caserefno;
                          

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
        $jsondecodecurrentC = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);


        
    }

    
}

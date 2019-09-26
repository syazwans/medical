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
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;


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
        // dd($appdetails);
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
        // dd($caserefno);
        // $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetApplicationDetails?caserefno='.$caserefno;

        //  return $url;

        // $ch = curl_init();
        
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_PROXY, '');
        
        // curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        // curl_close($ch);
        // $jsondecodems = json_decode($result);

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
        try {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => env('WS_IP', 'localhost').'/api/wsmotion/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
            // dd($caserefno);
        $resource = array(
            "caserefno"=> $caserefno);
        $j = json_encode($resource);
        //  dd($j);
        $response = $client->request('GET', 'GetApplicationDetails', ['headers' => ['Content-Type' => 'application/json'],'body' => $j]);
        
        $body = $response->getBody()->getContents();
        $stringBody = (string) $body;
        // $_content = json_decode($stringBody);
       // $_content = json_encode($stringBody,true);
        // dd($body);
        $jsondecodems = json_decode($stringBody);
        // dd($jsondecodems);

        return $jsondecodems;
        // return  $_content ;
       // return new ApiResource($_content);
        }

        catch(\Exception $e)
        {
            return $e->getMessage();
        }
        
    }

    public function getOBD(&$jsondecodeobd,$id)
    {
        $caserefno = $id;
        // $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetOBDetails?caserefno='.$caserefno;
                          

        //  return $url;

        // $ch = curl_init();
        
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_PROXY, '');
        
        // curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        // curl_close($ch);
        // $jsondecodeobd = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);

        try {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => env('WS_IP', 'localhost').'/api/wsmotion/',
                // You can set any number of default request options.
                'timeout'  => 2.0,
            ]);
            
            $response = $client->request('GET', 'GetOBDetails', ['headers' => ['Content-Type' => 'application/json'],'body' => $j]);
            $body = $response->getBody()->getContents();
            $stringBody = (string) $body;

            $jsondecodeobd = json_decode($stringBody);

            return $jsondecodeobd;
            }
            catch(\Exception $e)
        {
            return $e->getMessage();
        }


    }
    public function getEmployer(&$jsondecodeed,$id)
    {
        $caserefno = $id;
        // $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetEmployeeDetails?caserefno='.$caserefno;
                          

        //  return $url;

        // $ch = curl_init();
        
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_PROXY, '');
        
        // curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        // curl_close($ch);
        // $jsondecodeed = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);

        try {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => env('WS_IP', 'localhost').'/api/wsmotion/',
                // You can set any number of default request options.
                'timeout'  => 2.0,
            ]);
            
            $response = $client->request('GET', 'GetEmployeeDetails', ['headers' => ['Content-Type' => 'application/json'],'body' => $j]);
            $body = $response->getBody()->getContents();
            $stringBody = (string) $body;

            $jsondecodeed = json_decode($stringBody);

            return $jsondecodeed;
            }
            catch(\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function getAcc(&$jsondecodeacc,$id)
    {
        $caserefno = $id;
        // $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetAccNoticeDetails?caserefno='.$caserefno;
                          

        //  return $url;

        // $ch = curl_init();
        
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_PROXY, '');
        
        // curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        // curl_close($ch);
        // $jsondecodeacc = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);

        try {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => env('WS_IP', 'localhost').'/api/wsmotion/',
                // You can set any number of default request options.
                'timeout'  => 2.0,
            ]);
            
            $response = $client->request('GET', 'GetAccNoticeDetails', ['headers' => ['Content-Type' => 'application/json'],'body' => $j]);
            $body = $response->getBody()->getContents();
            $stringBody = (string) $body;

            $jsondecodeacc = json_decode($stringBody);

            return $jsondecodeacc;
            }
            catch(\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function getSDN(&$jsondecodeSDN,$id)
    {
        $caserefno = $id;
        // $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetSDNoticeDetails?caserefno='.$caserefno;
                          

        //  return $url;

        // $ch = curl_init();
        
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_PROXY, '');
        
        // curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        // curl_close($ch);
        // $jsondecodeSDN = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);

        try {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => env('WS_IP', 'localhost').'/api/wsmotion/',
                // You can set any number of default request options.
                'timeout'  => 2.0,
            ]);
            
            $response = $client->request('GET', 'GetSDNoticeDetails', ['headers' => ['Content-Type' => 'application/json'],'body' => $j]);
            $body = $response->getBody()->getContents();
            $stringBody = (string) $body;

            $jsondecodeSDN = json_decode($stringBody);

            return $jsondecodeSDN;
            }
            catch(\Exception $e)
        {
            return $e->getMessage();
        }
    }
    public function getIlat(&$jsondecodeIlat,$id)
    {
        $caserefno = $id;
        // $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetILATDetails?caserefno='.$caserefno;
                          

        //  return $url;

        // $ch = curl_init();
        
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_PROXY, '');
        
        // curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        // curl_close($ch);
        // $jsondecodeIlat = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);

        try {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => env('WS_IP', 'localhost').'/api/wsmotion/',
                // You can set any number of default request options.
                'timeout'  => 2.0,
            ]);
            
            $response = $client->request('GET', 'GetILATDetails', ['headers' => ['Content-Type' => 'application/json'],'body' => $j]);
            $body = $response->getBody()->getContents();
            $stringBody = (string) $body;

            $jsondecodeIlat = json_decode($stringBody);

            return $jsondecodeIlat;
            }
            catch(\Exception $e)
        {
            return $e->getMessage();
        }
    }
    public function getDDetails(&$jsondecodeddetails,$id)
    {
        $caserefno = $id;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetDeathDetails?caserefno='.$caserefno;
                          

        //  return $url;

        // $ch = curl_init();
        
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_PROXY, '');
        
        // curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        // curl_close($ch);
        // $jsondecodeddetails = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);

        try {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => env('WS_IP', 'localhost').'/api/wsmotion/',
                // You can set any number of default request options.
                'timeout'  => 2.0,
            ]);
            
            $response = $client->request('GET', 'GetDeathDetails', ['headers' => ['Content-Type' => 'application/json'],'body' => $j]);
            $body = $response->getBody()->getContents();
            $stringBody = (string) $body;

            $jsondecodeddetails = json_decode($stringBody);

            return $jsondecodeddetails;
            }
            catch(\Exception $e)
        {
            return $e->getMessage();
        }
    }


    public function getMCD(&$jsondecodeMCD,$id)
    {
        $caserefno = $id;
        // $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetMCDetails?caserefno='.$caserefno;
                          

        //  return $url;

        // $ch = curl_init();
        
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_PROXY, '');
        
        // curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        // curl_close($ch);
        // $jsondecodeMCD = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);

        try {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => env('WS_IP', 'localhost').'/api/wsmotion/',
                // You can set any number of default request options.
                'timeout'  => 2.0,
            ]);
            
            $response = $client->request('GET', 'GetMCDetails', ['headers' => ['Content-Type' => 'application/json'],'body' => $j]);
            $body = $response->getBody()->getContents();
            $stringBody = (string) $body;

            $jsondecodeMCD = json_decode($stringBody);

            return $jsondecodeMCD;
            }
            catch(\Exception $e)
        {
            return $e->getMessage();
        }
        
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
        // $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetFactCaseInfo?caserefno='.$caserefno;
                          

        //  return $url;

        // $ch = curl_init();
        
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_PROXY, '');
        
        // curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        // curl_close($ch);
        // $jsondecodeFcase = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);
        
        try {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => env('WS_IP', 'localhost').'/api/wsmotion/',
                // You can set any number of default request options.
                'timeout'  => 2.0,
            ]);
            
            $response = $client->request('GET', 'GetFactCaseInfo', ['headers' => ['Content-Type' => 'application/json'],'body' => $j]);
            $body = $response->getBody()->getContents();
            $stringBody = (string) $body;

            $jsondecodeFcase = json_decode($stringBody);

            return $jsondecodeFcase;
            }
            catch(\Exception $e)
        {
            return $e->getMessage();
        }

        
    }
    public function getcurrentCase(&$jsondecodecurrentC,$id)
    {
        $caserefno = $id;
        // $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/GetCurrentCaseDetails?caserefno='.$caserefno;
                          

        //  return $url;

        // $ch = curl_init();
        
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_PROXY, '');
        
        // curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        // curl_close($ch);
        // $jsondecodecurrentC = json_decode($result);

        //  return $jsondecodeobd;
        //close connection
        // dd($url);

        try {
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => env('WS_IP', 'localhost').'/api/wsmotion/',
                // You can set any number of default request options.
                'timeout'  => 2.0,
            ]);
            
            $response = $client->request('GET', 'GetCurrentCaseDetails', ['headers' => ['Content-Type' => 'application/json'],'body' => $j]);
            $body = $response->getBody()->getContents();
            $stringBody = (string) $body;

            $jsondecodecurrentC = json_decode($stringBody);

            return $jsondecodecurrentC;
            }
            catch(\Exception $e)
        {
            return $e->getMessage();
        }

        
    }

    
}

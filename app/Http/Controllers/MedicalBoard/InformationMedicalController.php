<?php

namespace App\Http\Controllers\MedicalBoard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class InformationMedicalController extends Controller
{
    public function index($id)
    {
        $jsondecodeobdetails="";
        $this->getObDetails($jsondecodeobdetails, $id);

        $jsondecodeapplicationdetails="";
        $this->getApplicationDetails($jsondecodeapplicationdetails, $id);

        $jsondecodepreviousclaims="";
        $this->getPreviousClaims($jsondecodepreviousclaims);

        $obdetails = $jsondecodeobdetails;
        $applicationdetails = $jsondecodeapplicationdetails;
        $previousclaims = $jsondecodepreviousclaims;

        // dd($previousclaims);

        $birthyear = $jsondecodeobdetails->{'dob'};
        $birthyear1 = substr($birthyear, 0, 4);
        $currentYear = date('Y');
        $calculateAge = $currentYear - $birthyear1;

        return view('medical_board.information',['obdetails'=> $obdetails, 'calculateAge' => $calculateAge, 'applicationdetails' => $applicationdetails, 'previousclaims' => $previousclaims]);
    }

    public function getObDetails(&$jsondecodeobdetails, $id)
    {
    	// $caserefno=session('caserefno');
        $caserefno=$id;
    	// dd($id);

        // $url = 'http://wsmedical.localhost/api/wsmotion/getobprofilebycaserefno?caserefno='.$caserefno;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getobprofilebycaserefno?caserefno='.$caserefno;
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $jsondecodeobdetails =json_decode($result);

        //close connection
        curl_close($ch);
    }

    public function getApplicationDetails(&$jsondecodeapplicationdetails, $id)
    {
        // $caserefno=session('caserefno');
        $caserefno=$id;
        $loginname = session('loginname');
        // dd($loginname);

        // $url = 'http://wsmedical.localhost/api/wsmotion/getapplicationsdetails?caserefno='.$caserefno.'&loginname='.$loginname;
        // dd($url);
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getapplicationsdetails?caserefno='.$caserefno.'&loginname='.$loginname;
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $jsondecodeapplicationdetails =json_decode($result);

        //close connection
        curl_close($ch);
    }

    public function getPreviousClaims(&$jsondecodepreviousclaims)
    {
        $loginname = session('loginname');
        // dd($loginname);

        // $url = 'http://wsmedical.localhost/api/wsmotion/getpreviousclaims?loginname='.$loginname;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getpreviousclaims?loginname='.$loginname;
        // dd($url);
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $jsondecodepreviousclaims =json_decode($result);

        //close connection
        curl_close($ch);
    }

}

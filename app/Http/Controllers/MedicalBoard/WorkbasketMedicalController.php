<?php

namespace App\Http\Controllers\MedicalBoard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class WorkbasketMedicalController extends Controller
{
    public function index()
    {

        $operid = session('loginname');
        
        if ($operid == '')
        {
            return redirect('/login');
        }

        $jsondecodeworkbasket = '';
        $this->workbasket($jsondecodeworkbasket);

        $workbasket = $jsondecodeworkbasket;
        // return $workbasket;

        if($workbasket == '')
            $workbasket = null;
        
        return view('medical_board.workbasket',['workbasket'=>$workbasket]);
    }

    public function workbasket(&$jsondecodeworkbasket)
    {
        $operid=session('loginname');

        // $url = 'http://wsmedical.localhost/api/wsmotion/getworkbasket?loginname='.$operid;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getworkbasket?loginname='.$operid;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecodeworkbasket = json_decode($result);
        // dd($result);
        //close connection
        curl_close($ch);
    }


}

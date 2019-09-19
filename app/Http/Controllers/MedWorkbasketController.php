<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\MedWorkbasket;
use DB;
use Cookie;
use Response;
use Mail;

class MedWorkbasketController extends Controller
{
    public function workbasket()
    {

    	$workbasket = new MedWorkbasket;

        $operid = session('loginname');
        
        if ($operid == '')
        {
            return redirect('/login');
        }

        $result = DB::select('select w.wb_med_id, w.date, w.time, w.schemerefno, w.revisionrefno, w.medicalrefno, w.msrefno, w.source, w.status 
        from workbasket_medical w and w.operid=?',[$operid]);

        // $now = time(); // or your date as well
        // $your_date = strtotime('date');
        // $datediff = $now - $your_date;

        $workbasket->workbasket = $result;

        return view('homemed',['workbasket'=>$result]);

        // $workbasket = Workbasket::all();
        // return view('home', compact ('workbasket'));
    }
}

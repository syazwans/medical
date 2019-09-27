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

class IlatController extends Controller
{
    public function index(){
   
    return view('MedicalServices.ILAT.index');
    }
    
}

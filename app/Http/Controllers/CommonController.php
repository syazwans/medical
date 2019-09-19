<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ObProfile;
use DB;
use Illuminate\Support\Facades\Redirect;


class CommonController extends Controller
{
    //irina
    public function obForm(Request $req)
    {
        return Redirect()->back()->with(['message' => 'The Message']);
        //return redirect()->back();
    }
    
    public function success()
    {
        return view('success');
    }
    
    function backhome()
    {
        session(['caserefno'=>'', 'uniquerefno'=>'','accddate'=>'', 'accdtime'=>'', 'empcode'=>'']);
        session(['accdmonth'=>'', 'accdyear'=>'','mcmonth'=>'', 'mcyear'=>'']);
        session(['messagent'=>'','messageob'=>'','messagewage'=>'','messageconf'=>'','schemerefno'=>'']);
        session(['casestatus'=>'','source'=>'','messagemc'=>'','messageacc'=>'','messagebank'=>'']);
        session(['messagecert'=>'','messageemp'=>'','messageod'=>'','noticetype'=>'','idno'=>'','idtype'=>'']);
        return redirect('/home');
    }


    public function UpdMC(Request $req)
    {
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        //$idno= session('idno');
        $caserefno = session('caserefno');//session('caserefno');
        
        $clinicinfo = $req->clinicinfo;
        $hussts = $req->hussts;
        $startdate = $req->startdate;
        if (strlen($startdate) == 10)
        {
            $startdate = substr($startdate,6,4).substr($startdate,3,2).substr($startdate,0,2);
        }
        
        
        $enddate = $req->enddate;
        if (strlen($enddate) == 10)
        {
            $enddate = substr($enddate,6,4).substr($enddate,3,2).substr($enddate,0,2);
        }
        
        
        $mcsts = '08';//New
        $totalmc = $req->totalmc;
        
        $wagespaid = $req->wagedpaid;
        
        $workstartdate = $req->workstartdate;
        if (strlen($workstartdate) == 10)
        {
            $workstartdate = substr($workstartdate,6,4).substr($workstartdate,3,2).substr($workstartdate,0,2);
        }

        $workenddate = $req->workenddate;
        if (strlen($workenddate) == 10)
        {
            $workenddate = substr($workenddate,6,4).substr($workenddate,3,2).substr($workenddate,0,2);
        }
        
        $totalwork = $req->totalwork;
        $statuswork = $req->statuswork;
        $wagespaid = $req->wagespaid;
       
        $workinfo = array();
        $workinfo[0]= ['wagespaid'=>$wagespaid, 'workstartdate'=>$workstartdate, 'workenddate'=>$workenddate, 
        'totalwork'=>$totalwork, 'statuswork'=>$statuswork];
       
        $mcinfo = array();
        $mcinfo[0] = ['husts'=>$hussts, 'startdate'=>$startdate,'enddate'=>$enddate, 'mcsts'=>$mcsts, 'totalmc'=>$totalmc, 'workinfo'=>$workinfo];
        
        

        // $clinicinfo = array();
        // $clinicinfo[0] = ['mcinfo'=>$mcinfo];
        
        $mcdata = ['operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno, 'clinicinfo'=>$clinicinfo, 'mcinfo'=>$mcinfo, 'workinfo'=>$workinfo];
        
        $jsondata = json_encode($mcdata);
        
        // return $jsondata;


        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updmcinfo';
        

        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
        
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        curl_close($ch);
        
        $res = json_decode($result);
        // return $res;
        $retcode = $res->{'errorcode'};
        
        if ($retcode == 0)
        {
            return redirect()->back()->with('messagemc','Save successful');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
        }
        else
        {
            return redirect()->back()->with('messagemc','Save unsuccessful');
        }
        
        
    }
    
    //POST EMPLOYER AT DB - HANNIS
    public function postEmployer(Request $req)
    {
        $caserefno= session('caserefno');
        $operid= session('loginname');
        $brcode= session('loginbranchcode');
        $empcode= $req->empcode;
        $empname = $req->empname;
        $emptype= $req->emptype;
        $add1 = $req->add1;
        $add2 = $req->add2;
        $add3 = $req->add3;
        $postcode = $req->postcode;
        $city = $req->city;
        $statecode = $req->state;
        $pobox = $req->pobox;
        $lockedbag = $req->lockedbag;
        $wdt = $req->wdt;
        $telno = $req->telno;
        $faxno = $req->faxno;
        $email = $req->email;

        $employer = ['caserefno'=>$caserefno,'operid'=>$operid,'brcode'=>$brcode, 'empcode'=>$empcode,
            'empname'=>$empname, 'emptype'=>$emptype,'add1'=>$add1,'add2'=>$add2,'add3'=>$add3, 'postcode'=>$postcode,
            'city'=>$city, 'statecode'=>$statecode,'pobox'=>$pobox, 'lockedbag'=>$lockedbag, 'wdt'=>$wdt, 'phoneno'=>$telno, 'faxno'=>$faxno, 'email'=>$email];

        $jsondata = json_encode($employer);
        
        //return $jsondata;


        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newemployer';

        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
        
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        curl_close($ch);
        
        //return $result;
        
        $jsondecode = json_decode($result);
        
        if ($jsondecode && $jsondecode != '')
        {
            $errorcode = $jsondecode->{'errorcode'};
            if ($errorcode == 0)
            {
                // session(['empcode',$empcode]);
                return redirect()->back()->withInput(['tab'=>'employer'])->with('messageemp','Save successful');
            }
            else
            {
                return redirect()->back()->withInput(['tab'=>'employer'])->with('messageemp','Save unsuccessful');
            }
        }
        
    }

    
    public function getnotice(Request $req)
    {
        
        $noticetype = $req->notice_type;
        
        if ($noticetype == '01')
        {
            return view('noticeAccident.index');
        }
        else if ($noticetype == '02')
        {
            return view('noticeOd.index');
        }
        else if ($noticetype == '03')
        {
            return view('noticeinvalidity.index');
        }
        else if ($noticetype == '04')
        {
            return view('noticedeath.index');
        }
    }
    
    // GET EMPLOYER FROM DB - HANNIS 
    public function getEmployer(&$jsondecodeEmployer)
    {
        
        $caserefno = session('caserefno');

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/employer?caserefno='.$caserefno;
        
        // if ($accdrefno != '')
        // {
        //     $url = $url.'&accdrefno='.$accdrefno;
        // }
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    
        //close connection
        curl_close($ch);

        $jsondecodeEmployer= json_decode ($result);
    
    }
    
    public function getObProfile(&$jsondecode)
    {    
        $idno= session('idno');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/obprofile?idno='.$idno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecode = json_decode($result);
        //close connection
        curl_close($ch);
    }
    
    //POST OBFORM AT DB 
    public function postObForm(Request $req)
    {
        $idno  = $req->idno;
        $previdno = $req->previdno;
        $idtype = $req->idtype;
        $oldidno = '';
        $passportno='';
        $name = $req->name;
        $dob = $req->dob;
        $dob = str_replace('-', '', $dob);
        //$dob = substr($req->dob,6,4).substr($req->dob, 3,2).substr($req->dob,0,2);
        //$dob = 
        $race = $req->race;
        $gender = $req->gender;
        $occupation = $req->occupation;
        $dodeath='';
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        
        $add1 = $req->add1;
        $add2 = $req->add2;
        $add3 = $req->add3;
        $city = $req->city;
        $state = $req->state;
        $postcode = $req->postcode;
        $telno = $req->telno;
        $mobileno = $req->mobileno;
        $email = $req->email;
        $nationality = $req->nationality;
        $pobox = $req->pobox;
        $lockedbag = $req->lockedbag;
        $wdt = $req->wdt;
        
        $caserefno = session('caserefno');
        $noticetype = session('noticetype');

        $obForm = ['caserefno'=>$caserefno,'noticetype'=>$noticetype,'idno'=> $idno,'previdno'=>$previdno, 'idtype'=> $idtype,'oldidno' =>$oldidno, 'passportno'=>$passportno,
            'name'=> $name, 'dob'=> $dob, 'race'=> $race, 'gender'=> $gender, 'occupation'=> $occupation, 'dodeath'=>$dodeath,
            'operid'=>$operid, 'brcode'=>$brcode, 'add1'=>$add1,'add2'=>$add2,'add3'=>$add3, 'city'=>$city, 'statecode'=>$state,
            'postcode'=>$postcode, 'telno'=>$telno, 'mobileno'=>$mobileno, 'email'=>$email,'nationality'=>$nationality,
            'pobox'=>$pobox,'lockedbag'=>$lockedbag,'wdt'=>$wdt];
        
        $jsondata = json_encode($obForm);
        //return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newobprofile';
        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');

        curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
        curl_setopt($ch, CURLOPT_HTTPGET, FALSE);

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        //return '++'.$result.'++';
            //close connection
        curl_close($ch);
        //return redirect()->back();
        // return $this->index();

        //$this->postOBContact($req);
        $jsondecode = json_decode($result);
        //return $result;
        
        $errorcode = $jsondecode->{'errorcode'};
        if ($errorcode == 0)
        {
            $uniquerefno = $jsondecode->{'uniquerefno'};
            session(['uniquerefno'=>$uniquerefno]);
            return redirect()->back()->withInput(['tab'=>'obform'])->with('messageob','Save successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'obform'])->with('messageob','Save unsuccessful');
        }
        
     }
    
    public function GetOBDetails(Request $request)
    {
        $idno = $request->query('idno');

        $user = DB::selectOne('select * from obProfile where idno=?', [$idno]);
        return json_encode($user);
    }

    public function testget()
    {
        $url = 'http://localhost/api/wsmotion/getobdets?id=123';
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        //close connection
        curl_close($ch);
        
        return $httpcode; //$httpcode will contain json data returned by API
    }

/*
    public function GetMCDetails(Request $request)
    {
        $id = $request->query('id');

        $user1 = DB::selectOne('select * from mcinfo where idno=?', [$id]);
        return json_encode($user1);
    }
*/
    public function create()
    {
        $data = session('user_id') ?: null;
        return view('noticeod.index', compact('data'));
    }

    public function store(Request $request)
    {
        // $input = $request->all();

        // $obprofile = new ObProfile();
        // $obprofile->fill($input);

        // if (! $obprofile->save()) {
        //     return redirect()->back();
        // }

        return redirect()->back()->with('Message', 'Notice are successfully added');
    }
}

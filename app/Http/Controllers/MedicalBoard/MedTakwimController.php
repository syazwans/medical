<?php

namespace App\Http\Controllers\MedicalBoard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Response;

class MedTakwimController extends Controller
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
        
        $idno = session('idno');
        if ($idno)
        {
            return redirect('/home');
        }

        $jsonAnnualAgenda='';

        $role = session('loginrole');
        if($role == "ROLOMB" || $role == "ROLOSMB" || $role == "ROLOMAB" || $role == 'ROLOSMAB')
        {

            if($role == "ROLOMB")
            {
                $medical_board_category = DB::select('Select refcode, descen from reftable where tablerefcode=? and refcode=?', ['ref_mbcategory', '1']);
            }
            else if($role == "ROLOSMB")
            {
                $medical_board_category = DB::select('Select refcode, descen from reftable where tablerefcode=? and refcode=?', ['ref_mbcategory', '2']);
            }
            else if($role == "ROLOMAB")
            {
                $medical_board_category = DB::select('Select refcode, descen from reftable where tablerefcode=? and refcode=?', ['ref_mbcategory', '3']);
            }
            else if($role == "ROLOSMAB")
            {
                $medical_board_category = DB::select('Select refcode, descen from reftable where tablerefcode=? and refcode=?', ['ref_mbcategory', '4']);
            }
            else
            {
            $medical_board_category = DB::select('Select refcode, descen from reftable where tablerefcode=?', ['ref_mbcategory']);
            }

            $state = DB::select('Select * from reftable where tablerefcode=?', ['state']);
            $hospital = DB::select('Select * from rf_hospital h, branch b, users u where h.statecode = b.statecode and b.brcode = u.branchcode and operid=?', [$operid]);
        }
        else if($role == "ROMABHQ")
        {
            $medical_board_category = DB::select('Select refcode, descen from reftable where tablerefcode=? and (refcode=? or refcode=?)', ['ref_mbcategory', '3', '4']);
            $state = DB::select('Select * from reftable where tablerefcode=? and refcode in(?,?,?,?,?,?,?)', ['state', '10', '05', '04', '07', '02', '09', '06']);
            $hospital = DB::select('Select * from rf_hospital');
        }
        else
        {
            $medical_board_category = DB::select('Select refcode, descen from reftable where tablerefcode=?', ['ref_mbcategory']);
            $state = DB::select('Select * from reftable where tablerefcode=?', ['state']);
            $hospital = DB::select('Select * from rf_hospital'); 
        }

        // if($role == "ROLOMB" || $role == "ROLOSMB"){

        //     if($role == "ROLOMB"){
        //         $medical_board_category = DB::select('Select refcode, descen from reftable where tablerefcode=? and refcode=?', ['ref_mbcategory', '1']);
        //         // return $medical_board_category;

        //     }else if($role == "ROLOSMB"){
        //         $medical_board_category = DB::select('Select refcode, descen from reftable where tablerefcode=? and refcode=?', ['ref_mbcategory', '2']);
        //     }

        //     $state = DB::select('Select * from reftable where tablerefcode=?', ['state']);
        //     $hospital = DB::select('Select * from rf_hospital h, branch b, users u where h.statecode = b.statecode and b.brcode = u.branchcode and operid=?', [$operid]);

        // }else if($role == "ROLOMAB" || $role == 'ROLOSMAB'){

        //     if($role == "ROLOMAB"){
        //         $medical_board_category = DB::select('Select refcode, descen from reftable where tablerefcode=? and refcode=?', ['ref_mbcategory', '3']);
        //     }else if($role == "ROLOSMAB"){
        //         $medical_board_category = DB::select('Select refcode, descen from reftable where tablerefcode=? and refcode=?', ['ref_mbcategory', '4']);
        //     }

        //     $state = DB::select('Select * from reftable where tablerefcode=?', ['state']);
        //     $hospital = DB::select('Select * from rf_hospital h, branch b, users u where h.statecode = b.statecode and b.brcode = u.branchcode and operid=?', [$operid]);

        // }else if($role == "ROMABHQ"){

        //     $medical_board_category = DB::select('Select refcode, descen from reftable where tablerefcode=? and (refcode=? or refcode=?)', ['ref_mbcategory', '3', '4']);
        //     $state = DB::select('Select * from reftable where tablerefcode=? and refcode in(?,?,?,?,?,?,?)', ['state', '10', '05', '04', '07', '02', '09', '06']);
        //     $hospital = DB::select('Select * from rf_hospital');

        // }else{

        //     $medical_board_category = DB::select('Select refcode, descen from reftable where tablerefcode=?', ['ref_mbcategory']);
        //     $state = DB::select('Select * from reftable where tablerefcode=?', ['state']);
        //     $hospital = DB::select('Select * from rf_hospital');

        // }
        

        // $hospital = DB::select('Select * from rf_hospital h, branch b, users u where h.statecode = b.statecode and b.brcode = u.branchcode and operid=?', [$operid]);
        // $hospital = DB::select('Select * from rf_hospital');
        // $state = DB::select('Select * from reftable where tablerefcode=?', ['state']);
        $session = DB::select('Select refcode, descen from reftable where tablerefcode=?', ['ref_sidang']);
        $benefit_type = DB::select('Select refcode, descen from reftable where tablerefcode=?', ['benefityp']);
        $discipline = DB::select('Select refcode, descen from reftable where tablerefcode=?', ['ref_doctor_speciality']);
        $doctor = DB::select('Select doctor_id, doctor_name from doctor');
        $medical_board_category1 = DB::select('Select refcode, descen from reftable where tablerefcode=?', ['ref_mbcategory']);


        $annualAgenda = null;
        $this->getAnnualAgenda($jsonAnnualAgenda);
        if ($jsonAnnualAgenda && $jsonAnnualAgenda!='')//irina
        {
            $errorcode = $jsonAnnualAgenda->{'errorcode'};
            if ($errorcode == 0)
            {
                    $annualAgenda  = $jsonAnnualAgenda->{'data'};
            }
                
        }

        return view('medical_board.ro.takwim.takwim',['role' => $role, 'hospital'=>$hospital, 'state' => $state, 'session' => $session,'medical_board_category' => $medical_board_category, 'medical_board_category1' => $medical_board_category1, 'benefit_type' => $benefit_type, 'discipline' => $discipline, 'doctor' => $doctor, 'annualAgenda' => $annualAgenda]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('ine');

        // $input = $request->get('venue');
        // return response()->json(['venue'=>$input]);

        $idno= session('idno');//$req->idno;
        $oper_id = session('loginname');
        $brcode = session('loginbranchcode');
        $role = session('loginrole');

        // $takwim_id = $request->input('takwim-index');
        // $date_takwim1 = $request->input('takwim-start-date');
        // $date_takwim2 = preg_replace("/[^0-9]/", "", $date_takwim1);
        // $date_takwim = substr($date_takwim2,4,4).substr($date_takwim2,2,2).substr($date_takwim2,0,2);
        // $hospital_id = $request->takwim_hospital;
        // $session = $request->takwim_session;
        // $year = substr($date_takwim,0,4);
        // $mb_category = $request->takwim_medical_board_category;
        // $venue = $request->takwim_venue;
        // $statecode = $request->takwim_statecode;
        // // $remarks_id = $request->takwim_remarks;
        // $speciality_id = $request->takwim_discipline;
        // $quota = $request->takwim_quota;

        $date_takwim1 = $request->get('date_takwim');
        $date_takwim2 = preg_replace("/[^0-9]/", "", $date_takwim1);
        $date_takwim = substr($date_takwim2,4,4).substr($date_takwim2,2,2).substr($date_takwim2,0,2);
        $hospital_id = $request->get('hospital_id');
        $session = $request->get('session');
        $year = substr($date_takwim,0,4);
        $mb_category = $request->get('mb_category');
        $venue = $request->get('venue');
        $statecode = $request->get('statecode');
        // $remarks_id = $request->takwim_remarks;
        $speciality_id = $request->get('doc_speciality');
        $quota = $request->get('quota');

        if($quota == '')
            $quota = 0;

        $takwiminfo = ['date_takwim' => $date_takwim, 'hospital_id' => $hospital_id, 'session' => $session, 'year' => $year, 'mb_category' => $mb_category, 'venue' => $venue, 'statecode' => $statecode, 'speciality_id' => $speciality_id, 'quota' => $quota, 'oper_id' => $oper_id];

        $jsondata = json_encode($takwiminfo);
        //dd($jsondata);

        // $url = 'http://wsmedical.localhost/api/wsmotion/addtakwim';
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/addtakwim';

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

        // return view('noticeAccident.index');
        // return redirect()->back;
        //close connection
        curl_close($ch);

        $jsondecode = json_decode($result);

        //dd($jsondecode);
        // return $result;
        // return redirect('/takwim');

        return response()->json(['success'=>$jsondecode->Message]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getHospitalAddress($id)
    {
        // $url = 'http://wsmedical.localhost/api/wsmotion/gethospitaladdress?hospital_id='.$id;
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/gethospitaladdress?hospital_id='.$id;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsonHospitalAddress = json_decode($result);
        //dd($result);
        //close connection
        curl_close($ch);

        return $result;

        // $hospitaladd = DB::table('rf_hospital')->select('hospital_add1', 'hospital_add2', 'hospital_add3', 'hospital_postcode', 'hospital_city')->where('hospital_id', $id)->get();
        // // dd($hospitaladd);
        // return response()->json($hospitaladd); //this line it's important since we are sending a json data variable that we are gonna use again in the last part of the view
    }

    public function getStateCode($id)
    {
        $statecode = DB::table('rf_hospital')->select('statecode')->where('hospital_id', $id)->get();
        // dd($hospitaladd);
        return response()->json($statecode); //this line it's important since we are sending a json data variable that we are gonna use again in the last part of the view
    }

    public function getAnnualAgendaCalendar($id)
    {
        $oper_id = session('loginname');
        // $year = '2019';
        // $hospital_id = '2';

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/viewAgenda_withoutyear?loginname='.$oper_id.'&hospital_id='.$id;
        // $url = 'http://wsmedical.localhost/api/wsmotion/viewAgenda_withoutyear?loginname='.$oper_id.'&hospital_id='.$id;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsonAnnualAgenda = json_decode($result);
        //dd($jsonAnnualAgenda);
        //close connection
        curl_close($ch);

        foreach($jsonAnnualAgenda as $value)
        {
            $medical_board_category1 = DB::select('Select refcode from reftable where tablerefcode=? and descen=?', ['ref_mbcategory',$value->mb_category]);
            foreach($medical_board_category1 as $mb){
                $medical_board_category = $mb->refcode;
            }

            $session1 = DB::select('Select refcode from reftable where tablerefcode=? and descen=?', ['ref_sidang', optional($value)->sidang]);
            foreach($session1 as $s){
                $session = $s->refcode;
            }

            $discipline1 = DB::select('Select refcode from reftable where tablerefcode=? and descen=?', ['ref_doctor_speciality', optional($value)->doc_speaciality]);
            foreach($discipline1 as $d){
                $discipline = $d->refcode;
            }

            // dd("celndar");
            $quotaInfo = DB::selectOne('select quota from takwimquota where hospital_id=? and date_quota=?',[$id,optional($value)->date_takwim]);
            if($quotaInfo != ''){
                $quota1 = $quotaInfo->quota;
            }else{
                $quota1 = 0;
            }
            //dd($quotaInfo);

            $data[] = array(
                'id' => optional($value)->takwim_id,
                'name' => $medical_board_category,
                'location' => optional($value)->venue,
                'startDate' => optional($value)->date_takwim,
                'endDate' => optional($value)->date_takwim,
                'quota' => $quota1,
                'session' => $session,
                'remarks' => optional($value)->remarks,
                'doc_speciality' => $discipline,
                'year' => optional($value)->year
            );
            //     $data[] = array(
            //     'id' => 0,
            //     'name' => 'Google I/O',
            //     'location' => 'San Francisco, CA',
            //     'startDate' => new \DateTime('2019-02-16'),
            //     'endDate' => new \DateTime('2019-02-16')
            // );
        }

        return $data;
    }

    public function getAnnualAgenda($id, $year = null, $mb_category = null)
    {
        $oper_id = session('loginname');
        // $year = substr($id, 0, 3);
        // $hospital_id = substr($id, 4);
        // $year = "2019";
        // $hospital_id = $_GET['hospital_id'];
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/viewAgenda?loginname='.$oper_id.'&year='.$year.'&hospital_id='.$id.'&mb_category='.$mb_category;
        // $url = 'http://wsmedical.localhost/api/wsmotion/viewAgenda?loginname='.$oper_id.'&year='.$year.'&hospital_id='.$id;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsonAnnualAgenda = json_decode($result);
        //close connection
        curl_close($ch);

        // $key = 1;

        // foreach($jsonAnnualAgenda as $value)
        // {

        //     $data[] = array(
        //         'no' => $key++,
        //         'date_takwim' => optional($value)->date_takwim,
        //         'sidang' => optional($value)->sidang,
        //         'mb_category' => optional($value)->mb_category,
        //         'doc_speaciality' => optional($value)->doc_speaciality,
        //         'venue' => optional($value)->venue,
        //         'remarks' => optional($value)->remarks,
        //         'quota' => optional($value)->quota
        //     );
        // }
        // dd($data);
        // return $data;
        // return $result;
        return $result;
    }

    public function updateAnnualAgenda(Request $request)
    {
        $idno= session('idno');//$req->idno;
        $oper_id = session('loginname');
        $brcode = session('loginbranchcode');
        $role = session('loginrole');

        // $takwim_id = $request->input('takwim-index');
        // $date_takwim1 = $request->input('takwim-start-date');
        // $date_takwim2 = preg_replace("/[^0-9]/", "", $date_takwim1);
        // $date_takwim = substr($date_takwim2,4,4).substr($date_takwim2,2,2).substr($date_takwim2,0,2);
        // // $hospital_id = $request->takwim_hospital;
        // $session = $request->takwim_session;
        // $year = substr($date_takwim,0,4);
        // $mb_category = $request->takwim_medical_board_category;
        // $venue = $request->takwim_venue;
        // // $statecode = $request->takwim_statecode;
        // $remarks = $request->takwim_remarks;
        // $speciality_id = $request->takwim_discipline;
        // $quota = $request->takwim_quota;
        // $date = date('Ymd');

        $takwim_id = $request->get('id');
        $date_takwim1 = $request->get('date_takwim');
        $date_takwim2 = preg_replace("/[^0-9]/", "", $date_takwim1);
        $date_takwim = substr($date_takwim2,4,4).substr($date_takwim2,2,2).substr($date_takwim2,0,2);
        // $hospital_id = $request->takwim_hospital;
        $session = $request->get('session');
        $year = substr($date_takwim,0,4);
        $mb_category = $request->get('mb_category');
        $venue = $request->get('venue');
        // $statecode = $request->takwim_statecode;
        $remarks = $request->get('remarks');
        $speciality_id = $request->get('doc_speciality');
        // $quota1 = $request->get('quota');
        $quota = 0;
        $date = date('Ymd');

        $takwiminfo = ['takwim_id' => $takwim_id, 'date_takwim' => $date_takwim, 'session' => $session, 'year' => $year, 'mb_category' => $mb_category, 'venue' => $venue, 'speciality_id' => $speciality_id, 'quota' => $quota, 'remarks' => $remarks, 'loginname' => $oper_id , 'dateadd' => $date];

        $jsondata = json_encode($takwiminfo);
        //dd($jsondata);

        // $url = 'http://wsmedical.localhost/api/wsmotion/rescheduletakwim';
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/rescheduletakwim';

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

        // return view('noticeAccident.index');
        // return redirect()->back;
        //close connection
        curl_close($ch);

        $jsondecode = json_decode($result);

        //dd($jsondecode);
        // return $result;
        // return redirect('/takwim');
        return response()->json(['success'=>$jsondecode->Message]);
    }

    public function duplicateAnnualAgenda(Request $request)
    {
        $idno= session('idno');//$req->idno;
        $oper_id = session('loginname');
        $brcode = session('loginbranchcode');
        $role = session('loginrole');

        // $newstartdate1 = $request->input('takwim-start-date');
        // $newenddate1 = $request->input('takwim-end-date');
        // $newstartdate2 = preg_replace("/[^0-9]/", "", $newstartdate1);
        // $newenddate2 = preg_replace("/[^0-9]/", "", $newenddate1);
        // $newstartdate = substr($newstartdate2,4,4).substr($newstartdate2,2,2).substr($newstartdate2,0,2);
        // $newenddate = substr($newenddate2,4,4).substr($newenddate2,2,2).substr($newenddate2,0,2);
        // $hospital_id = $request->takwim_hospital;
        // $session = $request->takwim_session;
        // $year = substr($newstartdate,0,4);
        // $mb_category = $request->takwim_medical_board_category;
        // $venue = $request->takwim_venue;
        // $statecode = $request->takwim_statecode;
        // $remarks = $request->takwim_remarks;
        // $speciality_id = $request->takwim_discipline;
        // $quota = $request->takwim_quota;

        $newstartdate1 = $request->get('newstartdate');
        $newenddate1 = $request->get('newenddate');
        $newstartdate2 = preg_replace("/[^0-9]/", "", $newstartdate1);
        $newenddate2 = preg_replace("/[^0-9]/", "", $newenddate1);
        $newstartdate = substr($newstartdate2,4,4).substr($newstartdate2,2,2).substr($newstartdate2,0,2);
        $newenddate = substr($newenddate2,4,4).substr($newenddate2,2,2).substr($newenddate2,0,2);
        $hospital_id = $request->get('hospital_id');
        $session = $request->get('session');
        $year = substr($newstartdate,0,4);
        $mb_category = $request->get('mb_category');
        $venue = $request->get('venue');
        $statecode = $request->get('statecode');
        $remarks = $request->get('remarks');
        $speciality_id = $request->get('doc_speciality');
        $quota = 0;

        $takwiminfo = [ 'newstartdate' => $newstartdate, 'newenddate' => $newenddate, 'session' => $session, 'year' => $year, 'mb_category' => $mb_category, 'venue' => $venue, 'speciality_id' => $speciality_id, 'quota' => $quota, 'remarks' => $remarks, 'hospital_id' => $hospital_id, 'statecode' => $statecode,];

        //dd($takwiminfo);
        $jsondata = json_encode($takwiminfo);
        

        // $url = 'http://wsmedical.localhost/api/wsmotion/rescheduletakwim';
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/duplicatetakwims?loginname='.$oper_id;

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

        // return view('noticeAccident.index');
        // return redirect()->back;
        //close connection
        curl_close($ch);

        $jsondecode = json_decode($result);

        // dd($jsondecode);
        // return $result;
        // return redirect('/takwim');
        return response()->json(['success'=>$jsondecode->Message]);
    }

    public function deleteAnnualAgenda(Request $request)
    {
        $idno= session('idno');//$req->idno;
        $oper_id = session('loginname');
        $brcode = session('loginbranchcode');
        $role = session('loginrole');

        // $takwim_id = $request->input('takwim-index');
        $takwim_id = $request->get('takwim_id');

        $takwiminfo = ['takwim_id' => $takwim_id, 'loginname' => $oper_id ];

        $jsondata = json_encode($takwiminfo);
        //dd($jsondata);

        // $url = 'http://wsmedical.localhost/api/wsmotion/rescheduletakwim';
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/deletetakwims?takwim_id='.$takwim_id;

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

        // return view('noticeAccident.index');
        // return redirect()->back;
        //close connection
        curl_close($ch);

        $jsondecode = json_decode($result);

        //dd($jsondecode);
        // return $result;
        // return redirect('/takwim');
        return response()->json(['success'=>$jsondecode->Message]);                     
    }

    public function setQuota(Request $request)
    {
        $date_takwim1 = $request->get('date_quota');
        $date_takwim2 = preg_replace("/[^0-9]/", "", $date_takwim1);
        $date_quota = substr($date_takwim2,4,4).substr($date_takwim2,2,2).substr($date_takwim2,0,2);
        $hospital_id = $request->get('hospital_id');
        $year = substr($date_quota,0,4);
        $quota = $request->get('quota');

        $Quotainfo = ['date_quota' => $date_quota, 'hospital_id' => $hospital_id,'year' => $year, 'quota' => $quota];

        $jsondata = json_encode($Quotainfo);
        //dd($date_quota);

        // $url = 'http://wsmedical.localhost/api/wsmotion/setquota';
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/setquota';

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

        // return view('noticeAccident.index');
        // return redirect()->back;
        //close connection
        curl_close($ch);

        $jsondecode = json_decode($result);

        //dd($jsondecode);
        // return $result;
        // return redirect('/takwim');

        return response()->json(['success'=>$jsondecode->Message]);
    }

    public function getQuota($id, $date = null)
    {
        $oper_id = session('loginname');
        // $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getquota?date_quota='.$date.'&hospital_id='.$id;
        $url = 'http://wsmedical.localhost/api/wsmotion/viewAgenda?loginname='.$oper_id.'&year='.$year.'&hospital_id='.$id;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsonAnnualAgenda = json_decode($result);
        //close connection
        curl_close($ch);

        // $key = 1;

        // foreach($jsonAnnualAgenda as $value)
        // {

        //     $data[] = array(
        //         'no' => $key++,
        //         'date_takwim' => optional($value)->date_takwim,
        //         'sidang' => optional($value)->sidang,
        //         'mb_category' => optional($value)->mb_category,
        //         'doc_speaciality' => optional($value)->doc_speaciality,
        //         'venue' => optional($value)->venue,
        //         'remarks' => optional($value)->remarks,
        //         'quota' => optional($value)->quota
        //     );
        // }
        // dd($data);
        // return $data;
        // return $result;
        return $result;
    }

}

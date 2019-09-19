<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ObForm;
use Illuminate\Support\Facades\Input;

class NoticeOdController extends CommonController
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
        if ($idno == '')
        {
            return redirect('/home');
        }
        
        $jsondecode='';
        $jsondecod1='';
        $jsondecod3='';

        //HANNIS
        $jsondecodeAssistEmployer="";
        $jsondecodeEmployerdate="";
        $jsondecodeWages="";


        //SYAHIRAH

        // $jsondecodemp='';
        $jsondecodebank='';
        $jsondecodepermanent='';

        
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
        $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
        $mcsts=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['mcsts']);
        $transport=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['transport']);
        $accdplace=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdplace']);
        $accdwhen=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['accdwhen']);
        $causative=DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['causative']);
        $accdcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['accdcode']);
        $industcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['industcode']);
        $profcode = DB::select('Select refcode, descen from reftable where tablerefcode=? order by descen', ['profcode']);
        $month = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['month']);
        $worksts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['worksts']);
        $hussts = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['hussts']);
        
        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);
        //$transport=DB::select('Select refcode, descen from reftable where tablerefcode=?', ['transport']);

        //SYAHIRAH
        $optionbank=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankloc']);
        $optionreason=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['rsnnoacc']);
        $optionbai=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['baists']);
        $optionpay=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['paymode']);
        $bankcode=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['bankcode']);
        $accountype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['acctype']);
        $overseasbank=$bankcode;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['bankcode']);
        $overseasbanktype=$accountype;//DB::select('Select refcode, descen from reftable where tablerefcode=?', ['acctype']);
        $emptype = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['emptype']);
        
        //najmi
        //$doclist = DB::select('select docdescen,doctype,docdescbm from doctype where doccat=?',['C']);
        $sql = 'select d.docdescen,d.doctype,d.docdescbm, d.doccat from doctype d, noticedoc n '
                . 'where n.casetype=? and n.doctype = d.doctype';
        $doclist = DB::select($sql,['02']);

        //return view ('fileupload.claim_info')->with('name',$select);

        $jsondecodeAssist='';
        $jsondecodeAccddate='';
        $how = '';


        $this->getObProfile($jsondecode);
        //$test = json_encode($jsondecode);
        // return $jsondecode;
        //$this->getObContact($jsondecod1);
        $this->getObFormAssist($jsondecodeAssist);
        
        //irina - begin
        $caserefno = session('caserefno');
     

        //HANNIS
        $this->getAssist($jsondecodeAssistEmployer);
        $jsondecodeEmployer="";
        $this->getEmployer($jsondecodeEmployer);
        
        //return json_encode($jsondecodeEmployer);
        //$jsondecodeWages = array();
        //$this->getWages($jsondecodeWages);
        
        $contrinfo = array();
        // $wagesinfo = array();
        $data = array();

        // $all = ['contrinfo'=>$contrinfo, 'wagesonfo'=>$wagesinfo, 'data'=>$data];
        
        $url = $this->getWages($contrinfo,$wagesinfo);
        //return $url;

        $docinfo = array();
        $this->getDoc($docinfo);
         
        $jsondecodepermanent = null;
        $this->getBankInfo($jsondecodebank);
        
        //return '++'.json_encode($jsondecodebank).'++';
        //$this->getPermanentInfo($jsondecodepermanent);



        //$accdrefcode = session('accdrefno');
        //if($accdrefcode != '')
        //{
        //    $this->getAccidentinfo($jsondecod3); 
            //$data= $jsondecod3->{'data'};
            // $how= $data['how'];
        //}
        
        //irina
        $obprofile = null;
        $obcontact = null;
        $date = null;
        $empcert = null;

        $permanentrep = null;
     
        //return $jsondecode;
        
        if ($jsondecode && $jsondecode!='')//irina
        {
            // return json_encode($jsondecode);
            // return $jsondecode;
            $record = $jsondecode->{'record'};
            if ($record == 0)
            {
                $obprofile = null;
            }
            else
            {
                $obprofile = $jsondecode->{'data'};
                $uniquerefno = $obprofile->{'uniquerefno'};
                session(['uniquerefno'=>$uniquerefno]);
            }


            
            //$test = json_encode($obprofile);
            //return $test;
        }

        //notice od
        $jsondecodeOdinfo="";
        $this->getOdInfo($jsondecodeOdinfo);
            
        if ($jsondecodeOdinfo && $jsondecodeOdinfo!='')//hannis
        {
            $errorcode = $jsondecodeOdinfo->{'errorcode'};
            if ($errorcode == 0)
            {
                $oddata = $jsondecodeOdinfo->{'data'};
            }
            else
            {
                $oddata = null;
            }
        }


        $jsondecodeOdEmphistory="";
        $this->getOdEmphistory($jsondecodeOdEmphistory);

        if ($jsondecodeOdEmphistory && $jsondecodeOdEmphistory!='')//hannis
        {
            $record = $jsondecodeOdEmphistory->{'record'};
            if ($record > 0)
            {
                $odempinfo = $jsondecodeOdEmphistory->{'data'};
            }
            else
            {
                $odempinfo = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }

        // return $odempinfo;

        


        /*if ($jsondecod1 && $jsondecod1!='')//irina
        {
            $obcontact = $jsondecod1->{'data'};
        }*/

        //HANNIS
        //return json_encode($jsondecodeEmployer);
        if ($jsondecodeEmployer && $jsondecodeEmployer!='')//irina
        {
            $record = $jsondecodeEmployer->{'record'};
            if ($record > 0)
            {
                $emprecord = $jsondecodeEmployer->{'emprecord'};
                // $emprecord = $jsondecodeEmployer->{'emprecord'};
                // if ($record == 1)
                // {
                //     // $empcode = $emprecord[0]->{'empcode'};
                //     // session(['empcode'=>$empcode]);
                // }
            }
            else
            {
                $emprecord = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }

        
        if ($jsondecodebank && $jsondecodebank!='')//irina
        {
            $errorcode = $jsondecodebank->{'errorcode'};
            if ($errorcode == 0)
            {
                $bankinfo = $jsondecodebank->{'data'};
                //return json_encode($bankinfo);
            }
            else
            {
                $bankinfo = null;
            }
            
           
        }
        

        $jsondecodeConfirmation="";
        $confirmation = null;
        $this->getConfirmation($jsondecodeConfirmation);
        //return json_encode($jsondecodeConfirmation);

        if ($jsondecodeConfirmation && $jsondecodeConfirmation!='')//irina
        {
            $record = $jsondecodeConfirmation->{'record'};
            if ($record <= 0)
            {
                 //$jsondecodeConfirmation = null;
                 $confirmation = null;
            }
            else
            {
                $confirmation = $jsondecodeConfirmation->{'data'};
                //return $confirmation;
            }
             
        }
        
        //return $confirmation;
        
        $jsondecodemc = '';
        $this->GetMCDetails($jsondecodemc);
        //return $jsondecodemc;
        if ($jsondecodemc && $jsondecodemc != '')
        {
            $errorcode = $jsondecodemc->{'errorcode'};

            if ($errorcode != 0)
            {
                $jsondecodemc = null;
            }


        }
        
        $state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        if ($confirmation != null && $confirmation->statecode != '')
        {
            $branch = DB::select('select brcode,brname from branch where statecode=?',[$confirmation->statecode]);
        }
        else
        {
            $branch = DB::select('select brcode,brname from branch where statecode=?',[$state[0]->refcode]);
        }
        
        

        //return $confirmation;
        
        return view('noticeOd.index',['obprofile'=>$obprofile,'state'=>$state,'branch'=>$branch, 
            'idtype'=>$idtype, 'race'=>$race, 'national'=>$national, 'mcsts'=>$mcsts, 'transport'=>$transport,
            'accdplace'=>$accdplace, 'accdwhen'=>$accdwhen , 'obformassist' => $jsondecodeAssist, 
            'employer' => $jsondecodeAssistEmployer, 'emprecord' => $emprecord,'wagesinfo' => $wagesinfo,
            'contribution'=>$contrinfo, 'data'=>$data,'bankinfo'=>$bankinfo, 'optionbank'=>$optionbank, 
            'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode, 
            'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month,
            'causative'=>$causative,'accdcode'=>$accdcode,'industcode'=>$industcode, 'profcode'=>$profcode, 'worksts'=>$worksts, 
            'caserefno'=>$caserefno, 'doclist'=>$doclist, 'emptype'=>$emptype,
            'docinfo'=>$docinfo, 'odempinfo' => $odempinfo, 'oddata'=>$oddata, 'confirmation'=>$confirmation,
            'hussts'=>$hussts,'mcdata'=>$jsondecodemc]);
    }
    
    public function GetMCDetails(&$jsondecode)
    {
        $caserefno = session('caserefno');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getmcinfo?caserefno='.$caserefno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        //return $result;
        $jsondecode = json_decode($result);
        //close connection
        curl_close($ch);
    }
    
    public function UpdMC(Request $req)
    {
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $idno= session('idno');
        $caserefno = session('caserefno');
        
        $clinicname = $req->clinicinfo;
        $mcstartdate = $req->mcstartdate;
        $mcmonth = '';
        $mcyear = '';
        
        if (strlen($mcstartdate) == 10)
        {
            $mcstartdate = str_replace('-', '', $mcstartdate);
            $mcmonth = substr($mcstartdate,4,2);
            $mcyear = substr($mcstartdate,0,4);
        }
        
        
        $mcenddate = $req->mcenddate;
        if (strlen($mcenddate) == 10)
        {
            $mcenddate = str_replace('-', '', $mcenddate);
        }
        
        
        $mcstatus = '08';//New
        $totalmc = $req->totalmc;
        $hussts = $req->hussts;
        
        $wagespaid = $req->wagespaid;
        
        $workstartdate = $req->workstartdate;
        if (strlen($workstartdate) == 10)
        {
            $workstartdate = str_replace('-', '', $workstartdate);
        }

        $workenddate = $req->workenddate;
        if (strlen($workenddate) == 10)
        {
            $workenddate = str_replace('-', '', $workenddate);
        }
        
        $totalwork = $req->totalwork;
        $worksts = $req->statuswork;
        $wagespaid = $req->wagespaid;
        
        $workinfo = array();
        $workinfo[0] = ['wagespaid'=>'','workstartdate'=>$workstartdate, 'workenddate'=>$workenddate,
                        'totalwork'=>$totalwork, 'statuswork'=>$worksts];
        
        $mcinfo = array();
        $mcinfo[0] = ['hussts'=>$hussts,'startdate'=>$mcstartdate,'enddate'=>$mcenddate, 'mcsts'=>$mcstatus, 'totalmc'=>$totalmc,
                    'workinfo'=>$workinfo];
        
        //$clinicinfo = array();
        //$clinicinfo[0] = ['clinicname'=>$clinicname, 'mcinfo'=>$mcinfo];
        
        $mcdata = ['operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno, 
                'clinicinfo'=>$clinicname, 'mcinfo'=>$mcinfo];
        
        $jsondata = json_encode($mcdata);
        
        //return $jsondata;


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
        //return $jsondata.'++'.$result;
        $retcode = $res->{'errorcode'};
        
        if ($retcode == 0)
        {
            session(['mcmonth'=>$mcmonth,'mcyear'=>$mcyear]);
            //return redirect()->back()->with('messagemc','Save successful');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
            return redirect()->back()->withInput(['tab'=>'mcdetails'])->with('messagemc','Save successful');
        }
        else
        {
            ///return redirect()->back()->with('messagemc','Save unsuccessful');
            return redirect()->back()->withInput(['tab'=>'mcdetails'])->with('messagemc','Save unsuccessful');
        }
        
        
    }
    
    //irina
    
    public function checkOdRecordExist($jsondecodeOdRecord)
    {
        $idno = session('idno');
        $idtype = session('idtype');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/odrecordexist?idno='.$idno.'&idtype'.$idtype;
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        //return '++'.$result.'++';

        //close connection
        curl_close($ch);
        // return $result;
        $jsondecodeOdRecord = json_decode($result);

    }

    //get ob profile
     public function getObProfile(&$jsondecode)
    {    
        $idno= session('idno');
        $idtype= session('idtype');
        $caserefno= session('caserefno');
        $operid= session('loginname');
        
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/obprofile?idno='.$idno.'&idtype='.$idtype.'&caserefno='.$caserefno.'&operid='.$operid;

        // 
        
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

        // return $jsondecode;
        //close connection
        curl_close($ch);
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

    //  get od employer history
    public function getOdEmphistory(&$jsondecodeOdEmphistory)
    {
        $caserefno = session ('caserefno'); // get session

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/odemphistory?caserefno='.$caserefno;//hannis

        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        // return $result;
    
        $jsondecodeOdEmphistory = json_decode($result);

        //close connection
         curl_close($ch);

    
    }


    //get od info
    public function getOdInfo(&$jsondecodeOdinfo)
    {

        $caserefno = session('caserefno');
        // $idno = session('idno');
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getodinfo?caserefno='.$caserefno;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecodeOdinfo = json_decode($result);
        //close connection
        curl_close($ch);
    }
    
    
    public function createnoticedraft()
    {
        $noticetype = session('noticetype');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $idno = session('idno');

        $notice = ['noticetype'=> $noticetype, 'operid'=> $operid,'brcode'=> $brcode, 'idno'=>$idno];
        $jsondata = json_encode($notice);
       
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/createdraft';
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

            //close connection
        curl_close($ch);
        
        return json_decode($result);
    }

     //Get OBFORM from Assist
    public function getObFormAssist(&$jsondecodeAssist)
    {

        $idno= session('idno');


        $url = 'http://'.env('ASSIST_IP', 'localhost').'/wsassistsimulation/obprofile/'.$idno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecodeAssist = json_decode($result);
        //close connection
        curl_close($ch);
    }


    // GET EMPLOYER FROM ASSIST - HANNIS 
      public function getAssist(&$jsondecodeAssistEmployer)
    {
        //$idno = '1';

        $idno = session('idno');
        $empcode = session('empcode');
        $url = 'http://'.env('ASSIST_IP', 'localhost').'/wsassistsimulation/employer/'.$empcode;
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

        $jsondecodeAssistEmployer = json_decode ($result);
    
    }

    public function getDoc(&$docinfo)//&$newwages)
    {
        $idno = session ('idno'); // get session
        $caserefno = session ('caserefno');

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getdoc?idno='.$idno.'&caserefno='.$caserefno;//irina
        
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

        $docinfo = json_decode ($result);
    
    }

     // GET WAGES FROM DB - HANNIS 
    public function getWages(&$contrinfo, &$wagesinfo)//&$newwages)
    {
        $caserefno = session ('caserefno'); // get session
        $idno = session ('idno'); // get session
        $month = session ('mcmonth');
        $year = session('mcyear');
        
        if ($month == '')
        {
            $month = date('m');
        }
        if ($year == '')
        {
            $year = date('Y');
        }

        //$idno = '960422016554';
        // $month = '03';
        // $year = '2019';
        $count = '6';

        
        //$url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/wage/'.$idno.'/'.$month.'/'.$year.'/'.$count;//irina
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/wages?caserefno='.$caserefno.'&month='.$month.'&year='.$year.'&count='.$count;//irina
        //return $url;
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

        $jsondecodeWages = json_decode ($result);
        
        if ($jsondecodeWages != null && $jsondecodeWages != '')
        {
            // $wagesinfo = $jsondecodeWages->{'wagesinfo'};
             $record = $jsondecodeWages->{'record'};
             // return $record;

                if ($record > 0)
                {
                    $wagesinfo = $jsondecodeWages->{'data'};
                    /*
                    foreach ($data as $d)
                    {
                        $empcode = $d->{'empcode'};
                        $empname = $d->{'empname'};
                        $startdate = $d->{'startdate'};
                        $enddate = $d->{'enddate'};
                        $wagesinfo = $d->{'wagesinfo'};
                    }
                
                    foreach ($wagesinfo as $w)
                    {
                        $year = $w->{'year'};
                        $month = $w->{'month'};
                        $wages = $w->{'wages'};
                    }*/
                

                }
                else
                {
                    $wagesinfo = null;
                }

        }


        $url = 'http://'.env('ASSIST_IP', 'localhost').'/wsassistsimulation/contribution/'.$idno;//irina
        //return $url;
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);

        // return $result;
    
        //close connection
        curl_close($ch);

        $newwages = array();
        $count = 0;
        $jsondecodeContribution = json_decode ($result);
        
        if ($jsondecodeContribution && $jsondecodeContribution!='')
        {
            $contrinfo = $jsondecodeContribution->{'contributioninfo'};
            //$contribution = $contributioninfo[0]->{'contribution'};
            /*
            if ($jsondecodeWages != null && $jsondecodeWages!='')//irina
            {
                $record = $jsondecodeWages->{'record'};
                if ($record > 0)
                {
                    $data = $jsondecodeWages->{'data'};
                    
                    foreach ($data as $d)
                    {
                        $empcode = $d->{'empcode'};
                        $empname = $d->{'empname'};
                        $wagesinfo = $d->{'wagesinfo'};
                        
                        foreach ($$contributioninfo as $contr)
                        {
                            if ($contr->{'empcode'} == $empcode)
                            {
                                $assistcontr = $contr->{'contribution'};
                                 
                                foreach($assistcontr as $ass)
                                {
                                    
                                    if($ass->{'month'} == $contr->{'month'} && 
                                        $ass->{'year'} == $contr->{'year'})
                                    {
                                        $newwages[$count] = ['month'=>$wages->{'month'}, 'year'=>$wages->{'year'}, 'wages'=>$wages->{'wages'}, 'contribution'=>$contr->{'contribution'}];
                                        $count++;
                                    }
                                }
                            }
                        }
                    }
                }
            
                foreach($jsondecodeWages as $wages)
                {
                    foreach($contribution as $contr)
                    {
                        if($wages->{'month'} == $contr->{'month'} && 
                            $wages->{'year'} == $contr->{'year'})
                        {
                            $newwages[$count] = ['month'=>$wages->{'month'}, 'year'=>$wages->{'year'}, 'wages'=>$wages->{'wages'}, 'contribution'=>$contr->{'contribution'}];
                            $count++;
                        }
                    }
                }
            }
            else
            {
                foreach($contribution as $contr)
                {
                    
                    $newwages[$count] = ['month'=>$contr->{'month'}, 'year'=>$contr->{'year'}, 'wages'=>null, 'contribution'=>$contr->{'contribution'}];
                    $count++;
                    
                }
            }*/
        }
        /*else
        {
            if ($jsondecodeWages != null && $jsondecodeWages!='')//irina
            {
                foreach($jsondecodeWages as $wages)
                {
                    $newwages[$count] = ['month'=>$wages->{'month'}, 'year'=>$wages->{'year'}, 'wages'=>$wages->{'wages'}, 'contribution'=>null];
                    $count++;
                    
                }
            }
        }*/
        

        
    
    }
   


    //GET BRANCH NAME FROM DB - FOR SOCSO
    public function getbranchname($statecode)
    {
        $branch=DB::select('select brcode, brname from branch  where  statecode=?', [$statecode]);
        return json_encode($branch);

    }


     //GET BANK INFO FROM DB - SYAHIRAH
    public function getBankInfo(&$jsondecodebank)
        {
            //$idno='1';
            $caserefno = session('caserefno');
            $url = 'http://'.env('WS_IP', 'perkesows.com').'/api/wsmotion/bankinfo?caserefno='.$caserefno;

            $ch = curl_init();
            
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_PROXY, '');
            
            curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $result = curl_exec($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            

            $jsondecodebank =json_decode($result);
            // $data =$jsondecode->{'data'};

            //close connection
            curl_close($ch);
            //return view('noticeAccident.certificateEmployee',['data'=>$jsondecode]);
            //return view ('noticeAccident.obForm');
            // return $httpcode; //$httpcode will contain json data returned by API

        }


    public function getConfirmation(&$jsondecodeConfirmation)
    {

        $caserefno = session('caserefno');
        $uniquerefno = session('uniquerefno');
        // $idno = session('idno');
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getconfirmation?caserefno='.$caserefno.'&applicantid='.$uniquerefno;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecodeConfirmation = json_decode($result);
        //close connection
        curl_close($ch);
    }



    //  --------POST-----------

    

     //POST OBCONTANT AT DB
      public function postObcontact(Request $req)
        {
            $idno  = $req->idno;
            $add1 = $req->add1;
            $add2 = $req->add2;
            $add3 = $req->add3;
            $postcode = $req->postcode;
            $city = $req->city;
            $statecode = $req->statecode;
            $telno = $req->telno;
            $mobileno = $req->mobileno;
            $email = $req->email;
            $nationality = $req->nationality;
            $addby = $req->addby;
            $dateadd = $req->dateadd;

        $obForm = ['idno'=> $idno, 'add1'=> $add1,'add2'=> $add2, 'add3'=> $add3, 'postcode'=> $postcode, 'city'=> $city, 'statecode'=> $statecode,  'telno'=> $telno,  'mobileno'=> $mobileno,  'email'=> $email,  'nationality'=> $nationality,  'addby'=> $addby, 'dateadd'=> $dateadd ];
        $jsondata = json_encode($obForm);
       
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newobcontact';
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

            //close connection
        curl_close($ch);
        //return redirect()->back();
        // return $this->index();
    }

     //POST OBFORM AT DB 
    public function postObForm(Request $req)
    {
        // $previdno = $req->previdno;
        $idno  = $req->idno;
        $idtype = $req->idtype;
        $oldidno = '';
        $passportno='';
        $name = $req->name;
        $dob = $req->dob;
        $dob = substr($req->dob,6,4).substr($req->dob, 3,2).substr($req->dob,0,2);
        $race = $req->race;
        $gender = $req->gender;
        $occupation = $req->occupation;
        $dodeath='';
        $add1 = $req->add1;
        $add2 = $req->add2;
        $add3 = $req->add3;
        $postcode = $req->postcode;
        $city = $req->city;
        $pobox = '';
        $lockedbag = '';
        $wdt = '';
        $statecode = $req->statecode;
        $telno = $req->telno;
        $mobileno = $req->mobileno;
        $email = $req->email;
        $nationality = $req->nationality;

        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $caserefno = session('caserefno');
        // $uniquerefno = session('uniquerefno');

        $obForm = ['caserefno'=>$caserefno,'idno'=> $idno,'idtype'=> $idtype,'oldidno' =>$oldidno, 'passportno'=>$passportno,
            'name'=> $name, 'dob'=> $dob, 'race'=> $race, 'gender'=> $gender, 'occupation'=> $occupation, 'dodeath'=>$dodeath, 'add1'=>$add1,'add2'=>$add2,'add3'=>$add3,
            'postcode'=>$postcode, 'city'=>$city,'pobox'=>$pobox, 'lockedbag'=>$lockedbag, 'wdt'=>$wdt, 'statecode'=>$statecode, 'telno'=>$telno, 'mobileno'=>$mobileno, 'email'=>$email,'nationality'=>$nationality, 'operid'=>$operid, 'brcode'=>$brcode];
        
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
            return redirect()->back()->with('messageob','Save successful');
        }
        else
        {
            return redirect()->back()->with('messageob','Save unsuccessful');
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
            'city'=>$city, 'statecode'=>$statecode,'pobox'=>$pobox, 'lockedbag'=>$lockedbag, 'wdt'=>$wdt, 'telno'=>$telno, 'faxno'=>$faxno, 'email'=>$email];

        $jsondata = json_encode($employer);
        
        // return $jsondata;


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
            // return $errorcode;
            if ($errorcode == 0)
            {
                // session(['empcode',$empcode]);
                return redirect()->back()->with('messageemp','Save successful');
            }
            else
            {
                return redirect()->back()->with('messageemp','Save unsuccessful');
            }
        }
        
    }

//POST WAGES AT DB - HANNIS
    public function postWages(Request $req)
    {
        $caserefno= session('caserefno'); 
        $operid = session('loginname');
        // $brcode = session('loginbranchcode');
        

        $data = array();
        $cntdata = 0;
        foreach ($req->empcode as $index => $empcodefld)
        {
            $empcode = $empcodefld;
            $empname = $req->empname[$index];
            $startdate = $req->startdate[$index];
            $startdate = str_replace('-', '', $startdate);
            $enddate = $req->enddate[$index];
            $enddate = str_replace('-', '', $enddate);
            $wagesinfo = array();
            $cnt = 0;
            
            foreach($req->month[$index] as $idx => $monthfld)
            {
                $month = $monthfld;
                $year = $req->year[$index][$idx];
                $wages = $req->wages[$index][$idx];
                $contr = $req->contrpaid[$index][$idx];
                
                $wagesinfo[$cnt] = ['month'=>$month, 'year'=>$year, 'wages'=>$wages, 'contrpaid'=>$contr, 'assumedwages'=>'',
                    'contrpayable'=>'','contrdiff'=>'', 'contrsts'=>'','recommended'=>'', 'reason'=>'', 'wageremarks'=>'']; 
                
                $cnt++;
            }
            
            $data[$cntdata] = ['empcode'=>$empcode, 'empname'=>$empname, 'startdate'=>$startdate, 'enddate'=>$enddate, 'wagesinfo'=>$wagesinfo];
            $cntdata++;
            
        }
        
        $wages = ['caserefno'=>$caserefno, 'operid'=>$operid, 'data'=>$data];
        $jsondata = json_encode($wages);
        // return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newwages';

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
        
        $jsondecode = json_decode($result);
        // return $jsondata.'++'.$result;
        
        $errorcode = $jsondecode->{'errorcode'};
        // return $errorcode;
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'wages'])->with('messagewage','Save successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'wages'])->with('messagewage','Save unsuccessful');
        }
        
    }
    
    public function Submit(Request $req)
    {
        
        
    }
    

    //post bank info
     public function postBankInfo(Request $req)
    {
        $caserefno= session('caserefno');//$req->idno;
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        
        $accexist= $req->accexist;
        $reasonnoacc= $req->reasonnoacc;
        $baists= $req->baists;
        $substsdesc= $req->substsdesc;
        $paymode= $req->paymode;
        $bankloc= $req->bankloc;
        $bankcode= $req->bankcode;
        $ovbankname= $req->ovbankname;
        $bankbr = $req->bankbr;
        $bankaddr = $req->bankaddr;
        $accno = $req->accno;
        $acctype = $req->acctype;
        $swiftcode = $req->swiftcode;
        $bsbcode = $req->bsbcode;
        
        // $localbankbr= $req->localbankbranch;
        // $localaccno= $req->localbankacc;
        // $localbankaddr = $req->localbankadd;
        // $localacctype= $req->localacctype;
        // $ovbankacc = $req->ovbankacc;
        // $ovbankaddr = $req->ovbankaddr;
        // $ovbankbr = $req->ovbankbranch;
        // $ovacctype = $req->ovacctype;

        if ($bankloc == 'L')
        {
            $bankinfo=['operid'=>$operid,'brcode'=>$brcode,'caserefno'=>$caserefno,'accexist'=>$accexist,'reasonnoacc'=>$reasonnoacc,
            'baists'=>$baists,'substsdesc'=>$substsdesc,'paymode'=>$paymode,'bankloc'=>$bankloc,'bankcode'=>$bankcode,
            'ovbankname'=>null,'bankbr'=>$bankbr,'bankaddr'=>$bankaddr,'accno'=>$accno,'acctype'=>$acctype,
            'swiftcode'=>null,'bsbcode'=>null];
        }
        else if ($bankloc == 'O')
        {
            $bankinfo=['operid'=>$operid,'brcode'=>$brcode,'caserefno'=>$caserefno,'accexist'=>$accexist,'reasonnoacc'=>$reasonnoacc,
            'baists'=>$baists,'substsdesc'=>$substsdesc,'paymode'=>$paymode,'bankloc'=>$bankloc,'bankcode'=>$bankcode,
            'ovbankname'=>$ovbankname,'bankbr'=>$bankbr,'bankaddr'=>$bankaddr,'accno'=>$accno,'acctype'=>$acctype,
            'swiftcode'=>$swiftcode,'bsbcode'=>$bsbcode];
        }

        

        $jsondata = json_encode($bankinfo);


        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/bankinfo';

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
        
        if ($jsondecode && $jsondecode != '')
        {
            $errorcode = $jsondecode->{'errorcode'};
            if ($errorcode == 0)
            {
                return redirect()->back()->withInput(['tab'=>'bankinfo'])->with('messagebank','Save successful');
            }
            else
            {
                return redirect()->back()->withInput(['tab'=>'bankinfo'])->with('messagebank','Save unsuccessful');
            }
        }
      
        
        // return $httpcode;
    }


    //post od employer history
    public function postOdEmphistory(Request $req)
    {
      
        $caserefno = session('caserefno');
        // $idno= session('idno');
        $operid= session('loginname');
        $brcode = session('loginbranchcode');
        
        //return Input::all();
        
        $emprecord = Input::get('empname');
        $data = array();
        $i = 0;
        foreach ($emprecord as $idx =>$name)
        {
            //return $name.'++'.$idx;
            $empname= $req->empname[$idx];
            $empadd= $req->empadd[$idx];
            $duration= $req->duration[$idx];
            $designation= $req->designation[$idx];
            
            if ($empname == '' && $empadd == '' && $duration == '' && $designation == '')
            {
                continue;
            }
            
            $data[$i] = ['empname'=>$empname, 'empadd'=>$empadd, 'duration'=>$duration, 'designation'=>$designation];
            
            $i++;
        }
        
        
        

        // $data = ['empname'=>$empname, 'empadd'=>$empadd, 'duration'=>$duration, 'designation'=>$designation];
        
        
        // $cnt = 0;

        // foreach($data as $d)
        // {
        //     $empname= $d->empname;
        //     $empadd= $d->empadd;
        //     $duration= $d->duration;
        //     $designation= $d->designation;

        //     $data[$cnt]=['empname'=>$empname,'empadd'=>$empadd, 
        //     'duration'=>$duration, 'designation'=>$designation];
        //     $cnt++;
        // }

        $odemphist = ['caserefno'=>$caserefno,'operid'=>$operid, 
            'brcode'=>$brcode, 'data'=>$data];
        $jsondata = json_encode($odemphist);
        
        // return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/odemphistory';
        
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

        // return $result;
        $jsondecode = json_decode($result);

        // return $jsondata.'++'.$result;
        $errorcode = $jsondecode->{'errorcode'};
        // return $errorcode;
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'odempinfo'])->with('msgodemphist','Save Successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'odempinfo'])->with('msgodemphist','Save Unsuccessful');
        }

    }

    //post od info
    public function postOdinfo(Request $req)
    {
      
        $operid= session('loginname');
        $brcode= session('loginbranchcode');
        $caserefno = session('caserefno');
        //$accddate = substr($accddate,6,4).substr($accddate,3,2).substr($accddate,0,2);
       
        $oddesc= $req->oddesc;
        $emprelated= $req->emprelated;
        $dutydesc= $req->dutydesc;
        $symptom= $req->symptom;
        $clinicinfo= $req->clinicinfo;
        
        $odinfo=['operid'=>$operid,'brcode'=>$brcode, 'caserefno'=>$caserefno,'oddesc'=>$oddesc,'emprelated'=>$emprelated, 
            'dutydesc'=>$dutydesc, 'symptom'=>$symptom, 'clinicinfo'=>$clinicinfo];

        $jsondata = json_encode($odinfo);
        
        // return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updodinfo';
        
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
        
        $jsondecode = json_decode($result);

        // return $jsondecode;
        $errorcode = $jsondecode->{'errorcode'};
        if ($errorcode == 0)
        {
            return redirect()->back()->withInput(['tab'=>'odinfo'])->with('messageod','Save Successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'odinfo'])->with('messageod','Save Unsuccessful');
        }
        
        
    }

    //for confirmation 
    public function postConfirmation(Request $req)
    {
        if ($req->action == 'Save')
        {
            $caserefno = session('caserefno');
            $operid = session('loginname');
            $brcode = session('loginbranchcode');
            $uniquerefno = session('uniquerefno');

            $preferedbranch = $req->brname;
            $stampdate = $req->stampdate;
            // $stampdate = substr($stampdate,6,4).substr($stampdate,3,2).substr($stampdate,0,2);
            $stampdate = str_replace('-', '', $stampdate);
            $jrecv = $req->jrecv;
            $jrecvdate = $req->jrecvdate;
            $jrecvdate = str_replace('-', '', $jrecvdate);
            // $jrecvdate = substr($jrecvdate,6,4).substr($jrecvdate,3,2).substr($jrecvdate,0,2);
            $remarks = $req->remarks;


            $confirmation = ['caserefno'=>$caserefno, 'operid'=>$operid, 'brcode'=>$brcode,
                            'stampdate'=>$stampdate, 'preferedbranch'=>$preferedbranch, 'uniquerefno'=>$uniquerefno,
                            'jrecv'=>$jrecv, 'jrecvdate'=>$jrecvdate, 'remarks'=>$remarks];


            $jsondata = json_encode($confirmation);

            //return $jsondata;


            $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updconfirmation';


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

            $jsondecodeConfirmation = json_decode($result);

            // return $jsondecodeConfirmation;
            $errorcode = $jsondecodeConfirmation->{'errorcode'};
            if ($errorcode == 0)
            {
                return redirect()->back()->withInput(['tab'=>'confirmation'])->with('messageconf','Save Successful');
            }
            else
            {
                return redirect()->back()->withInput(['tab'=>'confirmation'])->with('messageconf','Save Unsuccessful');
            }
        }
        else if($req->action=='Preview')
        {
            //return redirect('/success');
        }
        else if ($req->action == 'Submit')
        {
            $operid = session('loginname');
            $brcode = session('loginbranchcode');
            $caserefno= session('caserefno');

            $prevschemerefno='';


            $datatosend = ['operid'=>$operid, 'brcode'=>$brcode, 'caserefno'=>$caserefno, 'prevschemerefno'=>$prevschemerefno];


            $jsondata = json_encode($datatosend);

            //return $jsondata;


            $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/submit';


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

            $jsondecode = json_decode($result);
            //return $result;
            $errorcode = $jsondecode->{'errorcode'};

            if ($errorcode == 0)
            {
                $schemerefno = $jsondecode->{'schemerefno'};
                $casestatus = $jsondecode->{'casests'};
                $source = $jsondecode->{'source'};
                //session(['messageconf'=>'Scheme Reference No: '.$schemerefno]);
                session(['schemerefno'=>$schemerefno]);
                session(['casestatus'=>$casestatus]);
                session(['source'=>$source]);
                return redirect('/success');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
            }
            else
            {
                return redirect()->back()->withInput(['tab'=>'confirmation'])->with('messageconf','Save unsuccessful');
            }
        }
        
        
    }

   
}

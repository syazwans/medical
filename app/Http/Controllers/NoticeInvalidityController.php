<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

class NoticeInvalidityController extends CommonController
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
        // $caserefno = session ('caserefno');
        // return$caserefno;
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

        //$state=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['state']);
        $idtype=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['idtype']);
        $race=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['race']);
        $national=DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['national']);
        
        $month = DB::select('Select refcode, descen from reftable where tablerefcode=? order by refcode', ['month']);
        
        
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
        $doclist = DB::select($sql,['03']);

        //return view ('fileupload.claim_info')->with('name',$select);

        $jsondecodeAssist='';
        $jsondecodeAccddate='';
        $how = '';


        $this->getObProfile($jsondecode);
        //$test = json_encode($jsondecode);
        //return $test;
        //$this->getObContact($jsondecod1);
        $this->getObFormAssist($jsondecodeAssist);
        
        //irina - begin
        $jsondecodemc = '';
      
        $caserefno = session('caserefno');
        

        $mcdata = null;
        
        
        //return '++'.$accdrefno.'++'.$caserefno.'++';

        //irina - end 

        //HANNIS
        //$this->getAssist($jsondecodeAssistEmployer);
        //$this->getEmployer($jsondecodeEmployer);
        
        //return json_encode($jsondecodeEmployer);
        //$jsondecodeWages = array();
        //$this->getWages($jsondecodeWages);
        
        $contrinfo = array();
        $wagesinfo = array();
        $data = array();

        // $all = ['contrinfo'=>$contrinfo, 'wagesonfo'=>$wagesinfo, 'data'=>$data];
        
        $this->getWages($contrinfo,$wagesinfo);
       
        //return $wagesinfo;
        
        $empinfo = array();
        $ilatinfo= array();
       
        $this->getEmployment_info($empinfo,$ilatinfo);
        
        

        // if ($ilatinfo && $ilatinfo!='')//najmi
        // {
        //     $errorcode = $ilatinfo -> {'errorcode'};
        //     if ($errorcode == -1)
        //     {
        //         $ilatinfo= null;      
        //     }
        //     else
        //     {
        //          $ilatinfo= $ilatinfo->{'data'};
                 
        //     }
        // }

        
       
        // $this->getEmployment_info($ilatinfo);
        // if ($empinfo && $empinfo!='')//najmi
        // {
        //     $errorcode = $empinfo->{'errorcode'};
        //     // return $record;
        //     if ($errorcode == 0)
        //     {
        //         $empinfo= null;
               
        //     }
        //     else
        //     {
        //          $empinfo= $empinfo->{'data'};
        //     }
            
        //     // $test = json_encode($empinfo1);
        //     // return $test;
        // }

        // if ($ilatinfo && $ilatinfo!='')//najmi
        // {
            
        //     $record_ilatinfo = $ilatinfo->{'record'};
        //     // return $record;
        //     if ($record_ilatinfo == 0)
        //     {
        //         $ilatinfo= null;
               
        //     }
        //     else
        //     {
        //          $ilatinfo= $ilatinfo->{'data'};
        //          return $ilatinfo;
        //     }
            
        //     // $test = json_encode($empinfo1);
        //     // return $test;
        // }
        // return $empinfo1;
          // return $empinfo
        
        $docinfo = array();
        $this->getDoc($docinfo);

        //SYAHIRAH
         $this->getCertificateEmp($jsondecodemp);
         $jsondecodebank = null;
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
     
        
        if ($jsondecode && $jsondecode!='')//irina
        {
            //return json_encode($jsondecode);
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
                // return $obprofile;
            }
            
            //$test = json_encode($obprofile);
            //return $test;
        }

        if ($jsondecod1 && $jsondecod1!='')//irina
        {
            $obcontact = $jsondecod1->{'data'};
        }

        //HANNIS
        //return json_encode($jsondecodeEmployer);
        /*if ($jsondecodeEmployer && $jsondecodeEmployer!='')//irina
        {
            $record = $jsondecodeEmployer->{'record'};
            if ($record > 0)
            {
                
                $emprecord = $jsondecodeEmployer->{'emprecord'};
                if ($record == 1)
                {
                    $empcode = $emprecord[0]->{'empcode'};
                    session(['empcode'=>$empcode]);
                }
            }
            else
            {
                $emprecord = null;
            }
            //$date = $jsondecodeEmployer->{'data'};
        }*/

        /*$empcert = null;
        //SYAHIRAH
        if ($jsondecodemp && $jsondecodemp!='')//irina
        {
            $errorcode = $jsondecodemp->{'errorcode'};
            if ($errorcode == 0)
            {
                $empcert = $jsondecodemp->{'data'};
            }
            
        }*/
        
        $bankinfo = null;
        if ($jsondecodebank && $jsondecodebank!='')//irina
        {
            $errorcode = $jsondecodebank->{'errorcode'};
            if ($errorcode == 0)
            {
                $bankinfo = $jsondecodebank->{'data'};
                //return json_encode($bankinfo);
            }
            
           
        }
        if ($jsondecodepermanent && $jsondecodepermanent!='')//irina
        {
            $permanentrep = $jsondecodepermanent->{'data'};
        }

        
        $jsondecodeConfirmation="";
        $confirmation = null;
        $url = $this->getConfirmation($jsondecodeConfirmation);
        
        //return $url;
         
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
            
            // if ($record > 0)
            // {
            //     $confirmation = $jsondecodeConfirmation->{''};
            // }
            // else
            // {
            //     $
            //     
            //     confirmation = null;
            // }
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
        //  return $empinfo;
        return view('noticeinvalidity.index',['obprofile'=>$obprofile,'state'=>$state, 'branch'=>$branch,
            'idtype'=>$idtype, 'race'=>$race, 'national'=>$national, 'obformassist' => $jsondecodeAssist, 
            'contribution'=>$contrinfo, 'data'=>$data,'contribution'=>$contrinfo,'wagesinfo' => $wagesinfo,
            'empcert'=>$empcert,'bankinfo'=>$bankinfo, 'permanentrep'=>$permanentrep, 'optionbank'=>$optionbank, 
            'optionreason'=>$optionreason,'optionbai'=>$optionbai, 'optionpay'=>$optionpay, 'bankcode'=>$bankcode, 
            'accountype'=>$accountype, 'overseasbank'=>$overseasbank, 'overseasbanktype'=>$overseasbanktype, 'month'=>$month,
            'caserefno'=>$caserefno, 'doclist'=>$doclist, 'emptype'=>$emptype,'docinfo'=>$docinfo,
            'empinfo'=>$empinfo,'ilatinfo'=>$ilatinfo,'confirmation'=>$confirmation]);
            
        // return $empinfo;
    }
    
    public function checkIlatNotice(&$jsondecode)
    {
        $idno=session('idno');

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/ilatrecordexist?idno='.$idno;
                       
            //return $url;
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_PROXY, '');
            
            curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
//return $result;
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
            //return '++'.$result.'++';
            $jsondecode = json_decode($result);

            $record = $jsondecode->{'record'};
            //close connection
            curl_close($ch);
            
            if($record=='0')
            {
                session(['schemerefno'=>'']);
                
                $noticedraft = $this->createnoticedraft();
                $errorcode = $noticedraft->{'errorcode'};
                
                if ($errorcode == 0)
                {
                    $caserefno = $noticedraft->{'caserefno'};
                    session(['caserefno'=>$caserefno]);
                   
                    return redirect('/obform_iv');
                }
                else
                {
                    return redirect()->back()->with('messagent','Failed to create draft');
                }
                //return $this->index();//irina comment
                
            }
            else
            {
                // $data= $jsondecode->{'data'};
                // foreach ($data as $d) 
                // {
                //     session(['accdrefno'=> $d->accdrefno, 'caserefno' => $d->caserefno]);
                //     session(['accdmonth'=>$accdmonth, 'accdyear'=> $accdyear]);
                //     session(['accddate'=>$date,'accdtime'=>$accdtime, 'empcode'=>$empcode]);
                //     //return $this->index();//irina comment
                //     return redirect('/obform_iv');
                // }
            }
            //return $this->index();//irina comment
            session(['accdmonth'=>$accdmonth, 'accdyear'=> $accdyear]);
            session(['accddate'=>$date,'accdtime'=>$accdtime, 'empcode'=>$empcode]);
            return redirect('/obform_ivt');
    
            //return $result;
    }
    
    public function postBankInfo(Request $req)
    {
        $caserefno= session('caserefno');//$req->idno;
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        //return $caserefno;
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
                return redirect()->back()->with('messagebank','Save successful');
            }
            else
            {
                return redirect()->back()->with('messagebank','Save unsuccessful');
            }
        }
      
        
        // return $httpcode;
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

    //get ObProfile FROM API
    public function getObProfile(&$jsondecode)
    {    
        $idno= session('idno');
        $idtype= session('idtype');
        $caserefno= session('caserefno');
        $operid= session('loginname');

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/obprofile?idno='.$idno.'&idtype='.$idtype.'&caserefno='.$caserefno.'&operid='.$operid;
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
   

    //get ObContact FROM API
      public function getObContact(&$jsondecod1)
    {   
        //$idno='9611121';
        $idno= session('idno');
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/obcontact/'.$idno;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecod1 = json_decode($result);
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

    public function getEmployment_info(&$empinfo,&$ilatinfo)//&$newwages)
    {
        // $idno = session ('idno'); // get session
        $caserefno = session('caserefno');

         $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/emphistory?caserefno='.$caserefno;//irina
        $url_ilatinfo = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getilatinfo?caserefno='.$caserefno;
                                            

        // return $url;
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);  
       
        curl_close($ch);

        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url_ilatinfo);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
        
        
        $result_ilatinfo = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    
        //close connection
        curl_close($ch);
        $empinfo = json_decode ($result);

        $ilatinfo = json_decode ($result_ilatinfo);
       
       


        // if ($empinfo && $empinfo!='')//najmi
        // {
        //     $errorcode = $empinfo -> {'errorcode'};
        //     if ($errorcode == 0)
        //     {
        //         $empinfo= null;      
        //     }
        //     else
        //     {
        //          $empinfo= $empinfo->{'data'};
        //     }
        // }

        if ($ilatinfo && $ilatinfo!='')//najmi
        {
            $errorcode = $ilatinfo -> {'errorcode'};
            if ($errorcode == -1)
            {
                $ilatinfo= null;      
            }
            else
            {
                 $ilatinfo= $ilatinfo->{'data'};
            }
        }
        
        if ($empinfo != null && $empinfo!='')
        {
            $record = $empinfo->{'record'};
            if ($record > 0)
            {
                $empinfo = $empinfo->{'data'};
            }
            else
            {
                $empinfo = null;
            }
        }

    
    }

     // GET WAGES FROM DB - HANNIS 
     public function getWages(&$contrinfo, &$wagesinfo)//&$newwages)
    {
        $caserefno = session ('caserefno'); // get session
        $idno = session ('idno'); // get session
        $month = date('m');//session ('accdmonth');
        $year = date('Y');//session('accdyear');

        //$idno = '960422016554';
        // $month = '03';
        // $year = '2019';
        $count = '6';

        
        //$url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/wage/'.$idno.'/'.$month.'/'.$year.'/'.$count;//irina
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/wages?caserefno='.$caserefno.'&month='.$month.'&year='.$year.'&count='.$count;//irina
        
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
            if ($record > 0)
            {
                $wagesinfo = $jsondecodeWages->{'data'};
            }
            else
            {
                $wagesinfo = null;
            }

        }


        $url = 'http://'.env('ASSIST_IP', 'localhost').'/wsassistsimulation/contribution/'.$idno;//irina
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

    //GET ACCIDENT INFO 
       public function getAccidentinfo(&$jsondecod3)
    {   
        //$accdrefno='1';
        //$idno='800920145348';
        $accdrefno=session('accdrefno');
        $idno=session('idno');
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/getaccidentinfo?accdrefno='.$accdrefno.'&idno='.$idno;
        
        $ch = curl_init();
        
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
        $jsondecod3 = json_decode($result);
        //close connection
        curl_close($ch);
    }


     // // GET MC DETAIL
    //     public function getMCDetail(&$jsondecod4)
    // {   
    //     $mcrefno='1';
    //     $url = 'http://perkesows.com/api/mcdetail/'.$mcrefno;
    //     $ch = curl_init();
        
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_PROXY, '');
        
    //     curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $result = curl_exec($ch);
    //     $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //     // $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        
    //     $jsondecod4 = json_decode($result);
    //     //close connection
    //     curl_close($ch);
    // }

    //GET BRANCH NAME FROM DB - FOR SOCSO
    public function getbranchname($statecode)
    {
        $branch=DB::select('select brcode, brname from branch  where  statecode=?', [$statecode]);
        return json_encode($branch);

    }

    //GET CERTIFICATE FROM DB - SYAHIRAH
    public function getCertificateEmp(&$jsondecodemp)
    {
        // $caserefno='1';
        $caserefno = session('caserefno');
        // $url = 'http://perkesows.localhost/api/certificates/'.$caserefno;
        $url = 'http://'.env('WS_IP', 'perkesows.com').'/api/wsmotion/certificate?caserefno='.$caserefno;
        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');

        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);


        $jsondecodemp=json_decode($result);
        // $data =$jsondecode->{'data'};

        //close connection
        curl_close($ch);
        //return view('noticeAccident.certificateEmployee',['data'=>$jsondecode]);
        //return view ('noticeAccident.obForm');
        // return $httpcode; //$httpcode will contain json data returned by API

    }

     //GET BANK INFO FROM DB - SYAHIRAH
   
   
   //GET PERMANENT FROM DB - SYAHIRAH
    public function getPermanentInfo(&$jsondecodepermanent)
    {
        //$idno='1';
        $idno = session('idno');
        $url = 'http://'.env('WS_IP', 'perkesows.com').'/api/wsmotion/permanentrep/'.$idno;
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PROXY, '');
        
        curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        

        $jsondecodepermanent =json_decode($result);
        // $data =$jsondecode->{'data'};
        

        //close connection
        curl_close($ch);
        //return view('noticeAccident.certificateEmployee',['data'=>$jsondecode]);
        //return view ('noticeAccident.obForm');
        // return $httpcode; //$httpcode will contain json data returned by API

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

    public function postIlat_info(Request $req)
    {
        $descriptionmorbidity=$req->descriptionmorbidity;
        $year_morbidity=$req->year_morbidity;
        $engage=$req->engage;
        $dafe_of_cessation=$req->dafe_of_cessation;
        
        if (strlen($dafe_of_cessation) == 10)
        {
            $dafe_of_cessation = str_replace('-', '', $dafe_of_cessation);
        }

        /*$emp_name  = $req->emp_name;
        $emp_address = $req->emp_address;
        $emp_period = $req->emp_period;
        $emp_occupation = $req->emp_occupation;
        $emp_monthly_wages = $req->emp_monthly_wages;*/
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
    //  $idno= session('idno');
        $caserefno = session ('caserefno');
        // $idno =session('idno');

   /*$data=['empname'=> $emp_name, 'empadd'=> $emp_address,'duration'=> $emp_period, 'designation'=> $emp_occupation, 'salary'=> $emp_monthly_wages ];

    $emphistory = ['caserefno'=> $caserefno,'operid'=> $operid,'brcode'=>$brcode,'data' =>[$data]];
    $jsondata = json_encode($emphistory);
    // $empinfo1= $jsondata->{'data'};
    // return $jsondata;
    $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/emphistory';
    $ch = curl_init();
    
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_PROXY, '');
    
    curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata);
    curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
    
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);*/

    $moribity = ['operid'=> $operid,'brcode'=> $brcode,'caserefno'=>$caserefno,'morbiddesc' =>$descriptionmorbidity,'morbidyear'=>$year_morbidity ,'inemployment'=>$engage ,'endempdate' =>$dafe_of_cessation];
    $jsondata_moribity = json_encode($moribity);

    $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/updilatinfo';
                   
    $ch = curl_init();
    
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_PROXY, '');
    
    curl_setopt($ch,CURLOPT_POSTFIELDS, $jsondata_moribity);
    curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
    
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result_moribity = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $response = curl_getinfo($ch, CURLINFO_HEADER_OUT);
    //close connection
    curl_close($ch);
    
    //$jsondecode = json_decode($result);
    $jsondecode_moribity = json_decode($result_moribity);
  
    //$errorcode = $jsondecode->{'errorcode'};
    $errorcode1 = $jsondecode_moribity->{'errorcode'};
        
    if ($errorcode1 == 0)
    {
        return redirect()->back()->withInput(['tab'=>'pensiondetails'])->with('messageilat','Save successful');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
    }
    else
    {
        return redirect()->back()->withInput(['tab'=>'pensiondetails'])->with('messageilat','Save unsuccessful');
    }



    
    
    //return redirect()->back();
    // return $this->index();
}
public function postEmphistory(Request $req)
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
            $wages= $req->wages[$idx];
            
            if ($empname == '' && $empadd == '' && $duration == '' && $designation == '' && $wages == '')
            {
                continue;
            }
            
            $data[$i] = ['empname'=>$empname, 'empadd'=>$empadd, 'duration'=>$duration, 
                'designation'=>$designation, 'salary'=>$wages];
            
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

        $emphist = ['caserefno'=>$caserefno,'operid'=>$operid, 
            'brcode'=>$brcode, 'data'=>$data];
        $jsondata = json_encode($emphist);
        
        // return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/emphistory';
        
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
            return redirect()->back()->withInput(['tab'=>'empinfo'])->with('msgemphist','Save Successful');
        }
        else
        {
            return redirect()->back()->withInput(['tab'=>'empinfo'])->with('msgemphist','Save Unsuccessful');
        }

    }
    
    public function getEmphistory(&$jsondecodeEmphistory)
    {
        $caserefno = session ('caserefno'); // get session

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/emphistory?caserefno='.$caserefno;//hannis

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
    
        $jsondecodeEmphistory = json_decode($result);

        //close connection
         curl_close($ch);

    
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

    public function postconfirmationilat(Request $req)
    {
        $state1=$req->state1;
        $brname=$req->brname;
        $sectjrecv=$req->sectjrecv;
        $notice_date=$req->notice_date;
        $stampdate=$req->stampdate;
        $remarks=$req->remarks;
        $sectjrecvdate=$req->sectjrecvdate;

        $preferedbranch = $req->brname;
        $uniquerefno = session('uniquerefno');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $idno= session('idno');
        $idtype= session('idtype');
        $caserefno = session ('caserefno');
        // $idno =session('idno');

   $data=['caserefno'=> $caserefno, 'operid'=> $operid,'brcode'=> $brcode, 'preferedbranch'=> $preferedbranch, 'stampdate'=>$stampdate,'uniquerefno'=>$uniquerefno,'jrecv'=>$sectjrecv,'jrecvdate'=>$sectjrecvdate,'remarks'=>$remarks];

   
    $jsondata = json_encode($data);
   
    // $empinfo1= $jsondata->{'data'};
    
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

    //close connection
    curl_close($ch);
    
    $jsondecode = json_decode($result);
    
  
    $errorcode = $jsondecode->{'errorcode'};
      
    if ($errorcode == 0)
    {
        return redirect()->back()->with('messageemp','Save successful');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
    }
    else
    {
        return redirect()->back()->with('messageemp','Save unsuccessful');
    }



    
    
    //return redirect()->back();
    // return $this->index();
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
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $idno= session('idno');
        $caserefno = $req->caserefno;//session('caserefno');
        
        $preferedbranch = $req->brname;
        
        $prevschemerefno='';
        $stampdate = $req->stampdate;
        $stampdate = str_replace('-', '', $stampdate);
        /*if (strlen($stampdate) == 10)
        {
            
            $stampdate = substr($stampdate,6,4).substr($stampdate,3,2).substr($stampdate,0,2);
        }*/
        
        //$noticedate = date('Ymd');
        $jrecv = $req->sectjrecv;
        $jrecvdate = $req->sectjrecvdate;
        $jrecvdate = str_replace('-', '', $jrecvdate);
        
        $remarks = $req->remarks;
        
        $datatosend = ['operid'=>$operid, 'brcode'=>$brcode, 'idno'=>$idno, 'prevschemerefno'=>$prevschemerefno,
                        'stampdate'=>$stampdate, 'preferedbranch'=>$preferedbranch, 'caserefno'=>$caserefno,
                        'jrecv'=>$jrecv, 'jrecvdate'=>$jrecvdate, 'remarks'=>$remarks];
        
        
        $jsondata = json_encode($datatosend);
        
        //return $jsondata;


        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/accident/submit';
        

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
        //return $result;
        $retcode = $res->{'errorcode'};
        
        if ($retcode == 0)
        {
            $schemerefno = $res->{'schemerefno'};
            session(['messageconf'=>'Scheme Reference No: '.$schemerefno]);
            session(['accdrefno'=>'','caserefno'=>'','idno'=>'']);
            return redirect('/success');//++'.$x.'++'.$accdrefno.'++'.$jsondata.'++');
        }
        else
        {
            return redirect()->back()->with('messageconf','Save unsuccessful');
        }
        
    }

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
    //return $url;
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

    
   
    
     


     // POST REMARKS
     public function postRemark(Request $req)
        {   
            $remarkid = $req->remarkid;
            $remarks = $req->remarks;

        $remark = ['remarkid'=> $remarkid, 'remarks'=> $remarks];
        $jsondata = json_encode($remark);
       
        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/newremark';
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
        return redirect()->back();
        // return $this->index();
     }

     public function viewObForm()
     {
        return view ('noticeAccident.index');
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
   
}

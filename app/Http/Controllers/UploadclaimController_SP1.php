<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Storage;
use Response;

class UploadclaimController extends Controller
{
    public function viewstorage(Request $req)
    {
        $docname = $req->query('docname');
        $docpath = 'app/documents/'.$docname;
        $path = storage_path($docpath);

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$docpath.'"'
        ]);
    }
    
    public function upload(Request $request){

      // for($i = 1;$i<=$array;$i++){
        //     $doctype = $request->doctype[$i];
        //     $docdescen = $request->docdescen[$i];

        //     $combine=$fe
        // }
        
        //return $request->all();

       
        $idno = session('idno');
        $caserefno = session('caserefno');
        $operid = session('loginname');
        $brcode = session('loginbranchcode');
        $dataSet = array();
        
        $cnt = 0;
        $a = '';
        
        foreach ($request->pdf as $index => $pdf)
        {
            
            $date = date('Ymd');
            $doctype = $request->doctype[$index];
            $doccat = $request->doccat[$index]; 
            
            if ($doccat == 'O')
            {
                $docname = $idno.'_'.$doctype.'_'.$date.'.pdf';
                $dataSet[$cnt++] = [
                    'caserefno' => '',
                    'idno' =>$idno,
                    'docdate' =>$date,
                    'doctime' =>date('His'), 
                    'doccat' => $doccat,
                    'doctype' => $doctype,
                    'docname' => $docname,
                    'doccount'=>1

                ];
            }
            else if ($doccat == 'C')
            {
                $docname = $caserefno.'_'.$doctype.'_'.$date.'.pdf';
                $dataSet[$cnt++] = [
                    'caserefno' => $caserefno,
                    'idno' =>$idno,
                    'docdate' =>$date,
                    'doctime' =>date('His'), 
                    'doccat' => $doccat,
                    'doctype' => $doctype,
                    'docname' => $docname,
                    'doccount'=>1

                ];
            }
            
          
            
            $pdf->storeAs('documents', $docname);
        }
        
        $docrepo = ['operid'=>$operid, 'brcode'=>$brcode, 'docinfo'=>$dataSet];
        
        $jsondata = json_encode($docrepo);
        //return $jsondata;

        $url = 'http://'.env('WS_IP', 'localhost').'/api/wsmotion/upddoc';

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
            //return redirect()->back()->with('messagedoc','Upload successful');
            return redirect()->back()->withInput(['tab'=>'uploaddoc'])->with('messagedoc','Upload successful');
        }
        else
        {
            //return redirect()->back()->with('messagedoc','Upload unsuccessful');
            return redirect()->back()->withInput(['tab'=>'uploaddoc'])->with('messagedoc','Upload unsuccessful');
        }
        
        /*foreach($request->doctype as $index => $doctype) {
       
                   
            $dataSet[] = [
                'caserefno' => $caserefno,
                'idno' =>$idno,
                'date' =>$date,
                'time' =>$time, 
                'doccat' =>'C',
                'doctype' => $doctype,
                'docname' => $request->docdescen[$index],
                'addby' =>$operid,
                
            ];
            
            //return $index;
            $docid = $caserefno.'_'.$doctype.'_'.$date.'.pdf';
            if ($request->pdf[$index] == null)
            {
                continue;
            }
            if ($request->pdf[$index] != null)
            {
                $request->pdf[$index]->storeAs('documents', $docid);
                //$storage=Storage::disk('local')->putFileAs('documents',$request->pdf[$index],$caserefno.'_'.$doctype.'_'.$date.'.pdf');
            }
            
            //$a = $a.'++'.$index.'++';
            
            //$cnt++;
            
        }*/
        
        //return $a;
        DB::table('docrepository')->insert($dataSet);

        return redirect()->back();


        
         //return $dataSet;
    //    return json_decode($dataSet);
       
    
        
    
        // $this->validate($request, [
        //     'pdf_1' => 'file|mimes:pdf|max:350',
        //     'pdf_2' => 'file|mimes:pdf|max:350',
        //     'pdf_3' => 'file|mimes:pdf|max:350',
        //     'pdf_4' => 'file|mimes:pdf|max:350',
        //     'pdf_5' => 'file|mimes:pdf|max:350',
        //     'pdf_6' => 'file|mimes:pdf|max:350',
        //     'pdf_7' => 'file|mimes:pdf|max:350',
        //     'pdf_8' => 'file|mimes:pdf|max:350',
        //     'pdf_9' => 'file|mimes:pdf|max:350',
        //     'pdf_10' => 'file|mimes:pdf|max:350',
        //     'pdf_11' => 'file|mimes:pdf|max:350',
        //     'pdf_12' => 'file|mimes:pdf|max:350',
        //     'pdf_13' => 'file|mimes:pdf|max:350',
        //     'pdf_14' => 'file|mimes:pdf|max:350',
        //     'pdf_15' => 'file|mimes:pdf|max:350',
        //  ]);

        // if ($request->pdf_1 == null  ) {
          
        // }else{
           
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '1',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C01',
        //          'docname' => 'Medical Report (Reg. 57(1))',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_1,'981230435087_C01_'.$date.'.pdf');
        // }

        // if ($request->pdf_2 == null  ) {
          
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '2',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C02',
        //          'docname' => 'Original Police Report / Certified True Copy (certified by the the police station that issued it) for road accident [Regulation 71(1)]',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_2,'981230435087_C02_'.$date.'.pdf');
        // }

        // if ($request->pdf_3 == null  ) {
          
        // }else{

          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '3',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C03',
        //          'docname' => 'Form 34',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_3,'981230435087_C03_'.$date.'.pdf');
        // }

        // if ($request->pdf_4 == null  ) {
          
        // }else{
        
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '4',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C05',
        //          'docname' => 'Medical Certificate (Reg. 57(1))',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_4,'981230435087_C05_'.$date.'.pdf');
        // }

        // if ($request->pdf_5 == null  ) {
          
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '5',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C06',
        //          'docname' => 'Medical Report [Reg. 68A(1)]',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_5,'981230435087_C06_'.$date.'.pdf');
        // }
        // if ($request->pdf_6 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '6',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C07',
        //          'docname' => 'Medical Report [Reg. 46(ii)]',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_6,'981230435087_C07_'.$date.'.pdf');
        // }
        // if ($request->pdf_7 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '7',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C08',
        //          'docname' => 'Receipt for funeral expenses for claimant other than from  widow / widower,  parents or child / adopted child [Reg. 98(1)]',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_6,'981230435087_C08_'.$date.'.pdf');
        // }

        // if ($request->pdf_8 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '8',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C09',
        //          'docname' => 'Copy of Identification Widow/Widower',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_8,'981230435087_C09_'.$date.'.pdf');
        // }
        // if ($request->pdf_9 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '9',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C10',
        //          'docname' => 'Copy of childrens Birth Certificate  / and  identification',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_9,'981230435087_C10_'.$date.'.pdf');
        // }
        // if ($request->pdf_10 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '10',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C11',
        //          'docname' => 'Copy of parents identification',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_10,'981230435087_C11_'.$date.'.pdf');
        // }
        // if ($request->pdf_11 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '11',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C12',
        //          'docname' => 'Copy of siblings birth certificate / and identification',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_11,'981230435087_C12_'.$date.'.pdf');
        // }
        // if ($request->pdf_12 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '12',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C13',
        //          'docname' => 'Copy of parents death certificate',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_12,'981230435087_C13_'.$date.'.pdf');
        // }
        // if ($request->pdf_13 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '13',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C14',
        //          'docname' => 'Copy of grandparents identification',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_13,'981230435087_C14_'.$date.'.pdf');
        // }
        // if ($request->pdf_14 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '14',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C15',
        //          'docname' => 'PKS(F) 47',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_14,'981230435087_C15_'.$date.'.pdf');
        // }
        // if ($request->pdf_15 == null  ) {
        
        // }else{
          
        //     DB::table('docrepository')->insert([
        //         ['caserefno' => '15',
        //          'idno' => '981230435087',
        //          'date' => $date,
        //          'time' => $time,
        //          'doccat' => 'C',
        //          'doctype' => 'C16',
        //          'docname' => 'Others',
        //          'addby' => 'NAJMI']
               
        //     ]);
        //     $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_15,'981230435087_C16_'.$date.'.pdf');
        // }
        // return redirect()->back();
    }
}

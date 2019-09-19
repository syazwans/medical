<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
// use App\docrepository; 
use DB;
use Storage;
class UploadobprofileController extends Controller
{
    public function upload(Request $request){
       
        $date= $request->current_date;
        $time= $request->current_time;
 
        $array='5';
        $dataSet = [];
        foreach($request->doctype as $index => $doctype) {
       
                   
            $dataSet[] = [
                'caserefno' => '1',
                'idno' =>'981230435087',
                'date' =>$date,
                'time' =>$time, 
                'doccat' =>'O',
                'doctype' => $doctype,
                'docname' => $request->docdescen[$index],
                'addby' =>'Najmi',
                
            ];
            
          
            $storage=Storage::disk('local')->putFileAs('File PDF O',$request->pdf[$index],'981230435087_'.$doctype.'_'.$date.'.pdf');
        }
        DB::table('docrepository')->insert($dataSet);

        return redirect()->back();
    }
        // $pdf = new docrepository;
        // $pdf->pdf_name = $request->pdf_name;
        // $pdf->caserefno = ("OT123");
        // $pdf->idno = ("981230435087");
        // $pdf->date= $request->current_date;
        // $pdf->time= $request->current_time;
        // $pdf->doccat= ("O");
        // $pdf->doctype= ("O01");
        // $pdf->docname= ("Copy of Insured Persons Identification Card ( both sides )");
        // $pdf->addby= ("NAJMI");
    //     if ($request->pdf_1 == null  ) {
          
    //     }else{
           
    //         DB::table('docrepository')->insert([
    //             ['caserefno' => '1',
    //              'idno' => '981230435087',
    //              'date' => $date,
    //              'time' => $time,
    //              'doccat' => 'O',
    //              'doctype' => 'O01',
    //              'docname' => 'Copy of Insured Persons Identification Card ( both sides )',
    //              'addby' => 'NAJMI']
               
    //         ]);
    //         $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_1,'981230435087_O01_'.$date.'.pdf');
    //     }

    //     if ($request->pdf_2 == null  ) {
          
    //     }else{
          
    //         DB::table('docrepository')->insert([
    //             ['caserefno' => '2',
    //              'idno' => '981230435087',
    //              'date' => $date,
    //              'time' => $time,
    //              'doccat' => 'O',
    //              'doctype' => 'O02',
    //              'docname' => 'Copy of Death Certificate/ Burial Permit [Reg. 56B &  Per. 88(1)]',
    //              'addby' => 'NAJMI']
               
    //         ]);
    //         $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_2,'981230435087_O02_'.$date.'.pdf');
    //     }

    //     if ($request->pdf_3 == null  ) {
          
    //     }else{

          
    //         DB::table('docrepository')->insert([
    //             ['caserefno' => '3',
    //              'idno' => '981230435087',
    //              'date' => $date,
    //              'time' => $time,
    //              'doccat' => 'O',
    //              'doctype' => 'O03',
    //              'docname' => 'Marriage Certificate / Marriage Register',
    //              'addby' => 'NAJMI']
               
    //         ]);
    //         $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_3,'981230435087_O03_'.$date.'.pdf');
    //     }

    //     if ($request->pdf_4 == null  ) {
          
    //     }else{
        
    //         DB::table('docrepository')->insert([
    //             ['caserefno' => '4',
    //              'idno' => '981230435087',
    //              'date' => $date,
    //              'time' => $time,
    //              'doccat' => 'O',
    //              'doctype' => 'O04',
    //              'docname' => 'Payslip',
    //              'addby' => 'NAJMI']
               
    //         ]);
    //         $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_4,'981230435087_O04_'.$date.'.pdf');
    //     }

    //     if ($request->pdf_5 == null  ) {
          
    //     }else{
          
    //         DB::table('docrepository')->insert([
    //             ['caserefno' => '5',
    //              'idno' => '981230435087',
    //              'date' => $date,
    //              'time' => $time,
    //              'doccat' => 'O',
    //              'doctype' => 'O05',
    //              'docname' => 'EPF records',
    //              'addby' => 'NAJMI']
               
    //         ]);
    //         $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_5,'981230435087_O05_'.$date.'.pdf');
    //     }
    //     if ($request->pdf_6 == null  ) {
        
    //     }else{
          
    //         DB::table('docrepository')->insert([
    //             ['caserefno' => '6',
    //              'idno' => '981230435087',
    //              'date' => $date,
    //              'time' => $time,
    //              'doccat' => 'O',
    //              'doctype' => 'O06',
    //              'docname' => 'Confirmation of Bank Information',
    //              'addby' => 'NAJMI']
               
    //         ]);
    //         $storage=Storage::disk('local')->putFileAs('File PDF',$request->pdf_6,'981230435087_O06_'.$date.'.pdf');
    //     }
    //     return redirect()->back();
        
    //     // $storage=Storage::disk('local')->put('981230435087_O01_'.$date.'.pdf',$request->pdf_1);
       
        
        
    //     // $base64 = base64_encode(file_get_contents($request->file('pdf_file')));
    //    // $storage=Storage::disk('public')->putFileAs('File PDF',$request->pdf_file,$request->pdf_name.'.pdf');
    //    // $storage=Storage::disk('local')->putFileAs('File_PDF',$request->pdf_file,'lola.pdf');
    //   //$storage=Storage::disk('local')->put($request->document_type_ob_profile.'.pdf',$request->pdf_file);
       

        
    //     // $pdf->pdf_file =$storage;
     
      
    //     //    $pdf->save();
      
    //     //  return redirect()->route('show.file');
    //     //  return response()->file('C:\wamp64\www\blog\storage\app\File pdf\aaa.pdf');

    // // return redirect()->back();
    // }
}

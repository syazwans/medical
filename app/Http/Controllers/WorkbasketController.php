<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use App\Workbasket;
use App\Caseinfo;
use App\Reftable;
use DB;
use Cookie;
use Response;
use Mail;

class WorkbasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
        //
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

    public function wblist()
    {

        $workbasket = new Workbasket;

        $operid = session('loginname');
        
        if ($operid == '')
        {
            return redirect('/login');
        }

        $result = DB::select('select w.wbid, w.date, w.time, c.schemerefno, w.caseid, w.revisionrefno, w.medrefno, w.rtwrefno, r.descen 
        from "workbasket" w, caseinfo c, reftable r where w.caserefno = c.caserefno and w.taskcode = r.refcode 
        and r.tablerefcode =? and w.operid=?',['taskcode', $operid]);

        // $now = time(); // or your date as well
        // $your_date = strtotime('date');
        // $datediff = $now - $your_date;

        $workbasket->workbasket = $result;

        return view('home',['workbasket'=>$result]);

        // $workbasket = Workbasket::all();
        // return view('home', compact ('workbasket'));

    }

}

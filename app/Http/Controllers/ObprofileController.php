<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ObprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     DB::connection('conn_name')->table('table1 as t1')

    //  ->select("t1.col_name", "t2.col_name","t3.col_name" )             

    //  ->join("table2 AS t2", "t1.id", "=", "t2.id")

    //   ->join("table3 AS t3", "t3.id", "=", "t2.id")

    //   ->where("col_name", "=",”some_value”)

    //    ->get();
        $select = DB::select('select docdescen,doctype,docdescbm from doctype where doccat=?',['O']);
        return view ('fileupload.ob_profile')->with('name',$select);
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
}

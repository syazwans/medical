<?php

namespace App\Http\Controllers\medicalServices;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\Letter;
use App\Http\Resources\Consent as ConsentResource;
use DB;
use Redirect;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class generateConsentLetter extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $url = config('services.endpoint.url');
		// $endpoint ='http://127.0.0.1:8000/api/letter';
		$options = [
			'headers' => [
				'Content-Type' => 'application/json',
				'Accept' => 'application/json'
			],
			

		];

        // $client = new Client();
		// 		// $response = $client->post($endpoint, $options);
		// $response = $client->get($url.'/letter', $options);
        // dd($response);
        
		$client = new Client();
		// $url = config('endpoint.url');
        $id = "15";
		// dd($url);
		$response = $client->get( $url.'/letter/'.$id)->getBody();
		$content = json_decode($response->getContents());
	    // dd($content->data);
        $pdf=PDF::loadView('MedicalServices.Investigation.ACPP.consent_letter', ['result' => $content]);
        return $pdf->stream('example1.pdf');
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

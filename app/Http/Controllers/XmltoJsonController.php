<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
class XmltoJsonController extends Controller
{
    function uploadxml()
    {
        return view('UploadXml');
    }

    function xmltojson(Request $request)
    {
        Log::info(print_r($request,1));
        $json = json_encode(simplexml_load_string($xml));


        DB::table('data')->insert([
            'json_data' => $json,
        ]);

        return response()->json($json);
        
    }
}

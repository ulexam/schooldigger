<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Wrapper extends Controller
{
    public function districts(Request $request){

        $Kota = $request->st;
        $Id = $request->appID;
        $Key = $request->appKey;

        $json= Http::get('https://api.schooldigger.com/v2.0/districts?st='.$Kota.'&appID='.$Id.'&appKey='.$Key)->json();

        return response()->json($json);
    }

    public function school1(Request $request){

        $Quant = $request->q;
        $Id = $request->appID;
        $Key = $request->appKey;

        $json= Http::get('https://api.schooldigger.com/v2.0/autocomplete/schools?q='.$Quant.'&appID='.$Id.'&appKey='.$Key)->json();

        return response()->json($json);
    }

    public function school2(Request $request){

        $Kota = $request->st;
        $Id = $request->appID;
        $Key = $request->appKey;

        $json= Http::get('https://api.schooldigger.com/v2.0/schools?st='.$Kota.'&appID='.$Id.'&appKey='.$Key)->json();

        return response()->json($json);
    }

    public function school3(Request $request){

        $Kota = $request->st;
        $Id = $request->appID;
        $Key = $request->appKey;

        $json= Http::get('https://api.schooldigger.com/v2.0/schools?st='.$Kota.'&appID='.$Id.'&appKey='.$Key)->json();

        return response()->json($json);
    }

    public function school4(Request $request){

        $Kota = $request->st;
        $Id = $request->appID;
        $Key = $request->appKey;
        
        $json= Http::get('https://api.schooldigger.com/v2.0/schools?st='.$Kota.'&appID='.$Id.'&appKey='.$Key)->json();

        return response()->json($json);
    }
}

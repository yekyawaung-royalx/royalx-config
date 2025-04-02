<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThreePLController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function service_types(){
        $json = 'json/3pl-services/service-types';

        return view('backend.3pl.service-types',compact('json'));
    }

    public function stations(){
        $json = 'json/3pl-services/stations';

        return view('backend.3pl.stations',compact('json'));
    }

    public function expresses(){
        $json = 'json/3pl-services/expresses';

        return view('backend.3pl.expresses',compact('json'));
    }

    public function json_service_types(){
        $types = DB::table('ServiceTypes3PL')->paginate(50);

        return response()->json($types);
    }

    public function json_stations(){
        $stations = DB::table('Stations3PL')->paginate(50);

        return response()->json($stations);
    }

    public function json_expresses(){
        $expresses = DB::table('Expresses3PL')->orderBy('ExpressNameEn','asc')->paginate(50);

        return response()->json($expresses);
    }
}

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

    public function branches(){
        $json = 'json/3pl-services/branches';

        return view('backend.3pl.branches',compact('json'));
    }

    public function routes(){
        $json = 'json/3pl-services/routes';
        $branches = DB::table('Branches3PL')->orderBy('BranchNameEn','asc')->get();
        $expresses = DB::table('Expresses3PL')->orderBy('ExpressNameEn','asc')->get();
        $stations = DB::table('Stations3PL')->orderBy('StationNameEn','asc')->get();
        $regions = DB::table('Regions')->select('RegionCode')->groupBy('RegionCode')->orderBy('RegionCode','asc')->get();
        $types = DB::table('ServiceTypes3PL')->orderBy('ServiceTypeEn','asc')->get();

        return view('backend.3pl.routes',compact('json','branches','regions','expresses','types','stations'));
    }

    public function view_route($id){
        $route = DB::table('ExpressesStations3PL')->where('Id',$id)->first();
        $related_routes = DB::table('ExpressesStations3PL')->where('Id',$id)->get();

        return view('backend.3pl.view-route',compact('route','related_routes'));
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

    public function json_branches(){
        $branches = DB::table('Branches3PL')->orderBy('BranchNameEn','asc')->paginate(50);

        return response()->json($branches);
    }

    public function json_routes(){
        $routes = DB::table('ExpressesStations3PL')->orderBy('FromBranchName','asc')->paginate(50);

        return response()->json($routes);
    }

    public function fetched_express(Request $request){
        $express = DB::table('Expresses3PL')->where('Id',$request->id)->first();

        return response()->json($express);
    }

    public function updated_express(Request $request){
        $response = array();

        $express = DB::table('Expresses3PL')->where('Id',$request->id)->first();
        if($express){
            DB::table('Expresses3PL')->where('Id',$request->id)->update([
                'ExpressNameEn' => $request->en_name,
                'ExpressNameMm' => $request->mm_name,
                'Active' => $request->active
            ]);

            $response['success'] = 1;
            $response['message'] = 'Express has been updated.';
        }else{
            $response['success'] = 0;
            $response['message'] = 'Express is not exists.';
        }

        return response()->json($response);
    }

    public function saved_route(Request $request){
        $route = DB::table('ExpressesStations3PL')->where('FromBranchName',$request->from_branch)
                    ->where('ToBranchName',$request->from_branch)->first();

        if(!$route){
            $express = explode(",",$request->express);
            $station = explode(",",$request->station);

            DB::table('ExpressesStations3PL')->insert([
                'FromBranchName' => $request->from_branch,
                'ToBranchName' => $request->to_branch,
                'ExpressNameMm' => $express[1],
                'ExpressNameEn' => $express[0],
                'StationNameEn' => $station[1],
                'StationNameMm' => $station[0],
                'StationRegionCode' => $request->region,
                'ServiceType' => $request->type,
                'Default' => $request->default_route,
                'SLA' => $request->sla,
                'Active' => $request->active,
                'CreatedAt'         => date('Y-m-d H:i:s'),
                'UpdatedAt'         => date('Y-m-d H:i:s'),
            ]);

            $response['success'] = 1;
            $response['message'] = 'New route has been created.';
        }else{
            $response['success'] = 0;
            $response['message'] = 'Route is already exists.';
        }

        return response()->json($response);
    }
    
}

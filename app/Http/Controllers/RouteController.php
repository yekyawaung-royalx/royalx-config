<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $response = array();
        $routes = 0;
        $arr = array();
        $arr2 = array();

        $types = count($request->types);

        foreach($request->types as $type){
                 $from_label = DB::table('Branches')->select('BranchNameEn','RegionCode')
                ->where('Id',$request->from_branch_id)
                ->first();

        foreach($request->selected_branches as $to_branch_id){
            //array_push($arr,$to_branch_id);
            $check = DB::table('Routes')->select('Id')
            ->where('FromBranchId',$request->from_branch_id)
            ->where('ToBranchId',$to_branch_id)
             ->where('DeliveryType',$type)
            ->first();

            $to_label = DB::table('Branches')->select('BranchNameEn','RegionCode')
            ->where('Id',$to_branch_id)
            ->first();

            if(!$check){
                ++$routes;

                DB::table('Routes')->insert([
                        'FromBranchId'  => $request->from_branch_id,
                        'FromBranchLabel'  => $from_label->BranchNameEn,
                        'OperationRegion'    => $from_label->RegionCode,
                        'RelatedRegion' => $to_label->RegionCode,
                        'ToBranchId' => $to_branch_id,
                         'ToBranchLabel'  => $to_label->BranchNameEn,
                         'DeliveryType'  => $type,
                        'Active' => 1,
                        'CreatedAt'         => date('Y-m-d H:i:s'),
                        'UpdatedAt'         => date('Y-m-d H:i:s'),
                    ]);
                

            }

            if($routes > 0){
                $response['success'] = 1;
                $response['message'] = 'Routes have been created.';
            }else{
                $response['success'] = 0;
                $response['message'] = 'Routes is already exists.';
            }

            
        }
        }

        

       
        

        return response()->json($response);
    }

    public function show($id)
    {
        $route = DB::table('Routes as r')->leftjoin('Branches as b','b.Id','=','r.FromBranchId')
            ->select('b.Id','b.BranchNameEn','b.BranchNameMm','b.Type','b.RegionCode','b.RegionPostalCode','r.FromBranchId','r.ToBranchLabel','r.Active','r.FromBranchLabel','r.OperationRegion','r.RelatedRegion','r.DeliveryType')
            ->where('r.Id',$id)
            ->first();
        $related_routes = DB::table('Routes')->where('FromBranchId',$route->FromBranchId)->get();

        return view('backend.routes.view',compact('route','related_routes'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function routes(){
        $regions = DB::table('Regions')->get();

        // $branches = DB::table('Branches as b')
        //     ->leftjoin('Regions as r','r.RegionCode','=','b.RegionCode')
        //     ->select('b.Id','b.BranchNameEn as BranchNameEn','b.BranchNameMm as BranchNameMm','r.MmName as RegionCode')
        //     ->where('Active',1)
        //     ->orderBy('b.BranchNameEn','asc')
        //     ->get();

        $branches = DB::table('Branches as b')
            ->leftjoin('Regions as r','r.PostalCode','=','b.RegionPostalCode')
            ->select('b.Id','b.BranchNameEn as BranchNameEn','b.BranchNameMm as BranchNameMm','b.RegionCode','r.MmName as Region')
            ->where('Active',1)
            ->orderBy('b.BranchNameEn','asc')
            ->get();

        $all_routes = DB::table('Routes')->where('Active',1)->get();
        
        return view('backend.routes.list',compact('branches','regions'));
    }

    public function json_routes(Request $request){
        $routes = DB::table('Routes as r')->leftjoin('Branches as b','b.Id','=','r.FromBranchId')
        ->leftjoin('Branches as b2','b2.Id','=','r.ToBranchId')
        ->select('r.Id','b.BranchNameEn as FromBranchName','b2.BranchNameEn as ToBranchName','r.OperationRegion','r.RelatedRegion','r.DeliveryType','r.Active as Active')
        ->paginate(200);

        return response()->json($routes);
    }

    public function search($id){
         $response = array();

         $routes = DB::table('Routes as r')->leftjoin('Branches as b','b.Id','=','r.FromBranchId')
        ->leftjoin('Branches as b2','b2.Id','=','r.ToBranchId')
        ->select('r.Id','b.BranchNameEn as FromBranchName','b2.BranchNameEn as ToBranchName','r.OperationRegion','r.RelatedRegion','r.DeliveryType','r.Active as Active')
        ->where('r.FromBranchId',$id)
        ->paginate(200);



        return response()->json($routes);
    }

    
public function change(Request $request)
    {
        $response = array();

        $route = DB::table('Routes')->select('Id')->where('Id',$request->Id)->first();
        if($route){
            DB::table('Routes')->where('Id',$route->Id)->update([
                'Active' => $request->active
            ]);

             $response['success'] = 1;
        }else{
             $response['success'] = 0;
        }

        return response()->json($response);
    }
    
}

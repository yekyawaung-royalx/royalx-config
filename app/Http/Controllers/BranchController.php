<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{

    public function index()
    {
        $json = 'json/branches';

        return view('backend.branches.list',compact('json'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
                $response = array();

                $township = DB::table('Branches')->where('BranchNameEn',$request->BranchNameEn)->orWhere('BranchNameMm',$request->BranchNameMm)->first();

                if(!$township){
                    $region = DB::table('Regions')->select('MmName','EnName','RegionCode')->where('PostalCode',$request->RegionPostalCode)->first();


                        DB::table('Branches')->insert([
                                'BranchNameEn'                   => $request->BranchNameEn,
                                'BranchNameMm'                     => $request->BranchNameMm,
                                'InternalCode'                      => $request->InternalCode,
                                'Type'                  => $request->Type,
                                'BasedTownship'               =>  $request->BasedTownship,
                                'RegionCode'              =>  $request->RegionCode,
                                'RegionPostalCode'          =>  $region->RegionPostalCode,
                                'Active'                        => 1,
                                'CreatedAt'                 => date('Y-m-d H:i:s'),
                                'UpdatedAt'                => date('Y-m-d H:i:s'),
                        ]);

                $response['success'] = 1;
                $response['message'] =  $request->BranchNameEn.'  has been created.';

        }else{
            $response['success'] = 0;
            $response['message'] = 'Error.';
        }
        return response()->json($response);
    }


    public function show($id)
    {
        $branch = DB::table('branches as b')
            ->leftjoin('Regions as r','r.PostalCode','=','b.RegionCode')
            ->select('b.Id','b.BranchNameEn','b.BranchNameMm','b.InternalCode','b.BasedTownship','b.RegionPostalCode','b.Type','r.MmName as Region','b.RegionCode','b.Active')
            ->where('b.Id',$id)
            ->first();

        return view('backend.branches.view',compact('branch'));
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request)
    {
        $response = array();
        $branch = DB::table('Branches')->where('Id',$request->Id)->first();

        if($branch){
            DB::table('Branches')->where('Id',$request->Id)->update([
                'EnName'        => $request->EnName,
                'MmName'        => $request->MmName,
                'InternalCode'  => $request->InternalCode,
                'RegionCode'    => $request->RegionCode,
                'Type'          => $request->Type,
                'Active'          => $request->Active,
            ]);

            $response['success'] = 1;
            $response['message'] = 'Branch name with '.$request->EnName.' has been updated.';
        }else{
            $response['success'] = 0;
            $response['message'] = 'Error';
        }

        

        return response()->json($response);
    }


    public function destroy($id)
    {
        //
    }

    public function branches(){
        $regions = DB::table('Regions')->orderBy('MmName','asc')->get();

        return view('backend.branches.list',compact('regions'));
    }

    public function json_branches_status($status)
    {
        if($status == 'opened'){
            $branches = DB::table('Branches as b')
            ->leftjoin('Regions as r','r.PostalCode','=','b.RegionPostalCode')
            ->select('b.Id','b.BranchNameEn','b.BranchNameMm','b.Type','b.RegionPostalCode','r.MmName as Region','r.RegionCode','b.Active')
            ->orderBy('b.BranchNameEn','asc')
            ->where('b.Active',1)
            ->paginate(50);
        }elseif($status == 'closed'){
            $branches = DB::table('Branches as b')
            ->leftjoin('Regions as r','r.PostalCode','=','b.RegionPostalCode')
            ->select('b.Id','b.BranchNameEn','b.BranchNameMm','b.Type','b.RegionPostalCode','r.MmName as Region','r.RegionCode','b.Active')
            ->orderBy('b.BranchNameEn','asc')
            ->where('b.Active',0)
            ->paginate(50);
        }else{
            $branches = DB::table('Branches as b')
            ->leftjoin('Regions as r','r.PostalCode','=','b.RegionPostalCode')
            ->select('b.Id','b.BranchNameEn','b.BranchNameMm','b.Type','b.RegionPostalCode','r.MmName as Region','r.RegionCode','b.Active')
            ->orderBy('b.BranchNameEn','asc')
            ->paginate(50);
        }
        

        return response()->json($branches);
    }

    public function json_fetched_branches(Request $request)
    {
        $branches = DB::table('Branches as b')
            ->leftjoin('Regions as r','r.PostalCode','=','b.RegionPostalCode')
            ->select('b.Id','b.BranchNameEn','b.BranchNameMm','r.MmName as RegionName')
            ->where('b.RegionCode',$request->region_code)
            ->where('b.Active',1)
            ->get();

        return response()->json($branches);
    }

    public function json_fetched_related_branches(Request $request){
        $branches = DB::table('Branches as b')
            ->leftjoin('Regions as r','r.PostalCode','=','b.RegionPostalCode')
            ->select('b.Id','b.BranchNameEn','b.BranchNameMm','b.Type','b.RegionCode','b.RegionPostalCode','r.MmName as RegionName')
            ->where('b.RegionCode',$request->region_code)
            ->where('Active',1)
            ->orderBy('b.BranchNameEn')
            ->get();

        return response()->json($branches);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TownshipController extends Controller
{
        public function __construct()
        {
                $this->middleware('auth');
        }
    
        public function index()
        {
                $json           = 'json/cities';
                $regions     = DB::table('Regions')->orderBy('MmName','asc')->get();
                $branches  = DB::table('Branches')->orderBy('EnName','asc')->get();

                return view('backend.cities.list',compact('json','regions','branches'));
        }

        public function create()
        {
                //
        }

        public function store(Request $request)
        {
                $response = array();

                $township = DB::table('Townships')->where('TownshipNameMm',$request->mm_name)->orWhere('TownshipNameEn',$request->en_name)->first();

                if(!$township){
                    $region = DB::table('Regions')->select('MmName','EnName')->where('RegionCode',$request->region_code)->first();


                        DB::table('Townships')->insert([
                                'TownshipNameEn'                   => $request->en_name,
                                'TownshipNameMm'                     => $request->mm_name,
                                'RegionEn'                      => $region->EnName,
                                'RegionMm'                  => $region->MmName,
                                'PostalCode'               =>  $request->postal_code,
                                'RegionCode'              =>  $request->region_code,
                                'HandleBranch'          =>  $request->handle_branch,
                                'Active'                        => 1,
                                'CreatedAt'                 => date('Y-m-d H:i:s'),
                                'UpdatedAt'                => date('Y-m-d H:i:s'),
                        ]);

                $response['success'] = 1;
                $response['message'] =  $request->en_name.'  has been created.';

        }else{
            $response['success'] = 0;
            $response['message'] = 'Error.';
        }
        return response()->json($response);
    }


    public function show($id)
    {
        $township = DB::table('Townships')->where('Id',$id)->first();
        if($township){
            $quaters = DB::table('Quaters')->where('PostalCode','like',$township->PostalCode.'%')->get();
        }else{
            $quaters = array();
        }
        

        //return response()->json($township);
         return view('backend.townships.view',compact('township','quaters'));
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $response = array();

        $township = DB::table('Townships')->where('Id',$request->Id)->first();

        if($township){
                DB::table('Townships')->where('Id',$request->Id)->update([
                    'MmName'                     => $request->MmName,
                    'EnName'                        => $request->EnName,
                    'RegionCode'               => $request->RegionCode,
                    'TownshipCode'              => $request->TownshipCode,
                    'PostalCode'            =>  $request->PostalCode,
                    'Branch'                        =>  $request->Branch,
                    'RegionType'              =>  $request->RegionType,
                    'Active'                                 => $request->Active,
                   'CreatedAt'                 => date('Y-m-d H:i:s'),
                    'UpdatedAt'                 => date('Y-m-d H:i:s'),
            ]);

                $response['success'] = 1;
                $response['message'] =  $request->EnName.'  has been updated.';

        }else{
            $response['success'] = 0;
            $response['message'] = 'Error.';
        }
        return response()->json($response);
    }

    public function destroy(Request $request)
    {
        $response = array();

        $township =  DB::table('Townships')->where('Id',$request->Id)->first();
        if($township){
            $response['success'] = 1;
            $response['message'] = $township->EnName.' has been deleted.';

            DB::table('Townships')->where('Id',$request->Id)->delete();
        }else{
            $response['success'] = 0;
            $response['message'] = 'Error';
        }

       return response()->json($response);
    }

    public function townships(){
        $regions = DB::table('Regions')->orderBy('MmName','asc')->get();
        $branches = DB::table('Branches')->orderBy('BranchNameEn','asc')->get();


        return view('backend.townships.list',compact('regions','branches'));
    }

    public function json_townships()
    {
        $townships = DB::table('Townships as t')
            ->leftjoin('Regions as r','r.PostalCode','=','t.RegionCode')
            ->select('t.Id','t.TownshipNameMm','t.TownshipNameEn','t.PostalCode','t.HandleBranch','r.MmName as Region','t.Active')
            ->orderBy('t.TownshipNameEn','asc')
            ->paginate(50);

        return response()->json($townships);
    }

    
    public function json_townships_status($status)
    {
        if(isset($_GET['search'])){
            $term = $_GET['search'];

            $townships = DB::table('townships as t')
                ->leftjoin('regions as r','r.PostalCode','=','t.RegionCode')
                ->select('t.Id','t.MmName','t.EnName','t.TownshipCode','t.PostalCode','t.HandleBranch','r.MmName as Region','t.Active')
                ->orderBy('t.MmName','asc')
                ->orWhere('t.MmName','like',$term.'%')
                ->orWhere('t.EnName','like',$term.'%')
                ->orWhere('t.TownshipCode','like',$term.'%')
                ->orWhere('t.PostalCode','like',$term.'%')
                ->orWhere('t.Branch','like',$term.'%')
                ->orWhere('r.MmName','like',$term.'%')
                ->paginate(50);
        }else{
            if($status == 'opened'){
                $townships = DB::table('townships as t')
                ->leftjoin('regions as r','r.PostalCode','=','t.RegionCode')
                ->select('t.Id','t.MmName','t.EnName','t.TownshipCode','t.PostalCode','t.HandleBranch','r.MmName as Region','t.Active')
                 ->where('active',1)
                ->orderBy('t.MmName','asc')
                ->paginate(50);
            }elseif($status == 'closed'){
                $townships = DB::table('townships as t')
                ->leftjoin('regions as r','r.PostalCode','=','t.RegionCode')
                ->select('t.Id','t.MmName','t.EnName','t.TownshipCode','t.PostalCode','t.HandleBranch','r.MmName as Region','t.Active')
                 ->where('active',0)
                ->orderBy('t.MmName','asc')
                ->paginate(50);
            }else{
                $townships = DB::table('Townships as t')
                ->orderBy('t.TownshipNameEn','asc')
                ->paginate(100);
            }
            
        }
                    

        return response()->json($townships);
    }

    public function json_fetched_townships(Request $request)
    {
        $townships = DB::table('townships as t')
            ->select('t.Id','t.TownshipNameMm','t.PostalCode')
            ->orderBy('t.TownshipNameMm','asc')
            ->where('t.RegionCode',$request->region)
            ->where('active',1)
            ->get();

        return response()->json($townships);
    }

    public function json_fetched_region_townships(Request $request)
    {
        $townships = DB::table('Townships as t')
            ->leftjoin('Regions as r','r.RegionCode','=','t.RegionCode')
            ->select('t.Id','t.TownshipNameEn','t.TownshipNameMm','t.RegionCode','t.PostalCode')
            ->orderBy('t.TownshipNameMm','asc')
            ->where('r.PostalCode',$request->region_code)
            ->where('t.Active',1)
            ->get();

        return response()->json($townships);
    }

    public function search_townships()
    {
        $term = $_GET['term'];

        $townships = DB::table('Townships as t')
            ->leftjoin('regions as r','r.PostalCode','=','t.RegionCode')
            ->select('t.Id','t.Name','t.EnName','t.TownshipCode','t.PostalCode','t.HandleBranch','r.name as Region','t.Active')
            ->where('t.Name','like','%'.$term.'%')
            ->orderBy('t.name','asc')
            ->paginate(50);

        return response()->json($townships);


    }

    public function json_view_township($id)
    {
        $township = DB::table('Townships')->where('Id',$id)->first();

        return response()->json($township);
    }

    
}

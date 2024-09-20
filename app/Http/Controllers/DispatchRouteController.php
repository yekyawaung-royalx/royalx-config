<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DispatchRouteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function json_cities(){
        $cities = DB::table('Cities as c')
            ->select('c.Id','c.Name','c.Mmname','c.Shortcode')
            ->orderBy('c.Shortcode','asc')
            ->get();

        return response()->json($cities);
    }

    public function create(){

        return view('backend.dispatch-routes.create');
    }

    public function index(){

        return view('backend.dispatch-routes.dispatch-routes');
    }

    public function store(Request $request){
        $response = array();
        
        $prefix         = $request->DeliveryType.''.$request->WaybillType.''.$request->FromTownship;

        $from_township  = DB::table('Townships as t')->select('Shortcode','MmName','HandleBranch','RegionType')->where('PostalCode',$request->FromTownship)->first();
        
        $delivery_type  = ($request->DeliveryType == 1? 'NextDay':'SameDay');
        

        $townships = DB::table('Townships as t')
            ->leftjoin('Regions as r','r.PostalCode','=','t.RegionCode')
            ->select('t.Id','r.MmName as Region','t.MmName','t.EnName','t.TownshipCode','t.Shortcode','t.PostalCode','r.PostalCode as RegionCode','t.HandleBranch','t.Active')
            ->orderBy('t.MmName','asc')
            ->where('active',1)
            ->get();

        foreach($townships as $township){
            $rule_id     = $prefix.$township->PostalCode;
            $to_township = $township->Shortcode!=NULL? $township->Shortcode:'*';

            $data['rule']                                  = $prefix.$township->PostalCode;
            $data['ToRegionName']                 = $township->Region.'('.$township->RegionCode.') ';
            $data['ToTownshipName']             = $township->MmName.'('.$township->PostalCode.')';
            $data['ToTownshipShortcode']      = $to_township;

            array_push($response, $data);

            //checked route is already exists
            $route = DB::table('Routes')->where('DispatchRuleID',$rule_id)->first();

            if(!$route){
                //created rule into table
                // DB::table('Routes')->insertGetId([
                //     'FromTownshipName'  => $from_township->MmName,
                //     'ToTownshipName'    => $township->MmName,
                //     'FromBranchName'    => $from_township->HandleBranch,
                //     'ToBranchName'      => $township->HandleBranch,
                //     'DispatchRuleID'    => $rule_id,
                //     'DispatchRuleName'  => $from_township->Shortcode.'-'.$to_township.'-'.$delivery_type,
                //     'DeliveryType'      => $delivery_type,
                //     'RegionType'        => $from_township->RegionType,
                //     'Active'            => 1,
                //     'GeneratedRoutes'   => 0,
                //     'Description'       => '', //$from_township->Name.'မှ'.$township->Name.'သို့ '.$delivery_type.'ဝန်ဆောင်မှု စည်းမျဉ်း',
                //     'CreatedAt'         => date('Y-m-d H:i:s'),
                //     'UpdatedAt'         => date('Y-m-d H:i:s'),
                // ]);
            }
        }


        //to city destination branches
        /*
        $destination_branches = DB::table('Branches as b')
            ->select('b.Id','b.Name','b.CityId','b.CityName')
            ->where('b.CityName',$request->ToCityName)
            ->where('b.Name','!=',$request->FromBranchName)
            ->where('b.isSorting',0)
            ->where('b.isCod',0)
            ->orderBy('b.Name','asc')
            ->get();
        */

        //from city sorting
        /*
        $origin_sorting  = DB::table('Branches as b')
            ->select('b.Id','b.Name','b.CityId','b.CityName')
            ->where('b.CityName',$request->FromCityName)
            ->where('b.isSorting',1)
            ->orderBy('b.Name','asc')
            ->first();
        

        //to city sorting
        $destination_sorting  = DB::table('Branches as b')
            ->select('b.Id','b.Name')
            //->where('b.CityName',$request->ToCityName)
            ->where('b.isSorting',1)
            ->orderBy('b.Name','asc')
            ->first();

        //from city cod
        $origin_cod  = DB::table('Branches as b')
            ->select('b.Id','b.Name')
            //->where('b.CityName',$request->FromCityName)
            ->where('b.isCod',1)
            ->orderBy('b.Name','asc')
            ->first();

        //to city cod
        $destination_cod  = DB::table('Branches as b')
            ->select('b.Id','b.Name')
            //->where('b.CityName',$request->ToCityName)
            ->where('b.isCod',1)
            ->orderBy('b.Name','asc')
            ->first();
        */
        // $response['RuleID']                 = time();
        // $response['request']                = $_POST;
        // $response['DestinationBranches']    = $destination_branches;
        // $response['OriginSorting']          = $origin_sorting;
        // $response['DestinationSorting']     = $destination_sorting;
        // $response['OriginCod']              = $origin_cod;
        // $response['DestinationCod']         = $destination_cod;



        return response()->json($response);

    }

    public function show($id)
    {
        $response = array();
        $route = DB::table('Routes')->where('DispatchRuleID',$id)->first();
   
        if($route){
            $from = DB::table('Townships')->where('HandleBranch',$route->FromBranchName)->first();
            $to     = DB::table('Townships')->where('HandleBranch',$route->ToBranchName)->first();

            $response['FromBranchName']   = $route->FromBranchName;
            $response['ToBranchName']       = $route->ToBranchName;
            $response['RegionType']             = $route->RegionType;
            $response['FromRegion']             = $from->RegionType;
            $response['ToRegion']                  = $to->RegionType;
            $response['FromRegionCode']     = $from->RegionCode;
            $response['ToRegionCode']         = $to->RegionCode;

        }else{

        }
        return response()->json($response);
    }

    public function json_dispatch_routes(){
        $routes = DB::table('Routes')->orderBy('DispatchRuleID','asc')->paginate(200);

        return response()->json($routes);
    }

    public function generate(Request $request){
        $response = array();

        $rule = $request->RuldId;
        $batch = time();

        $delivery_type  = substr($rule,0,1);
        $waybill_type   = substr($rule,1,1);
        $from_township  = substr($rule,2,4);
        $to_township    = substr($rule,6,4);


        $from   = DB::table('Townships')->where('PostalCode',$from_township)->first();
        $to     = DB::table('Townships')->where('PostalCode',$to_township)->first();

        $ygn_sorting = 'YGN-SORTING';
        $mdy_sorting = 'MDY-SORTING';

        $route = DB::table('Routes')->select('id')->where('DispatchRuleID',$rule)->where('GeneratedRoutes',0)->first();

        if($route){
            //1.Direct Branch Out
            if($request->ToBranch != 0){
                DB::table('DispatchRoutes')->insertGetId([
                    'DispatchRuleID'        => $rule,
                    'FromTownshipName'      => $from->MmName,
                    'ToTownshipName'        => $to->MmName,
                    'OriginBranchName'      => $from->HandleBranch,
                    'FromBranchName'        => $from->HandleBranch,
                    'ToBranchName'          => $to->HandleBranch,
                    'DestinationBranchName' => $to->HandleBranch,
                    'NoOfTransit'           => 1,
                    'Active'           => 1,
                    'Batch'           => $batch,
                    'CreatedAt'             => date('Y-m-d H:i:s'),
                    'UpdatedAt'             => date('Y-m-d H:i:s'),
                ]);
            }

            //2.YGN Transit Branch Out
            if($request->YgnSorting == 1){
                DB::table('DispatchRoutes')->insertGetId([
                    'DispatchRuleID'        => $rule,
                    'FromTownshipName'      => $from->MmName,
                    'ToTownshipName'        => $to->MmName,
                    'OriginBranchName'      => $from->HandleBranch,
                    'FromBranchName'        => $from->HandleBranch,
                    'ToBranchName'          => $ygn_sorting,
                    'DestinationBranchName' => $to->HandleBranch,
                    'NoOfTransit'           => 1,
                     'Active'           => 1,
                    'Batch'           => $batch,
                    'CreatedAt'             => date('Y-m-d H:i:s'),
                    'UpdatedAt'             => date('Y-m-d H:i:s'),
                ]);

                DB::table('DispatchRoutes')->insertGetId([
                    'DispatchRuleID'        => $rule,
                    'FromTownshipName'      => $from->MmName,
                    'ToTownshipName'        => $to->MmName,
                    'OriginBranchName'      => $from->HandleBranch,
                    'FromBranchName'        => $ygn_sorting,
                    'ToBranchName'          => $to->HandleBranch,
                    'DestinationBranchName' => $to->HandleBranch,
                    'NoOfTransit'           => 1,
                     'Active'           => 1,
                    'Batch'           => $batch,
                    'CreatedAt'             => date('Y-m-d H:i:s'),
                    'UpdatedAt'             => date('Y-m-d H:i:s'),
                ]);
            }

            //MDY Transit Branch Out
            if($request->MdySorting == 1){
                DB::table('DispatchRoutes')->insertGetId([
                    'DispatchRuleID'        => $rule,
                    'FromTownshipName'      => $from->MmName,
                    'ToTownshipName'        => $to->MmName,
                    'OriginBranchName'      => $from->HandleBranch,
                    'FromBranchName'        => $from->HandleBranch,
                    'ToBranchName'          => $mdy_sorting,
                    'DestinationBranchName' => $to->HandleBranch,
                    'NoOfTransit'           => 1,
                     'Active'           => 1,
                    'Batch'           => $batch,
                    'CreatedAt'             => date('Y-m-d H:i:s'),
                    'UpdatedAt'             => date('Y-m-d H:i:s'),
                ]);

                DB::table('DispatchRoutes')->insertGetId([
                    'DispatchRuleID'        => $rule,
                    'FromTownshipName'      => $from->MmName,
                    'ToTownshipName'        => $to->MmName,
                    'OriginBranchName'      => $from->HandleBranch,
                    'FromBranchName'        => $mdy_sorting,
                    'ToBranchName'          => $to->HandleBranch,
                    'DestinationBranchName' => $to->HandleBranch,
                    'NoOfTransit'           => 1,
                     'Active'           => 1,
                    'Batch'           => $batch,
                    'CreatedAt'             => date('Y-m-d H:i:s'),
                    'UpdatedAt'             => date('Y-m-d H:i:s'),
                ]);
            }

            //Both Transit Lower Branch Out
            if($request->BothSortingLower == 1){

                    //start with YGN-SORTING
                    DB::table('DispatchRoutes')->insertGetId([
                        'DispatchRuleID'        => $rule,
                        'FromTownshipName'      => $from->MmName,
                        'ToTownshipName'        => $to->MmName,
                        'OriginBranchName'      => $from->HandleBranch,
                        'FromBranchName'        => $ygn_sorting,
                        'ToBranchName'          => $mdy_sorting,
                        'DestinationBranchName' => $to->HandleBranch,
                        'NoOfTransit'           => 1,
                         'Active'           => 1,
                        'Batch'           => $batch,
                        'CreatedAt'             => date('Y-m-d H:i:s'),
                        'UpdatedAt'             => date('Y-m-d H:i:s'),
                    ]); 
                    
                    //start with MDY-SORTING
                    DB::table('DispatchRoutes')->insertGetId([
                        'DispatchRuleID'        => $rule,
                        'FromTownshipName'      => $from->MmName,
                        'ToTownshipName'        => $to->MmName,
                        'OriginBranchName'      => $from->HandleBranch,
                        'FromBranchName'        => $mdy_sorting,
                        'ToBranchName'          => $ygn_sorting,
                        'DestinationBranchName' => $to->HandleBranch,
                        'NoOfTransit'           => 1,
                         'Active'           => 1,
                        'Batch'           => $batch,
                        'CreatedAt'             => date('Y-m-d H:i:s'),
                        'UpdatedAt'             => date('Y-m-d H:i:s'),
                    ]);
                
                
            }

            //Both Transit Upper Branch Out
            if($request->BothSortingUpper == 1){
                //start with MDY-SORTING
                    DB::table('DispatchRoutes')->insertGetId([
                        'DispatchRuleID'        => $rule,
                        'FromTownshipName'      => $from->MmName,
                        'ToTownshipName'        => $to->MmName,
                        'OriginBranchName'      => $from->HandleBranch,
                        'FromBranchName'        => $mdy_sorting,
                        'ToBranchName'          => $ygn_sorting,
                        'DestinationBranchName' => $to->HandleBranch,
                        'NoOfTransit'           => 1,
                         'Active'           => 1,
                        'Batch'           => $batch,
                        'CreatedAt'             => date('Y-m-d H:i:s'),
                        'UpdatedAt'             => date('Y-m-d H:i:s'),
                    ]); 
                    
                    //start with YGN-SORTING
                    DB::table('DispatchRoutes')->insertGetId([
                        'DispatchRuleID'        => $rule,
                        'FromTownshipName'      => $from->MmName,
                        'ToTownshipName'        => $to->MmName,
                        'OriginBranchName'      => $from->HandleBranch,
                        'FromBranchName'        => $ygn_sorting,
                        'ToBranchName'          => $mdy_sorting,
                        'DestinationBranchName' => $to->HandleBranch,
                        'NoOfTransit'           => 1,
                         'Active'           => 1,
                        'Batch'           => $batch,
                        'CreatedAt'             => date('Y-m-d H:i:s'),
                        'UpdatedAt'             => date('Y-m-d H:i:s'),
                    ]);
            }

            DB::table('Routes')->where('DispatchRuleID',$rule)->update([
                'GeneratedRoutes' => 1,
            ]);

            $response['success'] = 1;
            $response['message'] = 'Ruld ID '.$rule.' is generated routes.';
        }else{
            $response['success'] = 0;
            $response['message'] = 'Error.';
        }

        return response()->json($response);
    }

    public function view_route($id){
        $route_item = DB::table('Routes')->where('DispatchRuleID',$id)->first();
        $routes = DB::table('DispatchRoutes')->select('FromBranchName')->where('DispatchRuleID',$id)->groupBy('FromBranchName')->get();
        

        //return $routes;
        return view('backend.dispatch-routes.view',compact('route_item','routes','id'));
    }

    public function search_routes(Request $request){
        $response = array();
        $ruleId   = $request->DeliveryType.$request->WaybillType.$request->FromTownship.$request->ToTownship;
        
        $rule     = DB::table('Routes')->where('DispatchRuleID',$ruleId)->get();

        return response()->json($rule);
    }
    
}

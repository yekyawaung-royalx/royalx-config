<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $json           = 'json/quaters';
        $regions     = DB::table('Regions')->orderBy('MmName','asc')->get();
        $branches  = DB::table('Branches')->orderBy('EnName','asc')->get();

        return view('backend.cities.list',compact('json','regions','branches'));
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
       $quater = DB::table('Quaters')->where('Id',$id)->first();

        return response()->json($quater);
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

    public function quaters(){
        $regions = DB::table('Regions')->orderBy('MmName','asc')->get();
        $branches = DB::table('Branches')->orderBy('BranchNameMm','asc')->get();


        return view('backend.quaters.list',compact('regions','branches'));
    }

    public function json_quaters_status($status)
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
                $quaters = DB::table('townships as t')
                ->leftjoin('regions as r','r.PostalCode','=','t.RegionCode')
                ->select('t.Id','t.MmName','t.EnName','t.TownshipCode','t.PostalCode','t.HandleBranch','r.MmName as Region','t.Active')
                 ->where('active',1)
                ->orderBy('t.MmName','asc')
                ->paginate(50);
            }elseif($status == 'closed'){
                $quaters = DB::table('townships as t')
                ->leftjoin('regions as r','r.PostalCode','=','t.RegionCode')
                ->select('t.Id','t.MmName','t.EnName','t.TownshipCode','t.PostalCode','t.HandleBranch','r.MmName as Region','t.Active')
                 ->where('active',0)
                ->orderBy('t.MmName','asc')
                ->paginate(50);
            }else{
                $quaters = DB::table('Quaters as t')
               ->orderBy('t.TownshipNameMm','asc')
                ->paginate(100);
            }
            
        }
                    

        return response()->json($quaters);
    }
}

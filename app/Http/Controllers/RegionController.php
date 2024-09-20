<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        //
    }


    public function show($id)
    {
        $region = DB::table('Regions')->where('Id',$id)->first();

        return view('backend.regions.view',compact('region'));
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

    public function regions(){
        $regions = DB::table('Regions')->orderBy('MmName','asc')->get();

        return view('backend.regions.list',compact('regions'));
    }

    public function json_regions()
    {
        $regions = DB::table('Regions as r')
            ->select('r.Id','r.MmName','r.EnName','r.RegionCode','r.PostalCode','r.TotalTownships')
            ->paginate(50);

        return response()->json($regions);
    }

    public function json_all_regions()
    {
        $regions = DB::table('regions as r')
            ->select('r.Id','r.MmName','r.PostalCode')
            ->orderBy('r.MmName')
            ->get();

        return response()->json($regions);
    }
}

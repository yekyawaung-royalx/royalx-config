<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    
    public function fetched_package(Request $request){
        $id = $request->id;
        $package = DB::table('PackageCategories')->where('id',$id)->first();

        return $package;
    }

    public function regions(){
        $regions = DB::table('Regions')->orderBy('EnName','ASC')->get();

        return response()->json($regions);
    }

    public function townships(){
        $townships = DB::table('Townships')->orderBy('TownshipNameEn','ASC')->get();

        return response()->json($townships);
    }

    public function quaters(){
        $quaters = DB::table('Quaters')->orderBy('QuaterNameEn','ASC')->paginate(100);

        return response()->json($quaters);
    }

    public function package_category($id){
        $category = DB::table('PackageCategories')->where('Id',$id)->first();

       return response()->json($category);
    }
    
}

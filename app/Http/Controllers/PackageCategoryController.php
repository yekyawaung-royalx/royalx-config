<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageCategoryController extends Controller
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
        $response = array();

        $employee = DB::table('PackageCategories')
        ->where('EnName',$request->EnName)
        ->where('MmName',$request->MmName)
        ->where('TypeName',$request->TypeName)
        ->first();
        if(!$employee){
        DB::table('PackageCategories')->insert([
                'EnName'        => $request->EnName,
                'MmName'      => $request->MmName,
                'TypeName'          => $request->TypeName,
                'ShortCode'        => $request->Shortcode,
                'Description'  => $request->Description,
                'Active'            => 1,
                'CreatedAt'         => date('Y-m-d H:i:s'),
                'UpdatedAt'         => date('Y-m-d H:i:s'),
            ]);

            $response['success'] = 1;
            $response['message'] = 'Category Name '.$request->EnName.' has been created.';
        }else{
            $response['success'] = 0;
            $response['message'] = 'Category Name '.$request->EnName.' is already exists.';
        }

        return response()->json($response);
    }


    public function show($id)
    {
        $category = DB::table('PackageCategories')->where('Id',$id)->first();

       // return response()->json($category);
        return view('backend.package-categories.view',compact('category'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        $response = array();

        $package = DB::table('PackageCategories')
        ->where('Id',$request->Id)
        ->first();
        if($package){
            DB::table('PackageCategories')->where('Id',$request->Id)->update([
                'EnName'        => $request->EnName,
                'MmName'      => $request->MmName,
                'TypeName'          => $request->TypeName,
                'ShortCode'        => $request->Shortcode,
                'Description'  => $request->Description,
                'Active'            => 1,
                'UpdatedAt'         => date('Y-m-d H:i:s'),
            ]);

            $response['success'] = 1;
            $response['message'] = 'Category Name '.$request->EnName.' has been updated.';
        }else{
            $response['success'] = 0;
            $response['message'] = 'Category Name '.$request->EnName.' is not exists.';
        }

        return response()->json($response);
    }


    public function destroy(Request $request)
    {
        $response = array();

        $category = DB::table('PackageCategories')->where('Id',$request->Id)->first();
        if($category){
            $id = DB::table('PackageCategories')->where('Id',$request->Id)->delete();

            $response['success'] = 1;
            $response['message'] = 'Category Name '.$request->EnName.' has been deleted.';
        }else{
            $response['success'] = 0;
            $response['message'] = 'Category not found.';
        }

        return response()->json($response);
    }

    public function package_categories(){

        return view('backend.package-categories.list');
    }

    public function json_package_categories($status)
    {
        if($status == 'outbound'){
            $townships = DB::table('PackageCategories as pc')
            ->select('pc.Id','pc.EnName','pc.MmName','pc.TypeName','pc.ShortCode','pc.Description','pc.Active')
            ->where('pc.TypeName','outbound')
            ->orderBy('pc.EnName','asc')
            ->paginate(50);
        }elseif($status == 'inbound'){
            $townships = DB::table('PackageCategories as pc')
            ->select('pc.Id','pc.EnName','pc.MmName','pc.TypeName','pc.ShortCode','pc.Description','pc.Active')
            ->where('pc.TypeName','inbound')
            ->orderBy('pc.EnName','asc')
            ->paginate(50);
        }else{
            $townships = DB::table('PackageCategories as pc')
            ->select('pc.Id','pc.EnName','pc.MmName','pc.TypeName','pc.ShortCode','pc.Description','pc.Active')
            ->orderBy('pc.EnName','asc')
            ->paginate(50);
        }
        

        return response()->json($townships);
    }
}

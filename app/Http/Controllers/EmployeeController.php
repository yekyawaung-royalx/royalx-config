<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
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

        $employee = DB::table('Employees')->where('EmployeeID',$request->EmployeeID)->first();
        if(!$employee){
            $id = DB::table('Employees')->insertGetId([
                'EmployeeID'        => $request->EmployeeID,
                'EmployeeName'      => $request->EmployeeName,
                'Position'          => $request->Position,
                'Department'        => $request->Department,
                'AssignDepartment'  => $request->AssignDepartment,
                'PhoneNo'           => $request->PhoneNo,
                'Active'            => 1,
                'CreatedAt'         => date('Y-m-d H:i:s'),
                'UpdatedAt'         => date('Y-m-d H:i:s'),
            ]);

            $response['success'] = 1;
            $response['message'] = 'Employee Name '.$request->EmployeeName.' is created.';
        }else{
            $response['success'] = 0;
            $response['message'] = 'Employee ID is already exists.';
        }


        return response()->json($response);
    }


    public function show($id)
    {
        $employee = DB::table('Employees')->where('Id',$id)->first();

        return view('backend.employees.view',compact('employee'));
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

    public function employees(){
        $json = 'json/employees';
        $branches = DB::table('Branches')->orderBy('BranchNameEn','asc')->get();

        return view('backend.employees.list',compact('json','branches'));
    }

    public function json_employees_status($status){
        if($status == 'joined'){
            $employees = DB::table('Employees')->where('LastDayOfWork','=',NULL)->orderBy('EmployeeName','asc')->paginate(200);
        }elseif($status == 'resigned'){
            $employees = DB::table('Employees')->where('LastDayOfWork','!=',NULL)->orderBy('EmployeeName','asc')->paginate(200);
        }else{
            $employees = DB::table('Employees')->orderBy('EmployeeName','asc')->paginate(200);
        }
        

        return response()->json($employees);
    }

    public function innovix_hr(){
        $json = 'json/innovix-hr';

        return view('backend.employees.innovix-hr',compact('json'));
    }

    public function json_innovix_hr(){
        $employees = DB::table('InnovixData')->orderBy('EmployeeName','asc')->paginate(200);

        return response()->json($employees);
    }

    public function search_innovix_hr($term){
        $employees = DB::table('InnovixData')
        ->orWhere('EmployeeId','like','%'.$term.'%')
                ->orWhere('EmployeeName','like','%'.$term.'%')
                ->orWhere('Position','like','%'.$term.'%')
        ->orderBy('EmployeeName','asc')
        ->paginate(200);

        return response()->json($employees);
    }

    public function search_employees($term){
        $employees = DB::table('Employees')
        ->orWhere('EmployeeId','like','%'.$term.'%')
                ->orWhere('EmployeeName','like','%'.$term.'%')
                ->orWhere('Position','like','%'.$term.'%')
        ->orderBy('EmployeeName','asc')
        ->paginate(200);

        return response()->json($employees);
    }

    public function sync_innovix_hr(){
        $response = array();

        synced_employee_data_to_table();

        $response['success'] =1;
        $response['message'] ='Employees data have been synced.';

        return response()->json($response);
    }

    public function sync_employees(){
        $response = array();

        $employees = DB::table('InnovixData')->where('Checked',0)->limit(100)->get();

        foreach($employees as $employee){
            $check =  DB::table('Employees')->where('EmployeeId',$employee->EmployeeId)->first();
            if(!$check){
                //create
                DB::table('Employees')->insert([
                                'EmployeeId'                   => $employee->EmployeeId,
                                'EmployeeName'                     => $employee->EmployeeName,
                                'Position'                      =>  $employee->Position,
                                'Department'                  => $employee->Department,
                                'AssignDepartment'               =>   $employee->AssignDepartment,
                                'PhoneNo'              =>  $employee->PhoneNo,
                                'LastDayOfWork'          =>  $employee->LastDayOfWork,
                                'Active' => 1,
                                'Sync' => 0,
                                'SystemUser' => 0,
                                'CreatedAt'                 => date('Y-m-d H:i:s'),
                                'UpdatedAt'                => date('Y-m-d H:i:s'),
                        ]);

                DB::table('InnovixData')->where('Id',$employee->Id)->update(['Checked' => 1]);

            }else{
                //update
                DB::table('Employees')->where('EmployeeId',$employee->EmployeeId)->update([
                                'EmployeeName'                     => $employee->EmployeeName,
                                'Position'                      =>  $employee->Position,
                                'Department'                  => $employee->Department,
                                'AssignDepartment'               =>   $employee->AssignDepartment,
                                'PhoneNo'              =>  $employee->PhoneNo,
                                'LastDayOfWork'          =>  $employee->LastDayOfWork,
                                'Active' => 1,
                                'Sync' => 1,
                                'UpdatedAt'                => date('Y-m-d H:i:s'),
                        ]);

                DB::table('InnovixData')->where('Id',$employee->Id)->update(['Checked' => 1]);
            }
        }


        $response['success'] =1;
        $response['message'] ='Employees data have been synced.';

        return response()->json($response);
    }

    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
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

    public function store(Request $request)
    {
        $response = array();
        $employeeId = 'REX-'.$request->NewEmployeeId;

        $check = DB::table('SystemUsers')->where('EmployeeID',$employeeId)->first();
        if(!$check){
            DB::table('SystemUsers')->insert([
                                'EmployeeId'                   => $employeeId,
                                'EmployeeName'                     => $request->NewEmployeeName,
                                'Password'                      => bcrypt($request->password),
                                'Position'                  => $request->NewEmployeePosition,
                                'AssignBranch'               =>  $request->NewEmployeeBranch,
                                'AssignDepartment'              =>  $request->NewAssignDepartment,
                                'PhoneNo'          =>  $request->NewPhone,
                                'Role'          =>  'Test',//$request->Role,
                                'Image'          =>  'Test',//$request->Image,
                                 'Remark'          => 'Test',// $request->Remark,
                                'Active'                        => 1,
                                'CreatedAt'                 => date('Y-m-d H:i:s'),
                                'UpdatedAt'                => date('Y-m-d H:i:s'),
                        ]);

            $response['success'] = 1;
            $response['message'] = 'New user '.$request->NewEmployeeName.' has been created.';
        }else{
            $response['success'] = 0;
            $response['message'] = 'Error';
        }
        return response()->json($response);

    }

    public function show($id)
    {
        $user = DB::table('SystemUsers')->where('Id',$id)->first();
        $regions = DB::table('Regions')->orderBy('EnName','asc')->get();
        $allowed_branches = DB::table('UserBranches')->where('UserId',$id)->orderBy('BranchName','asc')->get();

        return view('backend.users.view',compact('user','regions','allowed_branches'));
    }


    public function edit($id)
    {
       $user = DB::table('SystemUsers')->where('Id',$id)->first();
        $regions = DB::table('Regions')->orderBy('EnName','asc')->get();
        $allowed_branches = DB::table('UserBranches')->where('UserId',$id)->orderBy('BranchName','asc')->get();

        return view('backend.users.edit',compact('user','regions','allowed_branches'));
    }


    public function update(Request $request, $id)
    {
        //
    }

  public function users(){
        $branches = DB::table('Branches')->orderBy('BranchNameEn','asc')->get();


        return view('backend.users.list',compact('branches'));
    }

    public function json_users_status($status){
        //$users = DB::table('SystemUsers')->orderBy('EmployeeID','desc')->paginate(100);
        if($status == 'joined'){
            $users = DB::table('SystemUsers')->where('LastDayOfWork','=',NULL)->orderBy('EmployeeName','asc')->paginate(200);
        }elseif($status == 'resigned'){
            $users = DB::table('SystemUsers')->where('LastDayOfWork','!=',NULL)->orderBy('EmployeeName','asc')->paginate(200);
        }else{
            $users = DB::table('SystemUsers')->orderBy('EmployeeName','asc')->paginate(200);
        }

        return response()->json($users);
    }

    public function allowed_branches(Request $request){
        $response = array();

        //opened access
         if($request->CheckedItems){
            foreach($request->CheckedItems as $checked){
                $check =  DB::table('UserBranches')->where('UserId',$request->UserId)->where('BranchId',$checked)->first();
                if($check){
                    //update
                    DB::table('UserBranches')->where('UserId',$request->UserId)->where('BranchId',$checked)->update([
                                        'Active'                        => 1,
                                        'CreatedAt'                 => date('Y-m-d H:i:s'),
                                        'UpdatedAt'                => date('Y-m-d H:i:s'),
                                ]);
                    
                }else{
                    //insert
                    $branch = DB::table('Branches')->where('Id',$checked)->first();

                    DB::table('UserBranches')->insert([
                        'UserId' => $request->UserId,
                        'UserName' => $request->UserName,
                        'BranchId' => $checked,
                        'BranchName' => $branch->BranchNameEn.' ('.$branch->BranchNameMm.')',
                        'RegionCode' => $branch->RegionCode,
                        'RegionPostalCode' => $branch->RegionPostalCode,
                        'Active' => 1,
                        'CreatedAt'                 => date('Y-m-d H:i:s'),
                        'UpdatedAt'                => date('Y-m-d H:i:s'),
                    ]);
                }
            }
        }

        //closed access
        if($request->UnCheckedItems){
            foreach($request->UnCheckedItems  as $unchecked){
                DB::table('UserBranches')->where('UserId',$request->UserId)->where('BranchId',$unchecked)->update([
                                    'Active'                        => 0,
                                    'CreatedAt'                 => date('Y-m-d H:i:s'),
                                    'UpdatedAt'                => date('Y-m-d H:i:s'),
                            ]);
            }
        }
        
        $response['success'] = 1;
        $response['message'] = 'User\'s allowed branches have been updated.';

        return response()->json($response);
    }

    public function set_default_branch(Request $request){
        $response = array();

        DB::table('SystemUsers')->where('Id',$request->UserId)->update([
            'CurrentBranchId'          => $request->CurrentBranchId,
            'CurrentBranchName'          => $request->CurrentBranchName,
            'UpdatedAt'                => date('Y-m-d H:i:s'),
        ]);

        $response['success'] = 1;
        $response['message'] = 'User\'s current branch have been updated.';

        return response()->json($response);
    }

    public function register_system_user(Request $request){
        $response = array();
        
        $employee = DB::table('Employees')->where('EmployeeId',$request->EmployeeId)->first();
        if($employee){
             $user = DB::table('SystemUsers')->where('EmployeeId',$employee->EmployeeId)->first();
             if(!$user){
                
                DB::table('SystemUsers')->insert([
                                'EmployeeId'                   => $employee->EmployeeId,
                                'EmployeeName'                     => $employee->EmployeeName,
                                'Password'                      => bcrypt($request->Passcode),
                                'Position'                  => $employee->Position,
                                'AssignBranch'               =>  $employee->Department,
                                'AssignDepartment'              =>  $employee->AssignDepartment,
                                'PhoneNo'          =>  $employee->PhoneNo,
                                'LastDayOfWork'  =>  $employee->LastDayOfWork,
                                'Role'          =>  $request->Role,
                                'Image'          =>  'user.png',
                                 'Remark'          => 'Remark',
                                'Active'                        => 1,
                                'CreatedAt'                 => date('Y-m-d H:i:s'),
                                'UpdatedAt'                => date('Y-m-d H:i:s'),
                        ]);

                DB::table('Employees')->where('EmployeeId',$request->EmployeeId)->update([
                    'Sync'          => 1,
                    'SystemUser'          => 1,
                    'UpdatedAt'                => date('Y-m-d H:i:s'),
                ]);


                $response['success'] = 1;
                $response['message'] = 'New system user is registered.';
             }else{
                $response['success'] = 0;
                $response['message'] = 'User is already exists.';
                
             }
        }else{
            $response['success']        = 0;
            $response['message']        = 'Employee not found.';
        }

       


        return response()->json($response);
    }
}

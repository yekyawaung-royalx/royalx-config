<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\DispatchRouteController;
use Illuminate\Support\Facades\Artisan;
/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/livechat', function () {
    return view('livechat');
});
Route::get('/test',function (){

    $count = DB::table('Routes')->select('Id')->count();
    return $count;

    //$count = DB::table('royal_waybill')->select('name')->first();

    //return $count;
    //$employees = json_decode(fetched_employee_data_from_innovix(), JSON_PRETTY_PRINT);

    //clear old data
    //DB::table('InnovixData')->delete();

    //saved updated data into Innovix table
    // foreach($employees['records'] as $employee){
    //     DB::table('InnovixData')->insert([
    //                             'EmployeeId'                   => $employee['employee_id'],
    //                             'EmployeeName'                     => $employee['name_eng'],
    //                             'Position'                      =>  $employee['position'],
    //                             'Department'                  => $employee['department'],
    //                             'AssignDepartment'               =>   $employee['branch'],
    //                             'PhoneNo'              =>  $employee['phone_number'],
    //                             'LastDayOfWork'          =>  $employee['last_day_of_work'],
    //                             'Checked' => 0,
    //                             'CreatedAt'                 => date('Y-m-d H:i:s'),
    //                             'UpdatedAt'                => date('Y-m-d H:i:s'),
    //                     ]);
    // }
});

Route::get('/widget', function () {
    
    return view('widget');
});


Route::get('/greeting/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'es', 'fr'])) {
        abort(400);
    }
 
    App::setLocale($locale);
 
    //
});

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();


Route::prefix('admin')->group(function () {
    Route::post('qrcode',[App\Http\Controllers\QrController::class, 'qrcode'])->name('qrcode');
    Route::post('verify-user',[App\Http\Controllers\QrController::class, 'verify_user']);
    Route::get('verify-qr',[App\Http\Controllers\QrController::class, 'verify_qr']);
    Route::post('verified',[App\Http\Controllers\QrController::class, 'verified']);
    Route::post('verified-user',[App\Http\Controllers\QrController::class, 'verified_user']);
    Route::post('delete-qr',[App\Http\Controllers\QrController::class, 'delete_qr']);
    Route::get('my-qr',[App\Http\Controllers\QrController::class, 'my_qr']);

    Route::get('dashboard',[App\Http\Controllers\HomeController::class, 'dashboard']);
    Route::get('dispatch-routes/create',[App\Http\Controllers\DispatchRouteController::class,'create']);
    Route::get('dispatch-routes',[App\Http\Controllers\DispatchRouteController::class,'index']);
    Route::post('dispatch-routes',[App\Http\Controllers\DispatchRouteController::class,'store']);

    Route::get('branches',[App\Http\Controllers\BranchController::class,'branches']);
    Route::get('quaters',[App\Http\Controllers\QuaterController::class, 'quaters']);
    Route::get('townships',[App\Http\Controllers\TownshipController::class,'townships']);

    //region route collections
    Route::get('regions',[App\Http\Controllers\RegionController::class,'regions']);
    Route::get('regions/{id}',[App\Http\Controllers\RegionController::class,'show']);


    Route::get('innovix-hr',[App\Http\Controllers\EmployeeController::class,'innovix_hr']);
    Route::get('users',[App\Http\Controllers\UserController::class,'users']);
    Route::get('users/{id}',[App\Http\Controllers\UserController::class,'show']);
    Route::get('users/{id}/edit',[App\Http\Controllers\UserController::class,'edit']);
    Route::get('package-categories',[App\Http\Controllers\PackageCategoryController::class,'package_categories']);
    Route::get('employees',[App\Http\Controllers\EmployeeController::class, 'employees']);


    Route::post('employees/store',[App\Http\Controllers\EmployeeController::class, 'store']);
    Route::post('townships/store',[App\Http\Controllers\TownshipController::class, 'store']);
    Route::post('branches/store',[App\Http\Controllers\BranchController::class, 'store']);
    Route::post('users/store',[App\Http\Controllers\UserController::class, 'store']);
    Route::post('allowed-branches',[App\Http\Controllers\UserController::class, 'allowed_branches']);

    Route::post('package-categories/store',[App\Http\Controllers\PackageCategoryController::class, 'store']);
    Route::put('package-categories/update',[App\Http\Controllers\PackageCategoryController::class, 'update']);
    Route::get('branches/{id}',[App\Http\Controllers\BranchController::class, 'show']);
    Route::put('branches',[App\Http\Controllers\BranchController::class, 'update']);
    Route::get('employees/{id}',[App\Http\Controllers\EmployeeController::class, 'show']);
    Route::get('townships/{id}',[App\Http\Controllers\TownshipController::class, 'show']);
    Route::get('quaters/{id}',[App\Http\Controllers\QuaterController::class, 'show']);
   Route::get('package-categories/{id}',[App\Http\Controllers\PackageCategoryController::class, 'show']);
    Route::put('townships',[App\Http\Controllers\TownshipController::class, 'update']);

    

    Route::post('dispatch-routes/generate',[App\Http\Controllers\DispatchRouteController::class, 'generate']);
    Route::get('dispatch-routes/{id}',[App\Http\Controllers\DispatchRouteController::class, 'show']);

    Route::get('routes',[App\Http\Controllers\RouteController::class, 'routes']);
    //Route::post('routes/create',[App\Http\Controllers\RouteController::class, 'store']);
    Route::post('routes/store',[App\Http\Controllers\RouteController::class, 'store']);
    Route::get('routes/{id}',[App\Http\Controllers\RouteController::class, 'show']);
    Route::post('routes/change',[App\Http\Controllers\RouteController::class, 'change']);

     Route::delete('package-categories/delete',[App\Http\Controllers\PackageCategoryController::class, 'destroy']);
     Route::delete('townships/delete',[App\Http\Controllers\TownshipController::class, 'destroy']);

     Route::get('api',[App\Http\Controllers\HomeController::class, 'api_lists']);
    Route::get('synced/innovix-hr',[App\Http\Controllers\EmployeeController::class, 'sync_innovix_hr']);
    Route::get('synced/employees',[App\Http\Controllers\EmployeeController::class, 'sync_employees']);

     //search
     Route::get('search/routes/{id}',[App\Http\Controllers\RouteController::class, 'search']);

    Route::post('set-default-branch',[App\Http\Controllers\UserController::class, 'set_default_branch']);
    Route::post('register-system-user',[App\Http\Controllers\UserController::class, 'register_system_user']);
});

Route::prefix('json')->group(function () {
    Route::post('fetched-townships',[App\Http\Controllers\TownshipController::class, 'json_fetched_townships']);
    Route::post('fetched-region-townships',[App\Http\Controllers\TownshipController::class, 'json_fetched_region_townships']);
    Route::post('fetched-branches',[App\Http\Controllers\BranchController::class, 'json_fetched_branches']);
    Route::get('townships/{status}',[App\Http\Controllers\TownshipController::class, 'json_townships_status']);
    Route::get('regions/all',[App\Http\Controllers\RegionController::class, 'json_all_regions']);
    Route::get('townships',[App\Http\Controllers\TownshipController::class, 'json_townships']);
    Route::get('townships/view/{id}',[App\Http\Controllers\TownshipController::class, 'json_view_township']);
    Route::get('branches/{status}',[App\Http\Controllers\BranchController::class, 'json_branches_status']);

    Route::get('quaters/{status}',[App\Http\Controllers\QuaterController::class, 'json_quaters_status']);
    Route::get('regions',[App\Http\Controllers\RegionController::class, 'json_regions']);
    Route::get('package-categories/{status}',[App\Http\Controllers\PackageCategoryController::class, 'json_package_categories']);
    Route::get('employees/{status}',[App\Http\Controllers\EmployeeController::class, 'json_employees_status']);
    Route::get('innovix-hr',[App\Http\Controllers\EmployeeController::class, 'json_innovix_hr']);
    Route::get('users/{status}',[App\Http\Controllers\UserController::class, 'json_users_status']);
    Route::get('townships/search',[App\Http\Controllers\TownshipController::class,'search_townships']);
    Route::get('dispatch-routes',[App\Http\Controllers\DispatchRouteController::class,'json_dispatch_routes']);
    Route::post('search-routes',[App\Http\Controllers\DispatchRouteController::class, 'search_routes']);
    Route::get('routes/{status}',[App\Http\Controllers\RouteController::class, 'json_routes']);
    //Route::get('routes/{status}',[App\Http\Controllers\RouteController::class, 'json_routes']);
     
});

Route::prefix('search')->group(function () {
    Route::get('innovix-hr/{term}',[App\Http\Controllers\EmployeeController::class, 'search_innovix_hr']);
    Route::get('employees/{term}',[App\Http\Controllers\EmployeeController::class, 'search_employees']);
});



Route::get('/clear-cache', function () {
   Artisan::call('cache:clear');
   Artisan::call('route:clear');

   return "Cache cleared successfully";
});
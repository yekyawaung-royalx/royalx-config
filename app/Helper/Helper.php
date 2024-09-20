<?php
use Illuminate\Support\Facades\Log;
    
    /** auth user info **/
    function user(){
        return Auth::user();
    }

    function total_employees(){
        $count = array();
        $count['active']            = DB::table('Employees')->select('Id')->where('Active',1)->count();
        $count['inactive']        = DB::table('Employees')->select('Id')->where('Active',0)->count();

        return $count;
    }

    function total_branches(){
        $count = array();
        $count['active']            = DB::table('Branches')->select('Id')->where('Active',1)->count();
        $count['inactive']        = DB::table('Branches')->select('Id')->where('Active',0)->count();


        return $count;
    }

    function total_routes(){
        $count = array();
        $count['active']            = DB::table('Routes')->select('Id')->where('Active',1)->count();
        $count['inactive']        = DB::table('Routes')->select('Id')->where('Active',0)->count();


        return $count;
    }

    function total_townships(){
        $count = array();
        $count['active']            = DB::table('Townships')->select('Id')->where('Active',1)->count();
        $count['inactive']        = DB::table('Townships')->select('Id')->where('Active',0)->count();


        return $count;
    }
    
	function route_ordered($current,$origin,$region){

		if($current==$origin){
			return 1;
		}elseif($current=='YGN-SORTING'){
			if($region == 'LOWER'){
				return 2;
			}else{
				return 3;
			}
		}elseif($current=='MDY-SORTING'){
			if($region == 'UPPER'){
				return 2;
			}else{
				return 3;
			}
		}else{
			return 0;
		}
	}

    function fetched_token_from_innovix(){

        
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => getenv('INNOVIX_URL'),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('username' => getenv('INNOVIX_USERNAME'),'secret' => getenv('INNOVIX_SECRET')),
          CURLOPT_HTTPHEADER => array(
            
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

       return $response;
    }

    function fetched_employee_data_from_innovix(){
        $tokens = json_decode(fetched_token_from_innovix(), JSON_PRETTY_PRINT);
        $token = $tokens['token'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://royalx.innovixhr.com/external-api/employee',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'external_access_token: c5452b12-3616-4961-86ea-923c299e610f',
            'Authorization: Bearer '.$token,
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    function synced_employee_data_to_table(){
        $employees = json_decode(fetched_employee_data_from_innovix(), JSON_PRETTY_PRINT);

        //clear old data
        DB::table('InnovixData')->delete();

        //saved updated data into Innovix table
        foreach($employees['records'] as $employee){
            DB::table('InnovixData')->insert([
                                    'EmployeeId'                   => $employee['employee_id'],
                                    'EmployeeName'                     => $employee['name_eng'],
                                    'Position'                      =>  $employee['position'],
                                    'Department'                  => $employee['department'],
                                    'AssignDepartment'               =>   $employee['branch'],
                                    'PhoneNo'              =>  $employee['phone_number'],
                                    'LastDayOfWork'          =>  $employee['last_day_of_work'],
                                    'Checked' => 0,
                                    'CreatedAt'                 => date('Y-m-d H:i:s'),
                                    'UpdatedAt'                => date('Y-m-d H:i:s'),
                            ]);
        }
    }
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QrController extends Controller
{
    
    public function qrcode(Request $request){
        $data =  $_POST;

        return view('layouts.qrcode',compact('data'));
        
    }

    public function verify_user(Request $request){
        $email =  $request->email;
        
        $user = DB::table('Users')->where('email',$email)->first();
        if($user){
            $count = DB::table('QrTokens')->where('UserId',$user->id)->count();
            if($count == 0){
                    DB::table('QrTokens')->insertGetId([
                    'Token'        => time(),
                    'UserId'      => $user->id,
                    'CreatedAt'             => date('Y-m-d H:i:s'),
                    'UpdatedAt'             => date('Y-m-d H:i:s'),
                ]);
            }
            return $user->id;
        }else{
            return 0;
        }
        return $count;
    }

    public function verify_qr(){
        $raw           = explode(",", $_GET['id']);
        $id               = $raw['0'] ;
        $token      = trim($raw ['1'],"_token=");
        
        return view('layouts.verify',compact('id','token'));
    }

    public function verified(Request $request){
        DB::table('QrTokens')->where('UserId',$request->id)->update([
                    'Verified'      => 1,
                    'CreatedAt'             => date('Y-m-d H:i:s'),
                    'UpdatedAt'             => date('Y-m-d H:i:s'),
                ]);
    }

    public function verified_user(Request $request){
        $count = DB::table('QrTokens')->where('UserId',$request->id)->where('Verified',1)->count();
        //DB::table('QrTokens')->where('UserId',$request->id)->delete();

        return $count;
    }

    public function delete_qr(Request $request){
        DB::table('QrTokens')->where('UserId',$request->id)->delete();

        return 1;
    }

public function my_qr(){
        return view('layouts.qr-login');
    }
    
}

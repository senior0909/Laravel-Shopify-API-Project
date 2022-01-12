<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class userMdl extends Model
{
    use HasFactory;

    public static function insertUser($user){

        $value=DB::table('user')->where('name', $user['name'])->get();
         
        if($value->count() != 0){
            return 0;
        }

        $value=DB::table('user')->where('email', $user['email'])->get();
         
        if($value->count() != 0){
            return 0;
        }

        return DB::table('user')->insert($user);
        
    }


    public static function getUser($id,$psd){

        $value = null;
        $res_name=DB::table('user')->where('name', $id)->get();
        $res_email=DB::table('user')->where('email', $id)->get();
         
        if($res_name->count() == 0 && $res_email->count() == 0){
            return 0;
        }

        if($res_name->count() == 0){
            $pwd = $res_email[0]->password;
            if($pwd == $psd) $value = $res_email[0];
            else return 2;
        }else{
            $pwd = $res_name[0]->password;
            if($pwd == $psd) $value = $res_name[0];
            else return 2;
        }

        if($value->state == 0 || $value->state == 2) return 3;

        session()->put('name',$value->name);
        session()->put('email',$value->email);
        session()->put('address_id',$value->address_id);
        session()->put('company',$value->company);
        session()->put('role',$value->role);

        return 1;
         
    }


    public static function getAllUser(){

        $users=DB::table('user')
                ->join('tracking_info', 'user.company', '=', 'tracking_info.company')
                ->join('locations', 'user.address_id', '=', 'locations.id')
                ->select('user.*', 'tracking_info.tracking_company', 'tracking_info.tracking_url', 'locations.address')
                ->get();

        return $users;
         
    }

    public static function updateUser($id,$email,$address_id,$role,$state){
        return DB::table('user')->where('id',$id)->update(array('email'=>$email,'address_id'=>$address_id,'role'=>$role,'state'=>$state));
    }


}

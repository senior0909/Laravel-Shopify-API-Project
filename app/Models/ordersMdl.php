<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ordersMdl extends Model
{
    use HasFactory;

    public static function insertOrderStatus($delivery_list){

        if($delivery_list == NULL) return false;
        $current_date_time = date('Y-m-d H:i:s');
                
        foreach($delivery_list as $delivery){

         $value=DB::table('order_delivery_status')->where('customer_id', $delivery['customer_id'])->get();
         if($value->count() == 0){
            DB::table('order_delivery_status')->insert(array('customer_id'=>$delivery['customer_id'],'delivery_status'=>$delivery['delivery_status'],'update_dt'=>$current_date_time));
         }else{
            DB::table('order_delivery_status')->where('customer_id', $delivery['customer_id'])->update(['delivery_status' => $delivery['delivery_status'],'update_dt'=>$current_date_time]);
         }
            

        }
        
        return true;
           
     }

     public static function getOrderStatus(){

      $customer_id = array();
      $status = array();

      $orders =  DB::table('order_delivery_status')->get();
      
         foreach($orders as $order){
            array_push($customer_id, $order->customer_id);
            array_push($status, $order->delivery_status);
         }
         
      return array('customer_id' => $customer_id, 'status' => $status);

     }

     public static function getTrackingInfo(){

         $company = session()->get('company');

         $tracking_info = DB::table('tracking_info')->where('company',$company)->first();

         return $tracking_info;

     }

     public static function getChoosenTrackingInfo($company){


         $tracking_info = DB::table('tracking_info')->where('company',$company)->first();

         return $tracking_info;

     }

     public static function getLocationID($id){
         $location_id = DB::table('locations')->where('id',$id)->first();
         return $location_id->location_id;
     }
}

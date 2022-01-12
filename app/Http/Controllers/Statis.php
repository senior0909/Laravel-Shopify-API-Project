<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Shopify;
use App\Models\ordersMdl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\DB;

class Statis extends Controller
{
    private $orders;
    private $vendors;

    public function index(Request $request){

        $month = $request->input("orderMonth");
        $year = $request->input("orderYear");

        if(!isset($month)) {
            $year = date('Y');
            $month = date('m');
            $d = date('-d');
        }else{

            $d = date("-t", strtotime(date($year."-".$month."-1")));

        }
            
            
        $daterange[0] = Carbon::parse($year."-".$month.date('-1').'T00:00:00 +09:00')->setTimezone('UTC')->format('Y-m-d H:i:s');
        $daterange[1] = Carbon::parse($year."-".$month.$d.'T23:59:59 +09:00')->setTimezone('UTC')->format('Y-m-d H:i:s');

        $daterange = "&created_at_min=".$daterange[0]."&created_at_max=".$daterange[1];            

        if(!session()->has('name')) return redirect('/');

        if(session()->get('role') != 0){

            $delivery_status = ordersMdl::getOrderStatus();
            $shopify = new Shopify();
            $orders = array();
            $vendors = array();
            $order_info = array();
    
            $nextPageToken = null;
    
            do{
                
                $param = ($nextPageToken)? '&page_info='.$nextPageToken : $daterange."&status=any";
                
                $data = $shopify->get('/admin/orders.json?limit=250'.$param);
                $result = $data['all_orders'];
                foreach( $result->orders as $order){
                    
                  if($order->cancelled_at != null) continue;
                  
                  $n_line_itmes = 0;
                  foreach($order->line_items as $line_item){
    
                    $n_line_itmes++;
                    $vendor = $line_item->vendor;//Vendor：["vendor"]    
                    $payment_gateway_names = $order->payment_gateway_names;//送り状種別：["payment_gateway_names"]が"Cash on Delivery (COD)"になったら2を表示、それ以外は空欄
                    if($payment_gateway_names[0] == "np後払い_コンビニ_郵便局_銀行_line_pay_" && $order->financial_status == "pending"){
                        $order_info['status'] = '配送未完了';//（配送未完了、配送可能、配送準備中、配送完了）           
                    }else if(($payment_gateway_names[0] == "np後払い_コンビニ_郵便局_銀行_line_pay_" && $order->financial_status == "paid") || $payment_gateway_names[0] == "manual" || $payment_gateway_names[0] == "shopify_payments" || $payment_gateway_names[0] == "Cash on Delivery (COD)"){
                        $order_info['status'] = '配送可能';
                    }
                    
                    if($order->fulfillment_status == "fulfilled"){
                        $order_info['status'] = '配送完了';
                    }
                    
                    $orders_date= date_create($order->created_at);
                    $order_info['Created at'] = date_format($orders_date,"n月j日");//日付：["created_at"]

                    if($n_line_itmes != 1)
                        $order_info['お客様管理番号'] = $order->name."-".$n_line_itmes;//お客様管理番号：["name"]
                    else
                        $order_info['お客様管理番号'] = $order->name;


                    // if($order->name == '#1236') {
                    //     var_dump($order);exit;
                    // }

                    // $payment_gateway_names = $order->payment_gateway_names;//送り状種別：["payment_gateway_names"]が"Cash on Delivery (COD)"になったら2を表示、それ以外は空欄
                    if($payment_gateway_names[0] == "Cash on Delivery (COD)")
                        $order_info['送り状種別'] = '2';
                    else
                        $order_info['送り状種別'] = '';
    
                    $order_info['クール区分'] = $line_item->sku;
                    $order_info['伝票番号'] = '';
                    $order_info['出荷予定日'] = '';
                    
                    $order_info['support_date'] = '';// お届け予定（指定）日
                    $order_info['Note Attributes'] = '';

                    foreach($order->note_attributes as $note_attributes){
                    
                        if($note_attributes->name == 'delivery_date')
                            $order_info['support_date'] = $note_attributes->value;// お届け予定（指定）日                        
                        
                        if($note_attributes->name == 'delivery_time'){
                            switch($note_attributes->value){
                                case '指定なし':
                                    $order_info['Note Attributes'] = '';
                                    break;
                                case '午前中':
                                    $order_info['Note Attributes'] = '0812';
                                    break;
                                case '12時-14時':
                                    $order_info['Note Attributes'] = '1214';
                                    break;
                                case '14時-16時':
                                    $order_info['Note Attributes'] = '1416';
                                    break;
                                case '16時-18時':
                                    $order_info['Note Attributes'] = '1618';
                                    break;
                                case '18時-20時':
                                    $order_info['Note Attributes'] = '1820';
                                    break;
                                case '19時-21時':
                                    $order_info['Note Attributes'] = '1921';
                                    break;
                                default:
                                    $order_info['Note Attributes'] = '';
                                    
                            }
                        }
                    }
    
                    $order_info['お届け先コード'] = '';
    
                    
                    if(isset($order->shipping_address)){
                        $shipping_address = $order->shipping_address;
                        $order_info['お届け先電話番号'] = $shipping_address->phone;
                        $order_info['お届け先電話番号枝番'] = '';
                        $order_info['枝番お届け先郵便番号'] = $shipping_address->zip;//お届け先郵便番号
        
                        $jp_province = array(
                            'JP-01' =>  '北海道',
                            'JP-02' =>  '青森県',
                            'JP-03' =>  '岩手県',
                            'JP-04' =>  '宮城県',
                            'JP-05' =>  '秋田県',
                            'JP-06' =>  '山形県',
                            'JP-07' =>  '福島県',
                            'JP-08' =>  '茨城県',
                            'JP-09' =>  '栃木県',
                            'JP-10' =>  '群馬県',
                            'JP-11' =>  '埼玉県',
                            'JP-12' =>  '千葉県',
                            'JP-13' =>  '東京都',
                            'JP-14' =>  '神奈川県',
                            'JP-15' =>  '新潟県',
                            'JP-16' =>  '富山県',
                            'JP-17' =>  '石川県',
                            'JP-18' =>  '福井県',
                            'JP-19' =>  '山梨県',
                            'JP-20' =>  '長野県',
                            'JP-21' =>  '岐阜県',
                            'JP-22' =>  '静岡県',
                            'JP-23' =>  '愛知県',
                            'JP-24' =>  '三重県',
                            'JP-25' =>  '滋賀県',
                            'JP-26' =>  '京都府',
                            'JP-27' =>  '大阪府',
                            'JP-28' =>  '兵庫県',
                            'JP-29' =>  '奈良県',
                            'JP-30' =>  '和歌山県',
                            'JP-31' =>  '鳥取県',
                            'JP-32' =>  '島根県',
                            'JP-33' =>  '岡山県',
                            'JP-34' =>  '広島県',
                            'JP-35' =>  '山口県',
                            'JP-36' =>  '徳島県',
                            'JP-37' =>  '香川県',
                            'JP-38' =>  '愛媛県',
                            'JP-39' =>  '高知県',
                            'JP-40' =>  '福岡県',
                            'JP-41' =>  '佐賀県',
                            'JP-42' =>  '長崎県',
                            'JP-43' =>  '熊本県',
                            'JP-44' =>  '大分県',
                            'JP-45' =>  '宮崎県',
                            'JP-46' =>  '鹿児島県',
                            'JP-47' =>  '沖縄県',
                            );
                        
                        
                        $order_info['お届け先住所'] = $jp_province[$shipping_address->province_code].$shipping_address->city.$shipping_address->address1.$shipping_address->address2;
                        
                        $order_info['お届け先住所（アパートマンション名)'] = '';
                        $order_info['お届け先 会社・部門名１'] = '';
                        $order_info['お届け先 会社・部門名２'] = '';
                        $order_info['お届け先名'] = $shipping_address->last_name.$shipping_address->first_name;
                        $order_info['お届け先名略称カナ'] = '';
                        $order_info['敬称'] = '';
                        $order_info['ご依頼主コード'] = '';
                    }else{
                        $order_info['お届け先電話番号'] = '';
                        $order_info['お届け先電話番号枝番'] = '';
                        $order_info['枝番お届け先郵便番号'] = '';//お届け先郵便番号
        
                        $jp_province = array(
                            'JP-01' =>  '北海道',
                            'JP-02' =>  '青森県',
                            'JP-03' =>  '岩手県',
                            'JP-04' =>  '宮城県',
                            'JP-05' =>  '秋田県',
                            'JP-06' =>  '山形県',
                            'JP-07' =>  '福島県',
                            'JP-08' =>  '茨城県',
                            'JP-09' =>  '栃木県',
                            'JP-10' =>  '群馬県',
                            'JP-11' =>  '埼玉県',
                            'JP-12' =>  '千葉県',
                            'JP-13' =>  '東京都',
                            'JP-14' =>  '神奈川県',
                            'JP-15' =>  '新潟県',
                            'JP-16' =>  '富山県',
                            'JP-17' =>  '石川県',
                            'JP-18' =>  '福井県',
                            'JP-19' =>  '山梨県',
                            'JP-20' =>  '長野県',
                            'JP-21' =>  '岐阜県',
                            'JP-22' =>  '静岡県',
                            'JP-23' =>  '愛知県',
                            'JP-24' =>  '三重県',
                            'JP-25' =>  '滋賀県',
                            'JP-26' =>  '京都府',
                            'JP-27' =>  '大阪府',
                            'JP-28' =>  '兵庫県',
                            'JP-29' =>  '奈良県',
                            'JP-30' =>  '和歌山県',
                            'JP-31' =>  '鳥取県',
                            'JP-32' =>  '島根県',
                            'JP-33' =>  '岡山県',
                            'JP-34' =>  '広島県',
                            'JP-35' =>  '山口県',
                            'JP-36' =>  '徳島県',
                            'JP-37' =>  '香川県',
                            'JP-38' =>  '愛媛県',
                            'JP-39' =>  '高知県',
                            'JP-40' =>  '福岡県',
                            'JP-41' =>  '佐賀県',
                            'JP-42' =>  '長崎県',
                            'JP-43' =>  '熊本県',
                            'JP-44' =>  '大分県',
                            'JP-45' =>  '宮崎県',
                            'JP-46' =>  '鹿児島県',
                            'JP-47' =>  '沖縄県',
                            );
                        
                        
                        $order_info['お届け先住所'] = '';
                        
                        $order_info['お届け先住所（アパートマンション名)'] = '';
                        $order_info['お届け先 会社・部門名１'] = '';
                        $order_info['お届け先 会社・部門名２'] = '';
                        $order_info['お届け先名'] = '';
                        $order_info['お届け先名略称カナ'] = '';
                        $order_info['敬称'] = '';
                        $order_info['ご依頼主コード'] = '';
                    }
                    
                    
                    if(isset($order->billing_address)){
                        $billing_address = $order->billing_address;
                        $order_info['ご依頼主電話番号'] = $billing_address->phone;
                        $order_info['ご依頼主電話番号枝番'] = '';
                        $order_info['ご依頼主郵便番号'] = $billing_address->zip;
                        $order_info['ご依頼主住所'] = $jp_province[$billing_address->province_code].$billing_address->city.$billing_address->address1.$billing_address->address2;
                        $order_info['ご依頼主住所（アパートマンション名）'] = '';
                        $order_info['ご依頼主名'] = $billing_address->last_name.$billing_address->first_name;
                        $order_info['ご依頼主略称カナ'] = '';
                        $order_info['品名コード１'] = '';
                        $order_info['品名１'] = $line_item->title;
                        $order_info['品名コード２'] = '';
                        // $order_info['品名２'] = $line_item->variant_title."x ".$line_item->fulfillable_quantity;
                        $order_info['品名２'] = $line_item->variant_title."x ".$line_item->quantity;
                        $order_info['荷扱い１'] = $order->tags;
                        $order_info['荷扱い２'] = '';
                        $order_info['記事'] = $order->note;
                    }else{

                        $order_info['ご依頼主電話番号'] = '';
                        $order_info['ご依頼主電話番号枝番'] = '';
                        $order_info['ご依頼主郵便番号'] = '';
                        $order_info['ご依頼主住所'] = '';
                        $order_info['ご依頼主住所（アパートマンション名）'] = '';
                        $order_info['ご依頼主名'] = '';
                        $order_info['ご依頼主略称カナ'] = '';
                        $order_info['品名コード１'] = '';
                        $order_info['品名１'] = $line_item->title;
                        $order_info['品名コード２'] = '';
                        $order_info['品名２'] = $line_item->variant_title."x ".$line_item->fulfillable_quantity;
                        $order_info['荷扱い１'] = $order->tags;
                        $order_info['荷扱い２'] = '';
                        $order_info['記事'] = $order->note;
                    }
    
                    if($payment_gateway_names[0] == "Cash on Delivery (COD)"){
                        // $total = $order->total_line_items_price;
                        $total = $line_item->price * $line_item->quantity;
                        if($total < 10000)
                            $order_info['コレクト代金引換額（税込）'] = $total + 300;
                        else if(9999 < $total and $total < 30000 )
                            $order_info['コレクト代金引換額（税込）'] = $total + 400;
                        else if(29999 < $total and $total < 100000 )
                            $order_info['コレクト代金引換額（税込）'] = $total + 600;
                        else if(99999 < $total and $total < 300000 )
                            $order_info['コレクト代金引換額（税込）'] = $total + 1100;                    

                    }
                    // else if($n_line_itmes == 1){
                    //     $total = $order->total_line_items_price;
                    //     // $total = $line_item->price;
                    //     if($total < 10000)
                    //         $order_info['コレクト代金引換額（税込）'] = $total + 300;
                    //     else if(9999 < $total and $total < 30000 )
                    //         $order_info['コレクト代金引換額（税込）'] = $total + 400;
                    //     else if(29999 < $total and $total < 100000 )
                    //         $order_info['コレクト代金引換額（税込）'] = $total + 600;
                    //     else if(99999 < $total and $total < 300000 )
                    //         $order_info['コレクト代金引換額（税込）'] = $total + 1100;                    

                    // }
                    else{
                        $order_info['コレクト代金引換額（税込）'] = '';
                    }
                    
                    $order_info['コレクト内消費税額等'] = '';
                    $order_info['営業所止置き'] = '';
                    $order_info['営業所コード'] = '';
                    $order_info['発行枚数'] = '';
                    $order_info['個数口枠の印字'] = '';
                    $order_info['ご請求先顧客コード'] = '';
                    $order_info['ご請求先分類コード'] = '';
                    $order_info['運賃管理番号'] = '';
                    $order_info['注文時カード払いデータ登録'] = '';
                    $order_info['注文時カード払い加盟店番号'] = '';
                    $order_info['注文時カード払い申込受付番号１'] = '';
                    $order_info['注文時カード払い申込受付番号２'] = '';
                    $order_info['注文時カード払い申込受付番号３'] = '';
                    $order_info['お届け予定ｅメール利用区分'] = '';
                    
                    if(isset($order->customer)){
                        $customer = $order->customer;
                        $order_info['お届け予定ｅメールe-mailアドレス'] = $customer->email;
                    }else{
                        $order_info['お届け予定ｅメールe-mailアドレス'] = '';
                    }

                    $order_info['入力機種'] = '';
                    $order_info['お届け予定eメールメッセージ'] = '';
                    $order_info['お届け完了eメール利用区分'] = '';
                    $order_info['お届け完了eメールe-mailアドレス'] = $order->email;
                    $order_info['お届け完了eメールメッセージ'] = '';
                    $order_info['クロネコ収納代行利用区分'] = '';
                    $order_info['収納代行決済ＱＲコード印刷'] = '';
                    $order_info['収納代行請求金額(税込)'] = '';
                    $order_info['収納代行内消費税額等'] = '';
                    $order_info['収納代行請求先郵便番号'] = '';
                    $order_info['収納代行請求先住所'] = '';
                    $order_info['収納代行請求先住所（アパートマンション名）'] = '';
                    $order_info['収納代行請求先会社・部門名１'] = '';
                    $order_info['収納代行請求先会社・部門名２'] = '';
                    $order_info['収納代行請求先名(漢字)'] = '';
                    $order_info['収納代行請求先名(カナ)'] = '';
                    $order_info['収納代行問合せ先名(漢字)'] = '';
                    $order_info['収納代行問合せ先郵便番号'] = '';
                    $order_info['収納代行問合せ先住所'] = '';
                    $order_info['収納代行問合せ先住所（アパートマンション名）'] = '';
                    $order_info['収納代行問合せ先電話番号'] = '';
                    $order_info['収納代行管理番号'] = '';
                    $order_info['収納代行品名'] = '';
                    $order_info['収納代行備考'] = '';
                    

                    if(array_search($order_info['お客様管理番号'],$delivery_status['customer_id'])!==false){
    
                        $idx = array_search($order_info['お客様管理番号'],$delivery_status['customer_id']);
                        $order_info['status'] = $delivery_status['status'][$idx];
                                                
                    }

                    if($order_info['status'] == '配送未完了')
                        $order_info['status'] = '<span class="button button-pill button-flat-caution" style="width:130px;">'.$order_info['status'].'</span>';
                    else if($order_info['status'] == '配送可能')
                        $order_info['status'] = '<span class="button button-pill button-flat-primary" style="width:130px;">'.$order_info['status'].'</span>';
                    else if($order_info['status'] == '配送準備中')
                        $order_info['status'] = '<span class="button button-pill button-flat-highlight" style="width:130px;">'.$order_info['status'].'</span>';
                    else if($order_info['status'] == '配送完了')
                        $order_info['status'] = '<span class="button button-pill button-flat-royal" style="width:130px;">'.$order_info['status'].'</span>';


                    // $order_date = date('Y-m-d', strtotime($order->created_at));
                    // $today = date('Y-m-d');
                    // $time1 = new DateTime($order_date);
                    // $time2 = new DateTime($today);
                    // $interval = $time1->diff($time2);
                    // $diff = $interval->format('%d');
                    // $h_now = date('H');
                    // $t_checkable = false;
                    
                    // if($h_now<12){
                    //     $t_checkable = ($diff > 1)?true:false;
                    // }else{
                    //     $t_checkable = ($diff > 0)?true:false;
                    // }


                    // if($order_info['status'] != '配送未完了' && $t_checkable){
    
                        // $role = session()->get('role');
    
                        // if($role == 1){
                            if(array_search($vendor,$vendors) === false){
                                array_push($vendors,$vendor);
                            }
                        // }else{
                        //     $vendors = [session()->get('name')];
                        // } 
    
                        array_push($orders,array($vendor=>$order_info));                   
                    // }

                  }
    
                }
                
    
                $nextPageToken = isset($data['next']) ? $data['next'] : null;
    
    
            }while($nextPageToken);
            

            $user_company = [];
            $company = DB::table('user')->select('name','company')->get();
            foreach ($company as $value) {
                # code...
                $user_company = array_merge($user_company, array($value->name=>$value->company));

            }

            return view('producers_statis')->with('orders',$orders)->with('vendors',$vendors)->with('year',$year)->with('month',$month)->with('company',$user_company);

        }
        else
            return redirect('/');

    }

}

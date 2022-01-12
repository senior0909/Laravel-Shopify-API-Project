<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Shopify;
use App\Models\ordersMdl;
use Illuminate\Http\Request;
use Carbon\Carbon;


class Orders extends Controller
{

    private $orders;
    
    public function index(){
        if(session()->has('name')){

            $shopify = new Shopify();
            $delivery_status = ordersMdl::getOrderStatus();
            $orders = array();
            $order_info = array();

            $nextPageToken = null;

            do{
                
                $param = ($nextPageToken)? '&page_info='.$nextPageToken : "";
                
                $data = $shopify->get('/admin/orders.json?limit=250'.$param);
                $result = $data['all_orders'];
                foreach( $result->orders as $order){

                  $n_line_itmes = 0;
                  foreach($order->line_items as $line_item){
                    $n_line_itmes++;
                    $payment_gateway_names = $order->payment_gateway_names;//送り状種別：["payment_gateway_names"]が"Cash on Delivery (COD)"になったら2を表示、それ以外は空欄
                    
                    
                    if($payment_gateway_names[0] == "np後払い_コンビニ_郵便局_銀行_line_pay_" && $order->financial_status == "pending"){
                        $order_info['order_state'] = '配送未完了';//（配送未完了、配送可能、配送準備中、配送完了）           
                    }else if(($payment_gateway_names[0] == "np後払い_コンビニ_郵便局_銀行_line_pay_" && $order->financial_status == "paid") || $payment_gateway_names[0] == "manual" || $payment_gateway_names[0] == "shopify_payments" || $payment_gateway_names[0] == "Cash on Delivery (COD)"){
                        $order_info['order_state'] = '配送可能';
                    }else{
                        $order_info['order_state'] = '';
                    }
                    $order_info['order_pre_state'] = '';

                    $orders_date= date_create($order->created_at);

                    $order_info['Created at'] = date_format($orders_date,"n月j日");//日付：["created_at"]
                    $order_info['Vendor'] = $line_item->vendor;//Vendor：["vendor"]
                    
                    if($n_line_itmes != 1)
                        $order_info['Name'] = $order->name."-".$n_line_itmes;//お客様管理番号：["name"]
                    else
                        $order_info['Name'] = $order->name;
                    
                    if($payment_gateway_names[0] == "Cash on Delivery (COD)")
                        $order_info['cod'] = '2';
                    else
                        $order_info['cod'] = '';

                    $order_info['cool_classify'] = $line_item->sku;// クール区分：なし
                    $order_info['doc_num'] = '';// 伝票番号：なし
                    $order_info['export_date'] = '';// 出荷予定日：なし
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


                    $shipping_address = $order->shipping_address;
                    $order_info['Shipping Code'] = '';
                    $order_info['Shipping Phone'] = $shipping_address->phone;
                    $order_info['Shipping Phone Address Number'] = '';
                    $order_info['Shipping Zip'] = $shipping_address->zip;
                    
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
                    
                    
                    $order_info['Shipping Address'] = $jp_province[$shipping_address->province_code].$shipping_address->city.$shipping_address->address1.$shipping_address->address2;
                    $order_info['Shipping Apart'] = '';
                    $order_info['Shipping Compart1'] = '';
                    $order_info['Shipping Compart2'] = '';
                    $order_info['Shipping Name'] = $shipping_address->last_name.$shipping_address->first_name;
                    $order_info['Shipping sumarize_name'] = '';

                    $billing_address = $order->billing_address;
                    
                    $order_info['Honor Name'] = '';
                    $order_info['Billing Code'] = '';
                    $order_info['Billing Phone'] = $billing_address->phone;
                    $order_info['Billing Phone Address Number'] = '';
                    $order_info['Billing Zip'] = $billing_address->zip;
                    $order_info['Billing Address'] = $jp_province[$billing_address->province_code].$billing_address->city.$billing_address->address1.$billing_address->address2;
                    $order_info['Billing Apart'] = '';
                    $order_info['Billing Name'] = $billing_address->last_name.$billing_address->first_name;
                    $order_info['Billing sumarize_name'] = '';


                    $order_info['Lineitem code1'] = '';
                    $order_info['Lineitem title'] = $line_item->title;
                    $order_info['Lineitem code2'] = '';
                    // $order_info['Lineitem variant_title'] = $line_item->variant_title."x ".$line_item->fulfillable_quantity;
                    $order_info['Lineitem variant_title'] = $line_item->variant_title."x ".$line_item->quantity;
                    

                    $order_info['cargo_handling1'] = $order->tags;
                    $order_info['cargo_handling2'] = '';

                    $order_info['article'] = $order->note;

                    if($payment_gateway_names[0] == "Cash on Delivery (COD)"){
                        // $total = $order->total_line_items_price;
                        $total = $line_item->price * $line_item->quantity;
                        if($total < 10000)
                            $order_info['Collect cash on delivery amount (tax included)'] = $total + 300;
                        else if(9999 < $total and $total < 30000 )
                            $order_info['Collect cash on delivery amount (tax included)'] = $total + 400;
                        else if(29999 < $total and $total < 100000 )
                            $order_info['Collect cash on delivery amount (tax included)'] = $total + 600;
                        else if(99999 < $total and $total < 300000 )
                            $order_info['Collect cash on delivery amount (tax included)'] = $total + 1100;                    
                    }
                    // else if($n_line_itmes == 1){
                    //     $total = $order->total_line_items_price;
                    //     // $total = $line_item->price;
                    //     if($total < 10000)
                    //         $order_info['Collect cash on delivery amount (tax included)'] = $total + 300;
                    //     else if(9999 < $total and $total < 30000 )
                    //         $order_info['Collect cash on delivery amount (tax included)'] = $total + 400;
                    //     else if(29999 < $total and $total < 100000 )
                    //         $order_info['Collect cash on delivery amount (tax included)'] = $total + 600;
                    //     else if(99999 < $total and $total < 300000 )
                    //         $order_info['Collect cash on delivery amount (tax included)'] = $total + 1100;

                    // }
                    else{
                        $order_info['Collect cash on delivery amount (tax included)'] = ''; // or blank
                    }



                    if(array_search($order_info['Name'],$delivery_status['customer_id'])!==false){

                        $idx = array_search($order_info['Name'],$delivery_status['customer_id']);
                        $order_info['order_state'] = $delivery_status['status'][$idx];
                        $order_info['order_pre_state'] = $order_info['order_state'];
    
                    }

                    if($order_info['order_state'] == '配送未完了')
                        $order_info['order_pre_state'] = '<span class="button button-pill button-flat-caution" style="width:130px;">'.$order_info['order_state'].'</span>';
                    else if($order_info['order_state'] == '配送可能')
                        $order_info['order_pre_state'] = '<span class="button button-pill button-flat-primary" style="width:130px;">'.$order_info['order_state'].'</span>';
                    else if($order_info['order_state'] == '配送準備中')
                        $order_info['order_pre_state'] = '<span class="button button-pill button-flat-highlight" style="width:130px;">'.$order_info['order_state'].'</span>';
                    else if($order_info['order_state'] == '配送完了')
                        $order_info['order_pre_state'] = '<span class="button button-pill button-flat-royal" style="width:130px;">'.$order_info['order_state'].'</span>';


                    if($order_info['order_state'] == "配送未完了"){
                        $order_info['order_state'] = '<select class="form-control orderStatu" onchange="setStatus(this);">
                                                            <option selected>配送未完了</option>
                                                            <option>配送可能</option>
                                                            <option>配送準備中</option>
                                                            <option>配送完了</option>
                                                        </select>';//（配送未完了、配送可能、配送準備中、配送完了）           
                    }else if($order_info['order_state'] == "配送可能"){
                        $order_info['order_state'] = '<select class="form-control orderStatu" onchange="setStatus(this);">
                                                            <option>配送未完了</option>
                                                            <option selected>配送可能</option>
                                                            <option>配送準備中</option>
                                                            <option>配送完了</option>
                                                        </select>';
                    }else if($order_info['order_state'] == "配送準備中"){
                        $order_info['order_state'] = '<select class="form-control orderStatu" onchange="setStatus(this);">
                                                            <option>配送未完了</option>
                                                            <option>配送可能</option>
                                                            <option selected>配送準備中</option>
                                                            <option>配送完了</option>
                                                        </select>';
                    }else if($order_info['order_state'] == "配送完了"){
                        $order_info['order_state'] = '<select class="form-control orderStatu" onchange="setStatus(this);">
                                                            <option>配送未完了</option>
                                                            <option>配送可能</option>
                                                            <option>配送準備中</option>
                                                            <option selected>配送完了</option>
                                                        </select>';
                    }
                        
                    
                    array_push($orders,$order_info);
                  }
                }
                

                $nextPageToken = isset($data['next']) ? $data['next'] : null;


            }while($nextPageToken);


            return view('orders')->with('orders',$orders);
        }
            
        else
            return redirect('/');
    }

    public function getOrders(Request $request){
        
        $daterange = $request->input('date-range');
        if($daterange != ''){
            $daterange = explode("~",$daterange);
            
            
            $daterange[0] = Carbon::parse($daterange[0].'T00:00:00 +09:00')->setTimezone('UTC')->format('Y-m-d H:i:s');
            $daterange[1] = Carbon::parse($daterange[1].'T00:00:00 +09:00')->setTimezone('UTC')->format('Y-m-d H:i:s');

            $daterange = "&created_at_min=".$daterange[0]."&created_at_max=".$daterange[1];
            
            // var_dump($daterange);
            // exit;

        }

        //https://shop.myshopify.com/admin/orders.json?created_at_min=2014-01-01&created_at_max=2014-01-15

        $shopify = new Shopify();
        $delivery_status = ordersMdl::getOrderStatus();
        $orders = array();
        $order_info = array();

        $nextPageToken = null;

        do{
            
            $param = ($nextPageToken)? '&page_info='.$nextPageToken : $daterange;
            
            $data = $shopify->get('/admin/orders.json?limit=250'.$param);
            $result = $data['all_orders'];
            foreach( $result->orders as $order){
                
              $n_line_itmes = 0;
              foreach($order->line_items as $line_item){
                $n_line_itmes++;
                $payment_gateway_names = $order->payment_gateway_names;//送り状種別：["payment_gateway_names"]が"Cash on Delivery (COD)"になったら2を表示、それ以外は空欄
                
                
                if($payment_gateway_names[0] == "np後払い_コンビニ_郵便局_銀行_line_pay_" && $order->financial_status == "pending"){
                    $order_info['order_state'] = '配送未完了';//（配送未完了、配送可能、配送準備中、配送完了）           
                }else if(($payment_gateway_names[0] == "np後払い_コンビニ_郵便局_銀行_line_pay_" && $order->financial_status == "paid") || $payment_gateway_names[0] == "manual" || $payment_gateway_names[0] == "shopify_payments" || $payment_gateway_names[0] == "Cash on Delivery (COD)"){
                    $order_info['order_state'] = '配送可能';
                }else{
                    $order_info['order_state'] = '';
                }

                $order_info['order_pre_state'] = $order_info['order_state'];



                $orders_date= date_create($order->created_at);

                $order_info['Created at'] = date_format($orders_date,"n月j日");//日付：["created_at"]

                $order_info['Vendor'] = $line_item->vendor;//Vendor：["vendor"]

                if($n_line_itmes != 1)
                    $order_info['Name'] = $order->name."-".$n_line_itmes;//お客様管理番号：["name"]
                else
                    $order_info['Name'] = $order->name;
                
                if($payment_gateway_names[0] == "Cash on Delivery (COD)")
                    $order_info['cod'] = '2';
                else
                    $order_info['cod'] = '';

                $order_info['cool_classify'] = $line_item->sku;// クール区分：なし
                $order_info['doc_num'] = '';// 伝票番号：なし
                $order_info['export_date'] = '';// 出荷予定日：なし
                
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


                $shipping_address = $order->shipping_address;
                $order_info['Shipping Code'] = '';
                $order_info['Shipping Phone'] = $shipping_address->phone;
                $order_info['Shipping Phone Address Number'] = '';
                $order_info['Shipping Zip'] = $shipping_address->zip;
                
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
                
                
                $order_info['Shipping Address'] = $jp_province[$shipping_address->province_code].$shipping_address->city.$shipping_address->address1.$shipping_address->address2;
                $order_info['Shipping Apart'] = '';
                $order_info['Shipping Compart1'] = '';
                $order_info['Shipping Compart2'] = '';
                $order_info['Shipping Name'] = $shipping_address->last_name.$shipping_address->first_name;
                $order_info['Shipping sumarize_name'] = '';

                $billing_address = $order->billing_address;
                
                $order_info['Honor Name'] = '';
                $order_info['Billing Code'] = '';
                $order_info['Billing Phone'] = $billing_address->phone;
                $order_info['Billing Phone Address Number'] = '';
                $order_info['Billing Zip'] = $billing_address->zip;
                $order_info['Billing Address'] = $jp_province[$billing_address->province_code].$billing_address->city.$billing_address->address1.$billing_address->address2;
                $order_info['Billing Apart'] = '';
                $order_info['Billing Name'] = $billing_address->last_name.$billing_address->first_name;
                $order_info['Billing sumarize_name'] = '';


                $order_info['Lineitem code1'] = '';
                $order_info['Lineitem title'] = $line_item->title;
                $order_info['Lineitem code2'] = '';
                // $order_info['Lineitem variant_title'] = $line_item->variant_title."x ".$line_item->fulfillable_quantity;
                $order_info['Lineitem variant_title'] = $line_item->variant_title."x ".$line_item->quantity;
                

                $order_info['cargo_handling1'] = $order->tags;;
                $order_info['cargo_handling2'] = '';

                $order_info['article'] = $order->note;

                if($payment_gateway_names[0] == "Cash on Delivery (COD)"){
                    // $total = $order->total_line_items_price;
                    $total = $line_item->price;
                    if($total < 10000)
                        $order_info['Collect cash on delivery amount (tax included)'] = $total + 300;
                    else if(9999 < $total and $total < 30000 )
                        $order_info['Collect cash on delivery amount (tax included)'] = $total + 400;
                    else if(29999 < $total and $total < 100000 )
                        $order_info['Collect cash on delivery amount (tax included)'] = $total + 600;
                    else if(99999 < $total and $total < 300000 )
                        $order_info['Collect cash on delivery amount (tax included)'] = $total + 1100;                    
                }
                // else if($n_line_itmes == 1){
                //     $total = $order->total_line_items_price;
                //     // $total = $line_item->price;
                //     if($total < 10000)
                //         $order_info['Collect cash on delivery amount (tax included)'] = $total + 300;
                //     else if(9999 < $total and $total < 30000 )
                //         $order_info['Collect cash on delivery amount (tax included)'] = $total + 400;
                //     else if(29999 < $total and $total < 100000 )
                //         $order_info['Collect cash on delivery amount (tax included)'] = $total + 600;
                //     else if(99999 < $total and $total < 300000 )
                //         $order_info['Collect cash on delivery amount (tax included)'] = $total + 1100;

                // }
                else{
                    $order_info['Collect cash on delivery amount (tax included)'] = ''; // or blank
                }


                if(array_search($order_info['Name'],$delivery_status['customer_id'])!==false){

                    $idx = array_search($order_info['Name'],$delivery_status['customer_id']);
                    $order_info['order_state'] = $delivery_status['status'][$idx];
                    $order_info['order_pre_state'] = $order_info['order_state'];

                }
                
                if($order_info['order_state'] == '配送未完了')
                    $order_info['order_pre_state'] = '<span class="button button-pill button-flat-caution" style="width:130px;">'.$order_info['order_state'].'</span>';
                else if($order_info['order_state'] == '配送可能')
                    $order_info['order_pre_state'] = '<span class="button button-pill button-flat-primary" style="width:130px;">'.$order_info['order_state'].'</span>';
                else if($order_info['order_state'] == '配送準備中')
                    $order_info['order_pre_state'] = '<span class="button button-pill button-flat-highlight" style="width:130px;">'.$order_info['order_state'].'</span>';
                else if($order_info['order_state'] == '配送完了')
                    $order_info['order_pre_state'] = '<span class="button button-pill button-flat-royal" style="width:130px;">'.$order_info['order_state'].'</span>';

                if($order_info['order_state'] == "配送未完了"){
                    $order_info['order_state'] = '<select class="form-control orderStatu" onchange="setStatus(this);">
                                                        <option selected>配送未完了</option>
                                                        <option>配送可能</option>
                                                        <option>配送準備中</option>
                                                        <option>配送完了</option>
                                                    </select>';//（配送未完了、配送可能、配送準備中、配送完了）           
                }else if($order_info['order_state'] == "配送可能"){
                    $order_info['order_state'] = '<select class="form-control orderStatu" onchange="setStatus(this);">
                                                        <option>配送未完了</option>
                                                        <option selected>配送可能</option>
                                                        <option>配送準備中</option>
                                                        <option>配送完了</option>
                                                    </select>';
                }else if($order_info['order_state'] == "配送準備中"){
                    $order_info['order_state'] = '<select class="form-control orderStatu" onchange="setStatus(this);">
                                                        <option>配送未完了</option>
                                                        <option>配送可能</option>
                                                        <option selected>配送準備中</option>
                                                        <option>配送完了</option>
                                                    </select>';
                }else if($order_info['order_state'] == "配送完了"){
                    $order_info['order_state'] = '<select class="form-control orderStatu" onchange="setStatus(this);">
                                                        <option>配送未完了</option>
                                                        <option>配送可能</option>
                                                        <option>配送準備中</option>
                                                        <option selected>配送完了</option>
                                                    </select>';
                }
                
                
                array_push($orders,$order_info);
              }
            }
            

            $nextPageToken = isset($data['next']) ? $data['next'] : null;


        }while($nextPageToken);


        return view('orders')->with('orders',$orders);

    }

}

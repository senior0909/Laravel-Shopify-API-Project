<?php

//注文日時(From)
        $OrderTimeFrom = new DateTime('2020-02-18');
        $OrderTimeFrom->setTimeZone(new DateTimeZone('Asia/Tokyo'));
        //注文日時(To)
        $OrderTimeTo = new DateTime('now');
        $OrderTimeTo->setTimeZone(new DateTimeZone('Asia/Tokyo'));
         
        $application_id = 'アプリケーションID';
        $client_secret = 'シークレット';
        $yahoo_refresh_token = 'リフレッシュトークン';
        $seller_id = 'ストアアカウント';
        //アクセストークンのリフレッシュ処理
        $cred = new ClientCredential($application_id, $client_secret); 
        $client = new YConnectClient($cred);          
        $client->refreshAccessToken($yahoo_refresh_token);
        $yahoo_access_token = $client->getAccessToken();
         
        $header = array(
            'POST /ShoppingWebService/V1/orderList HTTP/1.1',
            'Host: circus.shopping.yahooapis.jp',
            'Authorization:Bearer '.$yahoo_access_token
        );
         
        $param = <<<EOD
                    <Req>
                        <Search>
                            <Result>2000</Result>
                            <Condition>
                                <OrderTimeFrom>{$OrderTimeFrom->format('YmdHis')}</OrderTimeFrom>
                                <OrderTimeTo>{$OrderTimeTo->format('YmdHis')}</OrderTimeTo>
                                <SellerId>{$seller_id}</SellerId>
                            </Condition>
                            <Field>OrderId,OrderTime</Field>
                        </Search>
                        <SellerId>{$seller_id}</SellerId>
                    </Req>
                    EOD;
         
        $ch = curl_init('https://circus.shopping.yahooapis.jp/ShoppingWebService/V1/orderList');
        curl_setopt_array($ch,array(
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_POSTFIELDS => $param,
        ));
         
        $result = curl_exec($ch);
         
        if(curl_error($ch)){
            //cUrlのエラー
            return;
        }
         
        curl_close($ch);
         
        echo var_dump($result);


?>
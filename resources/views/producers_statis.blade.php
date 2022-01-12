<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>生産統計 【トドクヨ】</title> 
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="css/metisMenu.css" rel="stylesheet" type="text/css"/>
    <!-- end of global css -->
    <!--page level css -->
    <link href="vendors/select2/select2.css" rel="stylesheet" />
    <link rel="stylesheet" href="vendors/select2/select2-bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" />
    <link href="css/pages/tables.css" rel="stylesheet" type="text/css" />
    <link href="vendors/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <link href="vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="vendors/Buttons-master/css/buttons.css" />
    <link rel="stylesheet" href="css/pages/advbuttons.css" />
    <!-- end of page level css -->
</head>

<body class="skin-josh">
    <header class="header">
        <a href="index.html" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="img/logo.png" alt="logo"></a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">                           
                            <div class="riot">
                                <div>
                                    {{{session()->get('name')}}}
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu" style="min-width: 9em;">                            
                            <!-- Menu Footer-->
                            <li class="user-footer">                                
                                <div>
                                    <a href="/logout">
                                        <i class="livicon" data-name="sign-out" data-s="18"></i>
                                        ログアウト
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                        <ul class="sidebar_threeicons">                            
                            <li>
                                <a href="">
                                    <i class="livicon" data-name="hammer" title="Form Builder 1" data-loop="true" data-color="#42aaca" data-hc="#42aaca" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="livicon" data-name="list-ul" title="Form Builder 2" data-loop="true" data-color="#e9573f" data-hc="#e9573f" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="livicon" data-name="vector-square" title="Button Builder" data-loop="true" data-color="#f6bb42" data-hc="#f6bb42" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="livicon" data-name="new-window" title="Page Builder" data-loop="true" data-color="#37bc9b" data-hc="#37bc9b" data-s="25"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="page-sidebar-menu" id="menu">
                        
                            <?php
                                if(session()->get('role') ==1)
                                    echo '<li>
                                                <a href="/users">
                                                    <i class="livicon" data-name="users" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                                    <span class="title">管理者</span>
                                                </a>
                                            </li>
                                            <li id="active" class="active">
                                                <a href="/statis">
                                                    <i class="livicon" data-name="calendar" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                                    <span class="title">生産統計</span>
                                                </a>
                                            </li>';
                            ?>
                        
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="table" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">注文</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">

                                <?php
                                    if(session()->get('role') ==1)
                                        echo '<li>
                                                    <a href="/orders">
                                                        <i class="fa fa-angle-double-right"></i>
                                                        注文一覧
                                                    </a>
                                                </li>';
                                ?>
                                
                                <li>
                                    <a href="/producers">
                                        <i class="fa fa-angle-double-right"></i>
                                        注文一覧
                                    </a>
                                </li>
                                
                            </ul>
                        </li>

                    </ul>
                    <!-- END SIDEBAR MENU --> </div>
            </section>
            <!-- /.sidebar --> </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>【生産統計】</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                            注文
                        </a>
                    </li>
                    <li>注文一覧</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content paddingleft_right15">                
                              
                <div class="row">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="table" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                注文一覧
                            </h4>
                        </div>
                        <br />
                        <div class="panel-body">
                            <div class="row" style="margin-bottom: 15px;">
                                <div class="col-lg-2">
                                    <button type="button" class="btn btn-responsive btn-success btn-sm csv_downloader">CSV File  <i class="livicon" data-name="download" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i></button>
                                </div>                              
                                <div class="col-lg-10">
                                    <form class="form-horizontal" action="/statis" method="get" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">ステータス:</label>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                    <select class="form-control orderStatus">
                                                        <option></option>
                                                        <option>配送未完了</option>
                                                        <option>配送可能</option>
                                                        <option>配送準備中</option>
                                                        <option>配送完了</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 control-label">月を選択:</label>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <select id="e1" class="form-control select1 orderStatis" name="orderYear">
                                                                <option value="2021">2021年</option>
                                                                <option value="2022">2022年</option>
                                                                <option value="2023">2023年</option>
                                                                <option value="2024">2024年</option>
                                                                <option value="2025">2025年</option>
                                                                <option value="2026">2026年</option>
                                                                <option value="2027">2027年</option>
                                                                <option value="2028">2028年</option>
                                                                <option value="2029">2029年</option>
                                                                <option value="2030">2030年</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <select id="e1" class="form-control select2 orderStatis" name="orderMonth">
                                                                <option value="1">1月</option>
                                                                <option value="2">2月</option>
                                                                <option value="3">3月</option>
                                                                <option value="4">4月</option>
                                                                <option value="5">5月</option>
                                                                <option value="6">6月</option>
                                                                <option value="7">7月</option>
                                                                <option value="8">8月</option>
                                                                <option value="9">9月</option>
                                                                <option value="10">10月</option>
                                                                <option value="11">11月</option>
                                                                <option value="12">12月</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form> 
                                </div>
                                
                            </div>
                            
                            <ul class="nav nav-tabs" style="margin-bottom: 15px;">

                            <?php

                                if($vendors == null){
                                    echo '<li class="active">
                                                <a href="#" data-toggle="tab"></a>
                                            </li>';
                                }else{
                                    $first = 0;
                                    foreach($vendors as $vendor){
                                        if($first==0){
                                            echo '<li class="active">
                                                    <a href="#'.$vendor.'" data-toggle="tab">'.$vendor.'</a>
                                                </li>';
                                        }else{
                                            echo '<li>
                                                    <a href="#'.$vendor.'" data-toggle="tab">'.$vendor.'</a>
                                                </li>';
                                        }
                                        $first++;
                                    }
                                }
                            
                            ?>

                            </ul>

                            <div id="myTabContent" class="tab-content">

                            <?php

                                if($vendors == null){
                                    echo '<div class="tab-pane fade active in" id="#">
                                                    <table class="table table-bordered " id="table">
                                                        <thead>
                                                        <tr class="filters">
                                                            <th>#</th>
                                                            <th>ステータス</th> 
                                                            <th> 日 付 </th>                                                         
                                                            <th>お客様管理番号</th>
                                                            <th>送り状種別</th>
                                                            <th>クール区分</th>
                                                            <th>伝票番号</th>
                                                            <th>出荷予定日</th>                                                                
                                                            <th>お届け予定（指定）日</th>
                                                            <th>配達時間帯</th>
                                                            <th>お届け先コード</th>
                                                            <th>お届け先電話番号</th>
                                                            <th>お届け先電話番号枝番</th>
                                                            <th>お届け先郵便番号</th>
                                                            <th>お届け先住所</th>
                                                            <th>お届け先住所（アパートマンション名)</th>
                                                            <th>お届け先 会社・部門名１</th>
                                                            <th>お届け先 会社・部門名２</th>
                                                            <th>お届け先名</th>
                                                            <th>お届け先名略称カナ</th>
                                                            <th>敬称</th>
                                                            <th>ご依頼主コード</th>
                                                            <th>ご依頼主電話番号</th>
                                                            <th>ご依頼主電話番号枝番</th>
                                                            <th>ご依頼主郵便番号</th>
                                                            <th>ご依頼主住所</th>
                                                            <th>ご依頼主住所（アパートマンション名）</th>
                                                            <th>ご依頼主名</th>
                                                            <th>ご依頼主略称カナ</th>
                                                            <th>品名コード１</th>
                                                            <th>品名１</th>
                                                            <th>品名コード２</th>
                                                            <th>品名２</th>
                                                            <th>荷扱い１</th>
                                                            <th>荷扱い２</th>
                                                            <th>記事</th>
                                                            <th>コレクト代金引換額（税込）</th>
                                                            <th>コレクト内消費税額等</th>
                                                            <th>営業所止置き</th>
                                                            <th>営業所コード</th>
                                                            <th>発行枚数</th>
                                                            <th>個数口枠の印字</th>
                                                            <th>ご請求先顧客コード</th>
                                                            <th>ご請求先分類コード</th>
                                                            <th>運賃管理番号</th>
                                                            <th>注文時カード払いデータ登録</th>
                                                            <th>注文時カード払い加盟店番号</th>
                                                            <th>注文時カード払い申込受付番号１</th>
                                                            <th>注文時カード払い申込受付番号２</th>
                                                            <th>注文時カード払い申込受付番号３</th>
                                                            <th>お届け予定ｅメール利用区分</th>
                                                            <th>お届け予定ｅメールe-mailアドレス</th>
                                                            <th>入力機種</th>
                                                            <th>お届け予定eメールメッセージ</th>
                                                            <th>お届け完了eメール利用区分</th>
                                                            <th>お届け完了eメールe-mailアドレス</th>
                                                            <th>お届け完了eメールメッセージ</th>
                                                            <th>クロネコ収納代行利用区分</th>
                                                            <th>収納代行決済ＱＲコード印刷</th>
                                                            <th>収納代行請求金額(税込)</th>
                                                            <th>収納代行内消費税額等</th>
                                                            <th>収納代行請求先郵便番号</th>
                                                            <th>収納代行請求先住所</th>
                                                            <th>収納代行請求先住所（アパートマンション名）</th>
                                                            <th>収納代行請求先会社・部門名１</th>
                                                            <th>収納代行請求先会社・部門名２</th>
                                                            <th>収納代行請求先名(漢字)</th>
                                                            <th>収納代行請求先名(カナ)</th>
                                                            <th>収納代行問合せ先名(漢字)</th>
                                                            <th>収納代行問合せ先郵便番号</th>
                                                            <th>収納代行問合せ先住所</th>
                                                            <th>収納代行問合せ先住所（アパートマンション名）</th>
                                                            <th>収納代行問合せ先電話番号</th>
                                                            <th>収納代行管理番号</th>
                                                            <th>収納代行品名</th>
                                                            <th>収納代行備考</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>';
                                }else{
                                    $first = 0;
                                    foreach($vendors as $vendor){
                                        if($first==0){
                                            echo '<div class="tab-pane fade active in" id="'.$vendor.'">';
                                        }else{
                                            echo '<div class="tab-pane fade" id="'.$vendor.'">';
                                        }
                                        

                                        $user_company = '';
                                        if(isset($company[$vendor])) $user_company = $company[$vendor];

                                        if($user_company == '佐川急便'){
                                            echo    '<table class="table table-bordered" id="table'.$first.'" company="'.$user_company.'">
                                                        <thead>
                                                        <tr class="filters">
                                                            <th><input type="checkbox"></th>
                                                            <th>ステータス</th>      
                                                            <th> 日 付 </th>                                                    
                                                            <th>伝票no</th>
                                                            <th>受注no</th>
                                                            <th>合計金額</th>
                                                            <th>合計金額（単位)</th>
                                                            <th>shitei_bi_a</th>                                                                
                                                            <th>shitei_bi_b</th>
                                                            <th>shitei_bi_c</th>
                                                            <th>時間指定</th>
                                                            <th>便種</th>
                                                            <th>シール１（佐川専用）</th>
                                                            <th>シール2（佐川専用）</th>
                                                            <th>シール3（佐川専用）</th>
                                                            <th>営業所止め</th>
                                                            <th>営業所名</th>
                                                            <th>送り状区分（ヤマト専用）</th>
                                                            <th>温度区分（ヤマト専用）</th>
                                                            <th>受注名</th>
                                                            <th>受注郵便番号</th>
                                                            <th>受注者住所</th>
                                                            <th>受注者電話番号</th>
                                                            <th>発送先名</th>
                                                            <th>発送先郵便番号</th>
                                                            <th>発送先住所</th>
                                                            <th>発送先電話番号</th>
                                                            <th>option1</th>
                                                            <th>option2</th>
                                                            <th>option3</th>
                                                            <th>option4</th>
                                                            <th>option5</th>
                                                            <th>option6</th>
                                                            <th>企業名</th>
                                                            <th>企業郵便番号</th>
                                                            <th>企業住所</th>
                                                            <th>企業電話番号</th>
                                                            <th>取扱商品</th>
                                                            <th>郵便種別</th>
                                                            <th>元・着払い種別</th>
                                                            <th>代引き種別</th>
                                                            <th>発送備考欄</th>
                                                            <th> 品名1 </th>
                                                            <th> 品名2 </th>
                                                            <th>品名3</th>
                                                            <th>品名4</th>
                                                            <th>品名5</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>';
                                                        if($orders != NULL)
                                                            foreach($orders as $order){
                                                                foreach($order as $key_vendor => $val){

                                                                    if($key_vendor == $vendor){
                                                                        echo "<tr>";
                                                                        echo '<td><input type="checkbox"></td>';

                                                                        echo '<td>'.$val['status'].'</td>
                                                                                <td>'.$val['Created at'].'</td>
                                                                                <td></td>
                                                                                <td>'.$val['お客様管理番号'].'</td>
                                                                                <td>'.$val['コレクト代金引換額（税込）'].'</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>'.$val['Note Attributes'].'</td>
                                                                                <td>'.$val['クール区分'].'</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>'.$val['ご依頼主名'].'</td>
                                                                                <td>'.$val['ご依頼主郵便番号'].'</td>
                                                                                <td>'.$val['ご依頼主住所'].'</td>
                                                                                <td>'.$val['ご依頼主電話番号'].'</td>
                                                                                <td>'.$val['お届け先名'].'</td>
                                                                                <td>'.$val['枝番お届け先郵便番号'].'</td>
                                                                                <td>'.$val['お届け先住所'].'</td>
                                                                                <td>'.$val['お届け先電話番号'].'</td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td>'.$val['送り状種別'].'</td>
                                                                                <td>'.$val['記事'].'</td>
                                                                                <td>'.$val['品名１'].'</td>
                                                                                <td>'.$val['品名２'].'</td>
                                                                                <td>'.$val['荷扱い１'].'</td>
                                                                                <td></td>
                                                                                <td></td>';
                        
                                                                        echo '</tr>';
                                                                    }
                                                                }
                                                            }
                                            echo    '   </tbody>
                                                    </table>
                                                </div>';
                                        }else{
                                            echo    '<table class="table table-bordered " id="table'.$first.'" company="'.$user_company.'">
                                                        <thead>
                                                        <tr class="filters">
                                                            <th><input type="checkbox"></th>
                                                            <th>ステータス</th>      
                                                            <th> 日 付 </th>                                                    
                                                            <th>お客様管理番号</th>
                                                            <th>送り状種別</th>
                                                            <th>クール区分</th>
                                                            <th>伝票番号</th>
                                                            <th>出荷予定日</th>                                                                
                                                            <th>お届け予定（指定）日</th>
                                                            <th>配達時間帯</th>
                                                            <th>お届け先コード</th>
                                                            <th>お届け先電話番号</th>
                                                            <th>お届け先電話番号枝番</th>
                                                            <th>お届け先郵便番号</th>
                                                            <th>お届け先住所</th>
                                                            <th>お届け先住所（アパートマンション名)</th>
                                                            <th>お届け先 会社・部門名１</th>
                                                            <th>お届け先 会社・部門名２</th>
                                                            <th>お届け先名</th>
                                                            <th>お届け先名略称カナ</th>
                                                            <th>敬称</th>
                                                            <th>ご依頼主コード</th>
                                                            <th>ご依頼主電話番号</th>
                                                            <th>ご依頼主電話番号枝番</th>
                                                            <th>ご依頼主郵便番号</th>
                                                            <th>ご依頼主住所</th>
                                                            <th>ご依頼主住所（アパートマンション名）</th>
                                                            <th>ご依頼主名</th>
                                                            <th>ご依頼主略称カナ</th>
                                                            <th>品名コード１</th>
                                                            <th> 品 名 １</th>
                                                            <th>品名コード２</th>
                                                            <th> 品 名 ２ </th>
                                                            <th>荷扱い１</th>
                                                            <th>荷扱い２</th>
                                                            <th>記事</th>
                                                            <th>コレクト代金引換額（税込）</th>
                                                            <th>コレクト内消費税額等</th>
                                                            <th>営業所止置き</th>
                                                            <th>営業所コード</th>
                                                            <th>発行枚数</th>
                                                            <th>個数口枠の印字</th>
                                                            <th>ご請求先顧客コード</th>
                                                            <th>ご請求先分類コード</th>
                                                            <th>運賃管理番号</th>
                                                            <th>注文時カード払いデータ登録</th>
                                                            <th>注文時カード払い加盟店番号</th>
                                                            <th>注文時カード払い申込受付番号１</th>
                                                            <th>注文時カード払い申込受付番号２</th>
                                                            <th>注文時カード払い申込受付番号３</th>
                                                            <th>お届け予定ｅメール利用区分</th>
                                                            <th>お届け予定ｅメールe-mailアドレス</th>
                                                            <th>入力機種</th>
                                                            <th>お届け予定eメールメッセージ</th>
                                                            <th>お届け完了eメール利用区分</th>
                                                            <th>お届け完了eメールe-mailアドレス</th>
                                                            <th>お届け完了eメールメッセージ</th>
                                                            <th>クロネコ収納代行利用区分</th>
                                                            <th>収納代行決済ＱＲコード印刷</th>
                                                            <th>収納代行請求金額(税込)</th>
                                                            <th>収納代行内消費税額等</th>
                                                            <th>収納代行請求先郵便番号</th>
                                                            <th>収納代行請求先住所</th>
                                                            <th>収納代行請求先住所（アパートマンション名）</th>
                                                            <th>収納代行請求先会社・部門名１</th>
                                                            <th>収納代行請求先会社・部門名２</th>
                                                            <th>収納代行請求先名(漢字)</th>
                                                            <th>収納代行請求先名(カナ)</th>
                                                            <th>収納代行問合せ先名(漢字)</th>
                                                            <th>収納代行問合せ先郵便番号</th>
                                                            <th>収納代行問合せ先住所</th>
                                                            <th>収納代行問合せ先住所（アパートマンション名）</th>
                                                            <th>収納代行問合せ先電話番号</th>
                                                            <th>収納代行管理番号</th>
                                                            <th>収納代行品名</th>
                                                            <th>収納代行備考</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>';
                                                        if($orders != NULL)
                                                            foreach($orders as $order){
                                                                foreach($order as $key_vendor => $val){

                                                                    if($key_vendor == $vendor){
                                                                        echo "<tr>";
                                                                        echo '<td><input type="checkbox"></td>';

                                                                        foreach($val as $key=>$value){
                                                                            echo "<td>".$value."</td>";
                                                                        }
                        
                                                                        echo '</tr>';
                                                                    }
                                                                }
                                                            }
                                            echo    '   </tbody>
                                                    </table>
                                                </div>';
                                        }


                                        $first++;
                                    }
                                }

                            ?>                                
       
                            </div>
                            
                            <!-- Modal for showing delete confirmation -->
                            <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="user_delete_confirm_title">
                                                Delete User
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure to delete this user? This operation is irreversible.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <a href="#" type="button" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- row--> </section>
        </aside>
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <script src="js/josh.js" type="text/javascript"></script>
    <script src="js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/holder-master/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script type="text/javascript" src="vendors/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="vendors/datatables/dataTables.bootstrap.js"></script>
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>

    <!-- date-range-picker -->
    <script src="vendors/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="vendors/select2/select2.js" type="text/javascript"></script>
    <script src="vendors/iCheck/icheck.js" type="text/javascript"></script>
    <script src="vendors/iCheck/demo/js/custom.min.js" type="text/javascript"></script>
    <script src="vendors/autogrow/js/jQuery-autogrow.js" type="text/javascript"></script>
    <script src="vendors/maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="vendors/card/jquery.card.js" type="text/javascript"></script>
    <script src="js/pages/formelements.js" type="text/javascript"></script>
    <script>
    $(document).ready(function() {

        $('#table').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table0').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table1').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table2').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });
        $('#table3').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table4').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table5').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table6').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });
        $('#table7').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table8').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table9').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table10').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });
        $('#table12').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table13').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table14').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table15').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });
        $('#table16').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table17').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table18').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });$('#table19').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                },
"iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });
        
        $("body").on("click",".tab-pane.active table thead tr th input",function(){
           
            var table_id = $(".tab-pane.active table").attr("id");
            var oTable = $('#'+table_id).dataTable();
            var allPages = oTable.fnGetNodes();

            if( $(this).is(':checked') ) {
                $('input[type="checkbox"]', allPages).prop('checked', true);                
            }
            else{
                $('input[type="checkbox"]', allPages).prop('checked', false);
            }
        });

        $(".csv_downloader").click(function(){
            var table_id = $(".tab-pane.active table").attr("id");
            var table_company = $(".tab-pane.active table").attr("company");

            var oTable = $('#'+table_id).dataTable();
            var allPages = oTable.fnGetNodes();
            var delivery_list = new Array();
            
            if(table_company == '佐川急便'){
                var csv = [
                        ["ステータス","日 付 ",'伝票no',
                        '受注no',
                        '合計金額',
                        '合計金額（単位)',
                        'shitei_bi_a',                             
                        'shitei_bi_b',
                        'shitei_bi_c',
                        '時間指定',
                        '便種',
                        'シール１（佐川専用）',
                        'シール2（佐川専用）',
                        'シール3（佐川専用）',
                        '営業所止め',
                        '営業所名',
                        '送り状区分（ヤマト専用）',
                        '温度区分（ヤマト専用）',
                        '受注名',
                        '受注郵便番号',
                        '受注者住所',
                        '受注者電話番号',
                        '発送先名',
                        '発送先郵便番号',
                        '発送先住所',
                        '発送先電話番号',
                        'option1',
                        'option2',
                        'option3',
                        'option4',
                        'option5',
                        'option6',
                        '企業名',
                        '企業郵便番号',
                        '企業住所',
                        '企業電話番号',
                        '取扱商品',
                        '郵便種別',
                        '元・着払い種別',
                        '代引き種別',
                        '発送備考欄',
                        ' 品名1 ',
                        ' 品名2 ',
                        '品名3',
                        '品名4',
                        '品名5']
                        ];
            }else{
                var csv = [
                        ["ステータス","日 付 ","お客様管理番号",
                        "送り状種別",
                        "クール区分",
                        "伝票番号",
                        "出荷予定日",
                        "お届け予定（指定）日",
                        "配達時間帯",
                        "お届け先コード",
                        "お届け先電話番号",
                        "お届け先電話番号枝番",
                        "お届け先郵便番号",
                        "お届け先住所",
                        "お届け先住所（アパートマンション名)",
                        "お届け先 会社・部門名１",
                        "お届け先 会社・部門名２",
                        "お届け先名",
                        "お届け先名略称カナ",
                        "敬称",
                        "ご依頼主コード",
                        "ご依頼主電話番号",
                        "ご依頼主電話番号枝番",
                        "ご依頼主郵便番号",
                        "ご依頼主住所",
                        "ご依頼主住所（アパートマンション名）",
                        "ご依頼主名",
                        "ご依頼主略称カナ",
                        "品名コード１",
                        "品名１",
                        "品名コード２",
                        "品名２",
                        "荷扱い１",
                        "荷扱い２",
                        "記事",
                        "コレクト代金引換額（税込）",
                        "コレクト内消費税額等",
                        "営業所止置き",
                        "営業所コード",
                        "発行枚数",
                        "個数口枠の印字",
                        "ご請求先顧客コード",
                        "ご請求先分類コード",
                        "運賃管理番号",
                        "注文時カード払いデータ登録",
                        "注文時カード払い加盟店番号",
                        "注文時カード払い申込受付番号１",
                        "注文時カード払い申込受付番号２",
                        "注文時カード払い申込受付番号３",
                        "お届け予定ｅメール利用区分",
                        "お届け予定ｅメールe-mailアドレス",
                        "入力機種",
                        "お届け予定eメールメッセージ",
                        "お届け完了eメール利用区分",
                        "お届け完了eメールe-mailアドレス",
                        "お届け完了eメールメッセージ",
                        "クロネコ収納代行利用区分",
                        "収納代行決済ＱＲコード印刷",
                        "収納代行請求金額(税込)",
                        "収納代行内消費税額等",
                        "収納代行請求先郵便番号",
                        "収納代行請求先住所",
                        "収納代行請求先住所（アパートマンション名）",
                        "収納代行請求先会社・部門名１",
                        "収納代行請求先会社・部門名２",
                        "収納代行請求先名(漢字)",
                        "収納代行請求先名(カナ)",
                        "収納代行問合せ先名(漢字)",
                        "収納代行問合せ先郵便番号",
                        "収納代行問合せ先住所",
                        "収納代行問合せ先住所（アパートマンション名）",
                        "収納代行問合せ先電話番号",
                        "収納代行管理番号",
                        "収納代行品名",
                        "収納代行備考"]
                        ];
            }

            var separator = ',';

            $('input[type="checkbox"]', allPages).each(function(){
                if($(this).is(':checked')){
                    var delivery_status = $(this).parent('td').next('td').text();
                    var customer_id = $(this).parent('td').next('td').next('td').text();

                    // if(delivery_status == "配送可能"){
                    //     delivery_list.push({'customer_id':customer_id,'delivery_status':'配送準備中'});
                    //     $(this).parent('td').next('td').text('配送準備中');
                    // }

                    var row = [];
                    $(this).parents('tr').find('td').each(function(index){

                        if(index > 0 ){
                            var data = $(this).text();
                            data = data.replace(/(\r\n|\n|\r)/gm, '').replace(/(\s\s)/gm, ' ');
                            data = data.replace(/"/g, '""');
                            row.push('"' + data + '"');
                        }
                    });
                    csv.push(row.join(separator));
                }
            });
            if(csv.length == 1) {alert("ダウンロードする注文をチェックしてください。"); return;}
            
            // $.post("/setOrders",{delivery_list:delivery_list},function(res){
                // if(res == 1 || (res != '1' && confirm("There is no data to delivery. Would you download CSV of orders?"))){
                    var csv_string = csv.join('\n');
                    var filename = 'export_' + table_id + '_' + new Date().toLocaleDateString() + '.csv';
                    var link = document.createElement('a');
                    link.style.display = 'none';
                    link.setAttribute('target', '_blank');
                    link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv_string));
                    link.setAttribute('download', filename);
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);   
                // }
            // });
        });

        // Quick and simple export target #table_id into a csv
        function download_table_as_csv(table_id, separator = ',') {
            // Select rows from table_id
            var rows = document.querySelectorAll('table#' + table_id + ' tr');
            // Construct csv
            var csv = [];
            for (var i = 0; i < rows.length; i++) {
                var row = [], cols = rows[i].querySelectorAll('td, th');
                for (var j = 1; j < cols.length; j++) {
                    // Clean innertext to remove multiple spaces and jumpline (break csv)
                    var data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, '').replace(/(\s\s)/gm, ' ')
                    // Escape double-quote with double-double-quote (see https://stackoverflow.com/questions/17808511/properly-escape-a-double-quote-in-csv)
                    data = data.replace(/"/g, '""');
                    // Push escaped string
                    row.push(data);
                }
                csv.push(row.join(separator));
            }
            var csv_string = csv.join('\n');
            // Download it
            var filename = 'export_' + table_id + '_' + new Date().toLocaleDateString() + '.csv';
            var link = document.createElement('a');
            link.style.display = 'none';
            link.setAttribute('target', '_blank');
            link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv_string));
            link.setAttribute('download', filename);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        $(".orderStatus").change(function(){
            var state = $(this).val();
            var table_id = $(".tab-pane.active table").attr("id");
            var oTable = $('#'+table_id).dataTable();
            oTable.fnFilter(state);
        });

        $(".select2").select2("val",{{{$month}}});
        $(".select1").select2("val",{{{$year}}});

        $(".orderStatis").change(function(){
            var statis = $(this).val();
            $("form").submit();
        });
        
    });
    </script>
    <!-- end of page level js -->
</body>
</html>
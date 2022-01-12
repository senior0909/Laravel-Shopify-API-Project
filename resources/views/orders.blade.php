<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>注文 【トドクヨ】</title> 
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
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
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" />
    <link href="css/pages/tables.css" rel="stylesheet" type="text/css" />
    <link href="vendors/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendors/Buttons-master/css/buttons.css" />
    <link rel="stylesheet" href="css/pages/advbuttons.css" />
    <!-- end of page level css -->
</head>

<body class="skin-josh">
    <header class="header">
        <a href="#" class="logo">
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
                        
                        <li>
                            <a href="/users">
                                <i class="livicon" data-name="users" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">管理者</span>
                            </a>
                        </li>

                        <li>
                            <a href="/statis">
                                <i class="livicon" data-name="calendar" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">生産統計</span>
                            </a>
                        </li>

                        <li class="active">
                            <a href="#">
                                <i class="livicon" data-name="table" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">注文</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li id="active" class="active">
                                    <a href="/orders">
                                        <i class="fa fa-angle-double-right"></i>
                                        注文一覧
                                    </a>
                                </li>
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
                <h1>【注文管理】確認用</h1>
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
                <form class="form-horizontal" action="/getOrders" method="get" enctype="multipart/form-data">
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

                            <label class="col-md-1 control-label" for="name">日付範囲:</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="date-range" class="form-control pull-right" id="reservation" />
                                </div>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-responsive btn-primary btn-sm"> 注 文 </button>
                            </div>
                        </div>
                    </fieldset>
                </form>               
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

                            <table class="table table-bordered " id="table">
                                <thead>
                                    <tr class="filters">
                                        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ステータス &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>pre_state</th>
                                        <th style="width:10%">日付 </th>
                                        <th>Vendor</th>
                                        <th>お客様管理番号</th>
                                        <th>送り状種別</th>
                                        <th>クール区分</th>
                                        <th>伝票番号</th>
                                        <th>出荷予定日</th>
                                        <th>お届け予定（指定）日</th>
                                        <th>配達時間帯</th>
                                                <!-- 置換前→置換後
                                                delivery_time: 指定なし→空白
                                                delivery_time: 午前中→08-12
                                                delivery_time: 12時-14時→12-14
                                                delivery_time: 14時-16時→14-16
                                                delivery_time: 16時-18時→16-18
                                                delivery_time: 18時-20時→18-20
                                                delivery_time: 19時-21時→19-21 -->
                                        
                                        <th>お届け先コード</th>
                                        <th>お届け先電話番号</th>
                                        <th>お届け先電話番号枝番</th>
                                        <th>お届け先郵便番号</th>
                                        <th>お届け先住所</th>
                                        <th>お届け先住所（アパートマンション名) </th>
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
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    if($orders != NULL)
                                    foreach($orders as $val){
                                        
                                        echo "<tr>";
                                        foreach($val as $key=>$value){
                                            echo "<td>".$value."</td>";
                                        }

                                        echo '</tr>';
                                    }
                                ?>                               
                                    

                                </tbody>
                            </table>
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
    <!-- InputMask -->
    <script src="vendors/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="vendors/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="vendors/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
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
            "aaSorting": [
                [2, 'desc']
            ],
            "iDisplayLength": 8,
            "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, -1], [10, 25, 50, 100, 500, 1000, 2000, "All"]]
        });

        $(".orderStatus").change(function(){
            var state = $(this).val();
            var oTable = $('#table').dataTable();
            oTable.fnFilter(state,1);
        });
       
        
    });


    function setStatus(ele){

        if(confirm("ステータスを変更しますか？")){
           var order_name = $(ele).parents('tr').find('td').eq(4).text();
           var order_status = $(ele).val();

           var delivery_list = new Array();
           delivery_list.push({'customer_id':order_name,'delivery_status':order_status});
           $.post("/setOrders",{"_token": "{{ csrf_token() }}",delivery_list:delivery_list},function(res){
               if(res != 1){
                   alert("Failed to update state");
               }else{
                $(ele).parents('tr').find('td').eq(1).text(order_status);
               }
           });
        }else{
            var last = $(ele).parents('tr').find('td').eq(1).text();
            $(ele).val(last);
        }

    }


    </script>
    <!-- end of page level js -->
</body>
</html>
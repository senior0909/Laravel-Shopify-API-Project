<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>管理者 【トドクヨ】</title> 
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
    <link href="css/pages/toastr.css" rel="stylesheet" />
    <link href="vendors/toastr/toastr.css" rel="stylesheet" type="text/css" />
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
                        
                        <li class="active">
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
                        
                        <li>
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
                <h1>管理者</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                            管理者
                        </a>
                    </li>
                    <li>加入者リスト</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content paddingleft_right15">
                               
                <div class="row">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="table" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                加入者リスト
                            </h4>
                        </div>
                        <br />
                        <div class="panel-body">
                            
                            <table class="table table-bordered " id="table">
                                <thead>
                                    <tr class="filters">
                                        <th>#</th>
                                        <th>名前(ID)</th>
                                        <th>Email</th>
                                        <th>会社</th>
                                        <th>位置</th>
                                        <th>追跡URL</th>
                                        <th>運送会社</th>
                                        <th>役割</th>
                                        <th>ステータス</th>
                                        <th> 設定日 </th>
                                        <th>修正</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    if($users != NULL){
                                        $cnt = 1;
                                        foreach($users as $user){
                                            
                                            echo "<tr><td>".($cnt++)."</td>";
                                            echo "<td><p style='width:100px;'>".$user->name."</p></td>";
                                            echo "<td><input class='form-control' style='width:200px;' value='".$user->email."'></td>";
                                            echo "<td><p style='width:100px;'>".$user->company."</p></td>";
                                            ////////////////////////////////////////////////////////
                                            echo "<td><select class='form-control' style='width:200px;'>";
                                            $address = $user->address;

                                            if ($address == '')
                                                echo "<option value='10000' selected></option>";
                                            else
                                                echo "<option value='10000' ></option>";

                                            if ($address == '全国送料無料')
                                                echo "<option value='1' selected>全国送料無料</option>";
                                            else
                                                echo "<option value='1' >全国送料無料</option>";
                                            
                                            if ($address == '北海道/沖縄送料')
                                                echo "<option value='2' selected>北海道/沖縄送料</option>";
                                            else
                                                echo "<option value='2' >北海道/沖縄送料</option>";
                                            
                                            if ($address == '北海道・東北・沖縄不可')
                                                echo "<option value='3' selected>北海道・東北・沖縄不可</option>";
                                            else
                                                echo "<option value='3' >北海道・東北・沖縄不可</option>";
                                            
                                            if ($address == '北海道送料')
                                                echo "<option value='4' selected>北海道送料</option>";
                                            else
                                                echo "<option value='4' >北海道送料</option>";
                                            
                                            if ($address == '沖縄送料')
                                                echo "<option value='5' selected>沖縄送料</option>";
                                            else
                                                echo "<option value='5' >沖縄送料</option>";

                                            echo "</select></td>";
                                            /////////////////////////////////////////////////////////////
                                            echo "<td>".$user->tracking_url."</td>";
                                            echo "<td><p style='width:100px;'>".$user->tracking_company."</p></td>";
                                            echo "<td><select class='form-control' style='width:100px;'>";
                                            $role = $user->role;
                                            if ($role == 0)
                                                echo "<option value='0' selected>user</option>";
                                            else
                                                echo "<option value='0' >user</option>";
                                            
                                            if ($role == 1)
                                                echo "<option value='1' selected>admin</option>";
                                            else
                                                echo "<option value='1' >admin</option>";
                                            
                                            if ($role == 2)
                                                echo "<option value='2' selected>producer</option>";
                                            else
                                                echo "<option value='2' >producer</option>";
                                            
                                            echo "</select></td>";

                                            ///////////////////////////////////////////////


                                            echo "<td><select class='form-control' style='width:150px;'>";
                                            $state = $user->state;
                                            
                                            if ($state == 0)
                                                echo "<option value='0' selected>pending</option>";
                                            else
                                                echo "<option value='0' >pending</option>";
                                            
                                            if ($state == 1)
                                                echo "<option value='1' selected>approved</option>";
                                            else
                                                echo "<option value='1' >approved</option>";
                                            
                                            if ($state == 2)
                                                echo "<option value='2' selected>unapproved</option>";
                                            else
                                                echo "<option value='2' >unapproved</option>";
                                            
                                            echo "</select></td>";

                                            echo "<td><p style='width:100px;'>".$user->date."</p></td>";

                                            echo '<td>
                                                        <a href="#" onclick="dialog(this)" user_id="'.$user->id.'">
                                                            <i class="livicon" data-name="user-flag" data-size="30" data-loop="true" data-c="#f56954" data-hc="#f56954" title="set user"></i>
                                                        </a>
                                                    </td>
                                                </tr>';
                                        }
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
                                                Set User
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure to set this user?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <a href="#" type="button" class="btn btn-danger save">Save</a>
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
    <script src="vendors/toastr/toastr.min.js"></script>
    <script src="vendors/toastr/ui-toastr.js"></script>
    <script>
    var id,email,address_id,role,state;

    $(document).ready(function() {

        toastr.options = {
        "closeButton": true,
        "debug": false,
        "positionClass": "toast-top-right",
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }

        $('#table').dataTable({
            "oLanguage": {            
                    "sEmptyTable": "テーブルにデータがありません",
                    "sLengthMenu": "_MENU_ 件",
                    "sSearch": "注文データ検索: _INPUT_",
                    "sInfo":"_TOTAL_件中_START_件～_END_件のデータ",
                    "sInfoEmpty":"0件中0件～0件のデータ",
                    "sInfoFiltered": "_MAX_件からのフィルタリング"
                }
        });

        $(".modal .save").click(function(){
            $.post('/updateUser',{ "_token": "{{ csrf_token() }}",id:id,email:email,address_id:address_id,role:role,state:state},function(res){

                $("#delete_confirm").modal('hide');
                
                if(res == 1){
                    toastr['success']("Success to update user information", "Updating Notifications");
                }else{
                    toastr['error']("There is no changed information", "Updating Notifications");
                }
            })
        });
        
    });

    function dialog(ele){

        $("#delete_confirm").modal();
        id = $(ele).attr("user_id");
        email = $(ele).parents('tr').find('td').eq(2).find('input').val();
        address_id = $(ele).parents('tr').find('td').eq(4).find('select').val();
        role = $(ele).parents('tr').find('td').eq(7).find('select').val();
        state = $(ele).parents('tr').find('td').eq(8).find('select').val();      

        // console.log(id+","+email+","+address+","+role+","+state);
        
    }
    </script>
    <!-- end of page level js -->
</body>
</html>
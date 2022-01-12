<?php
$page = 'tasks';
$title = 'Tasks';
$css = <<<EOT
<!--page level css -->
<link rel="stylesheet" href="../css/pages/todolist.css" />
<!-- end of page level css -->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>Tasks</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="18" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li class="active">Tasks</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <div class="row">
            <!-- To do list -->
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="todolist">
                    <header>
                        <h3 class="panel-title"> <i class="livicon" data-name="medal" data-size="18" data-color="white" data-hc="white" data-l="true"></i>
                            To Do List
                        </h3>
                    </header>
                    <form class="row list_of_items">
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-12 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">
                                    Meeting with CEO
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-8  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-12 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">Team Out</div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-8  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-12 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">
                                    Review On Sales
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-8  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-12 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">
                                    Analysis on Views
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-8  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-12 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">
                                    Seminar on Market
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-8  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-12 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">
                                    Meeting with CEO
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-8  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-12 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">
                                    Prepare Documentation
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-8  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-12 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">
                                    Purchase Equipment
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-8  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-12 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">
                                    Finish Pending Tasks
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-8  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                        <div class="todolist_list showactions">
                            <div class="col-md-8 col-sm-8 col-xs-12 nopadmar custom_textbox1">
                                <div class="todoitemcheck">
                                    <input type="checkbox" class="striked" />
                                </div>
                                <div class="todotext todoitem">
                                    Leads Takeover
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-4 col-xs-8  pull-right showbtns todoitembtns">
                                <a href="#" class="todoedit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                |
                                <a href="#" class="tododelete redcolor">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="todolist_list adds">
                        <form role="form" id="main_input_box">
                            <div class="col-md-6 col-xs-6">
                                <input id="custom_textbox" name="Item" type="text" required placeholder="Add list item here" class="form-control" />
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <input type="submit" value="Add Task" class="btn btn-primary add_button" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
</aside>
<!-- right-side -->

<?php
require_once('footer.php');
?>
<!-- begining of page level js -->
<script type="text/javascript" src="../js/todolist.js"></script>
<!-- end of page level js -->
</body>
</html>
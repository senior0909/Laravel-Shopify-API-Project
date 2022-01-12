<?php
$page = 'grid';
$title = 'Grid layout';
$css = <<<EOT
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
            Grid layout
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">
                    UI Features
                </a>
            </li>
            <li class="active">
                Grid layout
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <i class="livicon" data-name="star-half" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Bootstrap grid Examples
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body" id="slim1">
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    we created some grid samples now you can examine in your browser. This first grid is using all 4 grid sizes combined in a single row. second grid indicates xs Grid,Third grid indicates sd Grid,fourth grid indicates md,fifth grid indicates lg.
                                </p>
                                <div class="panel-heading">
                                    <p class="visible-lg">
                                        lg indicates that the large grid displaying. The grid stacks horizontally &lt; 1200px.
                                    </p>
                                    <p class="visible-md">
                                        md indicates that the medium grid displaying. The grid stacks horizontally &lt; 992px.
                                    </p>
                                    <p class="visible-sm">
                                        sm indicates that the small grid displaying. The grid stacks horizontally &lt; 768px.
                                    </p>
                                    <p class="visible-xs">
                                        xs indicates that the extra small grid displaying. This grid is always horizontal.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-1 col-sm-3 col-xs-4 text-center" style="padding: 1em 0;
                                            background-color: #D9EDF7;
                                            border: 1px solid #A0DEF2;border-radius: 1px;">
                                    <span class="visible-lg">.col-lg-4</span>
                                    <span class="visible-md">.col-md-1</span>
                                    <span class="visible-sm">.col-sm-3</span>
                                    <span class="visible-xs">.col-xs-4</span>
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-3 col-xs-4 text-center" style="padding: 1em 0;
                                    background-color: #DFF0D8;
                                    border: 1px solid #A3E69E;border-radius: 1px;">
                                    <span class="visible-lg">.col-lg-4</span>
                                    <span class="visible-md">.col-md-5</span>
                                    <span class="visible-sm">.col-sm-3</span>
                                    <span class="visible-xs">.col-xs-4</span>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-4 text-center" style="padding: 1em 0;
                                        background-color: #F5DFF7;
                                        border: 1px solid #F0C9F5;border-radius: 1px;">
                                    <span class="visible-lg">.col-lg-4</span>
                                    <span class="visible-md">.col-md-6</span>
                                    <span class="visible-sm">.col-sm-6</span>
                                    <span class="visible-xs">.col-xs-4</span>
                                </div>
                                <div class="row" style="margin-top:50px;">
                                    <h3>xs Grid</h3>
                                    <div class="col-xs-5 text-center" style="padding: 1em 0;
                                                            background-color: #D9EDF7;
                                                            border: 1px solid #A0DEF2;border-radius: 1px;">
                                        <p>.col-xs-5</p>
                                    </div>
                                    <div class="col-xs-4 text-center" style="padding: 1em 0;
                                                    background-color: #DFF0D8;
                                                    border: 1px solid #A3E69E;border-radius: 1px;">
                                        <p>.col-xs-4</p>
                                    </div>
                                    <div class="col-xs-3 text-center" style="padding: 1em 0;
                                                        background-color: #F5DFF7;
                                                        border: 1px solid #F0C9F5;border-radius: 1px;">
                                        <p>.col-xs-3</p>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row" style="margin-top:20px;">
                                    <h3>sm Grid</h3>
                                    <div class="col-sm-2 text-center" style="padding: 1em 0;
                                                        background-color: #D9EDF7;
                                                        border: 1px solid #A0DEF2;border-radius: 1px;">
                                        <p>.col-sm-2</p>
                                    </div>
                                    <div class="col-sm-4 text-center" style="padding: 1em 0;
                                                background-color: #DFF0D8;
                                                border: 1px solid #A3E69E;border-radius: 1px;">
                                        <p>.col-sm-4</p>
                                    </div>
                                    <div class="col-sm-6 text-center" style="padding: 1em 0;
                                                    background-color: #F5DFF7;
                                                    border: 1px solid #F0C9F5;border-radius: 1px;">
                                        <p>.col-sm-6</p>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row" style="margin-top:20px;">
                                    <h3>md Grid</h3>
                                    <div class="col-md-1 text-center" style="padding: 1em 0;
                                                          background-color: #D9EDF7;
                                                          border: 1px solid #A0DEF2;border-radius: 1px;">
                                        <p>.col-md-1</p>
                                    </div>
                                    <div class="col-md-5 text-center" style="padding: 1em 0;
                                                  background-color: #DFF0D8;
                                                  border: 1px solid #A3E69E;border-radius: 1px;">
                                        <p>.col-md-5</p>
                                    </div>
                                    <div class="col-md-6 text-center" style="padding: 1em 0;
                                                      background-color: #F5DFF7;
                                                      border: 1px solid #F0C9F5;border-radius: 1px;">
                                        <p>.col-md-6</p>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row" style="margin-top:20px;">
                                    <h3>lg Grid</h3>
                                    <div class="col-lg-4 text-center" style="padding: 1em 0;
                                                  background-color: #D9EDF7;
                                                  border: 1px solid #A0DEF2;border-radius: 1px;">
                                        <p>.col-lg-4</p>
                                    </div>
                                    <div class="col-lg-4 text-center" style="padding: 1em 0;
                                          background-color: #DFF0D8;
                                          border: 1px solid #A3E69E;border-radius: 1px;">
                                        <p>.col-lg-4</p>
                                    </div>
                                    <div class="col-lg-4 text-center" style="padding: 1em 0;
                                                background-color: #F5DFF7;
                                                border: 1px solid #F0C9F5;border-radius: 1px;">
                                        <p>.col-lg-4</p>
                                    </div>
                                </div>
                                <!-- end row --> </div>
                            <!-- end row --> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="screenshot" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Bootstrap grid
                            </h3>
                            <span class="pull-right clickable">
                                <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                        </div>
                        <div class="panel-body" id="slim2">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-12</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-6</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-6</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4  text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-4</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4  text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-4</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4  text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-4</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3  text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-3</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3  text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-3</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3  text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-3</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3  text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-3</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-2 col-md-2 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-2</div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-2</div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-2</div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-2</div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-2</div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2  text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-2</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-1">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-1</div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-1</div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-1</div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-1</div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-1</div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-1</div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-1</div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-1</div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-1</div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-1</div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-1</div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-1</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-8 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-8</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-4</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-3 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-3</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-6</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-3</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-12</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-6 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-6</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-2</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-1 text-center">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">.col-lg-1</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--main content ends--> </section>
    <!-- content -->
</aside>
<!-- right-side -->

<?php
require_once('footer.php');
?>
<!-- begining of page level js -->
<script type="text/javascript">
    $('#slim1').slimscroll({
        height: '500px',
        size: '3px',
        color: '#418BCA',
        opacity: 1

    });

    $('#slim2').slimscroll({
        height: '500px',
        size: '3px',
        color: '#00bc8c',
        opacity: 1
    });
    </script>
<!-- end of page level js -->
</body>
</html>
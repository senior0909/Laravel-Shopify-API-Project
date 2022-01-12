<?php
$page = 'general';
$title = 'General Components';
$css = <<<EOT
<!--page level css -->
<link rel="stylesheet" type="text/css" href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.1.0.css" />
<link href="../css/pages/alertmessage.css" rel="stylesheet" />
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
            General Components
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-c="#000" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">
                    UI Features
                </a>
            </li>
            <li class="active">
                General Components
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Welcome to General Components page
                </div>
            </div>
        </div>
        <!--main content-->
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <i class="livicon" data-name="help" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Basic Alerts
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-success">
                            <p>
                                Welldone! You successfully read this important alert message.
                            </p>
                        </div>
                        <div class="alert alert-info">
                            <p>
                                Heads up! This alert needs your attention, but it's not super important.
                            </p>
                        </div>
                        <div class="alert alert-warning">
                            <p>
                                Warning! Better check yourself, you're not looking too good.
                            </p>
                        </div>
                        <div class="alert alert-danger">
                            <p>
                                Oh snap! Change a few things up and try submitting again.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Dismissable alerts
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Welldone! You successfully read this important alert message.
                        </div>
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Heads up! This alert needs your attention, but it's not super important.
                        </div>
                        <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Warning! Better check yourself, you're not looking too good.
                        </div>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Oh snap! Change a few things up and try submitting again.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="sky-dish" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Links in alerts
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-success"> <strong>Welldone!</strong>
                            You successfully read
                            <a href="#" class="alert-link">
                                this important alert message.
                            </a>
                        </div>
                        <div class="alert alert-info"> <strong>Heads up!</strong>
                            This
                            <a href="#" class="alert-link">
                                alert needs your attention,
                            </a>
                            but it's not super important.
                        </div>
                        <div class="alert alert-warning">
                            <strong>Warning!</strong>
                            Better check yourself,
                            <a href="#" class="alert-link">
                                you're not looking too good.
                            </a>
                        </div>
                        <div class="alert alert-danger">
                            <strong>Oh snap!</strong>
                            <a href="#" class="alert-link">
                                Change a few things up
                            </a>
                            and try submitting again.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="notebook" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Notes
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="alert-message alert-message-success">
                            <h4>
                                Alert Message Success
                            </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                <strong>strong message</strong> 
                                .
                            </p>
                        </div>
                        <div class="alert-message alert-message-default">
                            <h4>
                                Alert Message Default
                            </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                <strong>strong message</strong> 
                                .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="spinner-two" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Themed Progressbars
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body c2">
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuetransitiongoal="20"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuetransitiongoal="40"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuetransitiongoal="60"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuetransitiongoal="80"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuetransitiongoal="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="spinner-three" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Striped progressbars
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body c2">
                        <div class="progress progress-striped">
                            <div class="progress-bar" role="progressbar" aria-valuetransitiongoal="20"></div>
                        </div>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuetransitiongoal="40"></div>
                        </div>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuetransitiongoal="60"></div>
                        </div>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuetransitiongoal="80"></div>
                        </div>
                        <div class="progress progress-striped">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuetransitiongoal="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="spinner-five" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Vertical Progress bar
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body c1">
                        <div class="progress vertical bottom">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuetransitiongoal="40"></div>
                        </div>
                        <div class="progress vertical bottom">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuetransitiongoal="60"></div>
                        </div>
                        <div class="progress vertical bottom">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuetransitiongoal="80"></div>
                        </div>
                        <div class="progress vertical bottom">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuetransitiongoal="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="gears" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Vertical Striped Progress bar
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body c1">
                        <div class="progress progress-striped vertical bottom">
                            <div class="progress-bar" role="progressbar" aria-valuetransitiongoal="20"></div>
                        </div>
                        <div class="progress progress-striped vertical bottom">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuetransitiongoal="40"></div>
                        </div>
                        <div class="progress progress-striped vertical bottom">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuetransitiongoal="60"></div>
                        </div>
                        <div class="progress progress-striped vertical bottom">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuetransitiongoal="80"></div>
                        </div>
                        <div class="progress progress-striped vertical bottom">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuetransitiongoal="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="spinner-one" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Animated progressbars
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body c2">
                        <div class="progress">
                            <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="20"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="40"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="60"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="80"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="spinner-six" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Inverse Vertical Progress Bar
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body c1">
                        <div class="progress vertical">
                            <div class="progress progress-striped vertical wide active">
                                <div class="progress-bar" role="progressbar" aria-valuetransitiongoal="20"></div>
                            </div>
                        </div>
                        <div class="progress vertical">
                            <div class="progress progress-striped vertical wide active">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuetransitiongoal="40"></div>
                            </div>
                        </div>
                        <div class="progress vertical">
                            <div class="progress progress-striped vertical wide active">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuetransitiongoal="60"></div>
                            </div>
                        </div>
                        <div class="progress vertical">
                            <div class="progress progress-striped vertical wide active">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuetransitiongoal="80"></div>
                            </div>
                        </div>
                        <div class="progress vertical">
                            <div class="progress progress-striped vertical wide active">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuetransitiongoal="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Typography heading
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="box-body text-center">
                            <h1>
                                h1. Bootstrap heading
                            </h1>
                            <h2>
                                h2. Bootstrap heading
                            </h2>
                            <h3>
                                h3. Bootstrap heading
                            </h3>
                            <h4>
                                h4. Bootstrap heading
                            </h4>
                            <h5>
                                h5. Bootstrap heading
                            </h5>
                            <h6>
                                h6. Bootstrap heading
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="tasks" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Horizontal Description
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="box-body">
                            <dl class="dl-horizontal">
                                <dt>
                                    Description lists
                                </dt>
                                <dd>
                                    A description list is perfect for defining terms.
                                </dd>
                                <dt>Question</dt>
                                <dd>
                                    Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                                </dd>
                                <dd>
                                    Donec id elit non mi porta gravida at eget metus.
                                </dd>
                                <dt>
                                    Progress bar
                                </dt>
                                <dd>
                                    Etiam porta sem malesuada magna mollis euismod.
                                </dd>
                                <dt>Answer</dt>
                                <dd>
                                    Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                </dd>
                            </dl>
                        </div>
                        <!-- /.box-body --> </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="align-left" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Unstyled List
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="box-body">
                            <ul class="list-unstyled">
                                <li>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li>
                                    Consectetur adipiscing elit
                                </li>
                                <li>
                                    Integer molestie lorem at massa
                                </li>
                                <li>
                                    Facilisis in pretium nisl aliquet
                                </li>
                                <li>
                                    Nulla volutpat aliquam velit
                                    <ul>
                                        <li>
                                            Phasellus iaculis neque
                                        </li>
                                        <li>
                                            Purus sodales ultricies
                                        </li>
                                        <li>
                                            Vestibulum laoreet porttitor sem
                                        </li>
                                        <li>
                                            Ac tristique libero volutpat at
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Faucibus porta lacus fringilla vel
                                </li>
                                <li>
                                    Aenean sit amet erat nunc
                                </li>
                                <li>
                                    Eget porttitor lorem
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="align-center" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Unordered List
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="box-body">
                            <ul>
                                <li>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li>
                                    Consectetur adipiscing elit
                                </li>
                                <li>
                                    Integer molestie lorem at massa
                                </li>
                                <li>
                                    Facilisis in pretium nisl aliquet
                                </li>
                                <li>
                                    Nulla volutpat aliquam velit
                                    <ul>
                                        <li>
                                            Phasellus iaculis neque
                                        </li>
                                        <li>
                                            Purus sodales ultricies
                                        </li>
                                        <li>
                                            Vestibulum laoreet porttitor sem
                                        </li>
                                        <li>
                                            Ac tristique libero volutpat at
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Faucibus porta lacus fringilla vel
                                </li>
                                <li>
                                    Aenean sit amet erat nunc
                                </li>
                                <li>
                                    Eget porttitor lorem
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="align-right" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Ordered Lists
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="box-body">
                            <ol>
                                <li>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li>
                                    Consectetur adipiscing elit
                                </li>
                                <li>
                                    Integer molestie lorem at massa
                                </li>
                                <li>
                                    Facilisis in pretium nisl aliquet
                                </li>
                                <li>
                                    Nulla volutpat aliquam velit
                                    <ol>
                                        <li>
                                            Phasellus iaculis neque
                                        </li>
                                        <li>
                                            Purus sodales ultricies
                                        </li>
                                        <li>
                                            Vestibulum laoreet porttitor sem
                                        </li>
                                        <li>
                                            Ac tristique libero volutpat at
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    Faucibus porta lacus fringilla vel
                                </li>
                                <li>
                                    Aenean sit amet erat nunc
                                </li>
                                <li>
                                    Eget porttitor lorem
                                </li>
                            </ol>
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
<script type='text/javascript' src="../vendors/bootstrap-progressbar/bootstrap-progressbar.js"></script>
<script type="text/javascript">
    $('.progress-bar').progressbar();
    $('.progress-bar').progressbar({
        display_text: 'center',
        use_percentage: false
    });
    </script>
<!-- end of page level js -->
</body>
</html>
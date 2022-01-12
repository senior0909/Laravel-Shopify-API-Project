<?php
$page = 'view_user';
$title = 'User Profile';
$css = <<<EOT
<!--page level css -->
<link href="../vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../vendors/x-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
<link href="../vendors/magnifier/css/imgmagnify.css" rel="stylesheet" />
<link rel="stylesheet" href="../vendors/iCheck/skins/all.css" />
<link href="../css/pages/user_profile.css" rel="stylesheet" type="text/css"/>
<!--end of page level css-->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <section class="content-header">
        <h1>
            User Profile
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Users</li>
            <li class="active">
                User Profile
            </li>
        </ol>
    </section>
    <section class="content">
        <div  class="row ">
            <div class="col-md-12">
                <div class="row ">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="text-center">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img data-src="holder.js/366x218/#fff:#000" class="img-responsive" width="366px" height="218px" />
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" ></div>
                                    <div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">
                                                Select image
                                            </span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="..."></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table  table-striped" id="users">

                                <tr>
                                    <td>User Name</td>
                                    <td>
                                        <a href="#" data-pk="1" class="editable" data-title="Edit User Name">Bella</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <a href="#" data-pk="1" class="editable" data-title="Edit E-mail">
                                            gankunding@hotmail.com
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Phone Number
                                    </td>
                                    <td>
                                        <a href="#" data-pk="1" class="editable" data-title="Edit Phone Number">
                                            (999) 999-9999
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>
                                        <a href="#" data-pk="1" class="editable" data-title="Edit Address">
                                            Sydney, Australia
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <a href="#" id="status" data-type="select" data-pk="1" data-value="1" data-title="Status"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Created At</td>
                                    <td>
                                        1 month ago
                                    </td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td>
                                        <a href="#" data-pk="1"  class="editable" data-title="Edit City">Nakia</a>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="row ">
                            <div class="panel colr-hed">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Friends</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" class="thumbnail img-responsive" src="../img/authors/avatar.jpg" alt=""></div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" src="../img/authors/avatar3.jpg" alt="" class="thumbnail img-responsive"></div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" src="../img/authors/avatar7.jpg" alt="" class="thumbnail img-responsive"></div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" src="../img/authors/avatar5.jpg" alt="" class="thumbnail img-responsive"></div>
                                    </div>

                                    <!--/span-->
                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" src="../img/authors/avatar4.jpg" alt="" class="thumbnail img-responsive"></div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" src="../img/authors/avatar3.jpg" alt="" class="thumbnail img-responsive"></div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" src="../img/authors/avatar2.jpg" alt="" class="thumbnail img-responsive"></div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" src="../img/authors/avatar.jpg" alt="" class="thumbnail img-responsive"></div>
                                    </div>

                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" src="../img/authors/avatar3.jpg" alt="" class="thumbnail img-responsive"></div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" src="../img/authors/avatar4.jpg" alt="" class="thumbnail img-responsive"></div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" src="../img/authors/avatar7.jpg" alt="" class="thumbnail img-responsive"></div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" src="../img/authors/avatar.jpg" alt="" class="thumbnail img-responsive"></div>
                                    </div>

                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" class="thumbnail img-responsive" src="../img/authors/avatar1.jpg" alt=""></div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" src="../img/authors/avatar2.jpg" alt="" class="thumbnail img-responsive"></div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" src="../img/authors/avatar3.jpg" alt="" class="thumbnail img-responsive"></div>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <div class="mag img-responsive">
                                            <br />
                                            <img data-toggle="magnify" src="../img/authors/avatar4.jpg" alt="" class="thumbnail img-responsive"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <ul class="nav nav-tabs ul-edit responsive">
                            <li class="active">
                                <a href="#tab-activity" data-toggle="tab"> <i class="livicon" data-name="comments" data-size="16" data-c="#01BC8C" data-hc="#01BC8C" data-loop="true"></i>
                                    Activity
                                </a>
                            </li>

                            <li>
                                <a href="#tab-messages" data-toggle="tab">
                                    <i class="livicon" data-name="mail" data-size="16" data-c="#01BC8C" data-hc="#01BC8C" data-loop="true"></i>
                                    Messages
                                </a>
                            </li>
                            <li>
                                <a href="#tab-change-pwd" data-toggle="tab">
                                    <i class="livicon" data-name="key" data-size="16" data-c="#01BC8C" data-hc="#01BC8C" data-loop="true"></i>
                                    Change Password
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-activity" class="tab-pane fade in active">
                                <div class="activity">
                                    <div class="imgs-profile">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="../img/authors/avatar.jpg" alt=""></a>
                                        <div class="media-body"> <strong>Abbey</strong>
                                            started following <strong>Adele</strong>
                                            .
                                            <br>
                                            <small class="text-muted">
                                                2 days ago  at 1:30pm
                                            </small>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- media -->

                                    <div class="imgs-profile">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="../img/authors/avatar1.jpg" alt=""></a>
                                        <div class="media-body">
                                            <strong>Clemens</strong>
                                            posted a new blog.
                                            <br>
                                            <small class="text-muted">
                                                Today at 1:18pm
                                            </small>

                                            <div class="media blog-media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" src="../img/authors/avatar2.jpg" alt=""></a>
                                                <div class="media-body col-md-8 col-lg-8 col-sm-8 col-xs-12">
                                                    <h4 class="media-title">
                                                        <a href="">
                                                            Lorem ipsum dolor
                                                        </a>
                                                    </h4>
                                                    <p >
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...
                                                        <a href="">Read more</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media --> </div>
                                        <!-- media-body --> </div>
                                    <!-- media -->

                                    <div class="imgs-profile">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="../img/authors/avatar3.jpg" alt=""></a>
                                        <div class="media-body">
                                            <strong>Lottie</strong>
                                            started following
                                            <strong>Winifred</strong>
                                            .
                                            <br>
                                            <small class="text-muted">
                                                6 days ago at 8:30am
                                            </small>
                                        </div>
                                    </div>
                                    <!-- media -->

                                    <div class="imgs-profile">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="../img/authors/avatar4.jpg" alt=""></a>
                                        <div class="media-body">
                                            <strong>Marlee</strong>
                                            uploaded
                                            <a href="">3 photos</a>
                                            .
                                            <br>
                                            <small class="text-muted">
                                                3 days ago at 12:30pm
                                            </small>

                                            <ul class="uploadphoto-list">
                                                <li>
                                                    <a href="img/authors/avatar1.jpg" data-rel="prettyPhoto">
                                                        <img src="../img/authors/avatar2.jpg" class="thumbnail img-responsive" alt=""></a>
                                                </li>
                                                <li>
                                                    <a href="img/authors/avatar4.jpg" data-rel="prettyPhoto">
                                                        <img src="../img/authors/avatar3.jpg" class="thumbnail img-responsive" alt=""></a>
                                                </li>
                                                <li>
                                                    <a href="img/authors/avatar5.jpg" data-rel="prettyPhoto">
                                                        <img src="../img/authors/avatar.jpg" class="thumbnail img-responsive" alt=""></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- media -->

                                    <div class="imgs-profile">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="../img/authors/avatar7.jpg" alt=""></a>
                                        <div class="media-body">
                                            <strong>Joseph</strong>
                                            started following
                                            <strong>Keegan</strong>
                                            .
                                            <br>
                                            <small class="text-muted">
                                                6 days ago at 8:15am
                                            </small>
                                        </div>
                                    </div>
                                    <!-- media -->

                                    <div class="imgs-profile">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="../img/authors/avatar2.jpg" alt=""></a>
                                        <div class="media-body">
                                            <strong>Lenny</strong>
                                            posted a new note.
                                            <br>
                                            <small class="text-muted">
                                                4 days ago at 11:00 am
                                            </small>
                                            <h4 class="media-title">
                                                <a href="">
                                                    Consectetur Adipisicing Elit
                                                </a>
                                            </h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...
                                                <a href="">Read more</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- media -->

                                    <div class="imgs-profile">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="../img/authors/avatar3.jpg" alt=""></a>
                                        <div class="media-body">
                                            <strong>Danielle</strong>
                                            posted a new Image.
                                            <br>
                                            <small class="text-muted">
                                                sep 2 at 1:08pm
                                            </small>

                                            <div class="media blog-media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" src="../img/authors/avatar4.jpg" alt=""></a>
                                                <div class="media-body col-md-8 col-lg-8 col-sm-8 col-xs-12">
                                                    <h4 class="media-title">
                                                        <a href="">
                                                            Ut Enim Ad Minim Veniam
                                                        </a>
                                                    </h4>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...
                                                        <a href="">Read more</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media --> </div>
                                    </div>
                                    <!-- media -->

                                    <div class="imgs-profile">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="../img/authors/avatar.jpg" alt=""></a>
                                        <div class="media-body">
                                            <strong>Frida</strong>
                                            added new photo.
                                            <br>
                                            <small class="text-muted">
                                                December 2 at 12:30pm
                                            </small>
                                            <div class="mb20"></div>
                                            <a href="img/authors/avatar1.jpg" data-rel="prettyPhoto" class="img-single">
                                                <img src="../img/authors/avatar.jpg" class="thumbnail img-responsive" alt=""></a>
                                        </div>
                                    </div>
                                    <!-- media -->

                                    <div class="imgs-profile">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="../img/authors/avatar2.jpg" alt=""></a>
                                        <div class="media-body">
                                            <strong>Jensen</strong>
                                            started following
                                            <strong>Gordon</strong>
                                            .
                                            <br>
                                            <small class="text-muted">
                                                Jan 15 at 3:30pm
                                            </small>
                                        </div>
                                    </div>
                                    <!-- media -->

                                    <div class="imgs-profile">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="../img/authors/avatar3.jpg" alt=""></a>
                                        <div class="media-body">
                                            <strong>Krista</strong>
                                            posted a new blog.
                                            <br>
                                            <small class="text-muted">
                                                Feb 15 at 3:18pm
                                            </small>

                                            <div class="media blog-media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" src="../img/authors/avatar4.jpg" alt=""></a>
                                                <div class="media-body col-md-8 col-lg-8 col-sm-8 col-xs-12">
                                                    <h4 class="media-title">
                                                        <a href="">
                                                            Ut Enim Ad Minim Veniam
                                                        </a>
                                                    </h4>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...
                                                        <a href="">Read more</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media --> </div>
                                    </div>
                                    <!-- media --> </div>
                            </div>
                            <div id="tab-change-pwd" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12 pd-top">
                                        <form action="#" class="form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="inputpassword" class="col-md-3 control-label">
                                                        Password
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                            <input type="password" placeholder="Password" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputnumber" class="col-md-3 control-label">
                                                        Confirm Password
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                            <input type="password" placeholder="Password" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-actions">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    &nbsp;
                                                    <button type="button" class="btn btn-danger">Cancel</button>
                                                    &nbsp;
                                                    <input type="reset" class="btn btn-default hidden-xs" value="Reset"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-messages" class="tab-pane fade in">
                                <table class="table table-striped table-advance table-hover web-mail" id="inbox-check">

                                    <tbody>
                                        <tr data-messageid="1" class="unread">
                                            <td style="width:4%;" class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td  class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td  class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">John</a>
                                            </td>
                                            <td  class="view-message ">
                                                <a href="view_mail.php">
                                                    Fwd: Make changes as needed
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php">
                                                    <i class="fa fa-paperclip"></i>
                                                </a>
                                            </td>
                                            <td  class="view-message text-right">
                                                <a href="view_mail.php">16:30 PM</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="2" class="unread">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Marin</a>
                                            </td>
                                            <td class="view-message">
                                                <a href="view_mail.php">
                                                    Ya comin' to our July webinar?
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php"></a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 15</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="3">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Jenny</a>
                                            </td>
                                            <td class="view-message">
                                                <a href="view_mail.php">
                                                    Mobile-First Type & Layout
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php"></a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 15</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="4">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Twiter</a>
                                            </td>
                                            <td class="view-message">
                                                <a href="view_mail.php">
                                                    This looks like borrows page
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php"></a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 14</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="5">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Grace</a>
                                            </td>
                                            <td class="view-message">
                                                <a href="view_mail.php">
                                                    Ya comin' to our July webinar?
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php"></a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 15</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="6">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Kimy</a>
                                            </td>
                                            <td class="view-message">
                                                <a href="view_mail.php">
                                                    Analysis on Views
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php">
                                                    <i class="fa fa-paperclip"></i>
                                                </a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 14</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="7">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Tony</a>
                                            </td>
                                            <td class="view-message">
                                                <a href="view_mail.php">
                                                    Ya comin' to our July webinar?
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php">
                                                    <i class="fa fa-paperclip"></i>
                                                </a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 15</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="8">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Sandy</a>
                                            </td>
                                            <td class="view-message view-message">
                                                <a href="view_mail.php">
                                                    Analysis on Views
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php"></a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 14</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="9">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Avin</a>
                                            </td>
                                            <td class="view-message view-message">
                                                <a href="view_mail.php">
                                                    Mobile-First Type & Layout
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php"></a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 15</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="10">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">MJ</a>
                                            </td>
                                            <td class="view-message view-message">
                                                <a href="view_mail.php">
                                                    Make changes as needed
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php"></a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 14</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="11">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Lofer</a>
                                            </td>
                                            <td class="view-message">
                                                <a href="view_mail.php">
                                                    Welcome back to here
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php"></a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 15</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="12">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="hidden-xs">
                                                <span class="view-message hidden-xs">
                                                    <a href="view_mail.php">
                                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Renny</a>
                                                </span>
                                            </td>
                                            <td class="view-message">
                                                <a href="view_mail.php">
                                                    Dolor sit amet, consectetuer adipiscing
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php">
                                                    <i class="fa fa-paperclip"></i>
                                                </a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 14</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="13">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Benny</a>
                                            </td>
                                            <td class="view-message">
                                                <a href="view_mail.php">
                                                    This looks like borrows page
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php">
                                                    <i class="fa fa-paperclip"></i>
                                                </a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 15</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="14">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="hidden-xs">
                                                <span class="view-message hidden-xs">
                                                    <a href="view_mail.php">
                                                        <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Grace</a>
                                                </span>
                                            </td>
                                            <td class="view-message view-message">
                                                <a href="view_mail.php">
                                                    Analysis on Views
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php"></a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 14</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="15">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Mike</a>
                                            </td>
                                            <td class="view-message">
                                                <a href="view_mail.php">
                                                    Ya comin' to our July webinar?
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php"></a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 15</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="16">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Clark</a>
                                            </td>
                                            <td class="view-message">
                                                <a href="view_mail.php">
                                                    Make changes as needed
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php"></a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 14</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="17">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">Robin</a>
                                            </td>
                                            <td class="view-message">
                                                <a href="view_mail.php">
                                                    Mobile-First Type & Layout
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php"></a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 15</a>
                                            </td>
                                        </tr>
                                        <tr data-messageid="18">
                                            <td class="inbox-small-cells">
                                                <div class="checker">
                                                    <span>
                                                        <input type="checkbox" class="mail-checkbox"></span>
                                                </div>
                                            </td>
                                            <td class="inbox-small-cells">
                                                <i class="livicon" data-n="star-full" data-s="15"></i>
                                            </td>
                                            <td class="view-message hidden-xs">
                                                <a href="view_mail.php">
                                                    <img data-src="holder.js/25x25/#000:#fff" class="img-circle img-responsive pull-left" alt="Image">FB</a>
                                            </td>
                                            <td class="view-message view-message">
                                                <a href="view_mail.php">
                                                    Ya comin' to our July webinar?
                                                </a>
                                            </td>
                                            <td class="view-message inbox-small-cells">
                                                <a href="view_mail.php">
                                                    <i class="fa fa-paperclip"></i>
                                                </a>
                                            </td>
                                            <td class="view-message text-right">
                                                <a href="view_mail.php">June 14</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</aside>
<!-- right-side -->
<?php
require_once('footer.php');
?>

<script  src="../vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
<script src="../vendors/x-editable/jquery.mockjax.js" type="text/javascript"></script>
<script src="../vendors/x-editable/bootstrap-editable.js" type="text/javascript"></script>
<script type="text/javascript" src="../vendors/magnifier/imgmagnify.js"></script>
<script src="../vendors/iCheck/icheck.js"></script>
<script src="../js/pages/user_profile.js" type="text/javascript"></script>
<!-- end of page level js -->
</body>
</html>
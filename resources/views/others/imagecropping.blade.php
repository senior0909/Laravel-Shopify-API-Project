<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Image Cropping | Josh Admin Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="css/metisMenu.css" rel="stylesheet" type="text/css"/>    
    <!-- end of global css -->    
    <!--page level css -->
	<link rel="stylesheet" href="vendors/imgcrop/css/main.css" type="text/css" />
    <link rel="stylesheet" href="vendors/imgcrop/css/demos.css" type="text/css" />
    <link rel="stylesheet" href="vendors/imgcrop/css/basic.css" type="text/css" />
    <link rel="stylesheet" href="vendors/imgcrop/css/jquery.Jcrop.css" type="text/css" />
    <link rel="stylesheet" href="css/pages/cropcustom.css" type="text/css" />
    <!-- styles for this page ends here-->
</head>

<body class="skin-josh">
    <header class="header">
        <a href="index.html" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="img/logo.png" alt="logo">
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="livicon" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages pull-right">
                            <li class="dropdown-title">4 New Messages</li>
                            <li class="unread message">
                                <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i> 
                                    <img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">
                                    <div class="message-body">
                                        <strong>Riot Zeast</strong>
                                        <br>Hello, You there?
                                        <br>
                                        <small>8 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i> 
                                    <img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">
                                    <div class="message-body">
                                        <strong>John Kerry</strong>
                                        <br>Can we Meet ?
                                        <br>
                                        <small>45 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                        <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                    </i>
                                    <img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br>Dont forgot to call...
                                        <br>
                                        <small>An hour ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                        <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                    </i>
                                    <img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">
                                    <div class="message-body">
                                        <strong>Ronny</strong>
                                        <br>Hey! sup Dude?
                                        <br>
                                        <small>3 Hours ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>
                            <span class="label label-warning">7</span>
                        </a>
                        <ul class=" notifications dropdown-menu">
                            <li class="dropdown-title">You have 7 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <i class="livicon danger" data-n="timer" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">after a long time</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Just Now
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="gift" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Jef's Birthday today</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Few seconds ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="dashboard" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">out of space</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            8 minutes ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon bg-aqua" data-n="hand-right" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">New friend request</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            An hour ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon danger" data-n="shopping-cart-in" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">On sale 2 products</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            3 Hours ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="image" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Lee Shared your photo</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Yesterday
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="thumbs-up" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">David liked your photo</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            2 July 2014
                                        </small>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img data-src="holder.js/35x35/#fff:#000" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                            <div class="riot">
                                <div>
                                    Riot
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img data-src="holder.js/90x90/#fff:#000" class="img-responsive img-circle" alt="User Image">
                                <p class="topprofiletext">Riot Zeast</p>
                            </li>
                            <!-- Menu Body -->
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="user" data-s="18"></i>
                                    My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="gears" data-s="18"></i>
                                    Account Settings
                                </a>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="lockscreen.html">
                                        <i class="livicon" data-name="lock" data-s="18"></i>
                                        Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="login.html">
                                        <i class="livicon" data-name="sign-out" data-s="18"></i>
                                        Logout
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
                                <a href="form_builder.html">
                                    <i class="livicon" data-name="hammer" title="Form Builder 1" data-loop="true" data-color="#42aaca" data-hc="#42aaca" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="form_builder2.html">
                                    <i class="livicon" data-name="list-ul" title="Form Builder 2" data-loop="true" data-color="#e9573f" data-hc="#e9573f" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="buttonbuilder.html">
                                    <i class="livicon" data-name="vector-square" title="Button Builder" data-loop="true" data-color="#f6bb42" data-hc="#f6bb42" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="gridmanager.html">
                                    <i class="livicon" data-name="new-window" title="Page Builder" data-loop="true" data-color="#37bc9b" data-hc="#37bc9b" data-s="25"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="page-sidebar-menu" id="menu">
                        <li>
                            <a href="index.html">
                                <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">Dashboard</span>
                            </a>

                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Builders</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="form_builder.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Builder
                                    </a>
                                </li>
                                <li>
                                    <a href="form_builder2.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Builder 2
                                    </a>
                                </li>
                                <li>
                                    <a href="buttonbuilder.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Button Builder
                                    </a>
                                </li>
                                <li>
                                    <a href="gridmanager.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Page Builder
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">Forms</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="form_examples.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Examples
                                    </a>
                                </li>
                                <li>
                                    <a href="editor.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Editors
                                    </a>
                                </li>
                                <li>
                                    <a href="validation.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Validation
                                    </a>
                                </li>
                                <li>
                                    <a href="formelements.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Elements
                                    </a>
                                </li>
                                <li>
                                    <a href="form_layouts.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href="formwizard.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Form Wizards
                                    </a>
                                </li>
                                <li>
                                    <a href="accordionformwizard.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Accordion Wizards
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="brush" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
                                <span class="title">UI Features</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="animatedicons.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Animated Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="buttons.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Buttons
                                    </a>
                                </li>
                                <li>
                                    <a href="advanced_buttons.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Advanced Buttons
                                    </a>
                                </li>
                                <li>
                                    <a href="tabs_accordions.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Tabs and Accordions
                                    </a>
                                </li>
                                <li>
                                    <a href="panels.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Panels
                                    </a>
                                </li>
                                <li>
                                    <a href="icon.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Font Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="color.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Color Picker Slider
                                    </a>
                                </li>
                                <li>
                                    <a href="grid.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Grid Layout
                                    </a>
                                </li>
                                <li>
                                    <a href="carousel.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Carousel
                                    </a>
                                </li>
                                <li>
                                    <a href="advanced_modals.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Advanced Modals
                                    </a>
                                </li>
                                <li>
                                    <a href="tagsinput.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Tags Input
                                    </a>
                                </li>
                                <li>
                                    <a href="nestable.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Nestable List
                                    </a>
                                </li>
                                <li>
                                    <a href="toastr.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Toastr Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="notifications.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="session_timeout.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Session Timeout
                                    </a>
                                </li>
                                <li>
                                    <a href="portlet_draggable.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Draggable Portlets
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="lab" data-c="#EF6F6C" data-hc="#EF6F6C" data-size="18" data-loop="true"></i>
                                <span class="title">UI Components</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="general.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        General Components
                                    </a>
                                </li>
                                <li>
                                    <a href="pickers.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Pickers
                                    </a>
                                </li>
                                <li>
                                    <a href="x-editable.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        X-editable
                                    </a>
                                </li>
                                <li>
                                    <a href="timeline.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Timeline
                                    </a>
                                </li>
                                <li>
                                    <a href="transitions.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Transitions
                                    </a>
                                </li>
                                <li>
                                    <a href="sliders.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Sliders
                                    </a>
                                </li>
                                <li>
                                    <a href="knob.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Circles Sliders
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="table" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
                                <span class="title">Tables</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="simple_table.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Simple tables
                                    </a>
                                </li>
                                <li>
                                    <a href="advanced_tables.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Advanced Data Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="editable_table.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Editable Datatables
                                    </a>
                                </li>
                                <li>
                                    <a href="responsive_tables.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Responsive Datatables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Charts</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="charts.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Flot Charts
                                    </a>
                                </li>
                                <li>
                                    <a href="piecharts.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Pie Charts
                                    </a>
                                </li>
                                <li>
                                    <a href="charts_animation.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Animated Charts
                                    </a>
                                </li>
                                <li>
                                    <a href="jscharts.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        JS Charts
                                    </a>
                                </li>
                                <li>
                                    <a href="sparklinecharts.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Sparkline Charts
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="calendar" data-size="18" data-loop="true"></i>
                                <span class="badge badge-danger">7</span>
                                Calendar
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="mail" data-size="18" data-c="#5bc0de" data-hc="#5bc0de" data-loop="true"></i>
                                <span class="title">Email</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="mail_box.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="compose.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Compose
                                    </a>
                                </li>
                                <li>
                                    <a href="view_mail.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Single Mail
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="tasks.html">
                                <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="list-ul" data-size="18" data-loop="true"></i>
                                <span class="badge badge-danger">10</span>
                                Tasks
                            </a>
                        </li>
                        <li class="active">
                            <a href="#">
                                <i class="livicon" data-name="image" data-c="#418BCA" data-hc="#418BCA" data-size="18" data-loop="true"></i>
                                <span class="title">Gallery</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="gallery.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="masonry_gallery.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Masonry Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="dropzone.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Dropzone
                                    </a>
                                </li>
                                <li id="active" class="active">
                                    <a href="imagecropping.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Image Cropping
                                    </a>
                                </li>
                                <li>
                                    <a href="multiple_upload.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Multiple File Upload
                                    </a>
                                </li>
                                <li>
                                    <a href="imgmagnifier.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Image Magnifier
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="users" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Users</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="users.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Users
                                    </a>
                                </li>
                                <li>
                                    <a href="adduser.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Add New User
                                    </a>
                                </li>
                                <li>
                                    <a href="view_user.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        View User
                                    </a>
                                </li>
                                <li>
                                    <a href="deleted_users.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Deleted Users
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="map" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">Maps</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="googlemaps.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Google Maps
                                    </a>
                                </li>
                                <li>
                                    <a href="vectormaps.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Vector Maps
                                    </a>
                                </li>
                                <li>
                                    <a href="advancedmaps.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Advanced Maps
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="comment" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
                                <span class="title">Blog</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="blog_list.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Blog List
                                    </a>
                                </li>
                                <li>
                                    <a href="blog_details.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Blog Details
                                    </a>
                                </li>
                                <li>
                                    <a href="add_newblog.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Add New Blog
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="move" data-c="#EF6F6C" data-hc="#EF6F6C" data-size="18" data-loop="true"></i>
                                <span class="title">News</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="news.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        News
                                    </a>
                                </li>
                                <li>
                                    <a href="news_item.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        News Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="flag" data-c="#418bca" data-hc="#418bca" data-size="18" data-loop="true"></i>
                                <span class="title">Pages</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="lockscreen.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Lockscreen
                                    </a>
                                </li>
                                <li>
                                    <a href="invoice.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Login
                                    </a>
                                </li>
                                <li>
                                    <a href="login2.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Login 2
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html#toregister">
                                        <i class="fa fa-angle-double-right"></i>
                                        Register
                                    </a>
                                </li>
                                <li>
                                    <a href="register2.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Register 2
                                    </a>
                                </li>
                                <li>
                                    <a href="404.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        404 Error
                                    </a>
                                </li>
                                <li>
                                    <a href="500.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        500 Error
                                    </a>
                                </li>
                                <li>
                                    <a href="blank.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Blank Page
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side">
            <section class="content-header">
                <h1>Image Cropping</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Gallery</a>
                    </li>
                    <li class="active">
                        <a href="#">Image Cropping</a>
                    </li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary tabtop">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <i class="livicon" data-name="crop" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Gallery
                                </h4>
                            </div>
                            <div class="panel-body" style="padding-top:5px !important;">
                                <div class="table-responsive">
                                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1" data-toggle="tab">Basic</a>
                                            </li>
                                            <li>
                                                <a href="#tab_2" data-toggle="tab">Image Handler</a>
                                            </li>
                                            <li>
                                                <a href="#tab_3" data-toggle="tab">Image Preview</a>
                                            </li>
                                            <li>
                                                <a href="#tab_4" data-toggle="tab">Animation</a>
                                            </li>
                                            <li>
                                                <a href="#tab_5" data-toggle="tab">API Interface</a>
                                            </li>
                                            <li>
                                                <a href="#tab_6" data-toggle="tab">Styling</a>
                                            </li>
                                            <li>
                                                <a href="#tab_7" data-toggle="tab">Text Copping</a>
                                            </li>
                                            <li>
                                                <a href="#tab_8" data-toggle="tab">PHP Cropping</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1" style="padding:10px;">
                                                <div class="col-md-8">
                                                    <h4>Hey Just Crop it.</h4>
                                                    <img src="img/cropping-image.jpg" class="img-responsive" id="target1" alt="[Jcrop Example]" />
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="description">
                                                        <p> <b>This example demonstrates the default behavior of Image Cropping.</b> 
                                                            <br />There is no event handlers have been attached, it only performs just cropping behavior.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.tab-pane 1 -->
                                            <div class="tab-pane" id="tab_2" style="padding:10px;">
                                                <div class="col-md-8">
                                                    <img src="img/cropping-image.jpg" class="img-responsive" id="target2" alt="[Jcrop Example]" />
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="description">Cropped Image Details</div>
                                                    <form id="coords" class="coords" onsubmit="return false;" action="">
                                                        <div class="inline-labels">
                                                            <label>
                                                                X1
                                                                <input type="text" size="4" id="x1" name="x1" />
                                                            </label>
                                                            <label>
                                                                Y1
                                                                <input type="text" size="4" id="y1" name="y1" />
                                                            </label>
                                                            <label>
                                                                X2
                                                                <input type="text" size="4" id="x2" name="x2" />
                                                            </label>
                                                            <label>
                                                                Y2
                                                                <input type="text" size="4" id="y2" name="y2" />
                                                            </label>
                                                            <label>
                                                                Weight
                                                                <input type="text" size="4" id="w" name="width" />
                                                            </label>
                                                            <label>
                                                                Height
                                                                <input type="text" size="4" id="h" name="Height" />
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="description">
                                                    <p> <b>This example demonstrates the default behavior of Image Cropping.</b> 
                                                        <br />There is no event handlers have been attached, it only performs just cropping behavior.
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- /.tab-pane 2 -->
                                            <div class="tab-pane" id="tab_3" style="padding:10px;">
                                                <img src="img/cropping-image.jpg" class="img-responsive" id="target3" alt="[Jcrop Example]" />
                                                <div id="preview-pane">
                                                    <div class="preview-container">
                                                        <img src="img/cropping-image.jpg" class="jcrop-preview" alt="Preview" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.tab-pane 3-->
                                            <div class="tab-pane" id="tab_4" style="padding:10px;">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <img src="img/cropping-image.jpg" class="img-responsive" id="target4" alt="[Jcrop Example]" />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="span3" id="interface" style="width:220px;">
                                                            <label class="checkbox">
                                                                <input type="checkbox" id="fadetog" />Enable fading (bgFade: true)
                                                            </label>
                                                            <label class="checkbox">
                                                                <input type="checkbox" id="shadetog" />Use experimental shader (shade: true)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.tab-pane 4-->
                                            <div class="tab-pane" id="tab_5" style="padding:10px;">
                                                <div class="col-md-7">
                                                    <img src="img/cropping-image2.png" width="500%" height="600%" class="img-responsive" id="target5" alt="[Jcrop Example]" />
                                                </div>
                                                <div class="col-md-5">
                                                    <div style="margin: .8em 0 .5em;">
                                                        <span class="requiresjcrop">
                                                            <button id="setSelect" class="btn btn-mini">setSelect</button>
                                                            <button id="animateTo" class="btn btn-mini">animateTo</button>
                                                            <button id="release" class="btn btn-mini">Release</button>
                                                            <button id="disable" class="btn btn-mini">Disable</button>
                                                        </span>
                                                        <button id="enable" class="btn btn-mini" style="display:none;">Re-Enable</button>
                                                        <button id="unhook" class="btn btn-mini">Destroy!</button>
                                                        <button id="rehook" class="btn btn-mini" style="display:none;">Attach Jcrop</button>
                                                    </div>
                                                    <fieldset class="optdual requiresjcrop">
                                                        <legend>Option Toggles</legend>
                                                        <div class="optlist">
                                                            <label>
                                                                <input type="checkbox" id="can_click" />Allow new selections
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" id="can_move" />Selection can be moved
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" id="can_size" />Resizable selection
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" id="ar_lock" />Aspect ratio
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" id="size_lock" />minSize/maxSize setting
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <!-- /.tab-pane 5-->
                                            <div class="tab-pane" id="tab_6" style="padding:10px;">
                                                <div class="col-md-8">
                                                    <img src="img/cropping-image.jpg" class="img-responsive" id="target6" alt="[Jcrop Example]" />
                                                </div>
                                                <div class="col-md-4">
                                                    <div style="margin-top:1em;">
                                                        <fieldset>
                                                            <legend>Manipulate classes</legend>
                                                            <div class="btn-group" id="buttonbar">
                                                                <button id="radio1" data-setclass="jcrop-light" class="btn active">jcrop-light</button>
                                                                <button id="radio2" data-setclass="jcrop-dark" class="btn">jcrop-dark</button>
                                                                <button id="radio3" data-setclass="jcrop-normal" class="btn">normal</button>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.tab-pane 6-->
                                            <div class="tab-pane" id="tab_7" style="padding:10px; line-height:35px;">
                                                <p id="target7">
                                                    <b style="display:block; padding: .5em 1em;">
                                                        This is an example to crop a non-image item. You are now cropping just a paragraph tag.
                                                Crop this paragraph just like cropping a normal image.
                                                    </b>
                                                </p>
                                            </div>
                                            <!-- /.tab-pane 7-->
                                            <div class="tab-pane" id="tab_8" style="padding:10px;">
                                                <div class="col-md-8">
                                                    <img src="img/cropping-image.jpg" class="img-responsive" id="cropbox" />
                                                </div>
                                                <div class="col-md-4">
                                                    <form action="crop-demo.php" method="post" onsubmit="return checkCoords();">
                                                        <input type="hidden" id="x" name="x" />
                                                        <input type="hidden" id="y" name="y" />
                                                        <input type="hidden" id="we" name="w" />
                                                        <input type="hidden" id="he" name="h" />
                                                        <input type="submit" value="Crop Image" class="btn btn-large btn-inverse" />
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- /.tab-pane 8-->
                                        </div>
                                        <!-- /.tab-content -->
                                    </div>
                                    <!-- nav-tabs-custom -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row-->
            </section>
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
    <script src="js/metisMenu.js" type="text/javascript"> </script>
    <script src="vendors/holder-master/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="vendors/imgcrop/jquery.Jcrop.min.js"></script>
    <script src="vendors/imgcrop/jquery.color.js"></script>
    <script src="vendors/imgcrop/cropcustom.js"></script>
    <!-- end of page level js -->
</body>
</html>

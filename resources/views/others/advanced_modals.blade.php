<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Advanced Modals | Josh Admin Temmplate</title>
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
	<link href="vendors/modal/css/component.css" rel="stylesheet" />
    <!--end of page level css-->
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
                        <li class="active">
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
                                <li class="active" id="active">
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
                        <li>
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
                                <li>
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
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <section class="content-header">
                <h1>Advanced Modals</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">UI features</a>
                    </li>
                    <li class="active">Advanced Modals</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    <strong>Advanced</strong>
                                    customized Modals
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body modal-panel">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>
                                            <strong>Fade and Slide</strong>
                                            effects
                                        </h3>
                                        <p>Simple modal with title and footer</p>
                                        <br>
                                        <button class="btn btn-effect btn-purple" data-modal="modal-1">Fade in &amp; Scale</button>
                                        <button class="btn btn-effect btn-purple" data-modal="modal-2">Slide in (right)</button>
                                        <button class="btn btn-effect btn-purple" data-modal="modal-3">Slide in (bottom)</button>
                                    </div>
                                    <div class="col-md-3">
                                        <h3>
                                            <strong>Flip and Rotate</strong>
                                            effects
                                        </h3>
                                        <p>
                                            You can customize the size of your modal. Just add the class
                                            <code>modal-lg</code>
                                            .
                                        </p>
                                        <button class="btn btn-effect btn-green1" data-modal="modal-8">3D Flip (horizontal)</button>
                                        <button class="btn btn-effect btn-green1" data-modal="modal-9">3D Flip (vertical)</button>
                                        <button class="btn btn-effect btn-green1" data-modal="modal-10">3D Sign</button>
                                        <button class="btn btn-effect btn-green1" data-modal="modal-14">3D Rotate Bottom</button>
                                        <button class="btn btn-effect btn-green1" data-modal="modal-15">3D Rotate In Left</button>
                                        <button class="btn btn-effect btn-green1" data-modal="modal-13">3D Slit</button>
                                    </div>
                                    <div class="col-md-3">
                                        <h3>
                                            <strong>Other</strong>
                                            effects
                                        </h3>
                                        <p>
                                            For fullwidth modal, add the class
                                            <code>modal-full</code>
                                            .
                                        </p>
                                        <br>
                                        <button class="btn btn-effect btn-orange" data-modal="modal-4">Newspaper</button>
                                        <button class="btn btn-effect btn-orange" data-modal="modal-5">Fall</button>
                                        <button class="btn btn-effect btn-orange" data-modal="modal-6">Side Fall</button>
                                        <button class="btn btn-effect btn-orange" data-modal="modal-7">Sticky Up</button>
                                        <button class="btn btn-effect btn-orange" data-modal="modal-11">Super Scaled</button>
                                    </div>
                                    <div class="col-md-3">
                                        <h3>
                                            <strong>Color</strong>
                                            variation
                                        </h3>
                                        <p>
                                            Like in a normal page, you can add class to make your modal responsive,
                                            <code>col-md-4</code>
                                            for example.
                                        </p>
                                        <button class="btn btn-effect btn-yellow" data-modal="modal-16">yellow</button>
                                        <button class="btn btn-effect btn-purple" data-modal="modal-17">purple</button>
                                        <button class="btn btn-effect btn-green" data-modal="modal-18">green</button>
                                        <button class="btn btn-effect btn-red" data-modal="modal-21">red</button>
                                        <button class="btn btn-effect btn-default" data-modal="modal-19">White</button>
                                        <button class="btn btn-effect btn-orange" data-modal="modal-20">orange</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--moddal dialog -->
                <div class="md-modal md-effect-1" id="modal-1">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-2" id="modal-2">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn  btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-3" id="modal-3">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-4" id="modal-4">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-5" id="modal-5">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-6" id="modal-6">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-7" id="modal-7">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-8" id="modal-8">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-9" id="modal-9">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-10" id="modal-10">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-11" id="modal-11">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-12" id="modal-12">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-13" id="modal-13">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-14" id="modal-14">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-15" id="modal-15">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-1" id="modal-16">
                    <div class="md-content md-content-yellow">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-1" id="modal-17">
                    <div class="md-content md-content-purple">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-1" id="modal-18">
                    <div class="md-content md-content-green">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-1" id="modal-19">
                    <div class="md-content md-content-white">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-1" id="modal-20">
                    <div class="md-content md-content-orange">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-1" id="modal-21">
                    <div class="md-content md-content-red">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <!--- end modals-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Extended Modals
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!-- BEGIN modal-->
                                <table class="table table-hover table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Responsive</td>
                                            <td>
                                                <a class="btn btn-success btn-large" data-toggle="modal" data-href="#responsive" href="#responsive">View Demo</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Stackable</td>
                                            <td>
                                                <a class="btn btn-primary btn-large" data-toggle="modal" data-href="#stack1" href="#stack1">View Demo</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ajax</td>
                                            <td>
                                                <a class="btn btn-warning btn-large" data-toggle="modal" data-href="#ajax-modal" href="#ajax-modal">View Demo</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Static Background with Animation</td>
                                            <td>
                                                <a class="btn btn-danger btn-large" data-toggle="modal" data-href="#static" href="#static">View Demo</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Full Width</td>
                                            <td>
                                                <a class="btn btn-info btn-large" data-toggle="modal" data-href="#full-width" href="#full-width">View Demo</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Long Modals</td>
                                            <td>
                                                <a class="btn btn-default btn-large" data-toggle="modal" data-href="#long" href="#long">View Demo</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- responsive model -->
                <div class="modal fade in" id="responsive" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Responsive</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Some More data</h4>
                                        <p>
                                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name1" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name2" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name3" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name4" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name5" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Some More data</h4>
                                        <p>
                                            <input id="name6" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name7" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name8" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name9" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name10" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name41" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END modal-->
                <!--- stack1 model -->
                <div class="modal fade bs-example-modal-sm in" id="stack1" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Stack One</h4>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                                <p>One fine body…</p>
                                <p>One fine body…</p>
                                <p>
                                    Name:
                                    <input id="name21" name="name" type="text" class="form-control">
                                </p>
                                <p>
                                    Password:
                                    <input id="name22" name="name" type="text" class="form-control">
                                </p>
                                <a class="btn btn-default" data-toggle="modal" href="#stack2">Launch modal</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                <button type="button" class="btn btn-primary">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- stack2 modal-->
                <div class="modal fade bs-example-modal-md in" id="stack2" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Stack two</h4>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                                <p>One fine body…</p>
                                <p>
                                    Name:
                                    <input id="name11" name="name" type="text" class="form-control">
                                </p>
                                <p>
                                    Password:
                                    <input id="name12" name="name" type="text" class="form-control">
                                </p>
                                <a class="btn btn-default" data-toggle="modal" href="#stack3">Launch modal</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                <button type="button" class="btn btn-primary">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END modal-->
                <!-- stack3 modal-->
                <div class="modal fade in" id="stack3" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Stack3</h4>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                                <p>
                                    Name:
                                    <input id="name13" name="name" type="text" class="form-control">
                                </p>
                                <p>
                                    Password:
                                    <input id="name14" name="name" type="text" class="form-control">
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                <button type="button" class="btn btn-primary">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ajax-modal modal-->
                <div class="modal fade in" id="ajax-modal" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">ajax-modal</h4>
                            </div>
                            <div class="modal-body">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab">Tab 1</a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab">Tab 2</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <p>This modal was loaded in via ajax</p>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <p>This is some other tab content</p>
                                    </div>
                                </div>
                                <button class="btn update">Update</button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                <button type="button" class="btn btn-primary">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- static modal-->
                <div class="modal fade in" id="static" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <p>Would you like to continue with some arbitrary task?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                                <button type="button" data-dismiss="modal" class="btn btn-primary">Continue Task</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END modal-->
                <!-- fullwidth modal-->
                <div class="modal fade in" id="full-width" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Full Width</h4>
                            </div>
                            <div class="modal-body">
                                <p>
                                    This modal will resize itself to the same dimensions as the container class.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin ipsum ac ante fermentum suscipit. In ac augue non purus accumsan lobortis id sed nibh. Nunc egestas hendrerit ipsum, et porttitor augue volutpat non. Aliquam erat volutpat. Vestibulum scelerisque lobortis pulvinar. Aenean hendrerit risus neque, eget tincidunt leo. Vestibulum est tortor, commodo nec cursus nec, vestibulum vel nibh. Morbi elit magna, ornare placerat euismod semper, dignissim vel odio. Phasellus elementum quam eu ipsum euismod pretium.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END modal-->
                <!-- long modal-->
                <div class="modal fade in" id="long" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">A Fairly Long Modal</h4>
                            </div>
                            <div class="modal-body">
                                <a class="btn btn-default" data-toggle="modal" href="#notlong" style="position: absolute; top: 50%; right: 12px">Not So Long Modal</a>
                                <img style="height: 800px" alt="image" src="http://i.imgur.com/KwPYo.jpg">
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END modal-->
            </section>
            <!-- content -->
        </aside>
        <!-- right-side -->
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
    <script src="vendors/modal/js/classie.js"></script>
    <script src="vendors/modal/js/modalEffects.js"></script>
    <!-- end of page level js -->
</body>
</html>

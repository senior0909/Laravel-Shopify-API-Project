<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sliders | Josh Admin Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if IE 9]>
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
	<link rel="stylesheet" href="vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="vendors/ion.rangeSlider/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="vendors/slider/slider.css" />
    <link rel="stylesheet" href="css/pages/ion.css" />
    <!--end of page level css-->
</head>

<body class="skin-josh">
    <header class="header">
        <a href="index.html" class="logo">
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
                        <li class="active">
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
                                <li class="active" id="active">
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
                                        <a href="responsive_tables.html">
                                            <i class="fa fa-angle-double-right"></i>
                                            Responsive Datatables
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
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>Sliders</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">UI Components</a>
                    </li>
                    <li class="active">Sliders</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <!--main content-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="download" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Ion Range Sliders
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body" id="slim1">
                                <!--ion-->
                                <div class="row">
                                    <form role="form" class="form-horizontal form-bordered">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Basic Slider</label>
                                                <div class="col-md-10">
                                                    <input id="example_1" class="form-control" type="text" name="" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Money Range</label>
                                                <div class="col-md-10">
                                                    <input id="example_2" type="text" name="" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Gold Range</label>
                                                <div class="col-md-10">
                                                    <input id="example_3" type="text" name="" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Temperature Slider</label>
                                                <div class="col-md-10">
                                                    <input id="example_4" type="text" name="" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Month Slider</label>
                                                <div class="col-md-10">
                                                    <input id="example_5" type="text" name="" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Year Range</label>
                                                <div class="col-md-10">
                                                    <input id="example_6" type="text" name="" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Year Slider</label>
                                                <div class="col-md-10">
                                                    <input id="example_7" type="text" name="" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group last">
                                                <label class="col-md-2 control-label">Ion range Slider</label>
                                                <div class="col-md-10">
                                                    <input id="example_8" type="text" name="" value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--ion ends-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="globe" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Bootstrap Sliders
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body" id="slim2">
                                <!--slider-->
                                <div class="row">
                                    <form role="form" class="form-horizontal form-bordered">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Basic Slider</label>
                                                <div class="col-md-10">
                                                    <input id="ex1" data-slider-id='ex1Slider' type="text" class="slider form-control" data-slider-handle="square" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Money Range</label>
                                                <div class="col-md-10"> <b>??? 10</b>
                                                    <input id="ex2" type="text" data-slider-id='ex2' class="slider form-control" data-slider-handle="square" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]" /> <b>??? 1000</b>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Color Range</label>
                                                <div class="col-md-10">
                                                    <div class="well">
                                                        <p>
                                                            <b>R</b>
                                                            <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="RC" id="R" data-slider-tooltip="hide" data-slider-handle="square" />
                                                        </p>
                                                        <p>
                                                            <b>G</b>
                                                            <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="GC" id="G" data-slider-tooltip="hide" data-slider-handle="round" />
                                                        </p>
                                                        <p>
                                                            <b>B</b>
                                                            <input type="text" class="slider form-control" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="BC" id="B" data-slider-tooltip="hide" data-slider-handle="triangle" />
                                                        </p>
                                                        <div id="RGB"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Vertical Slider</label>
                                                    <div class="col-md-10">
                                                        <input id="ex4" type="text" class="slider form-control" data-slider-id='ex4' data-slider-handle="square" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="-3" data-slider-orientation="vertical" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Destroy</label>
                                                        <div class="col-md-10">
                                                            <input id="ex5" type="text" class="slider form-control" data-slider-id='ex5' data-slider-handle="square" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="0" />
                                                            <button id="destroyEx5Slider" class='btn btn-danger'>Click to Destroy</button>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Current Range</label>
                                                        <div class="col-md-10">
                                                            <input id="ex6" type="text" class="slider form-control" data-slider-id='ex6' data-slider-min="-5" data-slider-handle="square" data-slider-max="20" data-slider-step="1" data-slider-value="3" />
                                                            <span id="ex6CurrentSliderValLabel">
                                                                Current Slider Value:
                                                                <span id="ex6SliderVal">3</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Enable Slider</label>
                                                        <div class="col-md-10">
                                                            <input id="ex7" type="text" class="slider form-control" data-slider-id='ex7' data-slider-min="0" data-slider-handle="square" data-slider-max="20" data-slider-step="1" data-slider-value="5" data-slider-enabled="false" />
                                                            <input id="ex7-enabled" type="checkbox" />Enabled
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Tooltip Slider</label>
                                                        <div class="col-md-10">
                                                            <input id="ex8" class="slider form-control" data-slider-id='ex8' type="text" data-slider-min="0" data-slider-handle="square" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group last">
                                                        <label class="col-md-2 control-label">Precision Slider</label>
                                                        <div class="col-md-10">
                                                            <input id="ex9" class="slider form-control" data-slider-id='ex9' data-slider-handle="square" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--slider ends-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--main content ends-->
            </section>
            <!-- content -->
        </aside>
        <!-- right-side -->
    </div>
    <!-- ./wrapper -->
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
    <script src="vendors/ion.rangeSlider/js/ion-rangeSlider/ion.rangeSlider.js"></script>
    <script src="vendors/slider/bootstrap-slider.js"></script>
    <script>
    $(function($) {
        $("#example_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });
        $("#example_2").ionRangeSlider({
            min: 1000,
            max: 100000,
            from: 30000,
            to: 90000,
            type: 'double',
            step: 500,
            postfix: " &euro;",
            hasGrid: true
        });
        $("#example_3").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });
        $("#example_4").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            type: 'single',
            step: 1,
            postfix: "??",
            prettify: false,
            hasGrid: true
        });
        $("#example_5").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });
        $("#example_6").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " light years",
            from: 55000,
            hideMinMax: false,
            hideFromTo: true
        });
        $("#example_7").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " light years",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });
        $("#example_8").ionRangeSlider({
            min: 1000000,
            max: 100000000,
            type: "double",
            postfix: " ??.",
            step: 10000,
            from: 25000000,
            to: 35000000,
            onChange: function(obj) {
                delete obj.input;
                delete obj.slider;
                var t = "Range Slider value: " + JSON.stringify(obj, "", 2);

                $("#result").html(t);
            },
            onLoad: function(obj) {
                delete obj.input;
                delete obj.slider;
                var t = "Range Slider value: " + JSON.stringify(obj, "", 2);

                $("#result").html(t);
            }
        });

        $("#updateLast").on("click", function() {
            $("#example_8").ionRangeSlider("update", {
                min: Math.round(10000 + Math.random() * 40000),
                max: Math.round(200000 + Math.random() * 100000),
                step: 1,
                from: Math.round(40000 + Math.random() * 40000),
                to: Math.round(150000 + Math.random() * 80000)
            });

        });
    });
    </script>
    <script type='text/javascript'>
    $(document).ready(function() {
        /* Example 1 */
        $('#ex1').slider({
            formater: function(value) {
                return 'Current value: ' + value;
            }
        });

        /* Example 2 */
        $("#ex2").slider({});

        /* Example 3 */
        var RGBChange = function() {
            $('#RGB').css('background', 'rgb(' + r.getValue() + ',' + g.getValue() + ',' + b.getValue() + ')')
        };

        var r = $('#R').slider()
            .on('slide', RGBChange)
            .data('slider');
        var g = $('#G').slider()
            .on('slide', RGBChange)
            .data('slider');
        var b = $('#B').slider()
            .on('slide', RGBChange)
            .data('slider');

        /* Example 4 */
        $("#ex4").slider({
            reversed: true
        });

        /* Example 5 */
        $("#ex5").slider();
        $("#destroyEx5Slider").click(function() {
            $("#ex5").slider('destroy');
        });

        /* Example 6 */
        $("#ex6").slider();
        $("#ex6").on('slide', function(slideEvt) {
            $("#ex6SliderVal").text(slideEvt.value);
        });

        /* Example 7 */
        $("#ex7").slider();
        $("#ex7-enabled").click(function() {
            if (this.checked) {
                $("#ex7").slider("enable");
            } else {
                $("#ex7").slider("disable");
            }
        });

        /* Example 8 */
        $("#ex8").slider({
            tooltip: 'always'
        });

        /* Example 9 */
        $("#ex9").slider({
            step: 0.01,
            value: 8.115
        });
    });
    </script>
    <!-- end of page level js -->
</body>
</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>News | Josh Admin Template</title>
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
	<link rel="stylesheet" href="vendors/tags/dist/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="css/pages/news.css" />
    <!-- end of page level css -->
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
                        <li class="active">
                            <a href="#">
                                <i class="livicon" data-name="move" data-c="#EF6F6C" data-hc="#EF6F6C" data-size="18" data-loop="true"></i>
                                <span class="title">News</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="active" id="active">
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
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>News</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-c="#000" data-loop="true"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="active">News</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <!--main content-->
                <div class="row">
                    <div class="col-md-12 news-page">
                        <h1>Recent News</h1>
                        <div class="row">
                            <div class="col-md-5">
                                <div id="myCarousel" class="carousel image-carousel slide">
                                    <div class="carousel-inner">
                                        <div class="active item">
                                            <img data-src="holder.js/1900x278/#00bc8c:#fff" class="img-responsive" alt="">
                                        </div>
                                        <div class="item">
                                            <img data-src="holder.js/1900x278/#5bc0de:#fff" class="img-responsive" alt="">
                                        </div>
                                        <div class="item">
                                            <img data-src="holder.js/1900x278/#00BC8C:#fff" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <!-- Carousel nav -->
                                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                        <i class="m-icon-big-swapleft m-icon-white"></i>
                                    </a>
                                    <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                        <i class="m-icon-big-swapright m-icon-white"></i>
                                    </a>
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                </div>
                                <div class="top-news margin-top-10">
                                    <a href="#" class="btn-red">
                                        <span>Featured News</span>
                                        <em><i class="fa fa-tags"></i>
                                            USA, Business, Apple</em>
                                        <i class="fa fa- icon-bullhorn top-news-icon"></i>
                                    </a>
                                </div>
                                <div class="news-blocks">
                                    <h3>
                                        <a href="news_item.html">Older Stories go lower</a>
                                    </h3>
                                    <div class="news-block-tags">
                                        <strong>CA, USA</strong>
                                        <em>3 hours ago</em>
                                    </div>
                                    <p>
                                        <img class="news-block-img pull-right" data-src="holder.js/70x70/#EF6F6C:#fff" alt="">The front page layout can be mixed and matched to fit your content in the best possible way - by making extensive use of images the content engages readers.
                                    </p>
                                    <a href="news_item.html" class="news-block-btn">
                                        Read more
                                        <i class="m-icon-swapright m-icon-black"></i>
                                    </a>
                                </div>
                                <div class="news-blocks">
                                    <h3>
                                        <a href="news_item.html">
                                            China national charged in hacking plot to steal US military data
                                        </a>
                                    </h3>
                                    <div class="news-block-tags">
                                        <strong>China</strong>
                                        <em>7 hours ago</em>
                                    </div>
                                    <p>
                                        <img class="news-block-img pull-right" data-src="holder.js/70x70/#418bca:#fff" alt="">Su Bin, who was arrested in Canada last month, is accused of working with two other suspects to steal data about military projects and sell it to China.
                                    </p>
                                    <a href="news_item.html" class="news-block-btn">
                                        Read more
                                        <i class="m-icon-swapright m-icon-black"></i>
                                    </a>
                                </div>
                                <div class="news-blocks">
                                    <h3>
                                        <a href="news_item.html">U.S. surges past Canada at World Lacrosse games</a>
                                    </h3>
                                    <div class="news-block-tags">
                                        <strong>CANADA, US</strong>
                                        <em>3 hours ago</em>
                                    </div>
                                    <p>
                                        <img class="news-block-img pull-right" data-src="holder.js/70x70/#A9B6BC:#fff" alt="">COMMERCE CITY, Colo. — After digging a 3-0 hole, the United States went on an eight-goal run to defeat Canada 10-7 before 11,447 fans at Dick’s Sporting Goods Park in the opening game of the 2014 Federation of International Lacrosse World Championship.
                                    </p>
                                    <a href="news_item.html" class="news-block-btn">
                                        Read more
                                        <i class="m-icon-swapright m-icon-black"></i>
                                    </a>
                                </div>
                            </div>
                            <!--end col-md-5-->
                            <div class="col-md-4 ">
                                <div class="news-blocks">
                                    <img data-src="holder.js/2000x203/#5bc0de:#fff" class="img-responsive" alt="image" />
                                    <h3>
                                        <a href="">Germany Basks in 4th World Cup After 24-Year Wait</a>
                                    </h3>
                                    <strong>Germany</strong>
                                    <em>2 hours ago</em>
                                    <p>
                                        The Die Welt newspaper celebrated Monday with a three-word headline in the national colors of black, red and gold that read simply: "It is true," while Der Spiegel magazine's website listed Germany's titles: "1954. 1974. 1990. 2014!"
                                    </p>
                                    <a href="news_item.html" >
                                        Read more..
                                        <i class="m-icon-swapright m-icon-black"></i>
                                    </a>
                                    <!-- /.featured-text -->
                                </div>
                                <div class="news-blocks">
                                    <img data-src="holder.js/2000x203/#418bca:#fff" class="img-responsive" alt="image">
                                    <h3>
                                        <a href="">
                                            News
                                          World news
                                          Paris
                                          Anti-Israeli protesters attack Paris synagogue
                                        </a>
                                    </h3>
                                    <strong>Paris</strong>
                                    <em>2 hours ago</em>
                                    <p class="">
                                        A synagogue near the Bastille was under police guard on Monday after more than 100 youths chanting "Israel murderer" tried to storm the building following a march demanding an end to Israeli air strikes on Gaza.
                                    </p>
                                    <a href="news_item.html">
                                        Read more..
                                        <i class="m-icon-swapright m-icon-black"></i>
                                    </a>
                                    <!-- /.featured-text -->
                                </div>
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-3">
                                <div class="news-blocks">
                                    <h3>
                                        <a href="news_item.html">Futures Game: Gallo gives US 3-2 win over World</a>
                                    </h3>
                                    <div class="news-block-tags">
                                        <strong>US</strong>
                                    </div>
                                    <p>
                                        <img class="news-block-img pull-right" data-src="holder.js/70x70/#00bc8c:#fff" alt="">MINNEAPOLIS (AP) — Texas Rangers prospect Joey Gallo showed off his power with a soaring two-run homer in the sixth inning to give the U.S. team the lead for good in a 3-2 victory over the World squad Sunday at the All-Star Futures Game for baseball's best minor leaguers.
                                    </p>
                                    <a href="news_item.html" class="news-block-btn">
                                        Read more
                                        <i class="m-icon-swapright m-icon-black"></i>
                                    </a>
                                </div>
                                <div class="news-blocks">
                                    <h3>
                                        <a href="news_item.html">World Cup 2014: 11 things the tournament taught us</a>
                                    </h3>
                                    <div class="news-block-tags">
                                        <strong>US</strong>
                                        <em>3 hours ago</em>
                                    </div>
                                    <p>
                                        <img class="news-block-img pull-right" data-src="holder.js/70x70/#67cc5df:#fff" alt="">Plenty of sides tried free-flowing, pacey Latin football this summer – even England had their moments. A moment. But Argentina stayed functional. They haven’t conceded once in the knockouts, they’ve not been behind in any game, and they don’t mind a lack of respect. Coach Alejandro “The Sloth” Sabella says his side are “sore, beaten and tired after the war [with Holland]. But with work, humility and seriousness, we’ll get there”; Pablo Zabaleta says their strengths are spoiling, staying “compact and tight”, “closing down” and feeding on negativity.
                                    </p>
                                    <a href="news_item.html" class="news-block-btn">
                                        Read more
                                        <i class="m-icon-swapright m-icon-black"></i>
                                    </a>
                                </div>
                            </div>
                            <!--end col-md-3-->
                        </div>
                        <div class="space20"></div>
                        <h3>News Option</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="news-blocks">
                                    <h3>
                                        <a href="news_item.html">Egypt proposes Israel-Gaza ceasefire</a>
                                    </h3>
                                    <div class="news-block-tags">
                                        <strong>Egypt</strong>
                                        <em>2 hours ago</em>
                                    </div>
                                    <p>
                                        <img class="news-block-img pull-right" data-src="holder.js/70x70/#00BC8C:#fff" alt="">Egypt proposes a ceasefire to end days of cross-border fire between the Gaza Strip and Israel that has left at least 185 Palestinians dead....
                                    </p>
                                    <a href="news_item.html" class="news-block-btn">
                                        Read more
                                        <i class="m-icon-swapright m-icon-black"></i>
                                    </a>
                                </div>
                                <div class="news-blocks">
                                    <h3>
                                        <a href="news_item.html">Hague quits as foreign secretary</a>
                                    </h3>
                                    <div class="news-block-tags">
                                        <strong>UK</strong>
                                        <em>6 hours ago</em>
                                    </div>
                                    <p>
                                        William Hague has stood down as David Cameron mounted a “cull of the middle-aged white men” in his biggest reshuffle since becoming Prime Minister. Mr Cameron fired the starting gun for the general election by sacking or moving at least six Cabinet members to make way for a series of young women, who will be promoted on...
                                    </p>
                                    <a href="news_item.html" class="news-block-btn">
                                        Read more
                                        <i class="m-icon-swapright m-icon-black"></i>
                                    </a>
                                </div>
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3">
                                <div class="news-blocks">
                                    <h3>
                                        <a href="news_item.html">Murder victim's family want answers</a>
                                    </h3>
                                    <div class="news-block-tags">
                                        <strong>ENGLAND</strong>
                                        <em>3 hours ago</em>
                                    </div>
                                    <p>
                                        <img class="news-block-img pull-right" data-src="holder.js/70x70/#A9B6BC:#fff" alt="">The family of a man who was beaten to death and had his body set on fire say they "can't wait any longer" for the results of a police watchdog inquiry...
                                    </p>
                                    <a href="news_item.html" class="news-block-btn">
                                        Read more
                                        <i class="m-icon-swapright m-icon-black"></i>
                                    </a>
                                </div>
                                <div class="news-blocks">
                                    <h3>
                                        <a href="news_item.html">Brooks Irish shows will not go ahead</a>
                                    </h3>
                                    <div class="news-block-tags">
                                        <strong>NORTHERN IRELAND</strong>
                                        <em>3 hours ago</em>
                                    </div>
                                    <p>
                                        Mr Brooks said his heart was broken and he is crushed over the failure to stage the five events. Ticket refunds will go ahead as planned for the 400,000 fans from 9am on Thursday. Mr Brooks had been scheduled to play five concerts at the venue on consecutive...
                                    </p>
                                    <a href="news_item.html" class="news-block-btn">
                                        Read more
                                        <i class="m-icon-swapright m-icon-black"></i>
                                    </a>
                                </div>
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="news-blocks">
                                            <h3>
                                                <a href="news_item.html">Dying patients 'bewildered by array of services'</a>
                                            </h3>
                                            <div class="news-block-tags">
                                                <strong>SCOTLAND</strong>
                                                <em>3 hours ago</em>
                                            </div>
                                            <p>
                                                <img class="news-block-img pull-right" data-src="holder.js/70x70/#418bca:#fff" alt="">The study into multimorbidity - several illnesses at the same time - found care for patients in Scotland and England "is not joined up". Researchers carried out interviews with 37 people suffering from multimorbidity and 17 family members. They described complicated, confusing and sometimes unresponsive services.
                                            </p>
                                            <a href="news_item.html" class="news-block-btn">
                                                Read more
                                                <i class="m-icon-swapright m-icon-black"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="news-blocks">
                                            <h3>
                                                <a href="news_item.html">All aboard: China's railway dream</a>
                                            </h3>
                                            <div class="news-block-tags">
                                                <strong>China</strong>
                                                <em>3 hours ago</em>
                                            </div>
                                            <p>
                                                At Asia's biggest rail cargo base in Chengdu in south-west China, the cranes are hard at work, swinging containers from trucks onto a freight train. The containers are filled with computers, clothes, even cars. Until last year, all of it would have first gone more than 1,000 miles east to Shanghai and then to Europe by sea.
                                            </p>
                                            <a href="news_item.html" class="news-block-btn">
                                                Read more
                                                <i class="m-icon-swapright m-icon-black"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="news-blocks">
                                            <h3>
                                                <a href="news_item.html">Record number of data complaints made to ICO</a>
                                            </h3>
                                            <div class="news-block-tags">
                                                <strong>CA, USA</strong>
                                                <em>3 hours ago</em>
                                            </div>
                                            <p>
                                                The UK's information commissioner has called for better funding for the country's data regulator amid a record number of cases. Ahead of the release of the Information Commissioner's Office (ICO) annual report, Christopher Graham said the body needed "stronger powers".
                                            </p>
                                            <a href="news_item.html" class="news-block-btn">
                                                Read more
                                                <i class="m-icon-swapright m-icon-black"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-md-6-->
                        </div>
                        <div class="space20"></div>
                    </div>
                </div>
                <!--main content ends-->
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
    <!--tags-->
    <script src="vendors/tags/dist/bootstrap-tagsinput.js"></script>
    <!-- end of page level js -->
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Accordian Form Wizard | Josh Admin Template</title>
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
    <link href="vendors/wizard/acc-wizard-master/css/acc-wizard.min.css" rel="stylesheet" />
    <link href="css/pages/accordionformwizard.css" rel="stylesheet" />
    <!--end of page level css-->
</head>
<body class="skin-josh">
    <header class="header">
        <a href="index.html" class="logo">
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
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="livicon" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages pull-right">
                            <li class="dropdown-title">4 New Messages</li>
                            <li class="unread message">
                                <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i> 
                                    <img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">
                                    <div class="message-body"> <strong>Riot Zeast</strong>
                                        <br>
                                        Hello, You there?
                                        <br>
                                        <small>8 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i> 
                                    <img data-src="holder.js/45x45/#000:#fff" class="img-responsive message-image" alt="icon">
                                    <div class="message-body"> <strong>John Kerry</strong>
                                        <br>
                                        Can we Meet ?
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
                                        <br>
                                        Dont forgot to call...
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
                                        <br>
                                        Hey! sup Dude?
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
                        <li class="active">
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
                                <li class="active" id="active">
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
                                    <a href="advanced_charts.html">
                                        <i class="fa fa-angle-double-right"></i>
                                        Advanced Charts
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
                    <!-- END SIDEBAR MENU --> </div>
            </section>
            <!-- /.sidebar --> </aside>
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>Accordion Wizards</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Forms</a>
                    </li>
                    <li class="active">Accordion Wizards</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content paddingleft_right15">
                <!--main content-->
                <div class="row">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="gear" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Specials
                            </h3>
                            <span class="pull-right clickable">
                                <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div class="row acc-wizard">
                                <div class="col-md-3 pd-2">
                                    <p class="mar-2">
                                        Follow the steps below to add an accordion wizard to your web page.
                                    </p>
                                    <ol class="acc-wizard-sidebar">
                                        <li class="acc-wizard-todo acc-wizard-active">
                                            <a href="#prerequisites">Prerequisites</a>
                                        </li>
                                        <li class="acc-wizard-todo">
                                            <a href="#addwizard">Add Wizard</a>
                                        </li>
                                        <li class="acc-wizard-todo">
                                            <a href="#adjusthtml">Adjust HTML</a>
                                        </li>
                                        <li class="acc-wizard-todo">
                                            <a href="#viewpage">Release</a>
                                        </li>
                                    </ol>
                                </div>
                                <div class="col-md-9 pd-r">
                                    <div id="accordion-demo" class="panel-group">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#prerequisites" data-parent="#accordion-demo" data-toggle="collapse">Install Bootstrap</a>
                                                </h4>
                                            </div>
                                            <div id="prerequisites" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <form id="form-prerequisites">
                                                        <p>
                                                            The accordion wizard depends on two other open source packages:
                                                        </p>
                                                        <ul>
                                                            <li>
                                                                The Bootstrap framework, available
                                                                <a href="http://getbootstrap.com">here</a>
                                                                .
                                                            </li>
                                                            <li>
                                                                The jQuery javascript library, available
                                                                <a href="http://jquery.com">here</a>
                                                                .
                                                            </li>
                                                        </ul>
                                                        Note that Bootstrap itself depends on jQuery for its interactive components, so if you're using Bootstrap you probably already have jQuery as well.
                                                        <p></p>
                                                        <p>
                                                            You'll include the CSS styles for Bootstrap in the
                                                            <code>&lt;head&gt;</code>
                                                            of your HTML file, for example:
                                                        </p>
                                                        <pre>&lt;link href="css/bootstrap.min.css" rel="stylesheet"&gt;</pre>
                                                        <p>
                                                            and you'll include jQuery and Bootstrap javascript files at the end of your
                                                            <code>&lt;body&gt;</code>
                                                            section, for example:
                                                        </p>
                                                        <pre>&lt;script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"&gt;&lt;/script&gt;
                                                        &lt;script src="js/bootstrap.min.js"&gt;&lt;/script&gt;</pre>
                                                        <div class="acc-wizard-step"></div>
                                                    </form>
                                                </div>
                                                <!--/.panel-body --> </div>
                                            <!-- /#prerequisites --> </div>
                                        <!-- /.panel.panel-default -->

                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#addwizard" data-parent="#accordion-demo" data-toggle="collapse">Accordion Wizard</a>
                                                </h4>
                                            </div>
                                            <div id="addwizard" class="panel-collapse collapse awd-h" style="height: 36.400001525878906px;">
                                                <div class="panel-body">
                                                    <form id="form-addwizard">
                                                        <p>
                                                            If you haven't already found it, the source code for the accordion wizard is available on github
                                                            <a href="https://github.com/sathomas/acc-wizard">here</a>
                                                            . There are two main folders,
                                                            <code>/src</code>
                                                            and
                                                            <code>/release</code>
                                                            .
                                                        </p>
                                                        <p>
                                                            There are two different ways to add the accordion wizard to your pages. The simplest approach is just to add the CSS and javascript files from the
                                                            <code>/release</code>
                                                            folder directly in your HTML without modifying them:
                                                        </p>
                                                        <pre>&lt;link href="css/bootstrap.min.css" rel="stylesheet"&gt;
                                                            &lt;link href="css/acc-wizard.min.css" rel="stylesheet"&gt;
                                                        </pre>
                                                        <p>and</p>
                                                        <pre>&lt;script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"&gt;&lt;/script&gt;
                                                            &lt;script src="js/bootstrap.min.js"&gt;&lt;/script&gt;
                                                            &lt;script src="js/acc-wizard.min.js"&gt;&lt;/script&gt;
                                                        </pre>
                                                        <p>
                                                            The release styles for the accordion wizard are based on Bootstrap's default styles. If you've tweaked the Bootstrap styles (e.g. by changing the link color), you'll want to make corresponding tweaks to
                                                            <code>acc-wizard.min.css</code>
                                                            .
                                                        </p>
                                                        <p>
                                                            Alternatively, if you're building custom CSS and javascript, then you might want to start with the files in the
                                                            <code>/src</code>
                                                            folder and adapt them to your source code. The
                                                            <code>/src</code>
                                                            folder contains a LESS file and uncompressed (and commented) javascript. Note that the
                                                            <code>acc-wizard.less</code>
                                                            file depends on variables defined in Bootstrap's
                                                            <code>variables.less</code>
                                                            file.
                                                        </p>
                                                        <div class="acc-wizard-step"></div>
                                                    </form>
                                                </div>
                                                <!--/.panel-body --> </div>
                                            <!-- /#addwizard --> </div>
                                        <!-- /.panel.panel-default -->
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#adjusthtml" data-parent="#accordion-demo" data-toggle="collapse">Adjust HTML Markup</a>
                                                </h4>
                                            </div>
                                            <div id="adjusthtml" class="panel-collapse collapse" style="height: 36.400001525878906px;">
                                                <div class="panel-body">
                                                    <form id="form-adjusthtml">
                                                        <p>
                                                            Now you can modify your HTML markup to activate the accordion wizard. There are two parts to the markup—the collapsible accordion itself and the task list. I prefer putting both in the same
                                                            <code>.row</code>
                                                            with the task list taking up a
                                                            <code>.col-md-3</code>
                                                            and the accordion panels in a
                                                            <code>.col-md-9</code>
                                                            , but that's not a requirement.
                                                        </p>
                                                        <p>
                                                            The accordion panel can be exactly as documented in the
                                                            <a href="http://getbootstrap.com/javascript/#collapse-examples">Bootstrap example</a>
                                                            , but I think there's a problem with the Bootstrap implementation. Specifically, the Bootstrap example only adds the class
                                                            <code>.in</code>
                                                            to one of the accordion panels. That class marks the panel as visible by default. The problem with only having one panel visible by default is that users without javascript will
                                                            <strong>never</strong>
                                                            be able to see the other panels. Sure, that's a minority of users, but why make your pages unworkable even for a small minority. Instead, I suggest adding
                                                            <code>.in</code>
                                                            to all your
                                                            <code>.collapse</code>
                                                            elements and have javascript code select only one to make visible when it runs. The accordion wizard javascript will handle that for you if you choose to use that approach.
                                                        </p>
                                                        <p>
                                                            The sidebar task list is nothing but a standard HTML ordered list. The only required additions are adding the
                                                            <code>.acc-wizard-sidebar</code>
                                                            class to the
                                                            <code>&lt;ol&gt;</code>
                                                            element and
                                                            <code>.acc-wizard-todo</code>
                                                            to the individual list items. If you want to indicate that some steps are already complete, you can instead add the
                                                            <code>.acc-wizard-completed</code>
                                                            class to the corresponding
                                                            <code>&lt;li&gt;</code>
                                                            elements.
                                                        </p>
                                                        <pre>&lt;ol class="acc-wizard-sidebar"&gt;
                                                              &lt;li class="acc-wizard-todo"&gt;&lt;a href="#prerequisites"&gt;Install Bootstrap and jQuery&lt;/a&gt;&lt;/li&gt;
                                                              &lt;li class="acc-wizard-todo"&gt;&lt;a href="#addwizard"&gt;Add Accordion Wizard&lt;/a&gt;&lt;/li&gt;
                                                              &lt;li class="acc-wizard-todo"&gt;&lt;a href="#adjusthtml"&gt;Adjust Your HTML Markup&lt;/a&gt;&lt;/li&gt;
                                                              &lt;li class="acc-wizard-todo"&gt;&lt;a href="#viewpage"&gt;Test Your Page&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ol&gt;
                                                        </pre>
                                                        <p>
                                                            Finally, you'll want to active the wizard in your javascript. That's nothing more than simply calling the plugin on an appropriate selection.
                                                        </p>
                                                        <pre>&lt;script&gt;
                                                            $(window).load(function() {
                                                                $(".acc-wizard").accwizard();
                                                            });
                                                            &lt;/script&gt;
                                                        </pre>
                                                        <p>
                                                            The default options are probably fine for most uses, but there are many customizations you can use when you activate the wizard. Check out the documentation on
                                                            <a href="https://github.com/sathomas/acc-wizard">github</a>
                                                            for the details.
                                                        </p>
                                                        <div class="acc-wizard-step"></div>
                                                    </form>
                                                </div>
                                                <!--/.panel-body --> </div>
                                            <!-- /#adjusthtml --> </div>
                                        <!-- /.panel.panel-default -->
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#viewpage" data-parent="#accordion-demo" data-toggle="collapse">Test Your Page</a>
                                                </h4>
                                            </div>
                                            <div id="viewpage" class="panel-collapse collapse" style="height: 36.400001525878906px;">
                                                <div class="panel-body">
                                                    <form id="form-viewpage">
                                                        <p>
                                                            Naturally, the last thing you'll want to do is test your page with the accordion wizard. Once you've confirmed that it's working as expected, release it on the world. Your users will definitely appreciate the feedback and guidance it gives to multi-step and complex tasks on your web site.
                                                        </p>
                                                        <div class="acc-wizard-step"></div>
                                                    </form>
                                                </div>
                                                <!--/.panel-body --> </div>
                                            <!-- /#adjusthtml --> </div>
                                        <!-- /.panel.panel-default --> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--main content ends--> </section>
            <!-- content --> </aside>
        <!-- right-side --> </div>
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
    <script src="js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/holder-master/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="vendors/wizard/acc-wizard-master/js/acc-wizard.min.js"></script>
    <script src="js/pages/accordionformwizard.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>
</html>
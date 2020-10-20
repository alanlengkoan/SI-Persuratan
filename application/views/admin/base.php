<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | <?= $halaman ?></title>
    <link rel="shortcut icon" href="<?= base_url() ?>assets/map.png">

    <!-- begin:: css universal -->
    <link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/bower_components/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/assets/pages/waves/css/waves.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/assets/icon/feather/css/feather.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/assets/css/widget.css" />
    <!-- end:: css universal -->

    <!-- begin:: css local -->
    <?php empty($css) ? '' : $this->load->view($css); ?>
    <!-- end:: css local -->

    <script type="text/javascript" src="<?= base_url() ?>assets/admin/bower_components/jquery/js/jquery.min.js"></script>
</head>

<body>
    <!-- begin:: loading -->
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <!-- end:: loading -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="feather icon-toggle-right"></i>
                        </a>
                        <a href="<?= admin_url() ?>">
                            <img class="img-fluid" src="<?= base_url() ?>assets/admin/assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close">
                                            <i class="feather icon-x input-group-text"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn">
                                            <i class="feather icon-search input-group-text"></i>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="full-screen feather icon-maximize"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-red">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRRoWrihcOLGik2xRG96dL0F4HjA71lPywi2w&usqp=CAU" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRRoWrihcOLGik2xRG96dL0F4HjA71lPywi2w&usqp=CAU" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRRoWrihcOLGik2xRG96dL0F4HjA71lPywi2w&usqp=CAU" class="img-radius" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.html">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.html">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= logout_url() ?>">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- [ navigation menu ] start -->
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-menu-user img-radius" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRRoWrihcOLGik2xRG96dL0F4HjA71lPywi2w&usqp=CAU" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <p id="more-details">John Doe<i class="feather icon-chevron-down m-l-10"></i></p>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html">
                                                <i class="feather icon-user"></i>View Profile
                                            </a>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i>Settings
                                            </a>
                                            <a href="auth-normal-sign-in.html">
                                                <i class="feather icon-log-out"></i>Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="active">
                                            <a href="<?= admin_url() ?>" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Default</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-ecommerce.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Ecommerce</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-crm.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">CRM</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-analytics.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Analytics</span>
                                                <span class="pcoded-badge label label-info ">NEW</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-project.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Project</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext">Page layouts</span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Vertical</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="menu-static.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Static Layout</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="menu-header-fixed.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Header Fixed</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="menu-compact.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Compact</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="menu-sidebar.html" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Sidebar Fixed</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Horizontal</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="menu-horizontal-static.html" target="_blank" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Static Layout</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="menu-horizontal-fixed.html" target="_blank" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Fixed layout</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="menu-horizontal-icon.html" target="_blank" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Static With Icon</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="menu-horizontal-icon-fixed.html" target="_blank" class="waves-effect waves-dark">
                                                        <span class="pcoded-mtext">Fixed With Icon</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="menu-bottom.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Bottom Menu</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="box-layout.html" target="_blank" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Box Layout</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="menu-rtl.html" target="_blank" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">RTL</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="navbar-light.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                            <i class="feather icon-menu"></i>
                                        </span>
                                        <span class="pcoded-mtext">Navigation</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon">
                                            <i class="feather icon-layers"></i>
                                        </span>
                                        <span class="pcoded-mtext">Widget</span>
                                        <span class="pcoded-badge label label-danger">100+</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="widget-statistic.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Statistic</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="widget-data.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Data</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="widget-chart.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Chart Widget</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="widget-chart-advance.html" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Advance Widgets</span>
                                                <span class="pcoded-badge label label-info">25+</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <!-- begin:: content -->
                    <?php $this->load->view($content); ?>
                    <!-- end:: content -->

                    <div id="styleSelector">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- begin:: js universal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/pages/waves/js/waves.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/pages/chart/float/jquery.flot.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/pages/chart/float/jquery.flot.categories.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/pages/chart/float/curvedLines.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/pages/chart/float/jquery.flot.tooltip.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/pages/widget/amchart/amcharts.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/pages/widget/amchart/serial.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/pages/widget/amchart/light.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/js/pcoded.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/js/vertical/vertical-layout.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/pages/dashboard/custom-dashboard.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/js/script.min.js"></script>
    <!-- end:: js universal -->

    <!-- begin:: js local -->
    <?php empty($js) ? '' : $this->load->view($js); ?>
    <!-- end:: js local -->
</body>

</html>
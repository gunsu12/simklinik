<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: <?=$page_tittle?> - Klinik Admin :: Integrated Clinik Information System</title>
<link rel="icon" href="<?=base_url()?>assets/favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">
<!-- Dropzone Css -->
<link href="<?=base_url()?>assets/plugins/dropzone/dropzone.css" rel="stylesheet">
<!-- Bootstrap Material Datetime Picker Css -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"/>
<!-- Select 2 -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2/dist/css/select2.min.css">
<!-- Wait Me Css -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/waitme/waitMe.css" />
<!-- Bootstrap Select Css -->
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
<link rel="stylesheet" href="<?=base_url()?>assets/plugins/morrisjs/morris.css"/>
<!-- Custom Css -->
<link rel="stylesheet" href="<?=base_url()?>assets/css/main.css"/>
</head>
<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-cyan">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Mohon tunggu...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- #Float icon -->
<ul id="f-menu" class="mfbc-br mfb-zoomin" data-mfb-toggle="hover">
    <li class="mfbc_wrap">
        <a href="javascript:void(0);" class="mfbcb-main g-bg-cyan">
            <i class="mfbcm-icon-resting zmdi zmdi-plus"></i>
            <i class="mfbcm-icon-active zmdi zmdi-close"></i>
        </a>
        <ul class="mfbc_list">
            <li><a href="doctor-schedule.html" data-mfb-label="Doctor Schedule" class="mfb-child bg-blue"><i class="zmdi zmdi-calendar mfbc_icon"></i></a></li>
            <li><a href="patients.html" data-mfb-label="Patients List" class="mfb-child bg-orange"><i class="zmdi zmdi-account-o mfbc_icon"></i></a></li>
            <li><a href="payments.html" data-mfb-label="Payments" class="mfb-child bg-purple"><i class="zmdi zmdi-balance-wallet mfbc_icon"></i></a></li>
        </ul>
    </li>
</ul>

<!-- Morphing Search  -->
<!-- <div id="morphsearch" class="morphsearch">
    <form class="morphsearch-form">
        <div class="form-group m-0">
            <input value="" type="search" placeholder="Explore Swift..." class="form-control morphsearch-input" />
            <button class="morphsearch-submit" type="submit">Search</button>
        </div>
    </form>
</div> -->

<!-- Top Bar -->
<nav class="navbar clearHeader">
    <div class="col-12">
        <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index-2.html">Swift Hospital</a> </div>
        <ul class="nav navbar-nav navbar-right">
            <!-- Notifications -->
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i> <span class="label-count">7</span> </a>
                <ul class="dropdown-menu">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-light-green"><i class="zmdi zmdi-account-add"></i></div>
                                    <div class="menu-info">
                                        <h4>12 new members joined</h4>
                                        <p><i class="material-icons">access_time</i> 14 mins ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-cyan"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                    <div class="menu-info">
                                        <h4>4 sales made</h4>
                                        <p><i class="material-icons">access_time</i> 22 mins ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                                    <div class="menu-info">
                                        <h4><b>Nancy Doe</b> deleted account</h4>
                                        <p><i class="material-icons">access_time</i> 3 hours ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-orange"><i class="zmdi zmdi-edit"></i></div>
                                    <div class="menu-info">
                                        <h4><b>Nancy</b> changed name</h4>
                                        <p><i class="material-icons">access_time</i> 2 hours ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-blue-grey"><i class="zmdi zmdi-comment-alt-text"></i></div>
                                    <div class="menu-info">
                                        <h4><b>John</b> commented your post</h4>
                                        <p><i class="material-icons">access_time</i> 4 hours ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-light-green"><i class="zmdi zmdi-refresh-alt"></i></div>
                                    <div class="menu-info">
                                        <h4><b>John</b> updated status</h4>
                                        <p><i class="material-icons">access_time</i> 3 hours ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="icon-circle bg-purple"><i class="zmdi zmdi-settings"></i></div>
                                    <div class="menu-info">
                                        <h4>Settings updated</h4>
                                        <p><i class="material-icons">access_time</i> Yesterday</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
                </ul>
            </li>
            <!-- #END# Notifications --> 
            <!-- Tasks -->
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i><span class="label-count">9</span> </a>
                <ul class="dropdown-menu">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks">
                            <li>
                                <a href="javascript:void(0);">
                                    <h4> Task 1 <small>32%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%"> </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <h4>Task 2 <small>45%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%"> </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <h4>Task 3 <small>54%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%"> </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <h4> Task 4 <small>65%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%"> </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:void(0);">View All Tasks</a></li>
                </ul>
            </li>
            <!-- #END# Tasks -->
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
        </ul>
    </div>
</nav>
<!-- #Top Bar -->
<section> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image"> <img src="<?=base_url()?>assets/images/random-avatar7.jpg" alt=""> </div>
            <div class="admin-action-info"> <span>Selamat Datang</span>
                <h3>Dr. John</h3>
                <ul>
                    <li><a href="mail-inbox.html" title="Go to Inbox"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a href="profile.html" title="Go to Profile"><i class="zmdi zmdi-account"></i></a></li>
                    <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a href="sign-in.html" title="sign out" ><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>
            <div class="quick-stats">
                <h5>Laporan hari ini</h5>
                <ul>
                    <li><span>16<i>Pasien</i></span></li>
                    <li><span>20<i>Antrian</i></span></li>
                    <li><span>04<i>Visit</i></span></li>
                </ul>
            </div>
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li <?php if ($page_val == 'dash') { echo 'class="active open"'; } ?>><a href="index-2.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>                                               
                <li <?php if ($page_val == 'fo') { echo 'class="active open"'; } ?>><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Front Office</span> </a>
                    <ul class="ml-menu">
                        <li <?php if ($page_tree == 'master') { echo 'class="active"'; } ?>><a href="">Master Data</a></li>
                        <li <?php if ($page_tree == 'registrasi') { echo 'class="active"'; } ?>><a href="">Registrasi</a></li>
                        <li <?php if ($page_tree == 'booking') { echo 'class="active"'; } ?>><a href="">Janji Poliklinik</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hospital-alt"></i><span>Pharmachy</span> </a>
                    <ul class="ml-menu">
                        <li><a href="">All Doctors</a></li>
                        <li><a href="">Add Doctor</a></li>                       
                        <li><a href="">Doctor Profile</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-money-box"></i><span>Billing</span> </a>
                    <ul class="ml-menu">
                        <li><a href="">All Doctors</a></li>
                        <li><a href="">Add Doctor</a></li>                       
                        <li><a href="">Doctor Profile</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-settings"></i><span>Setting</span> </a>
                    <ul class="ml-menu">
                        <li><a href="">All Doctors</a></li>
                        <li><a href="">Add Doctor</a></li>                       
                        <li><a href="">Doctor Profile</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-settings"></i><span>Setting</span> </a>
                    <ul class="ml-menu">
                        <li><a href="javascript:void(0);" class="menu-toggle">Level 1 </a>
                                <ul class="ml-menu">   
                                <li><a href="">Level 2</a></li>
                                </ul>
                            
                        </li>
                        <li><a href="">Add Doctor</a></li>  
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Help</span> </a></li>
               <!-- 
                <li class="header">LABELS</li>
                <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span> </a> </li>
                <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span> </a> </li>
                <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span> </a> </li> -->
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Setting</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red"><div class="red"></div><span>Red</span> </li>
                    <li data-theme="purple"><div class="purple"></div><span>Purple</span> </li>
                    <li data-theme="blue"><div class="blue"></div><span>Blue</span> </li>
                    <li data-theme="cyan" class="active"><div class="cyan"></div><span>Cyan</span> </li>
                    <li data-theme="green"><div class="green"></div><span>Green</span> </li>
                    <li data-theme="deep-orange"><div class="deep-orange"></div><span>Deep Orange</span> </li>
                    <li data-theme="blue-grey"><div class="blue-grey"></div><span>Blue Grey</span> </li>
                    <li data-theme="black"><div class="black"></div><span>Black</span> </li>
                    <li data-theme="blush"><div class="blush"></div><span>Blush</span> </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane" id="chat">
                <div class="demo-settings">
                    <div class="search">
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Search..." required autofocus>
                            </div>
                        </div>
                    </div>
                    <h6>Recent</h6>
                    <ul>
                        <!-- <li class="online">
                            <div class="media">
                                <a href="javascript:void(0);"><img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""></a>
                                <div class="media-body">
                                    <span class="name">Claire Sassu</span>
                                    <span class="message">Can you share the</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media">
                                <a href="javascript:void(0);"><img class="media-object " src="assets/images/xs/avatar2.jpg" alt=""></a>
                                <div class="media-body">
                                    <span class="name">Maggie jackson</span>
                                    <span class="message">Can you share the</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media">
                                <a href="javascript:void(0);"><img class="media-object " src="assets/images/xs/avatar3.jpg" alt=""></a>
                                <div class="media-body">
                                    <span class="name">Joel King</span>
                                    <span class="message">Ready for the meeti</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <h6>Contacts</h6>
                    <ul class="contacts_list">
                        <li class="offline">
                            <div class="media">
                                <a href="javascript:void(0);"><img class="media-object " src="assets/images/xs/avatar4.jpg" alt=""></a>
                                <div class="media-body">
                                    <span class="name">Hossein Shams</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="online">
                            <div class="media">
                                <a href="javascript:void(0);"><img class="media-object " src="assets/images/xs/avatar1.jpg" alt=""></a>
                                <div class="media-body">
                                    <span class="name">Maryam Amiri</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li>
                        <li class="offline">
                            <div class="media">
                                <a href="javascript:void(0);"><img class="media-object " src="assets/images/xs/avatar2.jpg" alt=""></a>
                                <div class="media-body">
                                    <span class="name">Gary Camara</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="settings">
                <div class="demo-settings">
                    <p>General settings</p>
                    <ul class="setting-list">
                        <li>
                        	<span>Report Panel Usage</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span>
                            	</label>
                            </div>
                        </li>
                        <li>
                        	<span>Email Redirect</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                            	</label>
                            </div>
                        </li>
                    </ul>
                    <p>System settings</p>
                    <ul class="setting-list">
                        <li>
                        	<span>Notifications</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span>
                            	</label>
                            </div>
                        </li>
                        <li>
                        	<span>Auto Updates</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>Account settings</p>
                    <ul class="setting-list">
                        <li>
                        	<span>Offline</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                        	<span>Location Permission</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    
</section>
<!-- Loading Progress -->
<div class="loadingProgress">
    <div class="loadingProgressIn"></div>
</div>
<!-- //Loading Progress -->
<!-- Fixed Header navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"></button>
        <a class="navbar-brand benchichatLogo" title="Benzichat" href="<?php echo ADMIN_BASE_URL ?>">&nbsp;</a>
    </div>
    <!-- Header Top Right Nav -->
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right top-nav">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle notificationTag" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="notificationIconW">5</span></a>
                <ul class="dropdown-menu notify-drop">
                    <div class="notify-drop-title">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">Notification (<b>5</b>)</div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right"><a href="" class="rIcon allRead" data-tooltip="tooltip" data-placement="bottom" title="View Notification page"><i class="fa fa-dot-circle-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end notify title -->
                    <!-- notify content -->
                    <div class="drop-content">
                        <li>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="notify-img"><img src="<?php echo BASE_URL ?>backend/images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">App Error</a> Benzichat <a href="">Chevy Chase, MD 20815</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                <p class="time">10 Mins ago</p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="notify-img"><img src="<?php echo BASE_URL ?>backend/images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Pending Approval</a> <a href="">Chevy Chase, MD 20815</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                <p class="time">1 day ago</p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="notify-img"><img src="<?php echo BASE_URL ?>backend/images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Lorem Ipsum is </a> simply dummy<a href="">simply dummy</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                <p class="time">2 Day ago</p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="notify-img"><img src="<?php echo BASE_URL ?>backend/images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">simply dummy</a> simply dummy<a href="">simply dummy</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                <p class="time">2 Day ago</p>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="notify-img"><img src="<?php echo BASE_URL ?>backend/images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">simply dummy</a> simply dummy <a href="">simply dummy</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                <p class="time">29 Day ago</p>
                            </div>
                        </li>
                    </div>
                    <div class="notify-drop-footer text-center">
                        <a href="notificationlist.html"><i class="fa fa-eye"></i> View More</a>
                    </div>
                </ul>
            </li>


            <li class="languageSel dropdown">
                <a href="#" id="languageSelectedBtn" class="dropdown-toggle" data-toggle="dropdown">English <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">English</span></a></li>
                    <li><a href="#">German</span></a></li>
                    <li><a href="#">Spanish</span></a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="userIcon"></i> Vadivel Alagarsamy <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="profile.html"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="changepassword.html"><i class="fa fa-fw fa-lock"></i> Change Password</a>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- //Header Top Right Nav -->
    <!-- Side Nav Bar -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="sidebar-nav">
            <li><a class="active" href="home.html"><span class="companyIcon">Site Settings</span></a></li>
            <li><a class="active" href="home.html"><span class="companyIcon">User Management</span></a></li>
            <li><a class="active" href="<?php echo ADMIN_BASE_URL ?>companies"><span class="companyIcon">Company Management</span></a></li>
            <li><a class="active" href="<?php echo ADMIN_BASE_URL ?>customers"><span class="companyIcon">Cutomer Management</span></a></li>
            <li><a class="active" href="home.html"><span class="companyIcon">Offer Zone</span></a></li>
        </ul>
    </div>
    <!-- //Side Nav Bar -->
</nav>
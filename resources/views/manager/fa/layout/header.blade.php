<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
               aria-expanded="false"></a>
            <a href="#" onClick="return false;" class="bars"></a>
            <a class="navbar-brand" href="index.html">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="#" onClick="return false;" class="sidemenu-collapse">
                        <i class="nav-hdr-btn ti-align-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Full Screen Button -->
                <li class="fullscreen">
                    <a href="javascript:;" class="fullscreen-btn">
                        <i class="nav-hdr-btn ti-fullscreen"></i>
                    </a>
                </li>
                <!-- #END# Full Screen Button -->

                <li class="dropdown user_profile">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                        <div class="profile-img">
                        <img src="{{asset("default-profile.png")}}" style = "" alt="user">
                        </div>
                    </div>
                    <ul class="dropdown-menu pullDown">
                        <li class="body">
                            <ul class="user_dw_menu">
                                <li>
                                    <a href="#" onClick="return false;">
                                        <i class="material-icons">person</i>پروفایل
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route("domain.home")}}">
                                        <i class="material-icons">power_settings_new</i>خروج
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
                <li class="pull-right">
                    <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                        <i class="nav-hdr-btn ti-layout-grid2"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->

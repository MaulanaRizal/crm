<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url(<?= base_url() ?>assets/material-pro/assets/images/background/user-info.jpg) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="<?= base_url() ?>assets/material-pro/assets/images/users/profile.png" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text">
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                <div class="dropdown-menu animated flipInY">

                    <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"> </i> Logout</a>
                </div>
            </div>
        </div>
        <!-- End User profile text-->

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav no-margin">
            <ul id="sidebarnav">
                <li class="nav-small-cap">MENUS</li>
                <li>
                    <a class="waves-effect waves-dark" href="<?= base_url('admin/dashboard') ?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="<?= base_url('admin/manage_menu') ?>" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Manage Menu </span></a>
                </li>
                <!-- <li><a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-laptop-windows"></i><span class="hide-menu">Template Demos</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="index.html">Minisidebar</a></li>
                        <li><a href="https://www.wrappixel.com/demos/admin-templates/material-pro/horizontal/index2.html">Horizontal</a></li>
                        <li><a href="https://www.wrappixel.com/demos/admin-templates/material-pro/material/index3.html">Material Version</a></li>
                        <li><a href="https://www.wrappixel.com/demos/admin-templates/material-pro/material-rtl/index4.html">RTL Version</a></li>
                    </ul>
                </li> -->


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
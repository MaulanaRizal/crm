<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url(<?= base_url() ?>assets/material-pro/assets/images/background/user-info.jpg) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="<?= base_url() ?>assets/material-pro/assets/images/users/profile.png" alt="user" /> </div>
            <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                <div class="dropdown-menu animated flipInY">
                    <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav no-margin">
            <ul id="sidebarnav">
                <li class="nav-small-cap">MENUS</li>
                <li>
                    <a class="waves-effect waves-dark" href="<?= base_url('user/dashboard') ?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="<?= base_url('user/manage_menu') ?>" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Manage Menu </span></a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="<?= base_url('user/users') ?>" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Users</span></a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="<?= base_url('user/annual_target') ?>" aria-expanded="false"><i class="fas fa-chart-line"></i><span class="hide-menu">Annual Target</span></a>
                </li>
                <li class=""> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Leads</span></a>
                    <ul aria-expanded="false" class="collapse" style="height: 10px;">
                        <li><a href="#">Table Lead</a></li>
                        <li><a href="#">Add Lead</a></li>
                    </ul>
                </li>
                <li class=""> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Opportunities</span></a>
                    <ul aria-expanded="false" class="collapse" style="height: 10px;">
                        <li><a href="#">Table Opportunity</a></li>
                        <li><a href="#">Add Opportunity</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
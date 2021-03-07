<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url(<?= base_url() ?>assets/material-pro/assets/images/background/user-info.jpg) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="<?= base_url() ?>assets/material-pro/assets/images/users/profile.png" alt="user" /> </div>
            <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?= $_SESSION['NAMA_LENGKAP'] ?></a>
                <div class="dropdown-menu animated flipInY">
                    <a href="<?php echo base_url('login/member_logout'); ?>" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav no-margin">
            <ul id="sidebarnav">
                <li class="nav-small-cap">MENUS</li>
                <?php sideNav(); ?>
            </ul>
        </nav>
    </div>
</aside>
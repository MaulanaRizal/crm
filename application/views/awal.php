<?php $this->load->view('template/head'); ?>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="main-wrapper">
        <?php $this->load->view('template/navbar'); ?>
        <?php $this->load->view('template/sidenav', $awal); ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>  
                </div>
                <!-- Start Content -->
                <div class="row">

                    <div class="col-2">
                        <nav class="sidebar-nav no-margin">
                            <ul id="sidebarnav">
                                <li class="nav-small-cap">MENUS</li>
                                <li>
                                    <a class="waves-effect waves-dark" href="<?= base_url('user/dashboard') ?>" aria-expanded="false">
                                        <i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="card col-8">
                        <div class="card-body">
                            this for session : <?= $_SESSION['role'] ?>
                            foreach
                        </div>
                    </div>
                </div>

                <!-- End Content -->
            </div>
            <footer class="footer">
                © 2019 Material Pro Admin by wrappixel.com
            </footer>
        </div>
        <?php $this->load->view('template/jquery'); ?>
</body>

</html>
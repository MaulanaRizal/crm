<?php $this->load->view('template/head'); ?>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="main-wrapper">
        <?php $this->load->view('template/navbar'); ?>
        <?php $this->load->view('template/sidenav'); ?>


        <!-- content -->
        <div class="page-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">NPWP</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">NPWP</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->
                <?php if (!empty($_SESSION['message'])) { ?>
                    <?= $_SESSION['message'] ?>
                <?php unset($_SESSION['message']);
                } ?>
                <div class="card">
                    <div class="card-body">
                        <div class="col-sm-6 float-right">
                            <div class="input-group">
                                <div class="input-group-append">
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" id="exampleInputuname3">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <a href="<?= base_url() ?>npwp/tambah" class="btn btn-secondary "> <i class="fa fa-plus"></i> Tambah</a>
                                    <!-- <a href="<?= base_url() ?>pengguna/tambah" class="btn btn-secondary "> <i class="fa fa-trash"></i> hapus</a> -->
                                </div>
                            </div>
                        </div>
                        <h3>Daftar NPWP</h3>
                        <span>Daftar NPWP pelanggan </span>
                        <hr>
                        <div class="table-responsive ">
                            <table class="table striped">
                                <thead>
                                    <tr>
                                        <th width=50>#</th>
                                        <th>Nama NPWP</th>
                                        <th>No Pajak</th>
                                        <th width=50>NPWP Utama</th>
                                        <th style="width: 30%;">Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $num = 1 ?>
                                    <?php foreach ($npwp as $n) : ?>
                                        <tr>
                                            <td><?= $num++ ?></td>
                                            <td><?= $n->NAMA_NPWP ?></td>
                                            <td><?= $n->NO_PAJAK ?></td>
                                            <td>
                                                <?php if ($n->IS_PRIMARY == 'yes') : ?>
                                                    <i class='fa fa-check'></i>
                                                <?php else : ?>
                                                    -
                                                <?php endif ?>
                                            </td>
                                            <td><?= $n->ALAMAT ?></td>
                                            <td>
                                                <a href="" class='btn btn-primary btn-sm m-r-5'><i class='fa fa-edit fa-sm'></i></a>
                                                <a href="" class='btn btn-danger btn-sm'><i class='fa fa-trash fa-sm'></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <?php echo $this->pagination->create_links(); ?>
                        </div>
                    </div>

                </div>
            </div>
            <footer class="footer">
                © 2019 Material Pro Admin by wrappixel.com
            </footer>
        </div>
        <!-- /content -->
        <?php $this->load->view('template/jquery'); ?>

</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-pro/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:12:10 GMT -->

</html>
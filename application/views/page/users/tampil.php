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
                        <h3 class="text-themecolor">Pengguna</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->
                <?php if(!empty($_SESSION['message'])){?>
                <div class="alert alert-success">
                    <strong> Berhasil! </strong><?= $_SESSION['message']?>.
                </div>
                <?php unset($_SESSION['message']) ; }?>
                <div class="card">
                    <div class="card-body">
                        <a href="<?= base_url()?>pengguna" class="btn btn-primary float-right"> <i class="mdi mdi-account-plus"></i> Tambah</a>
                        <h3>Table User </h3>
                        <span>Table kelola user crm icon+</span>
                        <hr>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table striped m-b-20">
                            <thead>
                                <tr>
                                    <th width=50>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>SBU</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $num = 1;
                            foreach($user as $data){ ?>
                                <tr>
                                    <td><?= $num ?></td>
                                    <td><?= $data->NAMA_LENGKAP ?></td>
                                    <td><?= $data->CRM_EMAIL?></td>
                                    <td><?= $data->SBU_REGION?></td>
                                    <td><?= $data->CRM_ROLE?></td>
                                    <td><?php if($data->CRM_STATUS==1){?>
                                        <label class="label label-success">active</label>
                                    <?php }else{ ?>
                                        <label class="label label-danger">non-active</label>

                                    <?php } ?>
                                    </td>
                                    
                                    <td>
                                        <a href="<?= base_url()?>pengguna/delete/<?= $data->ID_USER ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="<?= base_url()?>pengguna/edit/<?= $data->ID_USER ?>" class="btn btn-info"><i class="fa fa-info"></i></a>
                                    </td>
                                </tr>
                                <?php 
                            $num++;
                            }?>
                            </tbody>
                            </table>
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
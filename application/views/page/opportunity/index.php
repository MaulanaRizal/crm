<?php $this->load->view('template/head'); ?>
<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
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
                        <h3 class="text-themecolor">Opportunity</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"> <i class="fa fa-home"></i> Dashboard</a></li>
                            <li class="breadcrumb-item active">Opportunity</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?= base_url()?>opportunity/tambahOpportunity" class="btn waves-effect waves-light btn-primary float-right"><i class="mdi mdi-account-plus"></i> Tambah</a>
                                    <h3>Daftar Opportunity</h3>
                                    <hr>
                                    <div class="table-responsive">
                                    <table width="1800px" class="table striped m-b-20" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Topic</th>
                                                <th>No Opportunity</th>
                                                <th>Tipe Survey</th>
                                                <th>Pendapatan</th>
                                                <th>Anggaran</th>
                                                <th>Proses Pemesanan</th>
                                                <th>Kategori</th>
                                                <th>Deskripsi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $num = 1;
                                            foreach($opportunity as $data){?>
                                            <tr style="text-align: left">
                                                <td><?= $num ?></td>
                                                <td><?= $data->TOPIC ?></td>
                                                <td><?= $data->NO_OPPORTUNITY ?></td>
                                                <td><?= $data->TIPE_SURVEY ?></td>
                                                <td><?= $data->PENDAPATAN?></td>
                                                <td><?= $data->ANGGARAN ?></td>
                                                <td><?= $data->PROSES_PEMESANAN ?></td>
                                                <td><?= $data->KATEGORI ?></td>
                                                <td><?= $data->DESKRIPSI ?></td>
                                                <td>
                                                    <a href="<?= base_url('opportunity/updateOpportunity') ?>" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                                    <a href="#" class="btn btn-primary"><i class="fas fa-trophy"></i></a>
                                                    <a href="#" class="btn btn-primary"><i class="far fa-times-circle"></i></a>
                                                </td>
                                            </tr>
                                            <?php $num++; 
                                            }?>
                                        </tbody>
                                    </table>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content -->
            </div>
            <!-- End Container fluid  -->

            <!-- footer -->
            <footer class="footer">
                © 2019 Material Pro Admin by wrappixel.com
            </footer>
            <!-- End footer -->
        </div>
    <!-- /content -->
    
    
    <?php $this->load->view('template/jquery'); ?>



        
        </script>
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-pro/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:12:10 GMT -->

</html>
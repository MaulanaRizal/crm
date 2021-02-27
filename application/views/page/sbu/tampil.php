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
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active">SBU</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahMenu"><i class="fa fa-plus"></i> Tambah</button>

                                <div class="modal fade" id="tambahMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel1">Tambah Data SBU</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="" method="post">
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Wilayah SBU:</label>
                                                        <input type="text" class="form-control" id="recipient-name1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Pemilik SBU:</label>
                                                        <input type="text" class="form-control" id="recipient-name1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="control-label">Deskripsi:</label>
                                                        <textarea class="form-control" rows=6 id="message-text1" ></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            </form>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3>Daftar SBU</h3>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table striped m-b-20" id="myTable">
                                        <thead>
                                            <tr>
                                                <th width=50>#</th>
                                                <th>Wilayah SBU</th>
                                                <th>SBU Owner</th>
                                                <th width=500>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Jakarta</td>
                                                <td>Suhardi Wijaya</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                                <td>
                                                    <a class="btn waves-effect waves-light btn-info" href="#"><i class="fa fa-edit"></i> Edit</a>
                                                    <a class="btn waves-effect waves-light btn-danger" href="#"><i class="fa fa-trash"></i> Hapus</a>
                                                </td>

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
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-pro/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:12:10 GMT -->

</html>
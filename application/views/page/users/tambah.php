<?php $this->load->view('template/head'); ?>
<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
    <?php $this->load->view('template/navbar'); ?>
    <?php $this->load->view('template/sidenav'); ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Tambah Pengguna</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home"></i> Dashboard</a></li>
                            <li class="breadcrumb-item">Pengguna</li>
                            <li class="breadcrumb-item active">Tambah Pengguna</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->

                <div class="row d-flex justify-content-center">
                    <div class="card col-lg-8 ">
                        <div class="card-body">
                            <div class="text-center">
                            <h3> Form Tambah Pengguna Baru</h3>
                            <span >Masukan data pengguna baru untuk memberikan hak akses pada sistem.</span>
                            </div>
                            <hr>
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Name*</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Pengguna">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telepon" class="col-sm-3 text-right control-label col-form-label">Telepon*</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nomor telepon yang bisa dihubungi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-3 text-right control-label col-form-label">Role*</label>
                                    <div class="col-sm-4">
                                    <select class="form-control">
                                            <option>Pilih Role...</option>
                                            <option>Admin</option>
                                            <option>Sales</option>
                                            <option>Akivasi</option>
                                            <option>Adev</option>
                                            <option>Manager</option>
                                            <option>General Manager</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="username" class="col-sm-3 text-right control-label col-form-label">Username*</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 text-right control-label col-form-label">Password*</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control" id="inputPassword4" placeholder="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-7">
                                        <div class="checkbox checkbox-success">
                                            <input id="status" type="checkbox">
                                            <label for="status">Pengguna masih aktif</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="offset-sm-3 col-sm-7">
                                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Submit</button>
                                    </div>
                                </div>
                            </form>
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
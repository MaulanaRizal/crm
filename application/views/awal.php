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
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Alamat</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item active">Alamat</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->


                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahService"><i class="fa fa-plus"></i> Tambah</button>
                        <!-- Start Modal -->
                        <div class="modal fade" id="tambahService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">Tambah Target</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Recipient:</label>
                                                <input type="text" class="form-control" id="recipient-name1">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label">Message:</label>
                                                <textarea class="form-control" id="message-text1"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end modal -->
                        <h3>Table Agreement </h3>
                        <span>Table kelola agreement crm icon+</span>
                        <hr>
                        <div class="table-responsive m-t-40">
                            <table class="table striped m-b-20">
                                <thead>
                                    <tr>
                                        <th width=50>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>SBU</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datas as $data) : ?>
                                        <tr>
                                            <td><?= ++$start ?></td>
                                            <td><?= $data->name ?></td>
                                            <td>Rozal56@mail.com</td>
                                            <td>Cawang</td>
                                            <td>Sales</td>
                                            <td><label class="label label-danger">non-active</label></td>
                                            <td>
                                                <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                <a href="" class="btn btn-info"><i class="fa fa-info"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <?php echo $this->pagination->create_links(); ?>
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
        <script>

        </script>
</body>

</html>
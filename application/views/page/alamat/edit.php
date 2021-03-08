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
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->

                <div class="row d-flex justify-content-center">
                         <?php if (!empty($_SESSION['message'])) { ?>
                            <div class="alert alert-danger">
                            <strong>Gagal!</strong><?= $_SESSION['message'] ?>
                            </div>
                        <?php } unset($_SESSION['message']);?>
                    <div class="card col-lg-8 ">
                        <div class="card-body">
                            <div class="text-center">
                            <h3> Form Tambah Pengguna Baru</h3>
                            <span >Masukan data pengguna baru untuk memberikan hak akses pada sistem.</span>
                            </div>
                            <hr>
                                <form action="<?= base_url('pengguna/insert')?> " method="post">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 text-right control-label col-form-label">Nama Lengkap*</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" required name=nama id="" placeholder="Nama Pengguna">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telepon" class="col-sm-3 text-right control-label col-form-label">Telepon*</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" required name="telepon" onkeypress="numberInput(event)" id="" placeholder="Nomor telepon yang bisa dihubungi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-3 text-right control-label col-form-label">Role*</label>
                                    <div class="col-sm-4">
                                    <select class="form-control" required name="role" required>
                                            <option value="">Pilih Role...</option>
                                            <?php foreach($roles as $row) {?>
                                                <option value='<?= $row->ID_ROLE ?>'><?= $row->CRM_ROLE; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-3 text-right control-label col-form-label">SBU*</label>
                                    <div class="col-sm-4">
                                        <?php //var_dump($sbu)?> 
                                    <select class="form-control"required name="sbu">
                                            <option value="">Pilih SBU...</option>
                                            <?php foreach($sbu as $row) {?>
                                                <option value="<?= $row->ID_SBU ?>" ><?= $row->SBU_REGION; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 text-right control-label col-form-label">Email*</label>
                                    <div class="col-sm-7">
                                        <input type="email" required name="email" class="form-control" id="" placeholder="username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 text-right control-label col-form-label">Password*</label>
                                    <div class="col-sm-7">
                                        <input type="password" required name="password" minlength="8" maxlength="15" class="form-control" id="" placeholder="password">
                                        <small class="form-text text-muted">masukan password minimal 8 karakter dan maksimal 15 karakter.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-7">
                                        <div class="checkbox checkbox-success">
                                            <input id="status" name="status" type="checkbox">
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
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
                $(document).ready(function() {
                    var table = $('#example').DataTable({
                        "columnDefs": [{
                            "visible": false,
                            "targets": 2
                        }],
                        "order": [
                            [2, 'asc']
                        ],
                        "displayLength": 15,
                        "drawCallback": function(settings) {
                            var api = this.api();
                            var rows = api.rows({
                                page: 'current'
                            }).nodes();
                            var last = null;
                            api.column(2, {
                                page: 'current'
                            }).data().each(function(group, i) {
                                if (last !== group) {
                                    $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                    last = group;
                                }
                            });
                        }
                    });
                    // Order by the grouping
                    $('#example tbody').on('click', 'tr.group', function() {
                        var currentOrder = table.order()[0];
                        if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                            table.order([2, 'desc']).draw();
                        } else {
                            table.order([2, 'asc']).draw();
                        }
                    });
                });
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        </script>
</body>
</html>
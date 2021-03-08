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
                    <a href="<?= base_url('alamat/tambah') ?>" class="btn btn-primary float-right"> <i class="fa fa-plus"></i> Tambah</a>
                        <h3>Table Alamat </h3>
                        <span>Table kelola alamat crm icon+</span>
                        <hr>
                        <div class="table-responsive m-t-40">
                            <table id="myTable" class="table striped m-b-20">
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
                                <tr>
                                    <td>1</td>
                                    <td>Rozal</td>
                                    <td>Rozal56@mail.com</td>
                                    <td>Cawang</td>
                                    <td>Sales</td>
                                    <td><label class="label label-danger">non-active</label></td>
                                    <td>
                                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <a href="" class="btn btn-info"><i class="fa fa-info"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
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
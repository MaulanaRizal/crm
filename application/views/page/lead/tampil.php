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
                        <h3 class="text-themecolor">Daftar Lead</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home"></i> Dashboard</a></li>
                            <li class="breadcrumb-item active">Daftar Lead</li>
                        </ol>
                    </div>

                </div>
                <!-- Start Content -->

                <div class="card">
                    <div class="card-body">
                        
                        <a href="<?= base_url()?>lead/tambahLead" class="btn btn-primary float-right"> <i class="mdi mdi-account-plus"></i> Tambah</a>
                        <h3>Table Lead </h3>
                        <span>Table kelola lead crm icon+</span>
                        <hr>
                        <div class="table-responsive m-t-40">
                            <table style="text-align: left" id="myTable" class="table striped m-b-20">
                            <thead>
                                <tr>
                                    <th width=50>#</th>
                                    <th>Name</th>
                                    <th>Topic</th>
                                    <th>Status Reason</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num = 1;
                                foreach($lead as $data){ ?>
                                <tr>
                                    <td><?= $num ?></td>
                                    <td><?= $data->NAMA ?></td>
                                    <td><?= $data->TOPIC ?></td>
                                    <td><?= $data->CRM_STATUS ?></td>
                                    <td>
                                        <a href="" class="btn btn-info"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $data->ID_LEADS;?>"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php 
                                $num++;
                                }?>
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
        <?php foreach($lead as $data){ ?>
        <div class="modal fade" id="modal_hapus<?= $data->ID_LEADS; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Hapus Data</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('sbu/hapus')?>">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus!</p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_sbu" value="<?php echo $data->ID_LEADS?>">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <?php } ?>
        <!-- /content -->
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


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-pro/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 11:12:10 GMT -->

</html>
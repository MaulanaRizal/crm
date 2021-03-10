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
            <div class="container-fluid">
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Tambah Lead</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Lead</li>
                            <li class="breadcrumb-item active"> Tambah Lead</li>
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
                    <div class="card col-lg-11">
                        <div class="card-body">
                            <div class="text-center">
                                <h3> Form Tambah Lead Baru</h3>
                            </div>
                            <hr>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Topic*</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Topic">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Nama*</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Nama">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Pekerjaan</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Pekerjaan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Telepon</label>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control" placeholder="Telepon">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Coordinat</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Coordinat">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Alamat</label>
                                            <div class="col-md-9">
                                                <a href="#"><textarea class="form-control" placeholder="Tulis Alamat Lengkap" disabled></textarea></a>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Penawaran</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" placeholder="Penawaran">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Penawaran Kembali</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" placeholder="Penawaran Kembali">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Sumber Lead</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option selected="">Pilih...</option>
                                                    <option value="1">Iklan</option>
                                                    <option value="2">Rujukan Karyawan</option>
                                                    <option value="3">Rujukan Eksternal</option>
                                                    <option value="4">Partner</option>
                                                    <option value="5">Hubungan Masyarakat</option>
                                                    <option value="6">Seminar</option>
                                                    <option value="7">Pameran Dagang</option>
                                                    <option value="8">Web</option>
                                                    <option value="9">Dari Mulut ke Mulut</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Rating</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option selected="">Pilih...</option>
                                                    <option value="1">Hot</option>
                                                    <option value="2">Warm</option>
                                                    <option value="3">Cold</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Status</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option selected="">Pilih...</option>
                                                    <option value="1">New</option>
                                                    <option value="2">Contacted</option> 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-left col-md-3">Pemilik</label>
                                            <div class="input-group col-md-9">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="ti-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Pemilik">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <h5>Aktivitas</h5>
                                        </div>
                                        <div class="text-center">
                                            <a href="" data-toggle="modal" data-target="#telepon">Tambah Panggilan Telepon</a> | 
                                            <a href="#">Tambah Tugas</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Content -->
            </div>
            <!-- footer -->
            <footer class="footer">
                © 2019 Material Pro Admin by wrappixel.com
            </footer>
            <!-- End footer -->
        </div>
        <div class="modal fade" id="telepon" role="dialog">
                    <div class="modal-dialog">
                        <form method="post" action="change-goal">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Panggilan Telepon</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <input class="form-control" name="newGoal" id="newGoal">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button id="save" type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
        </div>
        </div>
    <!-- /content -->
    <?php $this->load->view('template/jquery'); ?>
    <script type="text/javascript">
        const modal = document.getElementById("modal");

        function openModal(){
            modal.setAttribute("open", true);
        }
    </script>
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